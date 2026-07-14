@extends(console_layout())

@section('title','Edit Business Result')
@section('page_title','Edit Business Result')

@section('content')

<form method="POST"
      action="{{ console_route('business-results.update',$businessResult) }}"
      class="card">
    @csrf
    @method('PUT')

    <div class="cardHeader">
        <div>
            <h3>Edit Result</h3>
            <p>Update business result card</p>
        </div>
    </div>

    <div class="cardBody">

        <div class="field">
            <label>Business Name</label>
            <input name="business_name"
                   value="{{ $businessResult->business_name }}" required>
        </div>

        <div class="field">
            <label>Location</label>
            <input name="business_location"
                   value="{{ $businessResult->business_location }}" required>
        </div>

        <div class="field">
            <label>Campaign Duration</label>
            <input name="campaign_duration"
                   value="{{ $businessResult->campaign_duration }}" required>
        </div>

        <div class="field">
            <label>Quote</label>
            <textarea name="quote" rows="4" required>{{ $businessResult->quote }}</textarea>
        </div>

        <div class="field">
            <label>Metrics</label>

            <div id="metrics">
                @foreach($businessResult->metrics as $i => $metric)
                    <div class="metric-row">
                        <input name="metrics[{{ $i }}][label]"
                               value="{{ $metric['label'] }}" required>
                        <input name="metrics[{{ $i }}][value]"
                               value="{{ $metric['value'] }}" required>
                    </div>
                @endforeach
            </div>

            <button type="button" class="btn sm" onclick="addMetric()">
                + Add Metric
            </button>
        </div>

        <div class="field">
            <label>
                <input type="checkbox" name="is_active"
                       {{ $businessResult->is_active ? 'checked' : '' }}>
                Active
            </label>
        </div>

    </div>

    <div class="cardFooter">
        <button class="btn primary">Update Result</button>
        <a href="{{ console_route('business-results.index') }}" class="btn">Back</a>
    </div>
</form>

<script>
let metricIndex = {{ count($businessResult->metrics) }};

function addMetric() {
    const wrapper = document.getElementById('metrics');

    wrapper.insertAdjacentHTML('beforeend', `
        <div class="metric-row">
            <input name="metrics[${metricIndex}][label]" placeholder="Metric Label" required>
            <input name="metrics[${metricIndex}][value]" placeholder="Metric Value" required>
        </div>
    `);

    metricIndex++;
}
</script>

@endsection
