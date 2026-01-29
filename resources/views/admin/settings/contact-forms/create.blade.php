@extends('layouts.admin')

@section('title', 'Add Contact Form')
@section('page_title', 'Add Contact Form')
@section('page_subtitle', 'Create a new form config.')

@section('content')
    <form method="POST" action="{{ route('admin.settings.contact-forms.store') }}">
        @csrf
        @include('admin.settings.contact-forms._form', ['contactForm' => null])
        <div style="margin-top:14px;" class="btnRow">
            <button class="btn primary" type="submit">Save</button>
            <a class="btn" href="{{ route('admin.settings.contact-forms.index') }}">Cancel</a>
        </div>
    </form>
@endsection
