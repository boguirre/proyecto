<div class="modal fade" id="editEvent" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered modal-add-event">
        <div class="modal-content">
            <div class="modal-header bg-transparent">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body pb-5 px-sm-5 pt-50">
                <div class="text-center mb-2">
                    <h1 class="mb-1">Editar Pregunta</h1>
                    <p></p>
                </div>


                <form id="editActividad" class="row gy-1 pt-75 formactualizar"
                    action="{{ route('pregunta.update', 2) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12">
                        <div class="row">
                            {{-- <div class="col-md-12 mt-1">
                                <label for="estado_actividad" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="edit_nombre" name="edit_nombre" required>
                            </div> --}}
                            <div class="col-md-12 mt-1">
                                <label for="estado_actividad" class="form-label">Descripción</label>
                                <textarea class="form-control" name="edit_descripcion" id="edit_descripcion" cols="10" rows="2" required></textarea>
                            </div>

                            <div class="col-md-6 mt-1">
                                <label for="estado_actividad" class="form-label">Número de la Pregunta</label>
                                <input type="number" name="edit_cod_num_preg" id="edit_cod_num_preg"
                                    class="form-control" required step="1" min="0">
                            </div>

                            <div class="col-md-6 mt-1 mb-1">
                                <label for="estado_actividad" class="form-label">Sub Dimension</label>
                                <select name="edit_sub_dimension_id" id="edit_sub_dimension_id" class="form-control">
                                    @foreach ($sub_dimensiones as $sub_dimension)
                                        <option value="{{ $sub_dimension->id }}">{{ $sub_dimension->descripcion }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <hr>

                            <label for="estado_actividad" class="form-label">Elegir Tipo de Respuestas:</label>

                            <div class="col-md-6 mt-1">
                                <select name="edit_tipo_r_05_id" id="edit_tipo_r_05_id" class="form-control">
                                    @foreach ($tipo_respuestas as $tipo_respuesta)
                                        <option value="{{ $tipo_respuesta->id }}">
                                            {{ $tipo_respuesta->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="edit_val_r_05" id="edit_val_r_05" class="form-control mt-1"
                                    placeholder="Ingrese el valor de la respuesta" required step="1" min="0">
                            </div>
                            <div class="col-md-6 mt-1">
                                <select name="edit_tipo_r_04_id" id="edit_tipo_r_04_id" class="form-control">
                                    @foreach ($tipo_respuestas as $tipo_respuesta)
                                        <option value="{{ $tipo_respuesta->id }}">
                                            {{ $tipo_respuesta->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="edit_val_r_04" id="edit_val_r_04" class="form-control mt-1"
                                    placeholder="Ingrese el valor de la respuesta" required step="1" min="0">
                            </div>
                            <div class="col-md-6 mt-1">
                                <select name="edit_tipo_r_03_id" id="edit_tipo_r_03_id" class="form-control">
                                    @foreach ($tipo_respuestas as $tipo_respuesta)
                                        <option value="{{ $tipo_respuesta->id }}">
                                            {{ $tipo_respuesta->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="edit_val_r_03" id="edit_val_r_03" class="form-control mt-1"
                                    placeholder="Ingrese el valor de la respuesta" required step="1" min="0">
                            </div>
                            <div class="col-md-6 mt-1">
                                <select name="edit_tipo_r_02_id" id="edit_tipo_r_02_id" class="form-control">
                                    @foreach ($tipo_respuestas as $tipo_respuesta)
                                        <option value="{{ $tipo_respuesta->id }}">
                                            {{ $tipo_respuesta->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="edit_val_r_02" id="edit_val_r_02" class="form-control mt-1"
                                    placeholder="Ingrese el valor de la respuesta" required step="1" min="0">
                            </div>
                            <div class="col-md-6 mt-1">
                                <select name="edit_tipo_r_01_id" id="edit_tipo_r_01_id" class="form-control">
                                    @foreach ($tipo_respuestas as $tipo_respuesta)
                                        <option value="{{ $tipo_respuesta->id }}">
                                            {{ $tipo_respuesta->descripcion }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6">
                                <input type="number" name="edit_val_r_01" id="edit_val_r_01" class="form-control mt-1"
                                placeholder="Ingrese el valor de la respuesta" required step="1" min="0">
                            </div>

                        </div>
                    </div>

                    <div class="col-12 text-center mt-2 pt-50">
                        <button type="submit" class="btn btn-primary me-1" id="btnactualizar">Actualizar</button>
                        <button type="reset" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">
                            Cerrar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
