@extends('layouts.dashboard')

@section('title', 'Order History')

@section('content')
<div class="user-page">
    <div class="page-header">
        <h2>Order History (Deleted Orders)</h2>
    </div>
    @if(session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
    @endif
    <div class="user-table-container" style="overflow-x:auto;">
        <table class="user-table" style="font-size:12px;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID_NUMBER</th>
                    <th>CUSTOMER_NAME</th>
                    <th>STATUS</th>
                    <th>Deleted At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->ID_NUMBER }}</td>
                    <td>{{ $order->CUSTOMER_NAME }}</td>
                    <td>{{ $order->STATUS }}</td>
                    <td>{{ $order->deleted_at }}</td>
                    <td class="action-btns">
                        <form action="{{ route('orders.history.restore', $order->id) }}" method="POST" style="display:inline;">
                            @csrf
                            <button type="submit" class="edit-btn">Restore</button>
                        </form>
                        <form action="{{ route('orders.history.forceDelete', $order->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-btn" onclick="return confirm('Permanently delete this order?')">Delete Permanently</button>
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
