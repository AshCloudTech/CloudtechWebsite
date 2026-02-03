@php $form = $submission->form; @endphp

<p>Hi {{ $submission->name ?: 'there' }},</p>

@if($form->user_autoreply_body)
    <p>{!! nl2br(e($form->user_autoreply_body)) !!}</p>
@else
    <p>Thanks for contacting us. We’ve received your enquiry and will get back to you shortly.</p>
@endif

<p>Regards,<br>{{ config('app.name') }}</p>
