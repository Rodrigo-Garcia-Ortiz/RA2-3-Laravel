@extends('layouts.app')

@section('titulo', 'Catálogo de libros')

@section('contenido')

<h2>Libros registrados</h2>

@if ($libros != null){

<div>
 <table>
     <thead>
         <tr>
             <th>Titulo</th>
             <th>Autor</th>
             <th>Año de publicación</th>

         </tr>
     </thead>
     <tbody>
     @foreach ($libros as $libro)
         <tr>
             <td>{{ $libro->titulo }}</td>
             <td>{{ $libro->autor }}</td>
             <td>{{ $libro->anio_publicacion }}</td>
         </tr>
     @endforeach
     </tbody>
 </table>
</div>

} @else {

    <h4>No hay libros registrados<h4>
}

@endif


@endsection