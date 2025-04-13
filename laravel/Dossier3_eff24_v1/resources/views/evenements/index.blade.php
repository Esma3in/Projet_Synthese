@extends('layouts.app')
@section('content')


<h1>list evenements :</h1>

    <a href="{{ route('create') }}" >Ajouter un event</a>

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
        @foreach ($evenements as $evenement )
            <tr>
                <td>{{$evenement->theme}}</td>
                <td>{{$evenement->date_debut}}</td>
                <td>{{$evenement->date_fin}}</td>
                <td>{{$evenement->description}}</td>
                <td>{{$evenement->cout_journalier}}</td>
                <td>{{$evenement->expert_id}}
                <td>
                    <a href="/evenements/{{$evenement->id}}">consulter</a>
                    <a href="{{route('evenements.edit',$evenement)}}">edit</a>

                    <form method='post' action='{{route('evenements.destroy',$evenement)}}'>
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete">
                    </form>
                </td>
            </tr>
        @endforeach

    </table>


@endsection
