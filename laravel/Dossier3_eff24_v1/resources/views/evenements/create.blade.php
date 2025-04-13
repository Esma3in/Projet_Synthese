@extends('layouts.app')

@section('content')

    entrez les donnez d'evenement

    <form method="Post" action="{{route('evenements.store')}}">
        @csrf
        @method('post')
        <div>
            theme : <input type="text" name="theme">
        </div>
        <div>
            date debut <input type="date" name='date_debut'>
        </div>
        <div>
            date fin <input type="date" name='date_fin'>
        </div>
        <div>
            description : <input type='text' name='description'>
        </div>
        <div>
            cout journalier : <input type='text' name='cout_journalier'>
        </div>
        <input type="submit" value="save">
    </form>

@endsection
