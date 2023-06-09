@extends('layouts.app')


@section('contenido')
    <div class="container">
        <div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                      <form action="{{ route('cursos') }}" method="GET" class="d-flex">
                        <input type="text" name="search" placeholder="Buscar" class="form-control me-2">
                        <button type="submit" class="btn btn-primary">Buscar</button>
                      </form>
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
                            <form action="{{ route('cursos') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label" >Nombre del Curso</label>
                                    <input required name="name" type="text"  id="name" placeholder="Nombre del Curso" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Dificultad</label>
                                    <input required name="level" type="text" class="form-control" id="level" placeholder="Dficultad">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Duración</label>
                                    <input required name="duration" type="text" class="form-control" id="duration" placeholder="Duración">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Precio</label>
                                    <input required name="price" type="text" class="form-control" id="price" placeholder="Precio">
                                </div>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>

                                    <button type="submit" class="btn btn-primary ">                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
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
                    <table class="table mb-0 miTabla">
                      <thead>
                        <tr>
                          <th scope="col">NOMBRE</th>
                          <th scope="col">NIVEL</th>
                          <th scope="col">DURACIÓN</th>
                          <th scope="col">PRECIO</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($cursos as $curso)
                            <tr>
                                <th scope="row" style="color: #666666;">{{$curso->name}}</th>
                                <td> {{$curso->level}} </td>
                                <td> {{$curso->duration}} HRS </td>
                                <td> ${{$curso->price}} </td>
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

      <script>
        var tabla = document.getElementById("miTabla");
        var filasMostradas = 5; // Número de filas que deseas mostrar
      
        for (var i = 0; i < tabla.rows.length; i++) {
          if (i >= filasMostradas) {
            tabla.rows[i].style.display = "none"; // Oculta las filas adicionales
          }
        }
      </script>
@endsection