@extends('layouts.dashboard')

@section('title', 'Orders')

@section('content')
<div class="user-page">
    <div class="page-header">
        <h2>Order List</h2>
        <a href="{{ route('orders.create') }}" class="add-user-btn">Add Order</a>
    </div>
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
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
                    <th>Action</th>
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
                    <td class="action-btns">
                        <a href="{{ route('orders.edit', $order) }}" class="edit-btn">Edit</a>
                        <form action="{{ route('orders.destroy', $order) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn" onclick="return confirm('Delete this order?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    <div style="margin-top:20px;">{{ $orders->links('pagination::bootstrap-4') }}</div>
    </div>
</div>
@endsection
