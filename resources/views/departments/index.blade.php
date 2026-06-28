@extends('layouts.app')

@section('title', 'Départements — HR System')
@section('breadcrumb', 'Départements')

@section('content')

<div class="page-head">
    <div>
        <h1>Départements</h1>
        <p>Gérez les départements de votre entreprise</p>
    </div>
    <a href="{{ route('departments.create') }}" class="btn-primary">
        <i class="ti ti-plus"></i>Nouveau département
    </a>
</div>

{{-- Message succès --}}
@if(session('success'))
    <div style="background:rgba(15,118,110,.15);border:1px solid rgba(94,234,212,.2);border-radius:10px;padding:12px 16px;margin-bottom:18px;color:#5eead4;font-size:13px;display:flex;align-items:center;gap:8px">
        <i class="ti ti-check"></i> {{ session('success') }}
    </div>
@endif

{{-- Table --}}
<div class="card">
    <div class="table-wrap">
        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Statut</th>
                    <th>Créé le</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($departments as $department)
                <tr>
                    <td>{{ $department->id }}</td>
                    <td style="color:#e8f4ff;font-weight:500">{{ $department->name }}</td>
                    <td>{{ $department->description ?? '—' }}</td>
                    <td>
                        @if($department->is_active)
                            <span class="pill pill-on">Actif</span>
                        @else
                            <span class="pill pill-off">Inactif</span>
                        @endif
                    </td>
                    <td>{{ $department->created_at->format('d/m/Y') }}</td>
                    <td>
                        <div style="display:flex;gap:6px">
                            <a href="{{ route('departments.edit', $department) }}" class="btn-secondary" style="padding:5px 10px;font-size:11px">
                                <i class="ti ti-edit"></i>Modifier
                            </a>
                            <form action="{{ route('departments.destroy', $department) }}" method="POST" onsubmit="return confirm('Supprimer ce département ?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" style="background:rgba(220,38,38,.15);color:#fca5a5;border:1px solid rgba(252,165,165,.15);padding:5px 10px;border-radius:8px;font-size:11px;cursor:pointer;display:flex;align-items:center;gap:4px">
                                    <i class="ti ti-trash"></i>Supprimer
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" style="text-align:center;padding:30px;color:rgba(255,255,255,.2)">
                        <i class="ti ti-building" style="font-size:24px;display:block;margin-bottom:8px"></i>
                        Aucun département pour l'instant
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
