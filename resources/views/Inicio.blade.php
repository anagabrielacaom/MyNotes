@extends('Plantilla')
@section('content')
    <div class="row">
        <div class="col-md-7">
            <div class="table-responsive">
                <table class="table">
                <caption> Esta tabla contiene la información de las notas almacenadas </caption>
                    <tr>
                        <th id="idNota">Id</th>
                        <th id="Nom">Nombre</th>
                        <th id="Desc">Descripción</th>
                        <th id="Acc">Acciones</th>
                    </tr>
                    @foreach ($notas as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td>
                                <a href="{{route('editar' , $item->id)}}"class="btn btn-success btn-warning">Editar</a>
                                <form action="{{route('eliminar' , $item->id)}}" method="POST" class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger" >Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
                @if (session('eliminar'))
                    <div class="alert alert-success mt-3">
                        {{session('eliminar')}}
                    </div>
                @endif
                {{$notas->links() }}
              </div>
        </div>

        {{-- Formulario para ingresar notas y su descripción --}}
        <div class="col-md-5">
            <h3 class="text-center mb-4">Agregar Nota</h3>
            <form action="{{route('store')}}" method="POST">
                @csrf

                <div class="form-group">
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{old('nombre')}}" placeholder="Nombre de la nota" required>
                </div>
                <div class="form-group">
                    <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{old('descripcion')}}" placeholder="Descripción de la nota" required>
                </div>
                <button type="submit" class="btn btn-success btn-block">Enviar nota</button>
            </form>

            @if (session('agregar'))
                <div class="alert alert-success mt-3">
                    {{session('agregar')}}
                </div>
            @endif
        </div>
    </div>
@endsection
