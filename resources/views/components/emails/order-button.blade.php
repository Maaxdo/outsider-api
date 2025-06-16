@props(['invoice'])
<a target="_blank" href="{{ config('app.client_url') . '/profile/orders/' . $invoice->id }}"
    style="color: black; text-align:center; background-color: #56F163; padding-top: 0.6rem; padding-bottom: 0.6rem; display: block; border-radius: 2rem; text-decoration: none; font-weight: 500;">Track
    Order</a>