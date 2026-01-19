<div class="grid cols-2" style="gap:14px;">
    <div class="card" style="margin:0;">
        <div class="cardHeader">
            <div>
                <h3>Role details</h3>
                <p>Define the role name and scope.</p>
            </div>
        </div>
        <div class="cardBody">
            <div class="field">
                <label>Role name</label>
                <input name="name" value="{{ old('name', $role->name ?? '') }}" required>
                @error('name')
                    <div class="hint">{{ $message }}</div>
                @enderror
            </div>
        </div>
    </div>

    <div class="card" style="margin:0;">
        <div class="cardHeader">
            <div>
                <h3>Permissions</h3>
                <p>Attach permissions granted by this role.</p>
            </div>
        </div>
        <div class="cardBody">
            <div class="grid cols-2" style="gap:10px;">
                @foreach($permissions as $permission)
                    <label style="display:flex; gap:10px; align-items:center; color:var(--muted); font-size:12px;">
                        <input
                            type="checkbox"
                            name="permissions[]"
                            value="{{ $permission->name }}"
                            @checked(in_array($permission->name, old('permissions', isset($role) ? $role->permissions->pluck('name')->all() : []), true))
                        >
                        <span style="color:var(--text); font-size:13px;">{{ $permission->name }}</span>
                    </label>
                @endforeach
            </div>
            @error('permissions.*')
                <div class="hint">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
