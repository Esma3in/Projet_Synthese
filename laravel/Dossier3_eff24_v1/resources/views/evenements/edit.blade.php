@extends('layouts.app')

@section('content')

    entrez les donnez d'evenement

    <form method="put" action="{{route('evenements.update',compact('evenement'))}}">
        @csrf
        @method('put')
        <div>
            theme : <input type="text" name="theme" value="{{$evenement->theme}}">
        </div>
        <div>
            date debut <input type="date" name='date_debut' value='{{$evenement->date_debut}}'>
        </div>
        <div>
            date fin <input type="date" name='date_fin' value='{{$evenement->date_debut}}'>
        </div>
        <div>
            description : <input type='text' name='description' value='{{$evenement->description}}'>
        </div>
        <div>
            cout journalier : <input type='text' name='cout_journalier' value='{{$evenement->cout_journalier}}'>
        </div>
        <input type="submit" value="save">
    </form>

@endsection
