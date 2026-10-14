@extends('layouts.admin')

@section('title', 'Pricing Services')
@section('page_title', 'Pricing Services')
@section('page_subtitle', 'Manage SEO and Web Development pricing table rows.')

@section('content')
<div class="card">
    <div class="cardHeader" style="display:flex; justify-content:space-between; align-items:center;">
        <div>
            <h3>All Services Pricing</h3>
            <p>Rows displayed in the SEO Services &amp; Website Development pricing tables.</p>
        </div>
        <div style="display:flex; gap:10px;">
            <a href="{{ route('admin.pricing.services.create') }}" class="btn primary">+ Add Service</a>
        </div>
    </div>

    <div class="cardBody">
        @if(session('success'))
            <div class="alert alert-success" style="margin-bottom:12px;">
                {{ session('success') }}
            </div>
        @endif

        <div style="margin-bottom: 14px; display:flex; gap:10px;">
            <a href="{{ route('admin.pricing.services.index') }}" class="btn {{ !request('category') ? 'primary' : 'sm' }}">All Categories</a>
            <a href="{{ route('admin.pricing.services.index', ['category' => 'seo']) }}" class="btn {{ request('category') === 'seo' ? 'primary' : 'sm' }}">SEO Services</a>
            <a href="{{ route('admin.pricing.services.index', ['category' => 'web']) }}" class="btn {{ request('category') === 'web' ? 'primary' : 'sm' }}">Web Development</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th style="width:120px;">Category</th>
                    <th>Service</th>
                    <th style="width:130px;">Price</th>
                    <th>Model</th>
                    <th style="width:100px;">Order</th>
                    <th style="width:100px;">Status</th>
                    <th style="width:160px;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($services as $item)
                <tr>
                    <td>
                        <span style="display:inline-block; padding:3px 8px; border-radius:999px; font-size:11px; font-weight:800; background:{{ $item->category === 'seo' ? 'rgba(59,130,246,0.1); color:#1d4ed8;' : 'rgba(16,185,129,0.1); color:#047857;' }}">
                            {{ strtoupper($item->category) }}
                        </span>
                    </td>
                    <td><strong>{{ $item->service }}</strong></td>
                    <td>{{ $item->prefix }}{{ $item->price }}{{ $item->per }}</td>
                    <td>{{ $item->model }}</td>
                    <td>{{ $item->sort_order }}</td>
                    <td>{{ $item->is_active ? 'Active' : 'Hidden' }}</td>
                    <td>
                        <a href="{{ route('admin.pricing.services.edit', $item) }}" class="btn sm">Edit</a>
                        <form method="POST" action="{{ route('admin.pricing.services.destroy', $item) }}" style="display:inline">
                            @csrf @method('DELETE')
                            <button class="btn sm danger" onclick="return confirm('Delete this service pricing?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" style="text-align:center; padding:24px; opacity:.7;">No services found. Click "Add Service" to create one.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
