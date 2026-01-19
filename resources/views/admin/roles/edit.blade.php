@extends('layouts.admin')

@section('title', 'Edit Role')
@section('page_title', 'Edit Role')
@section('page_subtitle', 'Update role name or adjust permissions.')

@section('content')
    <form method="POST" action="{{ route('admin.roles.update', $role) }}">
        @csrf
        @method('PUT')

        @include('admin.roles._form')

        <div style="margin-top:14px;" class="btnRow">
            <button class="btn primary" type="submit">Update Role</button>
            <a class="btn" href="{{ route('admin.roles.index') }}">Cancel</a>
        </div>
    </form>
@endsection
