<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::latest()->get();
        return view('departments.index', compact('departments'));
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:100|unique:departments',
            'description' => 'nullable|string',
            'is_active'   => 'boolean',
        ]);

        Department::create([
            'name'        => $request->name,
            'description' => $request->description,
            'is_active'   => $request->has('is_active'),
        ]);

        return redirect()->route('departments.index')
            ->with('success', 'Département créé avec succès !');
    }

    public function edit(Department $department)
    {
        return view('departments.edit', compact('department'));
    }

    public function update(Request $request, Department $department)
    {
        $request->validate([
            'name'        => 'required|string|max:100|unique:departments,name,' . $department->id,
            'description' => 'nullable|string',
            'is_active'   => 'boolean',
        ]);

        $department->update([
            'name'        => $request->name,
            'description' => $request->description,
            'is_active'   => $request->has('is_active'),
        ]);

        return redirect()->route('departments.index')
            ->with('success', 'Département modifié avec succès !');
    }

    public function destroy(Department $department)
    {
        $department->delete();
        return redirect()->route('departments.index')
            ->with('success', 'Département supprimé avec succès !');
    }
}
