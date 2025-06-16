@extends('layouts.emails.user')

@section('content')
    <div>
        <p>
            Hi {{$invoice->user->name}},
        </p>
        <p>
            Your order #{{$invoice->id}} has been successfully delivered. Please kindly check your package to ensure
            everything is in order. If you have any issues or concerns, please let us know as soon as possible.
            You can also view the delivery of your order by clicking the button below.
        </p>
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