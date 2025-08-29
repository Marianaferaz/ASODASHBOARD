@extends('layouts.dashboard')

@section('title', 'Add Order')

@section('content')
<div class="user-page">
    <div class="page-header">
        <h2>Add Order</h2>
        <a href="{{ route('orders.index') }}" class="add-user-btn" style="background:#555;">Back</a>
    </div>
    <div class="user-table-container">
        <form action="{{ route('orders.store') }}" method="POST">
            @csrf
            <label>NO</label>
            <input type="text" name="NO" value="{{ old('NO') }}">
            <label>ID_NUMBER</label>
            <input type="text" name="ID_NUMBER" value="{{ old('ID_NUMBER') }}">
            <label>ORDERTYPE</label>
            <input type="text" name="ORDERTYPE" value="{{ old('ORDERTYPE') }}">
            <label>REGIONAL_BARU</label>
            <input type="text" name="REGIONAL_BARU" value="{{ old('REGIONAL_BARU') }}">
            <label>DISTRICT_BARU</label>
            <input type="text" name="DISTRICT_BARU" value="{{ old('DISTRICT_BARU') }}">
            <label>DATEL_BARU</label>
            <input type="text" name="DATEL_BARU" value="{{ old('DATEL_BARU') }}">
            <label>STO</label>
            <input type="text" name="STO" value="{{ old('STO') }}">
            <label>REGIONAL_LAMA</label>
            <input type="text" name="REGIONAL_LAMA" value="{{ old('REGIONAL_LAMA') }}">
            <label>DISTRICT_LAMA</label>
            <input type="text" name="DISTRICT_LAMA" value="{{ old('DISTRICT_LAMA') }}">
            <label>DATEL_LAMA</label>
            <input type="text" name="DATEL_LAMA" value="{{ old('DATEL_LAMA') }}">
            <label>SCORDERNO</label>
            <input type="text" name="SCORDERNO" value="{{ old('SCORDERNO') }}">
            <label>PACKAGE_NAME</label>
            <input type="text" name="PACKAGE_NAME" value="{{ old('PACKAGE_NAME') }}">
            <label>CUSTOMER_NAME</label>
            <input type="text" name="CUSTOMER_NAME" value="{{ old('CUSTOMER_NAME') }}">
            <label>CUSTOMER_ADDRESS</label>
            <input type="text" name="CUSTOMER_ADDRESS" value="{{ old('CUSTOMER_ADDRESS') }}">
            <label>NO_HP</label>
            <input type="text" name="NO_HP" value="{{ old('NO_HP') }}">
            <label>DATECREATED</label>
            <input type="text" name="DATECREATED" value="{{ old('DATECREATED') }}">
            <label>TGL_MANJA</label>
            <input type="text" name="TGL_MANJA" value="{{ old('TGL_MANJA') }}">
            <label>AMCREW</label>
            <input type="text" name="AMCREW" value="{{ old('AMCREW') }}">
            <label>CHIEF_NAME</label>
            <input type="text" name="CHIEF_NAME" value="{{ old('CHIEF_NAME') }}">
            <label>STATUS</label>
            <input type="text" name="STATUS" value="{{ old('STATUS') }}">
            <label>STATUSDATE</label>
            <input type="text" name="STATUSDATE" value="{{ old('STATUSDATE') }}">
            <label>ERRORCODE</label>
            <input type="text" name="ERRORCODE" value="{{ old('ERRORCODE') }}">
            <label>SUBERRORCODE</label>
            <input type="text" name="SUBERRORCODE" value="{{ old('SUBERRORCODE') }}">
            <label>ENGINEERMEMO</label>
            <input type="text" name="ENGINEERMEMO" value="{{ old('ENGINEERMEMO') }}">
            <label>OWNERGROUP</label>
            <input type="text" name="OWNERGROUP" value="{{ old('OWNERGROUP') }}">
            <label>CATATAN_TEKNISI</label>
            <input type="text" name="CATATAN_TEKNISI" value="{{ old('CATATAN_TEKNISI') }}">
            <label>PRODUCT</label>
            <input type="text" name="PRODUCT" value="{{ old('PRODUCT') }}">
            <label>TERRITORY_TIF</label>
            <input type="text" name="TERRITORY_TIF" value="{{ old('TERRITORY_TIF') }}">
            <label>DISTRICT_TIF</label>
            <input type="text" name="DISTRICT_TIF" value="{{ old('DISTRICT_TIF') }}">
            <div class="form-actions">
                <button type="submit" class="submit-btn">Save</button>
                <a href="{{ route('orders.index') }}" class="cancel-btn" style="background:#555;">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
