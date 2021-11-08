@extends('layout.plantilla')
@section('title','Usuarios' . $libro)
@section('contenido')

<br><br><br><br>
<h1 class="text-center text-dark display-4"><strong>Te mostramos los datos del libro.</strong></h1>




        <div class="jumbotron jumbotron-fluid">
        <img src="{{asset('img/1.png')}}" alt="" class="rounded mx-auto d-block" height="60xp" width="60xp">

        <div class="container-fluid">
            <div class="col">
                <div class="row">
            
        <a href="{{route('libros.index', $libro)}}" class="btn btn-primary"> <i class='fas fa-reply-all'>Regresar a la lista de libros</i></a>
            <a href="{{route('libros.edit', $libro)}}" class="btn btn-primary"><i class="far fa-edit"> Editar datos de los libros</i></a>
                </div>
            </div>
        </div>


            <div class="container">                                                               
                <p class="lead">
                <div class="card mt-3">
                    
                    <div class="card-body bg-info" >
                        <p><strong>Titulo del Libro: </strong>{{$libro->titulo}}</p>
                        <p><strong>Autor: </strong>{{$libro->autor}}</p>
                        <p><strong>Editorial: </strong>{{$libro->editorial}}</p>
                        <p><strong>Fecha: </strong>{{$libro->fecha_publicacion}}</p>
                        <p><strong>Numero de paginas: </strong>{{$libro->numero_pagina}}</p>
                    </div>
                </div>
                </p>
    </div>
</div>
@endsection