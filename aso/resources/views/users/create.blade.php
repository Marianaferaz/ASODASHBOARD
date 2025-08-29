@extends('layouts.dashboard')

@section('title', 'Add User')

@section('content')
<div class="user-page">
    <div class="page-header">
        <h2>Add User</h2>
        <a href="{{ route('users.index') }}" class="add-user-btn" style="background:#555;">Back</a>
    </div>
    <div class="user-table-container">
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
            <label>Password</label>
            <input type="password" name="password" required>
            <div class="form-actions">
                <button type="submit" class="submit-btn">Save</button>
                <a href="{{ route('users.index') }}" class="cancel-btn" style="background:#555;">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
