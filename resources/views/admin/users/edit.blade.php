@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <h1 class="text-xl font-semibold">Edit User</h1>

    <form class="mt-4 rounded bg-white p-6 shadow-sm" method="POST" action="{{ route('admin.users.update', $user) }}">
        @csrf @method('PUT')

        <div class="grid gap-4 md:grid-cols-2">
            <div>
                <label class="block text-sm font-medium">Name</label>
                <input name="name" value="{{ old('name', $user->name) }}" class="mt-1 w-full rounded border px-3 py-2" required />
                @error('name')<div class="mt-1 text-xs text-red-600">{{ $message }}</div>@enderror
            </div>
            <div>
                <label class="block text-sm font-medium">Email</label>
                <input name="email" value="{{ old('email', $user->email) }}" class="mt-1 w-full rounded border px-3 py-2" required />
                @error('email')<div class="mt-1 text-xs text-red-600">{{ $message }}</div>@enderror
            </div>
        </div>

        <div class="mt-4">
            <div class="block text-sm font-medium">Roles</div>
            <div class="mt-2 grid gap-2 md:grid-cols-2">
                @foreach($roles as $role)
                    <label class="flex items-center gap-2 text-sm">
                        <input type="checkbox" name="roles[]" value="{{ $role->name }}"
                               @checked(in_array($role->name, old('roles', $user->roles->pluck('name')->all()), true)) />
                        <span>{{ $role->name }}</span>
                    </label>
                @endforeach
            </div>
            @error('roles.*')<div class="mt-1 text-xs text-red-600">{{ $message }}</div>@enderror
        </div>

        <div class="mt-6 flex gap-3">
            <button class="rounded bg-gray-900 px-4 py-2 text-sm text-white" type="submit">Save</button>
            <a class="rounded border px-4 py-2 text-sm" href="{{ route('admin.users.index') }}">Cancel</a>
        </div>
    </form>
@endsection
