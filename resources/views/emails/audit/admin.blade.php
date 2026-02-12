@component('mail::message')
# New Audit Request

**Audit Type:** {{ $lead->audit_type }}  
**Name:** {{ $lead->name }}  
**Email:** {{ $lead->email }}  
**Phone:** {{ $lead->phone ?? '-' }}  

**Reason:**  
{{ $lead->reason ?? '-' }}

**Source Page:** {{ $lead->source_page ?? '-' }}  
**Page URL:** {{ $lead->page_url ?? '-' }}  

**UTM:** {{ $lead->utm_source ?? '-' }} / {{ $lead->utm_medium ?? '-' }} / {{ $lead->utm_campaign ?? '-' }}

Thanks,  
{{ config('app.name') }}
@endcomponent
