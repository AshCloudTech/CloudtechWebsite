@extends('layouts.admin')

@section('title', 'Edit Branch')
@section('page_title', 'Edit Branch')
@section('page_subtitle', 'Update branch details.')

@section('content')
    <form method="POST" action="{{ route('admin.settings.branches.update', $branch) }}">
        @csrf
        @method('PUT')
        @include('admin.settings.branches._form', ['branch' => $branch])

        <div class="btnRow" style="margin-top:14px;">
            <button class="btn primary" type="submit">Save</button>
            <a class="btn" href="{{ route('admin.settings.branches.index') }}">Cancel</a>
        </div>
    </form>
@endsection
