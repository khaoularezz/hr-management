<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'HR System')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

<div class="wrap">

    {{-- Orbes lumineux --}}
    <div class="orb orb-1"></div>
    <div class="orb orb-2"></div>
    <div class="orb orb-3"></div>

    {{-- Sidebar --}}
    <aside class="sidebar">
        <div class="logo">
            <div class="logo-icon">
                <i class="ti ti-building-community"></i>
            </div>
            <div class="logo-text">HR System</div>
            <div class="logo-sub">Laravel 12 · Docker</div>
        </div>

        <nav class="nav">
            <div class="nav-sec">Principal</div>
            <a href="/" class="ni {{ request()->is('/') ? 'active' : '' }}">
                <i class="ti ti-layout-dashboard"></i>Dashboard
            </a>
            <a href="/employees" class="ni {{ request()->is('employees*') ? 'active' : '' }}">
                <i class="ti ti-users"></i>Employés
            </a>
            <a href="/departments" class="ni {{ request()->is('departments*') ? 'active' : '' }}">
                <i class="ti ti-building"></i>Départements
            </a>
            <a href="/leaves" class="ni {{ request()->is('leaves*') ? 'active' : '' }}">
                <i class="ti ti-calendar-off"></i>Congés
            </a>

            <div class="nav-sec">Administration</div>
            <a href="/roles" class="ni {{ request()->is('roles*') ? 'active' : '' }}">
                <i class="ti ti-shield-lock"></i>Rôles & accès
            </a>
            <a href="/reports" class="ni {{ request()->is('reports*') ? 'active' : '' }}">
                <i class="ti ti-chart-bar"></i>Rapports
            </a>

            <div class="nav-sec">Compte</div>
            <a href="/settings" class="ni {{ request()->is('settings*') ? 'active' : '' }}">
                <i class="ti ti-settings"></i>Paramètres
            </a>
        </nav>

        <div class="sb-foot">
            <div class="user">
                <div class="user-av">AD</div>
                <div>
                    <div class="user-name">Administrateur</div>
                    <div class="user-role">Super Admin</div>
                </div>
            </div>
        </div>
    </aside>

    {{-- Contenu principal --}}
    <div class="main">

        {{-- Topbar --}}
        <div class="topbar">
            <div class="breadcrumb">
                <i class="ti ti-home"></i>
                <span>›</span>
                <strong>@yield('breadcrumb', 'Dashboard')</strong>
            </div>
            <div class="tb-right">
                <div class="ib"><i class="ti ti-search"></i></div>
                <div class="ib"><i class="ti ti-bell"></i></div>
                <div class="ib"><i class="ti ti-settings"></i></div>
            </div>
        </div>

        {{-- Page content --}}
        <div class="content">
            @yield('content')
        </div>

    </div>
</div>

</body>
</html>
