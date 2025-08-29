@extends('layouts.dashboard')

@section('title', 'Dashboard')

@section('content')
                <h4>Grafik Orders "create" per DATEL BARU</h4>
                <canvas id="ordersCreateChart" height="480" width="480"></canvas>
@push('styles')
<style>
    .chart-card {
        background: #232e4a;
        border-radius: 12px;
        box-shadow: 0 2px 8px #1e2746;
        padding: 24px 24px 12px 24px;
        margin-bottom: 24px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .chart-card h4 {
        color: #ffd700;
        margin-bottom: 18px;
        font-size: 1.2em;
        font-weight: 600;
        text-align: center;
    }
    #ordersCreateChart {
        background: #1e2746;
        border-radius: 8px;
        box-shadow: 0 1px 4px #232e4a;
        padding: 12px;
        max-width: 100%;
        margin: 0 auto;
        display: block;
    }
</style>
@endpush
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('ordersCreateChart').getContext('2d');
    const chartLabels = @json($chartLabels ?? []);
    const chartValues = @json($chartValues ?? []);
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: chartLabels,
            datasets: [{
                label: 'Jumlah Orders (create) per DATEL BARU',
                data: chartValues,
                backgroundColor: 'rgba(54, 162, 235, 0.7)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                title: { display: true, text: 'Grafik Orders "create" per DATEL BARU' }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>
@endpush
@endsection
