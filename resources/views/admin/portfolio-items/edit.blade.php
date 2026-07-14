@extends(console_layout())

@section('title','Edit Portfolio Item')
@section('page_title','Edit Portfolio Item')
@section('page_subtitle','Update content and media for this portfolio project.')

@section('content')

<div class="card" style="margin:0;">
  <div class="cardHeader">
    <div>
      <h3>Edit: {{ $item->title }}</h3>
      <p>Changes reflect immediately on the public portfolio page (if published).</p>
    </div>
    <div><a class="btn" href="{{ console_route('portfolio-items.index') }}">Back</a></div>
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

    <form method="POST" action="{{ console_route('portfolio-items.update', $item) }}" enctype="multipart/form-data">
      @csrf @method('PUT')
      @include('admin.portfolio-items._form', ['item'=>$item,'platforms'=>$platforms,'mode'=>'edit'])
    </form>
  </div>
</div>

@endsection
