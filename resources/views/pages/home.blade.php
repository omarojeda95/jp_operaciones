@extends('layouts.main')

@section('content')
<div class="def-section">
    <div class="container">
        <div class="row">
            <form class="form-inline">
                <div class="form-group">
                    <label for="inputOrigen">Origen</label>
                    <input type="text" class="form-control" id="inputOrigen" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputDestino">Destino</label>
                    <input type="text" class="form-control" id="inputDestino" placeholder="">
                </div>
                <div class="form-group">
                    <label for="inputFecha">Fecha</label>
                    <input type="date" class="form-control" id="inputFecha" placeholder="">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
            </form>
        </div>
    </div>
</div>
@endsection