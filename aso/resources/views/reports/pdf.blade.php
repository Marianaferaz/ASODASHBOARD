
@extends('layouts.dashboard')

@section('title', 'Surat Laporan Orders (PDF)')

@section('content')
<div style="max-width:1000px;margin:auto;padding:40px 30px 30px 30px;background:#fff;color:#222;">
    <div style="display:flex;align-items:center;justify-content:space-between;">
        <div style="font-size:1.5em;font-weight:bold;">ASO Analytics</div>
        <div style="text-align:right;">
            <div style="font-size:1.1em;">{{ date('d F Y') }}</div>
            <div style="font-size:1em;">Nomor: 001/LAP/ASO/{{ date('Y') }}</div>
        </div>
    </div>
    <hr style="margin:18px 0;">
    <div style="margin-bottom:18px;">
        <div>Kepada Yth,</div>
        <div style="font-weight:bold;">Pimpinan ASO Analytics</div>
        <div>di Tempat</div>
    </div>
    <div style="margin-bottom:18px;">
        <div>Perihal: <b>Laporan Data Orders</b></div>
    </div>
    <div style="margin-bottom:18px;">
        Dengan hormat,<br>
        Bersama surat ini kami sampaikan laporan data orders sebagai berikut:
    </div>
    <div class="user-table-container" style="overflow-x:auto;">
        <table class="user-table" style="font-size:12px;width:100%;border-collapse:collapse;">
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
    <div style="margin-top:40px;">
        <div>Demikian surat laporan ini kami sampaikan, atas perhatian dan kerjasamanya kami ucapkan terima kasih.</div>
    </div>
    <div style="margin-top:60px;display:flex;justify-content:flex-end;">
        <div style="text-align:center;">
            <div>Hormat Kami,</div>
            <div style="margin-top:60px;font-weight:bold;">ASO Analytics</div>
        </div>
    </div>
</div>
@endsection
