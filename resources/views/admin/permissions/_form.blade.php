<div class="card" style="margin:0;">
    <div class="cardHeader">
        <div>
            <h3>Permission details</h3>
            <p>Keep names lowercase and dot-separated.</p>
        </div>
    </div>
    <div class="cardBody">
        <div class="field">
            <label>Permission name</label>
            <input name="name" value="{{ old('name', $permission->name ?? '') }}" required>
            @error('name')
                <div class="hint">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
