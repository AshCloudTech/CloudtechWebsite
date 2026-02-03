@extends('layouts.admin')

@section('title', 'Add Branch')
@section('page_title', 'Add Branch')
@section('page_subtitle', 'Create a new office / branch.')

@section('content')
    <form method="POST" action="{{ route('admin.settings.branches.store') }}">
        @csrf
        @include('admin.settings.branches._form', ['branch' => null])

        <div class="btnRow" style="margin-top:14px;">
            <button class="btn primary" type="submit">Save</button>
            <a class="btn" href="{{ route('admin.settings.branches.index') }}">Cancel</a>
        </div>
    </form>
@endsection
