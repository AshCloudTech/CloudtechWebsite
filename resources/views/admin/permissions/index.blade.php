@extends('layouts.admin')

@section('title', 'Permissions')
@section('page_title', 'Permissions')
@section('page_subtitle', 'Create granular permissions used by roles and policies.')

@section('content')
    <div class="card">
        <div class="cardHeader">
            <div>
                <h3>Permission Matrix</h3>
                <p>Use consistent naming (e.g., users.read, users.write, bookings.cancel).</p>
            </div>
            <a class="btn primary" href="{{ route('admin.permissions.create') }}">New Permission</a>
        </div>

        <div class="tableWrap">
            <table>
                <thead>
                <tr>
                    <th>Name</th>
                    <th style="width:170px;">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($permissions as $permission)
                    <tr>
                        <td><strong>{{ $permission->name }}</strong></td>
                        <td>
                            <a class="btn" href="{{ route('admin.permissions.edit', $permission) }}">Edit</a>
                            <form style="display:inline;" method="POST" action="{{ route('admin.permissions.destroy', $permission) }}" onsubmit="return confirm('Delete permission?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">No permissions found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
