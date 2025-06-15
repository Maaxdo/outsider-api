@extends('layouts.emails.user')

@section('content')
    <div>
        <p>
            Hi {{$invoice->user->name}},
        </p>
        <p>
            Thank you for shopping with us. Your Order #{{$invoice->id}} has been confirmed. We will let you know when
            your
            order ships
        </p>
        <a href=""
           style="background-color: #56F163; padding-top: 0.3rem; padding-bottom: 0.3rem; display: block; border-radius: 100%">Track
            Order</a>
    </div>

    <x-emails.order-details :invoice="$invoice"/>
    <x-emails.billing-info :invoice="$invoice"/>

    <div>
        <p>Questions?</p>
        <p>
            If you have any questions about your order or its delivery, please don't hesitate to contact our customer
            support team at <a href="mailto:support@wearoutsider.com">support@wearoutsider.com</a>.
        </p>
        <p>
            We're here to help! <br>
            We look forward to getting your order to you soon!
        </p>
    </div>

@endsection
