@extends('layouts.admin')

@section('title','Add FAQ')
@section('page_title','Add Pricing FAQ')

@section('content')

<form method="POST"
      action="{{ route('admin.pricing.faq.store') }}"
      class="card">
    @csrf

    <div class="cardHeader">
        <div>
            <h3>New FAQ</h3>
            <p>Add a pricing FAQ</p>
        </div>
    </div>

    <div class="cardBody">
        <div class="field">
            <label>Question</label>
            <input name="question" required>
        </div>

        <div class="field">
            <label>Answer</label>
            <textarea name="answer" rows="4" required></textarea>
        </div>

        <div class="field">
            <label>Sort Order</label>
            <input name="sort_order" value="0">
        </div>
    </div>

    <div class="cardFooter">
        <button class="btn primary">Save FAQ</button>
        <a href="{{ route('admin.pricing.faq.index') }}" class="btn">Cancel</a>
    </div>
</form>

@endsection