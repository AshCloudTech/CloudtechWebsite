@extends('layouts.admin')

@section('title', 'Company Branches')
@section('page_title', 'Company Branches')
@section('page_subtitle', 'Manage multiple office locations, contacts, and maps.')

@section('content')
    @if(session('success'))
        <div class="card" style="border:1px solid rgba(0,255,160,.25);">
            <div class="cardBody">{{ session('success') }}</div>
        </div>
        <div style="height:12px;"></div>
    @endif

    <div class="btnRow" style="margin-bottom:12px;">
        <a class="btn primary" href="{{ route('admin.settings.branches.create') }}">Add Branch</a>
    </div>

    <div class="card" style="margin:0;">
        <div class="cardBody">
            <table class="table">
                <thead>
                    <tr>
                        <th>Branch</th>
                        <th>Code</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>HQ</th>
                        <th>Status</th>
                        <th style="width:120px;"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($branches as $b)
                        <tr>
                            <td>
                                <div style="font-weight:700;">{{ $b->name }}</div>
                                <div style="opacity:.7;">
                                    {{ $b->city }}{{ $b->city && $b->country_code ? ', ' : '' }}{{ $b->country_code }}
                                </div>
                            </td>
                            <td>{{ $b->code }}</td>
                            <td>{{ $b->email }}</td>
                            <td>{{ $b->phone }}</td>
                            <td>{{ $b->is_hq ? 'Yes' : 'No' }}</td>
                            <td>{{ $b->is_active ? 'Active' : 'Disabled' }}</td>
                            <td>
                                <a class="btn" href="{{ route('admin.settings.branches.edit', $b) }}">Edit</a>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="7">No branches yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
