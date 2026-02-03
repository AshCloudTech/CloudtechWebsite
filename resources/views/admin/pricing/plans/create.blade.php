@extends('layouts.admin')

@section('title','Create Pricing Plan')
@section('page_title','Create Pricing Plan')

@section('content')

<form method="POST" action="{{ route('admin.pricing.plans.store') }}">
    @csrf

    <div class="grid cols-2" style="gap:14px;">

        {{-- =====================
            PLAN DETAILS
        ===================== --}}
        <div class="card" style="margin:0;">
            <div class="cardHeader">
                <div>
                    <h3>Plan Details</h3>
                    <p>Basic information shown on pricing card.</p>
                </div>
            </div>

            <div class="cardBody">
                @include('admin.pricing.plans._form')
            </div>
        </div>

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

                    <div class="field">
                        <label>Monthly Price</label>
                        <input
                            name="prices[monthly][amount_text]"
                            placeholder="£499"
                        >
                    </div>

                    <div class="field">
                        <label>Monthly Period</label>
                        <input
                            name="prices[monthly][period_text]"
                            placeholder="per month"
                        >
                    </div>

                    <div class="field">
                        <label>One-Time Price</label>
                        <input
                            name="prices[one-time][amount_text]"
                            placeholder="£1,499 / Let’s talk"
                        >
                    </div>

                    <div class="field">
                        <label>One-Time Period</label>
                        <input
                            name="prices[one-time][period_text]"
                            placeholder="one-time"
                        >
                    </div>

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
                    <p>Bullet points shown on pricing card.</p>
                </div>
            </div>

            <div class="cardBody">

                <div id="features-wrapper" class="stack">
                    <div class="field">
                        <label>Feature</label>
                        <input
                            type="text"
                            name="features[]"
                            placeholder="Up to 5 pages"
                            oninput="addFeatureInput(this)"
                        >
                    </div>
                </div>

                <p class="hint" style="margin-top:8px;">
                    A new field appears automatically when you start typing.
                </p>

            </div>
        </div>

        {{-- =====================
            ACTIONS
        ===================== --}}
        <div class="card" style="margin:0;">
            <div class="cardHeader">
                <div>
                    <h3>Save</h3>
                    <p>Create pricing plan</p>
                </div>
            </div>

            <div class="cardBody">
                <button class="btn primary">Save Pricing Plan</button>
                <a href="{{ route('admin.pricing.plans.index') }}" class="btn">Cancel</a>

                <p style="margin-top:10px; opacity:.6; font-size:13px;">
                    This plan will appear on the <code>/pricing</code> page.
                </p>
            </div>
        </div>

    </div>
</form>
<script>
function addFeatureInput(input) {
    const wrapper = document.getElementById('features-wrapper');
    const fields  = wrapper.querySelectorAll('.field');

    const lastField = fields[fields.length - 1];
    const lastInput = lastField.querySelector('input');

   
    if (input === lastInput && input.value.trim() !== '') {

        const field = document.createElement('div');
        field.className = 'field';

        const label = document.createElement('label');
        label.innerText = 'Feature';

        const newInput = document.createElement('input');
        newInput.type = 'text';
        newInput.name = 'features[]';
        newInput.placeholder = 'Another feature';
        newInput.oninput = function () {
            addFeatureInput(this);
        };

        field.appendChild(label);
        field.appendChild(newInput);
        wrapper.appendChild(field);
    }
}
</script>
@endsection