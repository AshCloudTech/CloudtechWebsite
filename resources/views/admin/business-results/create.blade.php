@extends(console_layout())

@section('title','Add Business Result')
@section('page_title','Add Business Result')

@section('content')

<form method="POST"
      action="{{ console_route('business-results.store') }}"
      class="card">
    @csrf

    <div class="cardHeader">
        <div>
            <h3>New Result</h3>
            <p>Add a business result card</p>
        </div>
    </div>

    <div class="cardBody">

        <div class="field">
            <label>Business Name</label>
            <input name="business_name" required>
        </div>

        <div class="field">
            <label>Location</label>
            <input name="business_location" required>
        </div>

        <div class="field">
            <label>Campaign Duration</label>
            <input name="campaign_duration" placeholder="3 months campaign" required>
        </div>

        <div class="field">
            <label>Quote</label>
            <textarea name="quote" rows="4" required></textarea>
        </div>

        <div class="field">
            <label>Metrics</label>

            <div id="metrics">
                <div class="metric-row">
                    <input name="metrics[0][label]" placeholder="Metric Label" required>
                    <input name="metrics[0][value]" placeholder="Metric Value" required>
                </div>
            </div>

            <button type="button" class="btn sm" onclick="addMetric()">
                + Add Metric
            </button>
        </div>

        <div class="field">
            <label>
                <input type="checkbox" name="is_active" checked>
                Active
            </label>
        </div>

    </div>

    <div class="cardFooter">
        <button class="btn primary">Save Result</button>
        <a href="{{ console_route('business-results.index') }}" class="btn">Cancel</a>
    </div>
</form>

<script>
let metricIndex = 1;

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
