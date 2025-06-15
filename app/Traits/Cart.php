<?php

namespace App\Traits;

use App\Models\Coupon;
use App\Models\ShippingFee;

trait Cart
{

    public function getOrderSummary($cartItems, ?Coupon $coupon = null)
    {
        $subTotal = $this->calculateSubTotal($cartItems);
        $shippingFee = ShippingFee::first()?->fee ?? 0;
        $total = ($subTotal + (float) $shippingFee);
        $couponDiscount = $coupon?->value_calculated ?? 0;

        if ($coupon?->type === 'fixed') {
            $total -= $couponDiscount;
        } else {
            $total -= $subTotal * $couponDiscount;
        }

        return [
            'sub_total' => $subTotal,
            'sub_total_formatted' => currency_format($subTotal),
            'shipping_fee_formatted' => currency_format($shippingFee),
            'total_formatted' => currency_format($total),
            'coupon_discount' => $couponDiscount ?? 0,
            'shipping_fee' => (float) $shippingFee,
            'total' => $total,
        ];

    }


    public function calculateSubTotal($cartItems)
    {
        $subTotal = $cartItems->sum(function ($cartItem) {
            return (float) $cartItem->product->price * $cartItem->quantity;
        });

        return $subTotal;
    }
}
