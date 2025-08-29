@extends('layouts.dashboard')

@section('title', 'Edit Order')

@section('content')
<div class="user-page">
    <div class="page-header">
        <h2>Edit Order</h2>
        <a href="{{ route('orders.index') }}" class="add-user-btn" style="background:#555;">Back</a>
    </div>
    <div class="user-table-container">
        <form action="{{ route('orders.update', $order) }}" method="POST">
            @csrf
            @method('PUT')
            <label>NO</label>
            <input type="text" name="NO" value="{{ old('NO', $order->NO) }}">
            <label>ID_NUMBER</label>
            <input type="text" name="ID_NUMBER" value="{{ old('ID_NUMBER', $order->ID_NUMBER) }}">
            <label>ORDERTYPE</label>
            <input type="text" name="ORDERTYPE" value="{{ old('ORDERTYPE', $order->ORDERTYPE) }}">
            <label>REGIONAL_BARU</label>
            <input type="text" name="REGIONAL_BARU" value="{{ old('REGIONAL_BARU', $order->REGIONAL_BARU) }}">
            <label>DISTRICT_BARU</label>
            <input type="text" name="DISTRICT_BARU" value="{{ old('DISTRICT_BARU', $order->DISTRICT_BARU) }}">
            <label>DATEL_BARU</label>
            <input type="text" name="DATEL_BARU" value="{{ old('DATEL_BARU', $order->DATEL_BARU) }}">
            <label>STO</label>
            <input type="text" name="STO" value="{{ old('STO', $order->STO) }}">
            <label>REGIONAL_LAMA</label>
            <input type="text" name="REGIONAL_LAMA" value="{{ old('REGIONAL_LAMA', $order->REGIONAL_LAMA) }}">
            <label>DISTRICT_LAMA</label>
            <input type="text" name="DISTRICT_LAMA" value="{{ old('DISTRICT_LAMA', $order->DISTRICT_LAMA) }}">
            <label>DATEL_LAMA</label>
            <input type="text" name="DATEL_LAMA" value="{{ old('DATEL_LAMA', $order->DATEL_LAMA) }}">
            <label>SCORDERNO</label>
            <input type="text" name="SCORDERNO" value="{{ old('SCORDERNO', $order->SCORDERNO) }}">
            <label>PACKAGE_NAME</label>
            <input type="text" name="PACKAGE_NAME" value="{{ old('PACKAGE_NAME', $order->PACKAGE_NAME) }}">
            <label>CUSTOMER_NAME</label>
            <input type="text" name="CUSTOMER_NAME" value="{{ old('CUSTOMER_NAME', $order->CUSTOMER_NAME) }}">
            <label>CUSTOMER_ADDRESS</label>
            <input type="text" name="CUSTOMER_ADDRESS" value="{{ old('CUSTOMER_ADDRESS', $order->CUSTOMER_ADDRESS) }}">
            <label>NO_HP</label>
            <input type="text" name="NO_HP" value="{{ old('NO_HP', $order->NO_HP) }}">
            <label>DATECREATED</label>
            <input type="text" name="DATECREATED" value="{{ old('DATECREATED', $order->DATECREATED) }}">
            <label>TGL_MANJA</label>
            <input type="text" name="TGL_MANJA" value="{{ old('TGL_MANJA', $order->TGL_MANJA) }}">
            <label>AMCREW</label>
            <input type="text" name="AMCREW" value="{{ old('AMCREW', $order->AMCREW) }}">
            <label>CHIEF_NAME</label>
            <input type="text" name="CHIEF_NAME" value="{{ old('CHIEF_NAME', $order->CHIEF_NAME) }}">
            <label>STATUS</label>
            <input type="text" name="STATUS" value="{{ old('STATUS', $order->STATUS) }}">
            <label>STATUSDATE</label>
            <input type="text" name="STATUSDATE" value="{{ old('STATUSDATE', $order->STATUSDATE) }}">
            <label>ERRORCODE</label>
            <input type="text" name="ERRORCODE" value="{{ old('ERRORCODE', $order->ERRORCODE) }}">
            <label>SUBERRORCODE</label>
            <input type="text" name="SUBERRORCODE" value="{{ old('SUBERRORCODE', $order->SUBERRORCODE) }}">
            <label>ENGINEERMEMO</label>
            <input type="text" name="ENGINEERMEMO" value="{{ old('ENGINEERMEMO', $order->ENGINEERMEMO) }}">
            <label>OWNERGROUP</label>
            <input type="text" name="OWNERGROUP" value="{{ old('OWNERGROUP', $order->OWNERGROUP) }}">
            <label>CATATAN_TEKNISI</label>
            <input type="text" name="CATATAN_TEKNISI" value="{{ old('CATATAN_TEKNISI', $order->CATATAN_TEKNISI) }}">
            <label>PRODUCT</label>
            <input type="text" name="PRODUCT" value="{{ old('PRODUCT', $order->PRODUCT) }}">
            <label>TERRITORY_TIF</label>
            <input type="text" name="TERRITORY_TIF" value="{{ old('TERRITORY_TIF', $order->TERRITORY_TIF) }}">
            <label>DISTRICT_TIF</label>
            <input type="text" name="DISTRICT_TIF" value="{{ old('DISTRICT_TIF', $order->DISTRICT_TIF) }}">
            <div class="form-actions">
                <button type="submit" class="submit-btn">Update</button>
                <a href="{{ route('orders.index') }}" class="cancel-btn" style="background:#555;">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
