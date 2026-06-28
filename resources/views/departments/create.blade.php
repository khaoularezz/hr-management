@extends('layouts.app')

@section('title', 'Nouveau département — HR System')
@section('breadcrumb', 'Départements / Nouveau')

@section('content')

<div class="page-head">
    <div>
        <h1>Nouveau département</h1>
        <p>Remplissez les informations du département</p>
    </div>
    <a href="{{ route('departments.index') }}" class="btn-secondary">
        <i class="ti ti-arrow-left"></i>Retour
    </a>
</div>

<div style="max-width:600px">
    <div class="card">
        <form action="{{ route('departments.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label class="form-label">Nom du département *</label>
                <input
                    type="text"
                    name="name"
                    class="form-control"
                    placeholder="ex: Développement"
                    value="{{ old('name') }}"
                >
                @error('name')
                    <p style="color:#fca5a5;font-size:11px;margin-top:4px">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label class="form-label">Description</label>
                <textarea
                    name="description"
                    class="form-control"
                    rows="3"
                    placeholder="Description du département..."
                >{{ old('description') }}</textarea>
                @error('description')
                    <p style="color:#fca5a5;font-size:11px;margin-top:4px">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label style="display:flex;align-items:center;gap:8px;cursor:pointer">
                    <input
                        type="checkbox"
                        name="is_active"
                        value="1"
                        checked
                        style="width:16px;height:16px;accent-color:#1e50c8"
                    >
                    <span class="form-label" style="margin:0">Département actif</span>
                </label>
            </div>

            <div style="display:flex;gap:10px;margin-top:20px">
                <button type="submit" class="btn-primary">
                    <i class="ti ti-check"></i>Créer le département
                </button>
                <a href="{{ route('departments.index') }}" class="btn-secondary">
                    Annuler
                </a>
            </div>

        </form>
    </div>
</div>

@endsection
