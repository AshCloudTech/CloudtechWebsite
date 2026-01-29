<h2>New enquiry received</h2>

<p><strong>Form:</strong> {{ $submission->form->title }} ({{ $submission->form->key }})</p>
<p><strong>Page:</strong> {{ $submission->source_page }}</p>

<hr>

<p><strong>Name:</strong> {{ $submission->name }}</p>
<p><strong>Email:</strong> {{ $submission->email }}</p>
<p><strong>Phone:</strong> {{ $submission->phone }}</p>
<p><strong>Subject:</strong> {{ $submission->subject }}</p>

<p><strong>Message:</strong></p>
<p>{!! nl2br(e($submission->message)) !!}</p>

@if(!empty($submission->payload))
    <hr>
    <h3>Extra fields</h3>
    <ul>
        @foreach($submission->payload as $k => $v)
            <li><strong>{{ $k }}:</strong> {{ is_array($v) ? json_encode($v) : $v }}</li>
        @endforeach
    </ul>
@endif

<hr>
<p><small>IP: {{ $submission->ip_address }} • UA: {{ $submission->user_agent }}</small></p>
