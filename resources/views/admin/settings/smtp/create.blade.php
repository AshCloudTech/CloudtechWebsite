@extends(console_layout())

@section('title', 'Add SMTP')
@section('page_title', 'Add SMTP')
@section('page_subtitle', 'Create a new SMTP mailer configuration.')

@section('content')
    <form method="POST" action="{{ console_route('settings.smtp.store') }}">
        @csrf

        @include('admin.settings.smtp._form', ['smtp' => null])

        <div style="margin-top:14px;" class="btnRow">
            <button class="btn primary" type="submit">Save</button>
            <a class="btn" href="{{ console_route('settings.smtp.index') }}">Cancel</a>
        </div>
    </form>
@endsection
