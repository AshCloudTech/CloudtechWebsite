<div class="space-y-4">
    <div>
        <label class="block text-sm font-medium">Role name</label>
        <input name="name" value="{{ old('name', $role->name ?? '') }}" class="mt-1 w-full rounded border px-3 py-2" required />
        @error('name')<div class="mt-1 text-xs text-red-600">{{ $message }}</div>@enderror
    </div>

    <div>
        <div class="block text-sm font-medium">Permissions</div>
        <div class="mt-2 grid gap-2 md:grid-cols-2">
            @foreach($permissions as $permission)
                <label class="flex items-center gap-2 text-sm">
                    <input type="checkbox" name="permissions[]" value="{{ $permission->name }}"
                        @checked(in_array($permission->name, old('permissions', isset($role) ? $role->permissions->pluck('name')->all() : []), true))
                    />
                    <span>{{ $permission->name }}</span>
                </label>
            @endforeach
        </div>
        @error('permissions.*')<div class="mt-1 text-xs text-red-600">{{ $message }}</div>@enderror
    </div>
</div>
