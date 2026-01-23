@extends('layouts.admin')

@section('title', 'Create Role')
@section('page_title', 'Create Role')
@section('page_subtitle', 'Add a new role and assign permissions.')

@section('content')
    <form method="POST" action="{{ route('admin.roles.store') }}">
        @csrf

        @include('admin.roles._form')

        <div style="margin-top:14px;" class="btnRow">
            <button class="btn primary" type="submit">Save Role</button>
            <a class="btn" href="{{ route('admin.roles.index') }}">Cancel</a>
        </div>
    </form>
@endsection
