@extends('layouts.dashboard')

@section('title', 'Laporan Orders')

@push('styles')
<!-- Chart.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endpush

@section('content')
<div class="report-container">
    <h2>Laporan Orders</h2>
    <div class="chart-section" style="max-width:600px;margin:auto;">
        <canvas id="ordersChart"></canvas>
    </div>
    <div class="user-table-container" style="overflow-x:auto;">
        <table class="user-table" style="font-size:12px;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NO</th>
                    <th>ID_NUMBER</th>
                    <th>ORDERTYPE</th>
                    <th>REGIONAL_BARU</th>
                    <th>DISTRICT_BARU</th>
                    <th>DATEL_BARU</th>
                    <th>STO</th>
                    <th>REGIONAL_LAMA</th>
                    <th>DISTRICT_LAMA</th>
                    <th>DATEL_LAMA</th>
                    <th>SCORDERNO</th>
                    <th>PACKAGE_NAME</th>
                    <th>CUSTOMER_NAME</th>
                    <th>CUSTOMER_ADDRESS</th>
                    <th>NO_HP</th>
                    <th>DATECREATED</th>
                    <th>TGL_MANJA</th>
                    <th>AMCREW</th>
                    <th>CHIEF_NAME</th>
                    <th>STATUS</th>
                    <th>STATUSDATE</th>
                    <th>ERRORCODE</th>
                    <th>SUBERRORCODE</th>
                    <th>ENGINEERMEMO</th>
                    <th>OWNERGROUP</th>
                    <th>CATATAN_TEKNISI</th>
                    <th>PRODUCT</th>
                    <th>TERRITORY_TIF</th>
                    <th>DISTRICT_TIF</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->NO }}</td>
                    <td>{{ $order->ID_NUMBER }}</td>
                    <td>{{ $order->ORDERTYPE }}</td>
                    <td>{{ $order->REGIONAL_BARU }}</td>
                    <td>{{ $order->DISTRICT_BARU }}</td>
                    <td>{{ $order->DATEL_BARU }}</td>
                    <td>{{ $order->STO }}</td>
                    <td>{{ $order->REGIONAL_LAMA }}</td>
                    <td>{{ $order->DISTRICT_LAMA }}</td>
                    <td>{{ $order->DATEL_LAMA }}</td>
                    <td>{{ $order->SCORDERNO }}</td>
                    <td>{{ $order->PACKAGE_NAME }}</td>
                    <td>{{ $order->CUSTOMER_NAME }}</td>
                    <td>{{ $order->CUSTOMER_ADDRESS }}</td>
                    <td>{{ $order->NO_HP }}</td>
                    <td>{{ $order->DATECREATED }}</td>
                    <td>{{ $order->TGL_MANJA }}</td>
                    <td>{{ $order->AMCREW }}</td>
                    <td>{{ $order->CHIEF_NAME }}</td>
                    <td>{{ $order->STATUS }}</td>
                    <td>{{ $order->STATUSDATE }}</td>
                    <td>{{ $order->ERRORCODE }}</td>
                    <td>{{ $order->SUBERRORCODE }}</td>
                    <td>{{ $order->ENGINEERMEMO }}</td>
                    <td>{{ $order->OWNERGROUP }}</td>
                    <td>{{ $order->CATATAN_TEKNISI }}</td>
                    <td>{{ $order->PRODUCT }}</td>
                    <td>{{ $order->TERRITORY_TIF }}</td>
                    <td>{{ $order->DISTRICT_TIF }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="pagination-wrapper">
        {{ $orders->links('pagination::bootstrap-4') }}
    </div>
    <div style="margin-top:2rem;text-align:right;">
        <a href="{{ route('reports.export.pdf') }}" class="btn btn-primary">Export to PDF</a>
    </div>
</div>

@push('scripts')
<script>
    const ctx = document.getElementById('ordersChart').getContext('2d');
    const statusLabels = @json(array_keys($statusCounts->toArray()));
    const statusData = @json(array_values($statusCounts->toArray()));
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: statusLabels,
            datasets: [{
                label: 'Jumlah Orders per Status',
                data: statusData,
                backgroundColor: 'rgba(54, 162, 235, 0.5)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                title: { display: true, text: 'Grafik Orders per Status' }
            },
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>
@endpush
@endsection
