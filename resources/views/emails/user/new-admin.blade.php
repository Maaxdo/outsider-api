@extends('layouts.emails.user')

@section('content')

    <div>
        <p>
            Hi {{$user->first_name}},
        </p>
        <p>
            We are pleased to inform you that your admin account on {{config('app.name')}} has been successfully created.
            You can
            now access all the admin services and features of our web app without any restrictions.
        </p>
        <p>Below is your login information. <strong>DO NOT SHARE THIS PASSWORD WITH ANYBODY</strong></p>
        <h2 style="text-align: center;">{{ $password }}</h2>
        <p>
            If you have any questions or need further assistance, please do not hesitate to reach out to our support
            team at <a href="mailto:support@wearoutsider.com">support@wearoutsider.com</a>. We are here to help you
            with any concerns you may have.
        </p>
        <p>
            Thank you for your cooperation and understanding. We appreciate your continued trust in
            {{ config('app.name') }}.
            <br> <br>
            <b>Welcome back!</b>
        </p>
    </div>

@endsection