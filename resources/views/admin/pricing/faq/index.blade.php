@extends('layouts.admin')

@section('title','Pricing FAQ')
@section('page_title','Pricing FAQ')
@section('page_subtitle','Manage FAQs shown on pricing page.')

@section('content')

<div class="card">
    <div class="cardHeader">
        <div>
            <h3>FAQs</h3>
            <p>All pricing FAQs</p>
        </div>
        <a href="{{ route('admin.pricing.faq.create') }}" class="btn primary">
            Add FAQ
        </a>
    </div>

    <div class="cardBody">
        <table class="table">
            <thead>
                <tr>
                    <th>Question</th>
                    <th>Order</th>
                    <th width="160">Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($faqs as $faq)
                <tr>
                    <td>{{ $faq->question }}</td>
                    <td>{{ $faq->sort_order }}</td>
                    <td>
                        <a href="{{ route('admin.pricing.faq.edit',$faq) }}" class="btn sm">
                            Edit
                        </a>

                        <form method="POST"
                              action="{{ route('admin.pricing.faq.delete',$faq) }}"
                              style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn sm danger"
                                    onclick="return confirm('Delete this FAQ?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" style="opacity:.6;">No FAQs found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection