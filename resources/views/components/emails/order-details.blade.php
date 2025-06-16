@props(['invoice'])

<div
    style="background-color: #F6F6F6; padding: 1rem 0.7rem 1rem 0.7rem; margin-top: 1.5rem; margin-bottom: 1.5rem; border-radius: 1rem;">

    <div style="display: flex; align-items: center; justify-content: center;">
        @if ($invoice->status === 'paid')
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="24" height="24" rx="12" fill="#56F163" />
                <path
                    d="M18.354 8.85378L10.354 16.8538C10.3076 16.9003 10.2524 16.9372 10.1917 16.9623C10.131 16.9875 10.066 17.0004 10.0003 17.0004C9.93457 17.0004 9.86951 16.9875 9.80881 16.9623C9.74811 16.9372 9.69296 16.9003 9.64653 16.8538L6.14653 13.3538C6.05271 13.26 6 13.1327 6 13C6 12.8674 6.05271 12.7401 6.14653 12.6463C6.24035 12.5525 6.3676 12.4998 6.50028 12.4998C6.63296 12.4998 6.76021 12.5525 6.85403 12.6463L10.0003 15.7932L17.6465 8.14628C17.7403 8.05246 17.8676 7.99976 18.0003 7.99976C18.133 7.99976 18.2602 8.05246 18.354 8.14628C18.4478 8.2401 18.5006 8.36735 18.5006 8.50003C18.5006 8.63272 18.4478 8.75996 18.354 8.85378Z"
                    fill="#2E2E2E" />
            </svg>

        @else
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" fill="white" />
                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#D9D9D9" />
            </svg>

        @endif

        <svg width="196" height="4" viewBox="0 0 196 4" fill="none" xmlns="http://www.w3.org/2000/svg">
            <mask id="path-1-inside-1_20_24" fill="white">
                <path d="M0 0H196V4H0V0Z" />
            </mask>
            <path d="M0 0V1H196V0V-1H0V0ZM196 4V3H0V4V5H196V4Z" fill="#D9D9D9" mask="url(#path-1-inside-1_20_24)" />
        </svg>
        @if ($invoice->status === 'in_transit')
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="24" height="24" rx="12" fill="#56F163" />
                <path
                    d="M18.354 8.85378L10.354 16.8538C10.3076 16.9003 10.2524 16.9372 10.1917 16.9623C10.131 16.9875 10.066 17.0004 10.0003 17.0004C9.93457 17.0004 9.86951 16.9875 9.80881 16.9623C9.74811 16.9372 9.69296 16.9003 9.64653 16.8538L6.14653 13.3538C6.05271 13.26 6 13.1327 6 13C6 12.8674 6.05271 12.7401 6.14653 12.6463C6.24035 12.5525 6.3676 12.4998 6.50028 12.4998C6.63296 12.4998 6.76021 12.5525 6.85403 12.6463L10.0003 15.7932L17.6465 8.14628C17.7403 8.05246 17.8676 7.99976 18.0003 7.99976C18.133 7.99976 18.2602 8.05246 18.354 8.14628C18.4478 8.2401 18.5006 8.36735 18.5006 8.50003C18.5006 8.63272 18.4478 8.75996 18.354 8.85378Z"
                    fill="#2E2E2E" />
            </svg>

        @else
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" fill="white" />
                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#D9D9D9" />
            </svg>

        @endif
        <svg width="196" height="4" viewBox="0 0 196 4" fill="none" xmlns="http://www.w3.org/2000/svg">
            <mask id="path-1-inside-1_20_24" fill="white">
                <path d="M0 0H196V4H0V0Z" />
            </mask>
            <path d="M0 0V1H196V0V-1H0V0ZM196 4V3H0V4V5H196V4Z" fill="#D9D9D9" mask="url(#path-1-inside-1_20_24)" />
        </svg>
        @if ($invoice->status === 'delivered')
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect width="24" height="24" rx="12" fill="#56F163" />
                <path
                    d="M18.354 8.85378L10.354 16.8538C10.3076 16.9003 10.2524 16.9372 10.1917 16.9623C10.131 16.9875 10.066 17.0004 10.0003 17.0004C9.93457 17.0004 9.86951 16.9875 9.80881 16.9623C9.74811 16.9372 9.69296 16.9003 9.64653 16.8538L6.14653 13.3538C6.05271 13.26 6 13.1327 6 13C6 12.8674 6.05271 12.7401 6.14653 12.6463C6.24035 12.5525 6.3676 12.4998 6.50028 12.4998C6.63296 12.4998 6.76021 12.5525 6.85403 12.6463L10.0003 15.7932L17.6465 8.14628C17.7403 8.05246 17.8676 7.99976 18.0003 7.99976C18.133 7.99976 18.2602 8.05246 18.354 8.14628C18.4478 8.2401 18.5006 8.36735 18.5006 8.50003C18.5006 8.63272 18.4478 8.75996 18.354 8.85378Z"
                    fill="#2E2E2E" />
            </svg>

        @else
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" fill="white" />
                <rect x="0.5" y="0.5" width="23" height="23" rx="11.5" stroke="#D9D9D9" />
            </svg>

        @endif
    </div>
    <div style="display: flex; align-items: center; justify-content: center;">
        <p style="font-size: 0.8rem;">Confirmed</p>
        <svg style="visibility: hidden;" width="169" height="4" viewBox="0 0 196 4" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <mask id="path-1-inside-1_20_24" fill="white">
                <path d="M0 0H196V4H0V0Z" />
            </mask>
            <path d="M0 0V1H196V0V-1H0V0ZM196 4V3H0V4V5H196V4Z" fill="#D9D9D9" mask="url(#path-1-inside-1_20_24)" />
        </svg>
        <p style="font-size: 0.8rem;">Shipped</p>
        <svg style="visibility: hidden;" width="169" height="4" viewBox="0 0 196 4" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <mask id="path-1-inside-1_20_24" fill="white">
                <path d="M0 0H196V4H0V0Z" />
            </mask>
            <path d="M0 0V1H196V0V-1H0V0ZM196 4V3H0V4V5H196V4Z" fill="#D9D9D9" mask="url(#path-1-inside-1_20_24)" />
        </svg>
        <p style="font-size: 0.8rem;">Delivered</p>
    </div>

    <div>

        @foreach ($invoice->items as $item)

            <div style="display: flex; justify-content: space-between; margin-bottom: 1rem;">
                <div style="display: flex;">

                    <img src="{{ asset('storage/' . $item->product->featured_image) }}" alt="{{ $item->product->name }}"
                        style="width: 100px; height: 74px; border-radius: 0.7rem; margin-right: 1rem; object-fit: cover;">
                    <div>
                        <h4 style="font-size: 1rem; margin: 0;">{{ $item->product->name }}</h4>
                        <p style="font-size: 12px; font-weight: 700; color: #8E8E8E; margin-top: 0.3rem;">Colour
                            : {{ $item->color }}</p>
                        <p style="font-size: 12px; font-weight: 700; color: #8E8E8E; margin-top: 0.3rem;">Size:
                            {{ $item->size }}
                        </p>
                        <p style="font-size: 20px; font-weight: 500; color: #8E8E8E; margin-top: 0.3rem;">
                            {{ currency_format($item->total) }}
                        </p>
                    </div>
                </div>
                <p style="font-size: 20px; font-weight: 500; color: #8E8E8E; margin: 0">
                    x{{ $item->quantity }}
                </p>
            </div>
        @endforeach


    </div>

</div>