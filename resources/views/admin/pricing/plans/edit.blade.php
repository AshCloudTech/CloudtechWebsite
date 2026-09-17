@extends('layouts.admin')

@section('title', 'Edit Pricing Plan')
@section('page_title', 'Edit Pricing Plan')
@section('page_subtitle', 'Update pricing plan details and features.')

@section('content')
<div class="card">
    <div class="cardHeader" style="display:flex; justify-content:space-between; align-items:center;">
        <div>
            <h3>Edit Plan: {{ $plan->title }}</h3>
            <p>Update plan details, pricing amount, and features shown on <code>/pricing</code>.</p>
        </div>
        <a href="{{ route('admin.pricing.plans.index') }}" class="btn">Back to Plans</a>
    </div>

    <div class="cardBody">
        @if (session('success'))
            <div class="alert alert-success" style="margin-bottom:14px;">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger" style="margin-bottom:14px;">
                <ul style="margin:0; padding-left:18px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('admin.pricing.plans.update', $plan) }}">
            @csrf
            @method('PUT')
            @include('admin.pricing.plans._form', ['plan' => $plan])

            <div style="margin-top:16px; display:flex; justify-content:space-between;">
                <a href="{{ route('admin.pricing.plans.index') }}" class="btn">Cancel</a>
                <button type="submit" class="btn primary">Update Plan</button>
            </div>
        </form>
    </div>
</div>
@endsection