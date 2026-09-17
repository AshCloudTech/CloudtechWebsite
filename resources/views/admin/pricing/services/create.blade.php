@extends('layouts.admin')

@section('title', 'Add Pricing Service')
@section('page_title', 'Add Pricing Service')
@section('page_subtitle', 'Add a new SEO or Web Development pricing row.')

@section('content')
<div class="card">
    <div class="cardHeader">
        <h3>Create Service Pricing</h3>
        <a href="{{ route('admin.pricing.services.index') }}" class="btn">Back to Services</a>
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

        <form method="POST" action="{{ route('admin.pricing.services.store') }}">
            @csrf
            @include('admin.pricing.services._form', ['service' => $service])

            <div style="margin-top:16px; display:flex; justify-content:space-between;">
                <a href="{{ route('admin.pricing.services.index') }}" class="btn">Cancel</a>
                <button type="submit" class="btn primary">Create Service</button>
            </div>
        </form>
    </div>
</div>
@endsection
