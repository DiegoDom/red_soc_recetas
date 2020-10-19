@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Recetas</h1>
                @foreach ($recepies as $recepie)
                    <ul>
                        <li>{{ $recepie }}</li>
                    </ul>
                @endforeach
                <br>
                <h2>Categorias</h2>
                @foreach ($categories as $category)
                    <ul>
                        <li>{{ $category }}</li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
@endsection

