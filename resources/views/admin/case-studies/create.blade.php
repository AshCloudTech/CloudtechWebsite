@extends('layouts.admin')

@section('title', 'Add Case Study')
@section('page_title', 'Add Case Study')
@section('page_subtitle', 'Create a new case study with dynamic sections.')

@section('content')

    <div class="card" style="margin:0;">
        <div class="cardHeader">
            <div>
                <h3>Add Case Study</h3>
                <p>Fill required fields first. Optional fields can be left empty.</p>
            </div>

            <div>
                <a class="btn" href="{{ route('admin.case-studies.index') }}">Back</a>
            </div>
        </div>

        <div class="cardBody">
            @if($errors->any())
                <div class="alert alert-danger" style="margin-bottom:12px;">
                    <ul style="margin:0;padding-left:18px;">
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('admin.case-studies.store') }}" enctype="multipart/form-data">
                @include('admin.case-studies._form', ['caseStudy' => $caseStudy, 'mode' => 'create'])
            </form>
        </div>
    </div>

@endsection
