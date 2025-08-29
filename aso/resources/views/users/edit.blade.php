@extends('layouts.dashboard')

@section('title', 'Edit User')

@section('content')
<div class="user-page">
    <div class="page-header">
        <h2>Edit User</h2>
        <a href="{{ route('users.index') }}" class="add-user-btn" style="background:#555;">Back</a>
    </div>
    <div class="user-table-container">
        <form action="{{ route('users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name', $user->name) }}" required>
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email', $user->email) }}" required>
            <label>Password <small>(Leave blank to keep current)</small></label>
            <input type="password" name="password">
            <div class="form-actions">
                <button type="submit" class="submit-btn">Update</button>
                <a href="{{ route('users.index') }}" class="cancel-btn" style="background:#555;">Cancel</a>
            </div>
        </form>
    </div>
</div>
@endsection
