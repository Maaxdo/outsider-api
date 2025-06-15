@props(['invoice'])

@php
    $info = json_decode($invoice->billing_information)
@endphp

<div style="background-color: #F6F6F6; padding: 1rem 0.7rem 1rem 0.7rem; border-radius: 2rem; display: flex">
    <div>
        <p>
            <strong>Ship To:</strong>
        </p>
    </div>
    <div>
        <p>
            {{$info->first_name}} {{$info->last_name}}
        </p>
        <p style="font-weight: 500">
            {{$info->apartment}}, {{$info->city}} {{$info->state}} {{$info->country}}
        </p>
        <p style="font-weight: 500">
            {{$info->phone}}
        </p>
    </div>
</div>
