@extends('layouts.app')

@section('title', 'Edit Role')

@section('content')
    <h1 class="text-xl font-semibold">Edit Role: {{ $role->name }}</h1>

    <form class="mt-4 rounded bg-white p-6 shadow-sm" method="POST" action="{{ route('admin.roles.update', $role) }}">
        @csrf @method('PUT')
        @include('admin.roles._form')

        <div class="mt-6 flex gap-3">
            <button class="rounded bg-gray-900 px-4 py-2 text-sm text-white" type="submit">Update</button>
            <a class="rounded border px-4 py-2 text-sm" href="{{ route('admin.roles.index') }}">Cancel</a>
        </div>
    </form>
@endsection
