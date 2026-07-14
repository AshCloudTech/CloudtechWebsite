@extends(console_layout())

@section('title', 'Edit Contact Form')
@section('page_title', 'Edit Contact Form')
@section('page_subtitle', 'Update recipients and behavior.')

@section('content')
    <form method="POST" action="{{ console_route('settings.contact-forms.update', $contactForm) }}">
        @csrf
        @method('PUT')
        @include('admin.settings.contact-forms._form', ['contactForm' => $contactForm])
        <div style="margin-top:14px;" class="btnRow">
            <button class="btn primary" type="submit">Save</button>
            <a class="btn" href="{{ console_route('settings.contact-forms.index') }}">Cancel</a>
        </div>
    </form>
@endsection
