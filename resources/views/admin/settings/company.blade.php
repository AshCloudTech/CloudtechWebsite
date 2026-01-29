@extends('layouts.admin')

@section('title', 'Company Settings')
@section('page_title', 'Company Settings')
@section('page_subtitle', 'Manage company profile, branding assets, and contact details.')

@section('content')
    @if(session('success'))
        <div class="card" style="border:1px solid rgba(0,255,160,.25);">
            <div class="cardBody">{{ session('success') }}</div>
        </div>
        <div style="height:12px;"></div>
    @endif

    <form method="POST" action="{{ route('admin.settings.company.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="grid cols-2" style="gap:14px;">
            <div class="card" style="margin:0;">
                <div class="cardHeader">
                    <div>
                        <h3>Identity</h3>
                        <p>Branding and basic business profile.</p>
                    </div>
                </div>
                <div class="cardBody">
                    <div class="field">
                        <label>Brand Name</label>
                        <input name="brand_name" value="{{ old('brand_name', $company->brand_name) }}" required>
                        @error('brand_name')<div class="hint">{{ $message }}</div>@enderror
                    </div>

                    <div style="height:10px;"></div>

                    <div class="field">
                        <label>Slug</label>
                        <input name="slug" value="{{ old('slug', $company->slug) }}" required>
                        @error('slug')<div class="hint">{{ $message }}</div>@enderror
                    </div>

                    <div style="height:10px;"></div>

                    <div class="field">
                        <label>Tagline</label>
                        <input name="tagline" value="{{ old('tagline', $company->tagline) }}">
                    </div>

                    <div style="height:10px;"></div>

                    <div class="field">
                        <label>About</label>
                        <textarea name="about" rows="6">{{ old('about', $company->about) }}</textarea>
                    </div>

                    <div style="height:10px;"></div>

                    <label style="display:flex;gap:10px;align-items:center;">
                        <input type="checkbox" name="is_active" value="1" {{ old('is_active', $company->is_active) ? 'checked' : '' }}>
                        <span>Active</span>
                    </label>
                </div>
            </div>

            <div class="card" style="margin:0;">
                <div class="cardHeader">
                    <div>
                        <h3>Contact + Address</h3>
                        <p>Primary company contact and location details.</p>
                    </div>
                </div>
                <div class="cardBody">
                    <div class="grid cols-2" style="gap:12px;">
                        <div class="field">
                            <label>Primary Email</label>
                            <input name="primary_email" value="{{ old('primary_email', $company->primary_email) }}">
                        </div>
                        <div class="field">
                            <label>Support Email</label>
                            <input name="support_email" value="{{ old('support_email', $company->support_email) }}">
                        </div>
                    </div>

                    <div style="height:10px;"></div>

                    <div class="grid cols-3" style="gap:12px;">
                        <div class="field">
                            <label>Primary Phone</label>
                            <input name="primary_phone" value="{{ old('primary_phone', $company->primary_phone) }}">
                        </div>
                        <div class="field">
                            <label>Secondary Phone</label>
                            <input name="secondary_phone" value="{{ old('secondary_phone', $company->secondary_phone) }}">
                        </div>
                        <div class="field">
                            <label>WhatsApp</label>
                            <input name="whatsapp" value="{{ old('whatsapp', $company->whatsapp) }}">
                        </div>
                    </div>

                    <div style="height:10px;"></div>

                    <div class="field">
                        <label>Address Line 1</label>
                        <input name="address_line1" value="{{ old('address_line1', $company->address_line1) }}">
                    </div>

                    <div style="height:10px;"></div>

                    <div class="field">
                        <label>Address Line 2</label>
                        <input name="address_line2" value="{{ old('address_line2', $company->address_line2) }}">
                    </div>

                    <div style="height:10px;"></div>

                    <div class="grid cols-3" style="gap:12px;">
                        <div class="field">
                            <label>City</label>
                            <input name="city" value="{{ old('city', $company->city) }}">
                        </div>
                        <div class="field">
                            <label>State</label>
                            <input name="state" value="{{ old('state', $company->state) }}">
                        </div>
                        <div class="field">
                            <label>Postal Code</label>
                            <input name="postal_code" value="{{ old('postal_code', $company->postal_code) }}">
                        </div>
                    </div>

                    <div style="height:10px;"></div>

                    <div class="grid cols-3" style="gap:12px;">
                        <div class="field">
                            <label>Country Code</label>
                            <input name="country_code" value="{{ old('country_code', $company->country_code) }}">
                        </div>
                        <div class="field">
                            <label>Timezone</label>
                            <input name="timezone" value="{{ old('timezone', $company->timezone) }}">
                        </div>
                        <div class="field">
                            <label>Google Maps URL</label>
                            <input name="google_maps_url" value="{{ old('google_maps_url', $company->google_maps_url) }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="height:14px;"></div>

      <div class="card" style="margin:0;">
    <div class="cardHeader">
        <div>
            <h3>Brand Assets</h3>
            <p>Upload logos and favicon (stored in storage/public).</p>
        </div>
    </div>

    <div class="cardBody">
        <div class="grid cols-4" style="gap:12px;">

            {{-- Logo Light --}}
            <div class="field">
                <label>Logo Light</label>
                <input type="file" name="logo_light" accept="image/*">

                @if($company->logo_light_path)
                    <div style="margin-top:10px;">
                        <div class="hint" style="margin-bottom:6px;">Current Preview</div>
                        <div style="border:1px solid rgba(255,255,255,.10); background: rgba(255,255,255,.02); border-radius: 12px; padding:10px; display:flex; justify-content:center; align-items:center; min-height:80px;">
                            <img
                                src="{{ asset($company->logo_light_path) }}"
                                alt="Logo Light"
                                style="max-height:60px; max-width:100%; object-fit:contain;"
                                loading="lazy"
                            >
                        </div>
                    </div>
                @endif
            </div>

            {{-- Logo Dark --}}
            <div class="field">
                <label>Logo Dark</label>
                <input type="file" name="logo_dark" accept="image/*">

                @if($company->logo_dark_path)
                    <div style="margin-top:10px;">
                        <div class="hint" style="margin-bottom:6px;">Current Preview</div>
                        <div style="border:1px solid rgba(255,255,255,.10); background: rgba(255,255,255,.02); border-radius: 12px; padding:10px; display:flex; justify-content:center; align-items:center; min-height:80px;">
                            <img
                                src="{{ asset($company->logo_dark_path) }}"
                                alt="Logo Dark"
                                style="max-height:60px; max-width:100%; object-fit:contain;"
                                loading="lazy"
                            >
                        </div>
                    </div>
                @endif
            </div>

            {{-- Favicon --}}
            <div class="field">
                <label>Favicon</label>
                <input type="file" name="favicon" accept="image/*">

                @if($company->favicon_path)
                    <div style="margin-top:10px;">
                        <div class="hint" style="margin-bottom:6px;">Current Preview</div>
                        <div style="border:1px solid rgba(255,255,255,.10); background: rgba(255,255,255,.02); border-radius: 12px; padding:10px; display:flex; justify-content:center; align-items:center; min-height:80px;">
                            <img
                                src="{{ asset($company->favicon_path) }}"
                                alt="Favicon"
                                style="height:44px; width:44px; object-fit:contain;"
                                loading="lazy"
                            >
                        </div>
                    </div>
                @endif
            </div>

            {{-- OG Image --}}
            <div class="field">
                <label>OG Image</label>
                <input type="file" name="og_image" accept="image/*">

                @if($company->og_image_path)
                    <div style="margin-top:10px;">
                        <div class="hint" style="margin-bottom:6px;">Current Preview</div>
                        <div style="border:1px solid rgba(255,255,255,.10); background: rgba(255,255,255,.02); border-radius: 12px; padding:10px; display:flex; justify-content:center; align-items:center; min-height:80px;">
                            <img
                                src="{{ asset($company->og_image_path) }}"
                                alt="OG Image"
                                style="max-height:80px; max-width:100%; object-fit:cover; border-radius:10px;"
                                loading="lazy"
                            >
                        </div>
                    </div>
                @endif
            </div>

        </div>
    </div>
</div>


        <div style="margin-top:14px;" class="btnRow">
            <button class="btn primary" type="submit">Save</button>
        </div>
    </form>
@endsection
