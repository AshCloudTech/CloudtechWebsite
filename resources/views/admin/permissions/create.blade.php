@extends('layouts.app')

@section('title', 'Create Permission')

@section('content')
    <h1 class="text-xl font-semibold">Create Permission</h1>

    <form class="mt-4 rounded bg-white p-6 shadow-sm" method="POST" action="{{ route('admin.permissions.store') }}">
        @csrf
        @include('admin.permissions._form')

        <div class="mt-6 flex gap-3">
            <button class="rounded bg-gray-900 px-4 py-2 text-sm text-white" type="submit">Save</button>
            <a class="rounded border px-4 py-2 text-sm" href="{{ route('admin.permissions.index') }}">Cancel</a>
        </div>
    </form>
@endsection
