<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBusinesspersonRequest;
use App\Models\Businessperson;
use Illuminate\Http\Request;

class BusinesspersonController extends Controller
{
    public function index(Request $request)
    {
        $people = Businessperson::all();
        $table = Businessperson::orderBy('created_at', 'DESC')->paginate(5);
        return view('main', compact('table', 'people'))->with('i', ($request->input('page', 1) - 1) * 5);
    }

    public function store(CreateBusinesspersonRequest $request)
    {
        Businessperson::create($request->all());
        session()->flash('success', 'Registro criado com sucesso!');
        return redirect(route('main.index'));
    }

    public function show($id)
    {
        return view('show', ['person' => Businessperson::findOrFail($id)]);
    }

    public function destroy(Businessperson $businessperson)
    {
        $businessperson->delete();
        session()->flash('success', 'Registro excluído com sucesso!');
        return redirect(route('main.index'));
    }

}
