@extends('layouts.front-end.app')
@section('title', 'Order Confirmed')
@push('styles')
<style>
    .oc-wrapper {
        min-height: 100vh;
        background: #f8f9fa;
        padding: 48px 0 80px;
    }
    .oc-container {
        max-width: 640px;
        margin: 0 auto;
        padding: 0 16px;
    }

    /* Success Header */
    .oc-header {
        text-align: center;
        margin-bottom: 36px;
    }
    .oc-check-circle {
        width: 64px;
        height: 64px;
        background: #d1fae5;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 20px;
    }
    .oc-check-circle i {
        font-size: 28px;
        color: #059669;
    }
    .oc-header h1 {
        font-size: 22px;
        font-weight: 600;
        color: #111827;
        margin: 0 0 8px;
    }
    .oc-header p {
        font-size: 14px;
        color: #6b7280;
        margin: 0;
    }
    .oc-order-id {
        display: inline-block;
        margin-top: 10px;
        font-size: 13px;
        color: #374151;
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 6px;
        padding: 6px 14px;
        font-weight: 500;
    }
    .oc-order-id span { color: #6b7280; font-weight: 400; }

    /* Card */
    .oc-card {
        background: #fff;
        border: 1px solid #e5e7eb;
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 16px;
    }
    .oc-card-header {
        padding: 14px 20px;
        border-bottom: 1px solid #f3f4f6;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .oc-card-header i {
        font-size: 16px;
        color: #9ca3af;
    }
    .oc-card-header h6 {
        margin: 0;
        font-size: 13px;
        font-weight: 600;
        color: #374151;
        text-transform: uppercase;
        letter-spacing: 0.4px;
    }
    .oc-card-body {
        padding: 16px 20px;
    }

    /* Order Items */
    .oc-item {
        display: flex;
        align-items: center;
        gap: 14px;
        padding: 12px 0;
        border-bottom: 1px solid #f9fafb;
    }
    .oc-item:last-child { border-bottom: none; }
    .oc-item-img {
        width: 56px;
        height: 56px;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #e5e7eb;
        flex-shrink: 0;
        background: #f9fafb;
    }
    .oc-item-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .oc-item-info { flex: 1; min-width: 0; }
    .oc-item-name {
        font-size: 13.5px;
        font-weight: 500;
        color: #111827;
        display: block;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .oc-item-meta {
        font-size: 12px;
        color: #9ca3af;
        margin-top: 3px;
    }
    .oc-item-price {
        font-size: 14px;
        font-weight: 600;
        color: #111827;
        flex-shrink: 0;
    }

    /* Summary rows */
    .oc-summary-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 8px 0;
        font-size: 14px;
        color: #374151;
        border-bottom: 1px solid #f9fafb;
    }
    .oc-summary-row:last-child { border-bottom: none; }
    .oc-summary-row.total {
        padding-top: 12px;
        font-size: 15px;
        font-weight: 600;
        color: #111827;
        border-top: 1px solid #e5e7eb;
        margin-top: 4px;
    }
    .oc-summary-row span:last-child { font-weight: 500; }
    .oc-summary-row.total span:last-child { font-weight: 700; font-size: 16px; }

    /* Info Grid */
    .oc-info-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
    }
    .oc-info-block label {
        font-size: 11px;
        color: #9ca3af;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        display: block;
        margin-bottom: 4px;
        font-weight: 600;
    }
    .oc-info-block p {
        font-size: 13.5px;
        color: #111827;
        font-weight: 500;
        margin: 0;
        line-height: 1.5;
    }

    /* Status badge */
    .oc-badge {
        display: inline-flex;
        align-items: center;
        gap: 5px;
        font-size: 12px;
        font-weight: 600;
        padding: 4px 10px;
        border-radius: 20px;
    }
    .oc-badge.pending { background: #fef3c7; color: #92400e; }
    .oc-badge.paid    { background: #d1fae5; color: #065f46; }
    .oc-badge.unpaid  { background: #fee2e2; color: #991b1b; }
    .oc-badge i { font-size: 11px; }

    /* Payment method */
    .oc-payment-pill {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        background: #f3f4f6;
        border-radius: 6px;
        padding: 5px 10px;
        font-size: 13px;
        font-weight: 500;
        color: #374151;
    }
    .oc-payment-pill i { font-size: 14px; color: #6b7280; }

    /* Actions */
    .oc-actions {
        display: flex;
        gap: 12px;
        margin-top: 8px;
    }
    .oc-btn-primary {
        flex: 1;
        display: block;
        text-align: center;
        background: #111827;
        color: #fff;
        padding: 13px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 500;
        text-decoration: none;
        transition: background 0.18s;
    }
    .oc-btn-primary:hover { background: #000; color: #fff; }
    .oc-btn-outline {
        flex: 1;
        display: block;
        text-align: center;
        background: #fff;
        color: #374151;
        padding: 13px;
        border-radius: 8px;
        font-size: 14px;
        font-weight: 500;
        text-decoration: none;
        border: 1.5px solid #e5e7eb;
        transition: border-color 0.18s, background 0.18s;
    }
    .oc-btn-outline:hover { border-color: #9ca3af; background: #f9fafb; color: #111827; }

    /* Discount row */
    .oc-discount { color: #059669 !important; }

    @media (max-width: 576px) {
        .oc-info-grid { grid-template-columns: 1fr; gap: 12px; }
        .oc-actions { flex-direction: column; }
        .oc-wrapper { padding: 32px 0 60px; }
    }
</style>
@endpush

@section('main-content')
<section class="oc-wrapper">
    <div class="oc-container">

        {{-- Success Header --}}
        <div class="oc-header">
            <div class="oc-check-circle">
                <i class="fa fa-check"></i>
            </div>
            <h1>Order Confirmed!</h1>
            <p>Thank you for your purchase. We'll notify you when it ships.</p>
            <div class="oc-order-id">
                <span>Order </span>#{{ $order->id }}
            </div>
        </div>

        {{-- Order Items --}}
        <div class="oc-card">
            <div class="oc-card-header">
                <i class="fa fa-shopping-bag"></i>
                <h6>Items Ordered</h6>
            </div>
            <div class="oc-card-body" style="padding-top: 4px; padding-bottom: 4px;">
                @foreach ($order->details as $detail)
                    @php
                        $product = is_string($detail->product_details)
                            ? json_decode($detail->product_details)
                            : $detail->product_details;
                        $item_total = ($detail->price - ($detail->discount / max($detail->qty, 1))) * $detail->qty;
                    @endphp
                    <div class="oc-item">
                        <div class="oc-item-img">
                            <img src="{{ \App\CPU\ProductManager::product_image_path('thumbnail') }}/{{ $product->thumbnail ?? '' }}"
                                 alt="{{ $product->name ?? 'Product' }}"
                                 onerror="this.src='{{ asset('assets/images/placeholder.png') }}'">
                        </div>
                        <div class="oc-item-info">
                            <span class="oc-item-name">{{ $product->name ?? 'Product' }}</span>
                            <div class="oc-item-meta">
                                Qty: {{ $detail->qty }}
                                @if($detail->variant)
                                    &nbsp;·&nbsp; {{ $detail->variant }}
                                @endif
                            </div>
                        </div>
                        <span class="oc-item-price">
                            ৳ {{ \App\CPU\Helpers::currency_converter($item_total) }}
                        </span>
                    </div>
                @endforeach
            </div>
        </div>

        {{-- Order Summary --}}
        <div class="oc-card">
            <div class="oc-card-header">
                <i class="fa fa-file-text-o"></i>
                <h6>Order Summary</h6>
            </div>
            <div class="oc-card-body">
                @php
                    $sub_total = $order->details->sum(function($d) {
                        return ($d->price * $d->qty);
                    });
                @endphp
                <div class="oc-summary-row">
                    <span>Subtotal</span>
                    <span>৳ {{ \App\CPU\Helpers::currency_converter($sub_total) }}</span>
                </div>
                <div class="oc-summary-row">
                    <span>Shipping</span>
                    <span>
                        @if($order->shipping_cost > 0)
                            ৳ {{ \App\CPU\Helpers::currency_converter($order->shipping_cost) }}
                        @else
                            <span style="color:#059669; font-weight:600;">Free</span>
                        @endif
                    </span>
                </div>
                @if($order->discount_amount > 0)
                    <div class="oc-summary-row">
                        <span>
                            Discount
                            @if($order->coupon_code)
                                <span style="font-size:11px; background:#f0fdf4; color:#166534; padding:2px 7px; border-radius:4px; margin-left:6px;">
                                    {{ $order->coupon_code }}
                                </span>
                            @endif
                        </span>
                        <span class="oc-discount">- ৳ {{ \App\CPU\Helpers::currency_converter($order->discount_amount) }}</span>
                    </div>
                @endif
                <div class="oc-summary-row total">
                    <span>Total</span>
                    <span>৳ {{ \App\CPU\Helpers::currency_converter($order->order_amount) }}</span>
                </div>
            </div>
        </div>

        {{-- Delivery & Payment Info --}}
        <div class="oc-card">
            <div class="oc-card-header">
                <i class="fa fa-map-marker"></i>
                <h6>Delivery & Payment</h6>
            </div>
            <div class="oc-card-body">
                <div class="oc-info-grid">
                    <div class="oc-info-block">
                        <label>Deliver to</label>
                        @php
                            $addr = is_string($order->shipping_address_data)
                                ? json_decode($order->shipping_address_data)
                                : $order->shipping_address_data;
                        @endphp
                        <p>{{ $addr->contact_person_name ?? '' }}</p>
                        <p style="color:#6b7280; font-weight:400; font-size:13px; margin-top:2px;">
                            {{ $addr->address ?? '' }}<br>
                            {{ $addr->phone ?? '' }}
                        </p>
                    </div>

                    <div class="oc-info-block">
                        <label>Shipping method</label>
                        @php
                            $shippingMethod = \App\Model\ShippingMethod::find($order->shipping_method_id);
                        @endphp
                        <p>{{ $shippingMethod->title ?? 'Standard' }}</p>
                    </div>

                    <div class="oc-info-block">
                        <label>Payment</label>
                        <div class="oc-payment-pill">
                            @if(str_contains(strtolower($order->payment_method), 'cash'))
                                <i class="fa fa-money"></i> Cash on Delivery
                            @else
                                <i class="fa fa-credit-card"></i> {{ $order->payment_method }}
                            @endif
                        </div>
                    </div>

                    <div class="oc-info-block">
                        <label>Payment status</label>
                        <div class="oc-badge {{ $order->payment_status }}">
                            <i class="fa fa-circle" style="font-size:7px;"></i>
                            {{ ucfirst($order->payment_status) }}
                        </div>
                    </div>

                    <div class="oc-info-block">
                        <label>Order date</label>
                        <p>{{ \Carbon\Carbon::parse($order->created_at)->format('d M Y, h:i A') }}</p>
                    </div>

                    <div class="oc-info-block">
                        <label>Order status</label>
                        <div class="oc-badge pending">
                            <i class="fa fa-circle" style="font-size:7px;"></i>
                            {{ ucfirst($order->order_status) }}
                        </div>
                    </div>
                </div>

                @if($order->order_note)
                    <div style="margin-top: 16px; padding-top: 16px; border-top: 1px solid #f3f4f6;">
                        <label style="font-size:11px; color:#9ca3af; text-transform:uppercase; letter-spacing:0.5px; font-weight:600;">Order note</label>
                        <p style="font-size:13.5px; color:#374151; margin: 4px 0 0;">{{ $order->order_note }}</p>
                    </div>
                @endif
            </div>
        </div>

        {{-- Actions --}}
        <div class="oc-actions">
            <a href="{{ route('home') }}" class="oc-btn-outline">
                Continue Shopping
            </a>
            @auth('customer')
                <a href="#" class="oc-btn-primary">
                    View My Orders
                </a>
            @endauth
        </div>

    </div>
</section>
@endsection
