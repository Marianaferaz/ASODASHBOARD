<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    @stack('styles')
</head>
<body>
    <div class="dashboard-container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">ASO Analytics</div>
            <ul class="nav-menu">
                <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}"><i class="fas fa-home"></i> Dashboard</a></li>
                <li><a href="{{ route('users.index') }}" class="{{ request()->routeIs('users.*') ? 'active' : '' }}"><i class="fas fa-users"></i> Users</a></li>
                <li><a href="{{ route('orders.index') }}" class="{{ request()->routeIs('orders.*') ? 'active' : '' }}"><i class="fas fa-file-alt"></i> Orders</a></li>
                <li><a href="{{ route('reports.index') }}" class="{{ request()->routeIs('reports.*') ? 'active' : '' }}"><i class="fas fa-chart-bar"></i> Laporan</a></li>
                <li><a href="{{ route('orders.history') }}" class="{{ request()->routeIs('orders.history') ? 'active' : '' }}"><i class="fas fa-history"></i> History</a></li>
            </ul>
            <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" class="logout-btn">Logout</a>
                                                     
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
        </aside>
        <!-- Main Content -->
        <main class="main-content">
            <!-- Header -->
            <header class="main-header">
                <form class="search-bar" action="{{ route('orders.index') }}" method="GET" style="display:flex;align-items:center;gap:6px;">
                    <i class="fas fa-search"></i>
                    <input type="text" name="q" value="{{ request('q') }}" placeholder="Search orders..." style="padding:4px 8px;border-radius:4px;border:1px solid #ccc;min-width:160px;">
                    <button type="submit" style="background:#ffd700;color:#1e2746;border:none;padding:4px 12px;border-radius:4px;cursor:pointer;">Cari</button>
                </form>
                <div class="user-info">
                    <img src="https://ui-avatars.com/api/?name=User" alt="User Avatar" class="user-avatar">
                    <span>{{ Auth::user()->name ?? 'User' }}</span>
                </div>
            </header>
            <!-- Page Content -->
            @yield('content')
        </main>
    </div>
    @stack('scripts')
    <!-- Font Awesome CDN for icons -->
    <script src="https://kit.fontawesome.com/yourkitid.js" crossorigin="anonymous"></script>
</body>
</html>
