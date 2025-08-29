@php
    $tgl = date('d F Y');
    $nomor = '001/LAP/ASO/' . date('Y');
@endphp
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Surat Laporan Orders (PDF)</title>
    <style>
        body { font-family: Arial, sans-serif; color: #222; }
        .header { display: flex; justify-content: space-between; align-items: center; }
        .header .title { font-size: 1.5em; font-weight: bold; }
        .header .meta { text-align: right; }
        .meta div { font-size: 1em; }
        hr { margin: 18px 0; }
        .section { margin-bottom: 18px; }
        table { width: 100%; border-collapse: collapse; font-size: 12px; }
        th, td { border: 1px solid #333; padding: 4px 6px; }
        th { background: #f2f2f2; }
        .footer { margin-top: 40px; }
        .ttd { margin-top: 60px; display: flex; justify-content: flex-end; }
        .ttd-inner { text-align: center; }
        .ttd-inner .jabatan { margin-top: 60px; font-weight: bold; }
    </style>
</head>
<body>
    <div class="header">
        <div class="title">ASO Analytics</div>
        <div class="meta">
            <div>{{ $tgl }}</div>
            <div>Nomor: {{ $nomor }}</div>
        </div>
    </div>
    <hr>
    <div class="section">
        <div>Kepada Yth,</div>
        <div style="font-weight:bold;">Pimpinan ASO Analytics</div>
        <div>di Tempat</div>
    </div>
    <div class="section">
        <div>Perihal: <b>Laporan Data Orders</b></div>
    </div>
    <div class="section">
        Dengan hormat,<br>
        Bersama surat ini kami sampaikan laporan data orders sebagai berikut:
    </div>
    <table>
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
    <div class="footer">
        <div>Demikian surat laporan ini kami sampaikan, atas perhatian dan kerjasamanya kami ucapkan terima kasih.</div>
    </div>
    <div class="ttd">
        <div class="ttd-inner">
            <div>Hormat Kami,</div>
            <div class="jabatan">ASO Analytics</div>
        </div>
    </div>
</body>
</html>
