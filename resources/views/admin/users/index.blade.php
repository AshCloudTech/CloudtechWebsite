@extends('layouts.app')

@section('title', 'Users')

@section('content')
    <h1 class="text-xl font-semibold">Users</h1>

    <div class="mt-4 overflow-hidden rounded bg-white shadow-sm">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-left">
            <tr>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Roles</th>
                <th class="px-4 py-2">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr class="border-t">
                    <td class="px-4 py-2 font-medium">{{ $user->name }}</td>
                    <td class="px-4 py-2">{{ $user->email }}</td>
                    <td class="px-4 py-2">{{ $user->roles->pluck('name')->join(', ') ?: '—' }}</td>
                    <td class="px-4 py-2">
                        <a class="underline" href="{{ route('admin.users.edit', $user) }}">Edit</a>

                        @role('super-admin')
                            <form class="inline" method="POST" action="{{ route('admin.impersonate.start', $user) }}">
                                @csrf
                                <button class="ml-2 underline" type="submit">Impersonate</button>
                            </form>
                        @endrole
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $users->links() }}
    </div>
@endsection
