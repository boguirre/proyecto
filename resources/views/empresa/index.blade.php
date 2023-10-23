@extends('layouts.panel')
@section('header')
    <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
            <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Información Empresa</h2>
                <div class="breadcrumb-wrapper">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('menu-principal.index') }}">Menu Principal</a>
                        </li>
                        <li class="breadcrumb-item"><a href="">Empresa</a>
                        </li>
                        <li class="breadcrumb-item active">Detalle
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
        <div class="mb-1 breadcrumb-right">
            <div class="dropdown">
                <button
                    class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-float waves-light"
                    type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg
                        xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-grid">
                        <rect x="3" y="3" width="7" height="7"></rect>
                        <rect x="14" y="3" width="7" height="7"></rect>
                        <rect x="14" y="14" width="7" height="7"></rect>
                        <rect x="3" y="14" width="7" height="7"></rect>
                    </svg></button>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><svg
                            xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-check-square me-1">
                            <polyline points="9 11 12 14 22 4"></polyline>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path>
                        </svg><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><svg
                            xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-message-square me-1">
                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                        </svg><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><svg
                            xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-mail me-1">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg><span class="align-middle">Email</span></a><a class="dropdown-item"
                        href="app-calendar.html"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-calendar me-1">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg><span class="align-middle">Calendar</span></a></div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="card">

        <div class="card-body">
            {!! Form::model($empresa, [
                'route' => ['empresa.update', $empresa],
                'method' => 'put',
                'files' => true,
                'class' => 'formulario',
            ]) !!}





            <div class="row">
                <div class="row">

                    <div class="col-md-12">



                        <div class="form-group mb-2">
                            <label class="form-label" for="nombre">NOMBRE DE EMPRESA:</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    placeholder="Ingrese el nombre de la empresa" value="{{ $empresa->nombre }}"
                                    minlength="5" maxlength="11" required>


                            </div>
                            @error('nombre')
                                <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="row">
                            <div id=""class="col-md-4 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">RUC:</label>
                                <input type="tel" class="form-control" id="ruc" name="ruc"
                                    placeholder="Igrese el RUC de la empresa" autocomplete="__away"
                                    value="{{ $empresa->ruc }}">
                            </div>
                            <div id=""class="col-md-8 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">DOMICILIO FISCAL:</label>
                                <input type="text" class="form-control" id="domicilio_fiscal" name="domicilio_fiscal"
                                    placeholder="Ingrese el Domicilio Fiscal" autocomplete="__away"
                                    value="{{ $empresa->domicilio_fiscal }}">
                            </div>

                            <div id=""class="col-md-4 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">GIRO:</label>
                                <input type="text" class="form-control" id="giro" name="giro"
                                    placeholder="ingrese El Giro de la Empresa" autocomplete="__away"
                                    value="{{ $empresa->giro }}">


                            </div>
                            <div class="col-md-4 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">CANTIDAD DE TRABAJADORES:</label>
                                <input type="number" class="form-control" id="cantidad_trabajadores"
                                    name="cantidad_trabajadores" placeholder="Ingrese la Cant. de trabajadores"
                                    value="{{ $empresa->cantidad_trabajadores }}">
                            </div>
                            <div id=""class="col-md-4 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">FECHA LIMITE:</label>
                                <input type="date" class="form-control" id="fecha_limite" name="fecha_limite"
                                    placeholder="Ingrese Fecha Limite Encuesta" autocomplete="__away"
                                    value="{{ $empresa->fecha_limite }}">
                            </div>
                            <div id="descripcion"class="col-md-12 mb-2">
                                <label for="exampleFormControlInput1" class="form-label">DESCRIPCIÓN DE LA
                                    EMPRESA:</label>
                                <textarea class="form-control" name="descripcion" id="" cols="15" rows="2">{{ $empresa->descripcion }}</textarea>
                            </div>

                        </div>

                    </div>





                </div>


            </div>



            <div class="col-12 text-center mt-2 pt-50">
                <button type="submit" class="btn btn-primary me-1" id="btnguardar">Actualizar</button>
                {{-- <a class="btn btn-danger" href="{{ route('empresas.index') }}">
                    Cerrar
                </a> --}}
            </div>
            {!! Form::close() !!}
        </div>

    </div>
@endsection

@section('scripts')
    <script>
        $('.formulario').submit(function(e) {
            e.preventDefault()

            Swal.fire({
                title: 'Estas seguro de actualizar?',
                text: "¡No podrás revertir esto!",
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, Actualizar!',
                cancelButtonText: 'Cancelar',
            }).then((result) => {
                if (result.value) {


                    this.submit()

                }
            })

        })
    </script>

    @if (session('actualizar'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,

            })
            Toast.fire({
                icon: 'success',
                title: 'Se Actualizo Satisfactoriamente!!'
            })
        </script>
    @endif
@endsection
