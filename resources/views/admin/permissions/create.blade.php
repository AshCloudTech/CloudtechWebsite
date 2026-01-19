@extends('layouts.admin')

@section('title', 'Create Permission')
@section('page_title', 'Create Permission')
@section('page_subtitle', 'Add a new permission used by roles.')

@section('content')
    <form method="POST" action="{{ route('admin.permissions.store') }}">
        @csrf

        @include('admin.permissions._form')

        <div style="margin-top:14px;" class="btnRow">
            <button class="btn primary" type="submit">Save Permission</button>
            <a class="btn" href="{{ route('admin.permissions.index') }}">Cancel</a>
        </div>
    </form>
@endsection
