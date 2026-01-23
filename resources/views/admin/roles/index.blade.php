@extends('layouts.admin')

@section('title', 'Roles')
@section('page_title', 'Roles')
@section('page_subtitle', 'Create roles and assign permissions.')

@section('content')
    <div class="card">
        <div class="cardHeader">
            <div>
                <h3>Role Management</h3>
                <p>Manage access groups and associated permissions.</p>
            </div>
            <a class="btn primary" href="{{ route('admin.roles.create') }}">New Role</a>
        </div>

        <div class="tableWrap">
            <table>
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Permissions</th>
                    <th style="width:170px;">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($roles as $role)
                    <tr>
                        <td><strong>{{ $role->name }}</strong></td>
                        <td>
                            <span class="mono">{{ $role->permissions->pluck('name')->join(', ') ?: '—' }}</span>
                        </td>
                        <td>
                            <a class="btn" href="{{ route('admin.roles.edit', $role) }}">Edit</a>
                            <form style="display:inline;" method="POST" action="{{ route('admin.roles.destroy', $role) }}" onsubmit="return confirm('Delete role?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3">No roles found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
