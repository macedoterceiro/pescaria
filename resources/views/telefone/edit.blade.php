@extends('layouts.app', ["current" => "telefones"])

@section('content')
<div class="card border">
    <div class="card-body">
        <form action="/contatos/{{$idcon}}/telefones" method="POST">
            @csrf
            <div class="form-group">
                <label for="tel_numero">Numero do Contato</label>
                <input type="text" class="form-control" name="tel_numero" value="{{$tel->tel_numero}}" id="tel_numero" placeholder="{{$tel->tel_numero}}">            
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancelar</button>
        </form>
    </div>
</div>
       
@endsection