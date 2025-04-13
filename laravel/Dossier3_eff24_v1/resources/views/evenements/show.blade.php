@extends('layouts.app')

@section('content')

<h1>evenement {{$evenement->theme}}</h1>

    <table border=1>
        <thead>
            <th>them</th>
            <th>date debut</th>
            <th>date fin</th>
            <th>description</th>
            <th>cout journalier</th>
            <th>expert id</th>
            <th>actions</th>
        </thead>
        <tr>
            <td>{{$evenement->theme}}</td>
            <td>{{$evenement->date_debut}}</td>
            <td>{{$evenement->date_fin}}</td>
            <td>{{$evenement->description}}</td>
            <td>{{$evenement->cout_journalier}}</td>
            <td>{{$evenement->expert_id}}
        </tr>
    </table>

    <h2>list des atelier :</h2>
        <table border=1>
            <thead>
                <th>nom d Atelier</th>
                <th>description d Atelier</th>
            </thead>
            @foreach($evenement->atelier as $atelier)
                <tr>
                    <td>{{$atelier->nomAtelier}}</td>
                    <td>{{$atelier->descriptionAtelier}}</td>
                </tr>
            @endforeach
        </table>

    <a href="{{route('evenements.index')}}">retour</a>


@endsection
