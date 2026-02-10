@extends('layouts.admin')

@section('title','Business Results')
@section('page_title','Business Results')
@section('page_subtitle','Manage results shown on SEO page.')

@section('content')

<div class="card">
    <div class="cardHeader">
        <div>
            <h3>Results</h3>
            <p>All business result cards</p>
        </div>

        <a href="{{ route('admin.business-results.create') }}" class="btn primary">
            Add Result
        </a>
    </div>

    <div class="cardBody">
        <table class="table">
            <thead>
                <tr>
                    <th>Business</th>
                    <th>Location</th>
                    <th>Order</th>
                    <th>Status</th>
                    <th width="180">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($results as $result)
                <tr>
                    <td>{{ $result->business_name }}</td>
                    <td>{{ $result->business_location }}</td>
                    <td>{{ $result->sort_order }}</td>
                    <td>
                        {{ $result->is_active ? 'Active' : 'Hidden' }}
                    </td>
                    <td>
                        <a href="{{ route('admin.business-results.edit',$result) }}"
                           class="btn sm">
                            Edit
                        </a>

                        <form method="POST"
                              action="{{ route('admin.business-results.destroy',$result) }}"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn sm danger"
                                    onclick="return confirm('Delete this result?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" style="opacity:.6;">No results found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
