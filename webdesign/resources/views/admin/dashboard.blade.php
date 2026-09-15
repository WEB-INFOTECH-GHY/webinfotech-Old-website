@extends('admin.template.admin_master')

@section('content')
<div class="page-content">
    <div class="container-fluid">

        <!-- Header + Filter -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 id="dashboard-label">Dashboard Analytics</h4>
            <select id="filter-select" class="form-select w-auto">
                <option value="24hours">Last 24 Hours</option>
                <option value="7days" selected>Last 7 Days</option>
                <option value="30days">Last 30 Days</option>
                <option value="365days">Last 365 Days</option>
                <option value="all">All Time</option>
            </select>
        </div>

        <!-- Total Enquiry Card -->
        <div class="row mb-4">
            <div class="col-md-3">
                <div class="card text-center shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Total Enquiries</h5>
                        <h2 class="text-primary fw-bold" id="total-enquiries">0</h2>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    console.log(document.querySelector("#enquiry-line-chart")); 

$(document).ready(function() {
    let chartOptions = {
        chart: { type: 'line', height: 300, toolbar: { show: false } },
        series: [{ name: 'Enquiries', data: [] }],
        xaxis: { categories: [], labels: { rotate: -45 } },
        stroke: { curve: 'smooth', width: 2 },
        markers: { size: 4 },
        tooltip: { theme: 'light' },
        colors: ['#4e73df']
    };

    let chart = new ApexCharts(document.querySelector("#enquiry-line-chart"), chartOptions);
    chart.render();

    function loadChart(filter = '7days') {
        $.get("{{ route('admin.dashboard.chart') }}", { filter: filter }, function(res) {
            $('#total-enquiries').text(res.totalEnquiries);
            $('#dashboard-label').text("Dashboard Analytics (" + res.label + ")");
            chart.updateOptions({ xaxis: { categories: res.labels } });
            chart.updateSeries([{ name: 'Enquiries', data: res.counts }]);
        });
    }

    // Initial load
    loadChart();

    // Filter change
    $('#filter-select').on('change', function() {
        let filter = $(this).val();
        loadChart(filter);
    });
});
</script>
@endpush
