@extends('layouts.admin')

@section('title','Edit Pricing Plan')
@section('page_title','Edit Pricing Plan')

@section('content')

{{-- INFO --}}
<div class="card" style="margin-bottom:14px;">
    <div class="cardBody">
        <strong>Build Pricing Card</strong>
        <p style="opacity:.7;font-size:13px;">
            Fill plan details → pricing → features.  
            Appears on <code>/pricing</code> page.
        </p>
    </div>
</div>

<div class="grid cols-2" style="gap:14px;">

    {{-- =====================
        PLAN DETAILS
    ===================== --}}
    <form method="POST"
          action="{{ route('admin.pricing.plans.update',$plan) }}"
          class="card"
          style="margin:0;">
        @csrf
        @method('PUT')

        <div class="cardHeader">
            <div>
                <h3>Plan Details</h3>
                <p>Basic information</p>
            </div>
        </div>

        <div class="cardBody">
            @include('admin.pricing.plans._form',['plan'=>$plan])
        </div>

        <div class="cardFooter">
            <button class="btn primary">Update Plan</button>
        </div>
    </form>

    {{-- =====================
        PRICING
    ===================== --}}
    <div class="card" style="margin:0;">
        <div class="cardHeader">
            <div>
                <h3>Pricing</h3>
                <p>Monthly & one-time pricing</p>
            </div>
        </div>

        <div class="cardBody">
            <div class="grid cols-2" style="gap:12px;">

                {{-- Monthly --}}
                <form method="POST" action="{{ route('admin.pricing.prices.store') }}">
                    @csrf
                    <input type="hidden" name="pricing_plan_id" value="{{ $plan->id }}">
                    <input type="hidden" name="billing_key" value="monthly">

                    <div class="field">
                        <label>Currency</label>
                        <input
                            name="currency"
                            value="{{ $plan->priceByBilling('monthly')?->currency ?? '£' }}"
                        >
                    </div>

                    <div class="field">
                        <label>Monthly Price</label>
                        <input
                            name="amount_text"
                            value="{{ $plan->priceByBilling('monthly')?->amount_text }}"
                            placeholder="499"
                        >
                    </div>

                    <div class="field">
                        <label>Monthly Period</label>
                        <input
                            name="period_text"
                            value="{{ $plan->priceByBilling('monthly')?->period_text ?? 'per month' }}"
                        >
                    </div>

                    <button class="btn primary">Save Monthly</button>
                </form>

                {{-- One-time --}}
                <form method="POST" action="{{ route('admin.pricing.prices.store') }}">
                    @csrf
                    <input type="hidden" name="pricing_plan_id" value="{{ $plan->id }}">
                    <input type="hidden" name="billing_key" value="one-time">

                    <div class="field">
                        <label>Currency</label>
                        <input
                            name="currency"
                            value="{{ $plan->priceByBilling('one-time')?->currency ?? '£' }}"
                        >
                    </div>

                    <div class="field">
                        <label>One-Time Price</label>
                        <input
                            name="amount_text"
                            value="{{ $plan->priceByBilling('one-time')?->amount_text }}"
                            placeholder="1,499 / Let’s talk"
                        >
                    </div>

                    <div class="field">
                        <label>One-Time Period</label>
                        <input
                            name="period_text"
                            value="{{ $plan->priceByBilling('one-time')?->period_text ?? 'one-time' }}"
                        >
                    </div>

                    <button class="btn">Save One-Time</button>
                </form>

            </div>
        </div>
    </div>

    {{-- =====================
        FEATURES
    ===================== --}}
    <div class="card" style="margin:0;">
        <div class="cardHeader">
            <div>
                <h3>Features</h3>
                <p>Bullet points on pricing card</p>
            </div>
        </div>

        <div class="cardBody">

            {{-- Add feature --}}
            <form method="POST"
                  action="{{ route('admin.pricing.features.store') }}"
                  class="grid cols-3"
                  style="gap:10px;">
                @csrf
                <input type="hidden" name="pricing_plan_id" value="{{ $plan->id }}">

                <div class="field">
                    <label>Feature text</label>
                    <input name="text" placeholder="Up to 5 pages" required>
                </div>

                <div class="field">
                    <label>Order</label>
                    <input name="sort_order" value="0">
                </div>

                <div class="field" style="align-self:flex-end;">
                    <button class="btn">Add Feature</button>
                </div>
            </form>

            {{-- Feature list --}}
            <ul style="margin-top:14px;">
                @forelse($plan->features as $feature)
                    <li style="display:flex;justify-content:space-between;align-items:center;">
                        <span>{{ $feature->text }}</span>

                        <form method="POST"
                              action="{{ route('admin.pricing.features.delete',$feature) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn sm danger">×</button>
                        </form>
                    </li>
                @empty
                    <li style="opacity:.6;">No features added yet.</li>
                @endforelse
            </ul>

        </div>
    </div>

</div>

@endsection