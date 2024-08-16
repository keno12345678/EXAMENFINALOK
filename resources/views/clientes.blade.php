@extends('layouts.main')

@section('content')
    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Éxito',
                text: '{{ session('success') }}',
                timer: 3000,
                showConfirmButton: false,
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}',
                timer: 3000,
                showConfirmButton: false,
            });
        </script>
    @endif

    <div class="contenedor" style="background-color: rgb(0, 64, 148)">
        <div class="col-md-12">
            <div class="row text-center content-justify align-items-center" style="height: 75px;">
                <div class="col-md-9">
                    <div class="">
                        <h3 style="color: white">Lista de Clientes</h3>
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: white">
                        <i class="bi bi-plus"></i> Registrar Cliente
                    </button>

                    <!-- Modal -->
                    <div class="modal fade @if ($errors->any()) show @endif" id="exampleModal" tabindex="-1"
                        aria-labelledby="exampleModalLabel" aria-hidden="true"
                        style="@if ($errors->any()) display: block; @endif">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel" style="color: black">Complete el
                                        siguiente formulario</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('web.clientes.store') }}" method="POST">
                                        @csrf
                                        <div class="col-md-12 mb-3">
                                            <div class="row">
                                                <div class="col-md-5" style="color: black">
                                                    <label for="nombres" class="form-label"><b>Nombres</b></label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text"
                                                        class="form-control @error('nombres') is-invalid @enderror"
                                                        id="nombres" name="nombres" value="{{ old('nombres') }}">
                                                    @error('nombres')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="col-md-12 mb-3">
                                            <div class="row">
                                                <div class="col-md-5" style="color: black">
                                                    <label for="email" class="form-label"><b>Email</b></label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="email"
                                                        class="form-control @error('email') is-invalid @enderror"
                                                        id="email" name="email" value="{{ old('email') }}">
                                                    @error('email')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="col-md-12 mb-3">
                                            <div class="row">
                                                <div class="col-md-5" style="color: black">
                                                    <label for="direccion" class="form-label"><b>Dirección</b></label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text"
                                                        class="form-control @error('direccion') is-invalid @enderror"
                                                        id="direccion" name="direccion" value="{{ old('direccion') }}">
                                                    @error('direccion')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <div class="col-md-12 mb-3">
                                            <div class="row">
                                                <div class="col-md-5" style="color: black">
                                                    <label for="celular" class="form-label"><b>Fono</b></label>
                                                </div>
                                                <div class="col-md-7">
                                                    <input type="text"
                                                        class="form-control @error('fono') is-invalid @enderror"
                                                        id="celular" name="fono" value="{{ old('fono') }}">
                                                    @error('fono')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        
                                        <div class="text-center">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"
                                                style="width: 100px">Cancelar</button>
                                            <button type="submit" class="btn btn-primary"
                                                style="width: 100px">Registrar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>



        <table class="table table-striped table-hover">
            <thead class="text-center">
                <tr>
                    <th>Nombres</th>
                    <th>Email</th>
                    <th>Dirección</th>
                    <th>Fono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody class="text-center">
                @foreach ($clientes as $cliente)
                    <tr>
                        <td>{{ $cliente->nombres }}</td>
                        <td>{{ $cliente->email }}</td>
                        <td>{{ $cliente->direccion }}</td>
                        <td>{{ $cliente->fono }}</td>
                        <td class="d-flex justify-content-center align-items-center">
                            <a href="{{ route('web.clientes.show', $cliente->id) }}"
                                class="btn btn-outline-primary btn-sm mx-1">
                                <i class="bi bi-eye-fill"></i>
                            </a>
                            <a href="{{ route('web.clientes.edit', $cliente->id) }}"
                                class="btn btn-outline-secondary btn-sm mx-1">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <form action="{{ route('web.clientes.destroy', $cliente->id) }}" method="POST"
                                class="form-eliminar" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-danger btn-sm mx-1"
                                    onclick="confirmarEliminacion(this)">
                                    <i class="bi bi-archive"></i>
                                </button>
                            </form>

                            <script>
                                function confirmarEliminacion(button) {
                                    Swal.fire({
                                        title: '¿Estás seguro?',
                                        text: "¡No podrás revertir esto!",
                                        icon: 'warning',
                                        showCancelButton: true,
                                        confirmButtonColor: '#3085d6',
                                        cancelButtonColor: '#d33',
                                        confirmButtonText: 'Sí, eliminarlo'
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            button.closest('form').submit();
                                        }
                                    });
                                }
                            </script>

                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                @if ($errors->any())
                    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {
                        keyboard: false,
                        backdrop: 'static'
                    });
                    myModal.show();
                @endif
            });
        </script>


    </div>
@endsection
