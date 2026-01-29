@extends('layouts.admin')

@section('title', 'My Profile')
@section('page_title', 'My Profile')
@section('page_subtitle', 'Manage your account details and security settings.')

@section('content')

    @if(session('status'))
        <div class="card" style="border:1px solid rgba(0,255,160,.25); margin:0 0 12px 0;">
            <div class="cardBody">
                {{ session('status') }}
            </div>
        </div>
    @endif

    <div class="grid cols-2" style="gap:14px;">
        {{-- Profile Info --}}
        <div class="card" style="margin:0;">
            <div class="cardHeader">
                <div>
                    <h3>Profile Information</h3>
                    <p>Update your name and email address.</p>
                </div>
            </div>
            <div class="cardBody">
                @include('profile.partials.update-profile-information-form')
            </div>
        </div>

        {{-- Password --}}
        <div class="card" style="margin:0;">
            <div class="cardHeader">
                <div>
                    <h3>Update Password</h3>
                    <p>Use a strong password to keep your account secure.</p>
                </div>
            </div>
            <div class="cardBody">
                @include('profile.partials.update-password-form')
            </div>
        </div>
    </div>

    <div style="height:14px;"></div>

    {{-- Danger Zone --}}
    <div class="card" style="margin:0;">
        <div class="cardHeader">
            <div>
                <h3>Danger Zone</h3>
                <p>Delete your account permanently (requires password confirmation).</p>
            </div>
        </div>
        <div class="cardBody">
            @include('profile.partials.delete-user-form')
        </div>
    </div>

@endsection
