@extends('layouts.admin')

@section('title','Edit Portfolio Platform')
@section('page_title','Edit Portfolio Platform')
@section('page_subtitle','Update name/slug/badge and active state.')

@section('content')

<div class="card" style="margin:0;">
  <div class="cardHeader">
    <div>
      <h3>Edit: {{ $platform->name }}</h3>
      <p>Changes affect portfolio filters + item badges.</p>
    </div>
    <div><a class="btn" href="{{ route('admin.portfolio-platforms.index') }}">Back</a></div>
  </div>

  <div class="cardBody">

    @if(session('success'))
      <div class="alert alert-success" style="margin-bottom:12px;">{{ session('success') }}</div>
    @endif

    @if($errors->any())
      <div class="alert alert-danger" style="margin-bottom:12px;">
        <ul style="margin:0;padding-left:18px;">
          @foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ route('admin.portfolio-platforms.update', $platform) }}">
      @csrf @method('PUT')
      @include('admin.portfolio-platforms._form', ['platform'=>$platform, 'mode'=>'edit'])
    </form>
  </div>
</div>

@endsection
