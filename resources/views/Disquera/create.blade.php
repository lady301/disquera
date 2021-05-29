@extends('layouts.app')

@section('content')


<div class="container-fluid">

   <h1>Registro del Artista</h1>

   <div class="card" style="width: 30rem; margin: 30px auto;">

      <div class="card-body">
         <form action="{{url('/Disquera')}}" method="post">
         @csrf
         @include('Disquera.form')

        </form>
    
    </div>
  </div>

</div>
@endsection