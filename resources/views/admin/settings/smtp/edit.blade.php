@extends('layouts.admin')

@section('title', 'Edit SMTP')
@section('page_title', 'Edit SMTP')
@section('page_subtitle', 'Update SMTP mailer configuration.')

@section('content')
    <form method="POST" action="{{ route('admin.settings.smtp.update', $smtp) }}">
        @csrf
        @method('PUT')

        @include('admin.settings.smtp._form', ['smtp' => $smtp])

        <div style="margin-top:14px;" class="btnRow">
            <button class="btn primary" type="submit">Save</button>
            <a class="btn" href="{{ route('admin.settings.smtp.index') }}">Cancel</a>
        </div>
    </form>
@endsection
