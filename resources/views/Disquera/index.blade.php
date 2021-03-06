@extends('layouts.app')
@section('content')

<div class="container-fluid">
<h1>Listado de Artista </h1>

<div style="margin: 28px auto;"></div>

@if(Session::has('msn'))

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>{{(Session::get('msn'))}}</strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">

    <span aria-hidden="true">&times;</span>
  </button>
</div>

@endif
<div class="mb-3">
<a class="btn btn-primary" href="{{url('/Disquera/create')}}" role="button">Nuevo Artista</a>
</div>
<table class="table table-hover table-responsive">
  <thead>
    <tr>
      <th scope="col">imagen</th>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">No Identificacion</th>
      <th scope="col">Email</th>
      <th scope="col">Direccion</th>
      <th scope="col">Teléfono</th>
      <th scope="col" colspan="2">Acciones</th>
   </tr>
  </thead>

  <tbody>
  @foreach($users as $u)
  @if (!is_null($u->Direccion))
    <tr>
      <td><img src="{{asset('storage').'/'.$u->Foto}}" width="80px" class="rounded-circle border border-light rounded-3"></td>
      <th scope="row">{{$u->id}}</th>
      <td>{{$u->Nombre}}</td>
      <td>{{$u->Apellidos}}</td>
      <td>{{$u->Identificacion}}</td>
      <td>{{$u->Email}}</td>
      <td>{{$u->Direccion}}</td>
      <td>{{$u->Telefono}}</td>
      <td>
         <a href="{{url('/Disquera/'.$u->id.'/edit')}}" class="btn btn-warning">Editar</a>
        </td>
          <td>
          @if (!is_null($u->deleted_at))
          <a href="{{url('/Disquera/'.$u->id.'/active')}}" class="btn btn-success">Activar</a>
            @else
            <form action="{{url('/Disquera/'.$u->id)}}" method="post">
            @csrf
            {{method_field('DELETE')}}
            <input type="submit" value="Inactivar"onclick="return confirm
          ('Está seguro que desea Inactivar el reguistro')" class="btn btn-danger">
        </form>
        @endif
           </td>
          <td>
           
      </td>
     </tr>
     @endif
      @endforeach
  </tbody>
</table>
  </div>
</div>


@endsection