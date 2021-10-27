@extends('Plantilla')


@section('content')
    <h3 class="text-center mb-3 pt-3">Editar nota {{$notaActualizar->id}}</h3>

    <div class="card text-center">
        <h5 class="card-header">{{$notaActualizar->nombre}}</h5>
        <div class="card-body">
            <form action="{{route('update' , $notaActualizar->id)}}" method="POST">
                @method('PUT')
                @csrf
        
                <div class="form-group">
                    <input type="text" name="nombre" id="nombre" value="{{$notaActualizar->nombre}}" class="form-control">
                </div>
                <div class="form-group">
                    <input type="text" name="descripcion" id="descripcion" value="{{$notaActualizar->descripcion}}" class="form-control">
                </div>
                <button type="submit" class="bt btn-warning btn-block">Editar nota</button>
            </form>      
        </div>
      </div>

    @if (session('update'))
        <div class="alert alert-success mt-3">
            {{session('update')}}
        </div>
    @endif
@endsection