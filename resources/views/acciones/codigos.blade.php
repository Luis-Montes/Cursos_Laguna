@extends('layouts.app')


@section('contenido')
    <?php
        function generarClaveAleatoria() {
            $letras = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $numeros = '0123456789';

            $clave = '';

            
            // Generar 3 letras aleatorias
            for ($i = 0; $i < 4; $i++) {
                $clave .= $letras[rand(0, strlen($letras) - 1)];
            }

            // Generar 4 números aleatorios
            for ($i = 0; $i < 3; $i++) {
                $clave .= $numeros[rand(0, strlen($numeros) - 1)];
            }

            return $clave;
        }

        // Ejemplo de uso
        $claveAleatoria = generarClaveAleatoria();
    ?>

    <div class="container">
        {{-- <form action=" {{route('cursos')}}" method="GET">
            <input type="text" name="search" placeholder="Buscar">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>  --}}
        <div>
            <!-- Button trigger modal -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                    <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Agregar
                    </button>
                    </div>
                </div>
            </div>  
                        
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Curso</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('codigos') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label" >Nombre</label>
                                    <input required name="name" type="text"  id="name" placeholder="Nombre" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Codigo</label>
                                    <input readonly required name="code" type="text" class="form-control" id="code" value="<?php echo $claveAleatoria ?>">
                                </div>

                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>

                                    <button type="submit" class="btn btn-primary "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                        <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                                    </svg> Guardar</button>
                                    
                            </form>
                        </div>
                        <div class="modal-footer">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="intro">
        <div class="gradient-custom-1 h-100">
          <div class="mask d-flex align-items-center h-100">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-12">
                  <div class="table-responsive bg-white">
                    <table class="table mb-0">
                      <thead>
                        <tr>
                          <th scope="col">NOMBRE</th>
                          <th scope="col">CODIGO</th>
                          <th scope="col">ACCIÓN</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($codes as $code)
                            <tr>
                                <th scope="row" style="color: #666666;">{{$code->name}}</th>
                                <td> {{$code->code}} </td>
                                <td>ELIMINAR- EDITAR</td>
                            </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection


