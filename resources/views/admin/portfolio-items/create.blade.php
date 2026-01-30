@extends('layouts.admin')

@section('title','Add Portfolio Item')
@section('page_title','Add Portfolio Item')
@section('page_subtitle','Create a new portfolio project.')

@section('content')

<div class="card" style="margin:0;">
  <div class="cardHeader">
    <div>
      <h3>Add Item</h3>
      <p>Optional fields can be left empty — frontend will auto-adjust.</p>
    </div>
    <div><a class="btn" href="{{ route('admin.portfolio-items.index') }}">Back</a></div>
  </div>

  <div class="cardBody">
    @if($errors->any())
      <div class="alert alert-danger" style="margin-bottom:12px;">
        <ul style="margin:0;padding-left:18px;">
          @foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('admin.portfolio-items.store') }}" enctype="multipart/form-data">
      @include('admin.portfolio-items._form', ['item'=>$item,'platforms'=>$platforms,'mode'=>'create'])
    </form>
  </div>
</div>

@endsection
