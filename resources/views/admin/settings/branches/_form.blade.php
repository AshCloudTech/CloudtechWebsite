@php
    $val = fn($k, $d=null) => old($k, $branch?->{$k} ?? $d);
@endphp

<div class="grid cols-2" style="gap:14px;">
    <div class="card" style="margin:0;">
        <div class="cardHeader">
            <div>
                <h3>Branch Details</h3>
                <p>Name, contact and status.</p>
            </div>
        </div>
        <div class="cardBody">
            <div class="field">
                <label>Branch Name</label>
                <input name="name" value="{{ $val('name') }}" required>
                @error('name')<div class="hint">{{ $message }}</div>@enderror
            </div>

            <div style="height:10px;"></div>

            <div class="grid cols-2" style="gap:12px;">
                <div class="field">
                    <label>Code</label>
                    <input name="code" value="{{ $val('code') }}" placeholder="DXB / LON / CHN">
                </div>
                <div class="field">
                    <label>Sort Order</label>
                    <input type="number" name="sort_order" value="{{ $val('sort_order', 0) }}">
                </div>
            </div>

            <div style="height:10px;"></div>

            <div class="grid cols-2" style="gap:12px;">
                <div class="field">
                    <label>Email</label>
                    <input name="email" value="{{ $val('email') }}">
                </div>
                <div class="field">
                    <label>Phone</label>
                    <input name="phone" value="{{ $val('phone') }}">
                </div>
            </div>

            <div style="height:10px;"></div>

            <div class="field">
                <label>WhatsApp</label>
                <input name="whatsapp" value="{{ $val('whatsapp') }}">
            </div>

            <div style="height:10px;"></div>

            <div class="grid cols-2" style="gap:12px;">
                <label style="display:flex;gap:10px;align-items:center;">
                    <input type="checkbox" name="is_hq" value="1" {{ $val('is_hq') ? 'checked' : '' }}>
                    <span>Mark as HQ</span>
                </label>

                <label style="display:flex;gap:10px;align-items:center;">
                    <input type="checkbox" name="is_active" value="1" {{ $val('is_active', 1) ? 'checked' : '' }}>
                    <span>Active</span>
                </label>
            </div>
        </div>
    </div>

    <div class="card" style="margin:0;">
        <div class="cardHeader">
            <div>
                <h3>Address + Maps</h3>
                <p>Branch location details.</p>
            </div>
        </div>
        <div class="cardBody">
            <div class="field">
                <label>Address Line 1</label>
                <input name="address_line1" value="{{ $val('address_line1') }}">
            </div>

            <div style="height:10px;"></div>

            <div class="field">
                <label>Address Line 2</label>
                <input name="address_line2" value="{{ $val('address_line2') }}">
            </div>

            <div style="height:10px;"></div>

            <div class="grid cols-3" style="gap:12px;">
                <div class="field">
                    <label>City</label>
                    <input name="city" value="{{ $val('city') }}">
                </div>
                <div class="field">
                    <label>State</label>
                    <input name="state" value="{{ $val('state') }}">
                </div>
                <div class="field">
                    <label>Postal Code</label>
                    <input name="postal_code" value="{{ $val('postal_code') }}">
                </div>
            </div>

            <div style="height:10px;"></div>

            <div class="grid cols-3" style="gap:12px;">
                <div class="field">
                    <label>Country Code</label>
                    <input name="country_code" value="{{ $val('country_code') }}" placeholder="IN / AE / GB">
                </div>
                <div class="field">
                    <label>Latitude</label>
                    <input name="latitude" value="{{ $val('latitude') }}">
                </div>
                <div class="field">
                    <label>Longitude</label>
                    <input name="longitude" value="{{ $val('longitude') }}">
                </div>
            </div>

            <div style="height:10px;"></div>

            <div class="field">
                <label>Google Maps URL</label>
                <input name="google_maps_url" value="{{ $val('google_maps_url') }}">
            </div>
        </div>
    </div>
</div>
