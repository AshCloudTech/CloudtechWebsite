@extends('layouts.admin')

@section('title', 'Edit User')
@section('page_title', 'Edit User')
@section('page_subtitle', 'Update user details and role assignments.')

@section('content')
    <form method="POST" action="{{ route('admin.users.update', $user) }}">
        @csrf
        @method('PUT')

        <div class="grid cols-2" style="gap:14px;">
            <div class="card" style="margin:0;">
                <div class="cardHeader">
                    <div>
                        <h3>User details</h3>
                        <p>Name and email used for authentication.</p>
                    </div>
                </div>
                <div class="cardBody">
                    <div class="field">
                        <label>Name</label>
                        <input name="name" value="{{ old('name', $user->name) }}" required>
                        @error('name')<div class="hint">{{ $message }}</div>@enderror
                    </div>

                    <div style="height:10px;"></div>

                    <div class="field">
                        <label>Email</label>
                        <input name="email" value="{{ old('email', $user->email) }}" required>
                        @error('email')<div class="hint">{{ $message }}</div>@enderror
                    </div>
                </div>
            </div>

            <div class="card" style="margin:0;">
                <div class="cardHeader">
                    <div>
                        <h3>Roles</h3>
                        <p>Select one or more roles.</p>
                    </div>
                </div>
                <div class="cardBody">
                    <div class="grid cols-2" style="gap:10px;">
                        @foreach($roles as $role)
                            <label style="display:flex; gap:10px; align-items:center; color:var(--muted); font-size:12px;">
                                <input type="checkbox" name="roles[]" value="{{ $role->name }}"
                                    @checked(in_array($role->name, old('roles', $user->roles->pluck('name')->all()), true))>
                                <span style="color:var(--text); font-size:13px;">{{ $role->name }}</span>
                            </label>
                        @endforeach
                    </div>
                    @error('roles.*')<div class="hint">{{ $message }}</div>@enderror
                </div>
            </div>
        </div>

        <div style="margin-top:14px;" class="btnRow">
            <button class="btn primary" type="submit">Save</button>
            <a class="btn" href="{{ route('admin.users.index') }}">Cancel</a>
        </div>
    </form>
@endsection
