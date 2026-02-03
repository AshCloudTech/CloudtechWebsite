@extends('layouts.admin')

@section('title', 'Edit Case Study')
@section('page_title', 'Edit Case Study')
@section('page_subtitle', 'Update case study content, SEO, media, and dynamic sections.')

@section('content')

    <div class="card" style="margin:0;">
        <div class="cardHeader">
            <div>
                <h3>Edit: {{ $caseStudy->title }}</h3>
                <p>Update fields below. Empty rows will be ignored on the frontend.</p>
            </div>

            <div style="display:flex;gap:8px;flex-wrap:wrap;">
                <a class="btn" href="{{ route('admin.case-studies.index') }}">Back</a>
            </div>
        </div>

        <div class="cardBody">
            @if(session('success'))
                <div class="alert alert-success" style="margin-bottom:12px;">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger" style="margin-bottom:12px;">
                    <ul style="margin:0;padding-left:18px;">
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('admin.case-studies.update', $caseStudy) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                @include('admin.case-studies._form', ['caseStudy' => $caseStudy, 'mode' => 'edit'])
            </form>
        </div>
    </div>

@endsection
