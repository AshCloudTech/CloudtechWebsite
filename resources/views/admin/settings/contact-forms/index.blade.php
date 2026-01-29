@extends('layouts.admin')

@section('title', 'Contact Forms')
@section('page_title', 'Contact Forms')
@section('page_subtitle', 'Configure routing, recipients, auto-reply, and SMTP per form.')

@section('content')
    @if(session('success'))
        <div class="card" style="border:1px solid rgba(0,255,160,.25);">
            <div class="cardBody">{{ session('success') }}</div>
        </div>
        <div style="height:12px;"></div>
    @endif

    <div class="btnRow" style="margin-bottom:12px;">
        <a class="btn primary" href="{{ route('admin.settings.contact-forms.create') }}">Add Form</a>
    </div>

    <div class="card" style="margin:0;">
        <div class="cardBody">
            <table class="table">
                <thead>
                <tr>
                    <th>Key</th>
                    <th>Title</th>
                    <th>Recipient</th>
                    <th>SMTP</th>
                    <th>Status</th>
                    <th style="width:120px;"></th>
                </tr>
                </thead>
                <tbody>
                @forelse($forms as $f)
                    <tr>
                        <td>{{ $f->key }}</td>
                        <td>{{ $f->title }}</td>
                        <td>{{ $f->recipient_to }}</td>
                        <td>{{ $f->smtpMailer?->name ?: 'Default' }}</td>
                        <td>{{ $f->is_active ? 'Active' : 'Disabled' }}</td>
                        <td><a class="btn" href="{{ route('admin.settings.contact-forms.edit', $f) }}">Edit</a></td>
                    </tr>
                @empty
                    <tr><td colspan="6">No forms configured yet.</td></tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
