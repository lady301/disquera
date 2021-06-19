@extends('layouts.app')

@section('content')


<div class="container-fluid">

   <h1>Edición del Artista</h1>

   <div class="card" style="width: 30rem; margin: 30px auto;">

      <div class="card-body">
         <form action="{{url('/Disquera/'.$users->id)}}" method="post" enctype="multipart/form-data" 
         novalidate class="needs-validation">
         @csrf
         {{method_field('PATCH')}}
         @include('Disquera.form')

        </form>
    
    </div>
  </div>

</div>
@endsection