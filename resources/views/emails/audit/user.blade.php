@component('mail::message')
# Thanks {{ $lead->name }} 👋

We’ve received your **{{ $lead->audit_type }}** audit request.  
Our team will contact you soon with the next steps.

If you want to add more info, just reply to this email.

Thanks,  
{{ config('app.name') }}
@endcomponent
