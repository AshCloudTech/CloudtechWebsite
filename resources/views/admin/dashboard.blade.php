@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="rounded bg-white p-6 shadow-sm">
        <h1 class="text-xl font-semibold">Admin Dashboard</h1>
        <p class="mt-2 text-gray-600">Manage roles, permissions, users, and audit logs.</p>

        <div class="mt-6 grid gap-4 md:grid-cols-2">
            <a class="rounded border bg-gray-50 p-4 hover:bg-gray-100" href="{{ route('admin.roles.index') }}">
                <div class="font-medium">Role Management</div>
                <div class="text-sm text-gray-600">Create roles and assign permissions.</div>
            </a>
            <a class="rounded border bg-gray-50 p-4 hover:bg-gray-100" href="{{ route('admin.permissions.index') }}">
                <div class="font-medium">Permission Management</div>
                <div class="text-sm text-gray-600">Create granular permissions.</div>
            </a>
            <a class="rounded border bg-gray-50 p-4 hover:bg-gray-100" href="{{ route('admin.users.index') }}">
                <div class="font-medium">User Management</div>
                <div class="text-sm text-gray-600">Assign roles to users.</div>
            </a>
            <a class="rounded border bg-gray-50 p-4 hover:bg-gray-100" href="{{ route('admin.audit-logs.index') }}">
                <div class="font-medium">Audit Logs</div>
                <div class="text-sm text-gray-600">View activity history.</div>
            </a>
        </div>

        @if (session()->has('impersonator_id'))
            <div class="mt-6 rounded border border-amber-200 bg-amber-50 p-3 text-sm text-amber-900">
                You are currently impersonating another user.
                <form method="POST" action="{{ route('admin.impersonate.stop') }}" class="inline">
                    @csrf
                    <button class="ml-2 underline" type="submit">Stop impersonation</button>
                </form>
            </div>
        @endif
    </div>
@endsection
