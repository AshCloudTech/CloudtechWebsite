@extends('layouts.cloudtech')

@section('title', '')
@section('meta_title', '')
@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/services/uiux/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/header.css') }}">
@endpush
@push('scripts')
    <script src="{{ asset('assets/services/uiux/js/script.js') }}" defer></script>
@endpush
@section('content')

@endsection