@extends('layouts.main')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-80">
    <div class="col-md-6">
        <div class="card" style="border-top: 6px solid #074eb9; border-left: 0; border-right: 0; border-bottom: 0;">
            <div class="card-header bg-white " >
                <h3 class="card-title  text-center " >Detalles del cliente</h3>
            </div>

            <div class="card-body">
                <div class="col-md-12 mb-3">
                    <div class="row">
                        <div class="col-md-5" style="color: black">
                            <label for="nombres" class="form-label"><b>Nombres</b></label>
                        </div>
                        <div class="col-md-7">
                            <label for="">{{$cliente->nombres}}</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="row">
                        <div class="col-md-5" style="color: black">
                            <label for="email" class="form-label"><b>Email</b></label>
                        </div>
                        <div class="col-md-7">
                            <label for="">{{$cliente->email}}</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="row">
                        <div class="col-md-5" style="color: black">
                            <label for="direccion" class="form-label"><b>Dirección</b></label>
                        </div>
                        <div class="col-md-7">
                            <label for="">{{$cliente->direccion}}</label>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="row">
                        <div class="col-md-5" style="color: black">
                            <label for="celular" class="form-label"><b>Fono</b></label>
                        </div>
                        <div class="col-md-7">
                            <label for="">{{$cliente->fono}}</label>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="button" class="btn btn-secondary" style="width: 150px" onclick="history.back()">volver</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
