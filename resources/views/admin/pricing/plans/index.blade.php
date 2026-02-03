@extends('layouts.admin')

@section('title', 'Pricing Plans')
@section('page_title', 'Pricing Plans')
@section('page_subtitle', 'Manage pricing plans shown on the website.')

@section('content')
<div class="card">
    <div class="cardHeader">
        <h3>All Plans</h3>
        <a href="{{ route('admin.pricing.plans.create') }}" class="btn primary">Add Plan</a>
    </div>

    <div class="cardBody">
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Key</th>
                    <th>Featured</th>
                    <th>Status</th>
                    <th width="160">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($plans as $plan)
                <tr>
                    <td>{{ $plan->title }}</td>
                    <td><code>{{ $plan->key }}</code></td>
                    <td>{{ $plan->is_featured ? 'Yes' : 'No' }}</td>
                    <td>{{ $plan->is_active ? 'Active' : 'Hidden' }}</td>
                    <td>
                        <a href="{{ route('admin.pricing.plans.edit',$plan) }}" class="btn sm">Edit</a>
                        <form method="POST" action="{{ route('admin.pricing.plans.destroy',$plan) }}" style="display:inline">
                            @csrf @method('DELETE')
                            <button class="btn sm danger" onclick="return confirm('Delete this plan?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection