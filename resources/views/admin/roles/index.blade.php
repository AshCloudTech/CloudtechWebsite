@extends('layouts.app')

@section('title', 'Roles')

@section('content')
    <div class="flex items-center justify-between">
        <h1 class="text-xl font-semibold">Roles</h1>
        <a href="{{ route('admin.roles.create') }}" class="rounded bg-gray-900 px-3 py-2 text-sm text-white">New Role</a>
    </div>

    <div class="mt-4 overflow-hidden rounded bg-white shadow-sm">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-left">
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Permissions</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($roles as $role)
                <tr class="border-t">
                    <td class="px-4 py-2 font-medium">{{ $role->name }}</td>
                    <td class="px-4 py-2">
                        {{ $role->permissions->pluck('name')->join(', ') ?: '—' }}
                    </td>
                    <td class="px-4 py-2">
                        <a class="underline" href="{{ route('admin.roles.edit', $role) }}">Edit</a>
                        <form class="inline" method="POST" action="{{ route('admin.roles.destroy', $role) }}">
                            @csrf @method('DELETE')
                            <button class="ml-2 underline" onclick="return confirm('Delete role?')" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
