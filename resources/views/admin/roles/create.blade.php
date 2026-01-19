@extends('layouts.app')

@section('title', 'Create Role')

@section('content')
    <h1 class="text-xl font-semibold">Create Role</h1>

    <form class="mt-4 rounded bg-white p-6 shadow-sm" method="POST" action="{{ route('admin.roles.store') }}">
        @csrf
        @include('admin.roles._form')

        <div class="mt-6 flex gap-3">
            <button class="rounded bg-gray-900 px-4 py-2 text-sm text-white" type="submit">Save</button>
            <a class="rounded border px-4 py-2 text-sm" href="{{ route('admin.roles.index') }}">Cancel</a>
        </div>
    </form>
@endsection
