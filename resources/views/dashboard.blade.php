@extends('layouts.app')

@section('title', 'Dashboard — HR System')
@section('breadcrumb', 'Dashboard')

@section('content')

<div class="page-head">
    <div>
        <h1>Bonjour, Administrateur</h1>
        <p>{{ now()->locale('fr')->isoFormat('dddd D MMMM YYYY') }} · Système opérationnel</p>
    </div>
    <a href="/employees/create" class="btn-primary">
        <i class="ti ti-plus"></i>Nouvel employé
    </a>
</div>

{{-- Statistiques --}}
<div class="stats">
    <div class="stat">
        <div class="stat-glow" style="background:linear-gradient(90deg,transparent,rgba(30,80,200,.6),transparent)"></div>
        <div class="stat-lbl">Employés</div>
        <div class="stat-val">{{ $total_employees }}</div>
        <div class="stat-sub s-blue"><i class="ti ti-users" style="font-size:10px"></i>Total</div>
    </div>
    <div class="stat">
        <div class="stat-glow" style="background:linear-gradient(90deg,transparent,rgba(14,165,233,.5),transparent)"></div>
        <div class="stat-lbl">Départements</div>
        <div class="stat-val">{{ $total_departments }}</div>
        <div class="stat-sub s-sky"><i class="ti ti-building" style="font-size:10px"></i>Actifs</div>
    </div>
    <div class="stat">
        <div class="stat-glow" style="background:linear-gradient(90deg,transparent,rgba(180,140,0,.5),transparent)"></div>
        <div class="stat-lbl">Congés en attente</div>
        <div class="stat-val">0</div>
        <div class="stat-sub s-amber"><i class="ti ti-clock" style="font-size:10px"></i>À valider</div>
    </div>
    <div class="stat">
        <div class="stat-glow" style="background:linear-gradient(90deg,transparent,rgba(15,118,110,.5),transparent)"></div>
        <div class="stat-lbl">Présents</div>
        <div class="stat-val">0</div>
        <div class="stat-sub s-teal"><i class="ti ti-check" style="font-size:10px"></i>Aujourd'hui</div>
    </div>
</div>

{{-- Cartes --}}
<div class="row-2">
    <div class="card">
        <div class="card-head">
            <h2>Employés récents</h2>
            <a href="/employees">Voir tout →</a>
        </div>
        <p style="color:rgba(255,255,255,.25);font-size:12px;text-align:center;padding:20px 0">
            <i class="ti ti-users" style="font-size:24px;display:block;margin-bottom:8px;opacity:.3"></i>
            Aucun employé pour l'instant
        </p>
    </div>

    <div class="card">
        <div class="card-head">
            <h2>Départements</h2>
            <a href="/departments">Gérer →</a>
        </div>
        <p style="color:rgba(255,255,255,.25);font-size:12px;text-align:center;padding:20px 0">
            <i class="ti ti-building" style="font-size:24px;display:block;margin-bottom:8px;opacity:.3"></i>
            Aucun département pour l'instant
        </p>
    </div>
</div>

@endsection
