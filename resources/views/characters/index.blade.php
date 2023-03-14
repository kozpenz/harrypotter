@extends('layouts.main')

@section('title', $title)
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">HP karakterek</h1>
            <table class="table table-responsive table-striped">
                <thead>
                    <tr>
                        <th>Név</th>
                        <th>Nem</th>
                        <th>Munka</th>
                        <th>Varázspálca</th>
                        <th>Patronus</th>
                        <th>Faj</th>
                        <th>Dátum</th>
                        <th>Ház</th>
                        <th>Műveletek</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($characters as $character)
                        <tr>
                            <td>{{$character->name}}</td>
                            <td>{{$character->gender}}</td>
                            <td>{{$character->job}}</td>
                            <td>{{$character->wand}}</td>
                            <td>{{$character->patronus}}</td>
                            <td>{{$character->species}}</td>
                            <td>{{$character->birth}} - {{$character->death}}</td>
                            <td>{{$character->house_id}}</td>
                            <td><button type="button" class="btn btn-primary">Megtekint</button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection