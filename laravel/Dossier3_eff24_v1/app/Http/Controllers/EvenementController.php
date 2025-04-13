<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Models\Product;
use Illuminate\View\View;
use Illuminate\Http\Request;

class EvenementController extends Controller
{
    public function index(){
        $evenements = Evenement::all();

        return view('evenements.index',compact('evenements'));
    }

    public function show(Evenement $evenement){
        return view('evenements.show',compact('evenement'));
    }

    public function create(){
        return view('evenements.create');
    }

    public function store(){
        $data = request()->validate([
            'theme' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'description' => 'required',
            'cout_journalier' => 'required|decimal:0,2',
        ]);
    
        $newEvenement = Evenement::create($data);
        return redirect()->route('evenements.index');
    }


    public function edit(Evenement $evenement){
        return view('evenements.edit',compact('evenement'));
    }

    public function update(Evenement $evenement){
        $data = request()->validate([
            'theme' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
            'description' => 'required',
            'cout_journalier' => 'required|decimal:0,2',
        ]);
    
        $evenement->update($data);
        return redirect()->route('evenements.index');
    }

    public function destroy(Evenement $evenement){
        $evenement->delete();

        return redirect()->route('evenements.index');
    }
}
