@extends('layouts.emails.user')

@section('content')
    <div>
        <p>
            Hi {{$invoice->user->name}},
        </p>
        <p>
            This is a friendly reminder that you have items waiting for you in your {{ config('app.name') }} cart!
        </p>
        <p>We've saved the following items for you:</p>
        <x-emails.order-button :invoice="$invoice" />
    </div>

    <x-emails.order-details :invoice="$invoice" />
    <x-emails.billing-info :invoice="$invoice" />

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