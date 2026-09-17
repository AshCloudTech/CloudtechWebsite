@extends('layouts.admin')

@section('title', 'Create Pricing Plan')
@section('page_title', 'Create Pricing Plan')
@section('page_subtitle', 'Create a new USA or custom pricing plan.')

@section('content')
<div class="card">
    <div class="cardHeader" style="display:flex; justify-content:space-between; align-items:center;">
        <div>
            <h3>Plan Information</h3>
            <p>Configure plan details, pricing, and features for the pricing page.</p>
        </div>
        <a href="{{ route('admin.pricing.plans.index') }}" class="btn">Back to Plans</a>
    </div>

    <div class="cardBody">
        @if ($errors->any())
            <div class="alert alert-danger" style="margin-bottom:14px;">
                <ul style="margin:0; padding-left:18px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.pricing.plans.store') }}">
            @csrf
            @include('admin.pricing.plans._form', ['plan' => $plan])

            <div style="margin-top:16px; display:flex; justify-content:space-between;">
                <a href="{{ route('admin.pricing.plans.index') }}" class="btn">Cancel</a>
                <button type="submit" class="btn primary">Create Plan</button>
            </div>
        </form>
    </div>
</div>
@endsection