@extends('layouts.admin')

@section('title', 'Users')
@section('page_title', 'Users')
@section('page_subtitle', 'Manage users, roles, and impersonation.')

@section('content')
    <div class="card">
        <div class="cardHeader">
            <div>
                <h3>User Directory</h3>
                <p>Assign roles and manage access.</p>
            </div>
        </div>

        <div class="tableWrap">
            <table>
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Roles</th>
                    <th style="width:240px;">Actions</th>
                </tr>
                </thead>
                <tbody>
                @forelse($users as $u)
                    <tr>
                        <td><strong>{{ $u->name }}</strong></td>
                        <td class="mono">{{ $u->email }}</td>
                        <td><span class="mono">{{ $u->roles->pluck('name')->join(', ') ?: '—' }}</span></td>
                        <td>
                            <a class="btn" href="{{ route('admin.users.edit', $u) }}">Edit</a>

                            @role('super-admin')
                                <form style="display:inline;" method="POST" action="{{ route('admin.impersonate.start', $u) }}">
                                    @csrf
                                    <button class="btn" type="submit">Impersonate</button>
                                </form>
                            @endrole
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No users found.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div style="margin-top:14px;">
        {{ $users->links() }}
    </div>
@endsection
