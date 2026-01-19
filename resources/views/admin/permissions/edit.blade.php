@extends('layouts.admin')

@section('title', 'Edit Permission')
@section('page_title', 'Edit Permission')
@section('page_subtitle', 'Rename permission (avoid breaking existing role mappings).')

@section('content')
    <form method="POST" action="{{ route('admin.permissions.update', $permission) }}">
        @csrf
        @method('PUT')

        @include('admin.permissions._form')

        <div style="margin-top:14px;" class="btnRow">
            <button class="btn primary" type="submit">Update Permission</button>
            <a class="btn" href="{{ route('admin.permissions.index') }}">Cancel</a>
        </div>
    </form>
@endsection
