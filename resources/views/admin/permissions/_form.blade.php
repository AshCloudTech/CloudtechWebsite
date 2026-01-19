<div>
    <label class="block text-sm font-medium">Permission name</label>
    <input name="name" value="{{ old('name', $permission->name ?? '') }}" class="mt-1 w-full rounded border px-3 py-2" required />
    @error('name')<div class="mt-1 text-xs text-red-600">{{ $message }}</div>@enderror
</div>
