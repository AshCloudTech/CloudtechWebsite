@extends(console_layout())

@section('title','Add Portfolio Platform')
@section('page_title','Add Portfolio Platform')
@section('page_subtitle','Creates a new platform filter for the public portfolio page.')

@section('content')

<div class="card" style="margin:0;">
  <div class="cardHeader">
    <div>
      <h3>Add Platform</h3>
      <p>Platforms appear as filter tabs (e.g. WordPress, Wix, GoDaddy).</p>
    </div>
    <div><a class="btn" href="{{ console_route('portfolio-platforms.index') }}">Back</a></div>
  </div>

  <div class="cardBody">
    @if($errors->any())
      <div class="alert alert-danger" style="margin-bottom:12px;">
        <ul style="margin:0;padding-left:18px;">
          @foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach
        </ul>
      </div>
    @endif

    <form method="POST" action="{{ console_route('portfolio-platforms.store') }}">
      @include('admin.portfolio-platforms._form', ['platform'=>$platform, 'mode'=>'create'])
    </form>
  </div>
</div>

@endsection
