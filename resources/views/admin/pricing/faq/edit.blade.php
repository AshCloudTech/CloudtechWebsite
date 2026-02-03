@extends('layouts.admin')

@section('title','Edit FAQ')
@section('page_title','Edit Pricing FAQ')

@section('content')

<form method="POST"
      action="{{ route('admin.pricing.faq.update',$faq) }}"
      class="card">
    @csrf
    @method('PUT')

    <div class="cardHeader">
        <div>
            <h3>Edit FAQ</h3>
            <p>Update pricing FAQ</p>
        </div>
    </div>

    <div class="cardBody">
        <div class="field">
            <label>Question</label>
            <input name="question" value="{{ $faq->question }}" required>
        </div>

        <div class="field">
            <label>Answer</label>
            <textarea name="answer" rows="4" required>{{ $faq->answer }}</textarea>
        </div>

        <div class="field">
            <label>Sort Order</label>
            <input name="sort_order" value="{{ $faq->sort_order }}">
        </div>
    </div>

    <div class="cardFooter">
        <button class="btn primary">Update FAQ</button>
        <a href="{{ route('admin.pricing.faq.index') }}" class="btn">Back</a>
    </div>
</form>

@endsection