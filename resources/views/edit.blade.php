@extends('layouts.main')

@section('content')
<div class="d-flex justify-content-center align-items-center vh-80">
    <div class="col-md-6">
        <div class="card" style="border-top: 6px solid #074eb9; border-left: 0; border-right: 0; border-bottom: 0;">
            <div class="card-header bg-white">
                <h3 class="card-title text-center">Actualizar datos del cliente</h3>
            </div>

            <div class="card-body">
                <!-- Mensaje general de error -->
                

                <form action="{{ route('web.clientes.update', $cliente->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <!-- Campo Nombres -->
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-md-5" style="color: black">
                                <label for="nombres" class="form-label"><b>Nombres</b></label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="nombres" name="nombres"
                                    value="{{ old('nombres', $cliente->nombres) }}">
                                @error('nombres')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    

                    <!-- Campo Email -->
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-md-5" style="color: black">
                                <label for="email" class="form-label"><b>Email</b></label>
                            </div>
                            <div class="col-md-7">
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ old('email', $cliente->email) }}">
                                @error('email')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    

                    <!-- Campo Dirección -->
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-md-5" style="color: black">
                                <label for="direccion" class="form-label"><b>Dirección</b></label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="direccion" name="direccion"
                                    value="{{ old('direccion', $cliente->direccion) }}">
                                @error('direccion')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    

                    <!-- Campo Fono -->
                    <div class="col-md-12 mb-3">
                        <div class="row">
                            <div class="col-md-5" style="color: black">
                                <label for="fono" class="form-label"><b>Fono</b></label>
                            </div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="fono" name="fono"
                                    value="{{ old('fono', $cliente->fono) }}">
                                @error('fono')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    
                    <div class="text-center">
                        <button type="button" class="btn btn-secondary" style="width: 100px" onclick="history.back()">Cancelar</button>
                        <button type="submit" class="btn btn-primary" style="width: 100px">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
