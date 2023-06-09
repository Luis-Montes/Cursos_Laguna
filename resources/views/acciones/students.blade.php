@extends('layouts.app')

@section('contenido')

    <?php
        function Matricula(){
            $digitos = '0123456789ABCDEFGHIJKLMNOPQ';
            $longitud = 9;
            $matricula = '';

            for ($i=0; $i < $longitud; $i++) { 
                $matricula .= $digitos[rand(0, strlen($digitos) -1)];
            }

            return $matricula;
        }
        $NuevaMatricula = Matricula();
    ?>



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
                        <a href="{{ route('alumno') }}">Agregar</a>
                    </div>
                </div>
            </div>           
            <!-- Modal -->
            <div class="modal fade modal-xl" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar Nuevo Curso</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="{{ route('estudiantes') }}" method="POST">
                                @csrf
                                    <!-- 2 column grid layout with text inputs for the first and last names -->
                                    <div class="row mb-4">
                                    <div class="col">
                                        <div class="form-outline">
                                        <label class="form-label text-form" for="form6Example1">Nombre Completo</label>    
                                        <input placeholder="Nombre" name="name" type="text" id="form6Example1" class="form-control" />
                                        
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="form-outline">
                                        <label class="form-label text-form" for="form6Example1">Matricula</label>    
                                        <input type="text" name="matricula" id="form6Example2" class="form-control" readonly/ value="<?php echo $NuevaMatricula ?>">
                                        
                                        </div>
                                    </div>
                                    </div>

                                        <div class="row mb-4">
                                        <div class="col">
                                            <div class="form-outline">
                                            <label class="form-label text-form text-form" for="form6Example1">Email</label>    
                                            <input placeholder="email@exaple.com" name="email" type="email" id="form6Example1" class="form-control" />
                                            
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline">
                                            <label class="form-label text-form text-form" for="form6Example1">Telefono</label>    
                                            <input type="numbre" name="telefono" id="form6Example2" class="form-control"/>
                                            
                                            </div>
                                        </div>
                                        </div>                                   
                                
                                    <!-- Text input -->
                                    <div class="row mb-4">
                                        <div class="col">
                                            <div class="form-outline">
                                            <div class="form-outline">
                                                <style>
                                                    .checkbox-item {
                                                        margin-right: 50px;
                                                    }
                                                </style>
                                                <label class="form-label text-form text-form" for="form6Example1">Donde te Enteraste?</label>
                                                <div class="form-outline" style="border: 2px solid gray">
                                                    <label class="checkbox-item">
                                                        <input type="checkbox" name="enterado" value="Facebook">
                                                        Facebook
                                                    </label>
                                                    <label class="checkbox-item">
                                                        <input type="checkbox" name="enterado" value="Instagram">
                                                        Instagram
                                                    </label>
                                                    <label class="checkbox-item">
                                                        <input type="checkbox" name="enterado" value="Twitter">
                                                        Twitter
                                                    </label>
                                                    <label class="checkbox-item">
                                                        <input type="checkbox" name="enterado" value="Google">
                                                        Google
                                                    </label>
                                                    <label class="checkbox-item">
                                                        <input type="checkbox" name="enterado" value="Otro">
                                                        Otro
                                                    </label>
                                                </div>
                                                
                                            </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="form-outline">
                                            <label class="form-label text-form" for="form6Example1">Ocupación</label>    
                                            <input type="numbre" name="ocupacion" id="form6Example2" class="form-control"/>
                                            
                                            </div>
                                        </div>

                                        <div class="row mb-4">
                                            <div class="col">
                                                <div class="form-outline">
                                                <div class="form-outline">
                                                    <label class="form-label text-form" for="form6Example1">Descuentos</label>
                                                    <div class="form-outline" style="border: 2px solid gray">
                                                        <label class="checkbox-item">
                                                            <input type="radio" name="radio" value="Facebook">
                                                            Ninguno
                                                        </label>
                                                        <label class="checkbox-item">
                                                            <input type="radio" name="radio" value="Instagram">
                                                            15%
                                                        </label>
                                                        <label class="checkbox-item">
                                                            <input type="radio" name="radio" value="Twitter">
                                                            20%
                                                        </label>
                                                        <label class="checkbox-item">
                                                            <input type="radio" name="radio" value="Google">
                                                            Linea
                                                        </label><br>
                                                        <br>
                                                        <input type="text">
                                                        <label class="checkbox-item">
                                                            <input type="radio" name="radio" value="Google">
                                                            Promoción
                                                        </label><br>
                                                        <input type="text">
                                                        <label class="checkbox-item">
                                                            <input type="radio" name="radio" value="Google">
                                                            Empresarial
                                                        </label><br>
                                                        <input type="text">
                                                        <label class="checkbox-item">
                                                            <input type="radio" name="radio" value="Google">
                                                            Codigo Promocional
                                                        </label><br>

                                                        <button class="buton float-right">Aplicar</button>

                                                    </div>
                                                    
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-outline">
                                                    <label class="form-label" for="form6Example1">Curso</label>
                                                    <select class="form-control" name="curso" id="cursos">
                        
                                                        @foreach ($cursos as $curso)
                                                            <option value="{{$curso->id}}" data-precio="{{$curso->price}}">{{$curso->name}}</option>
                                                        @endforeach
                                                    </select>


                                                    <label class="form-label" for="form6Example1">Horario</label>
                                                    <select class="form-control" name="horario" id="horarios">
                                                        <option value="vespertino">Por la Tarde</option>
                                                        <option value="matutino">Por la Mañana</option>
                                                    </select>
                                                    <div class="col">
                                                        <div class="form-outline">
                                                            <label class="form-label text-form text-form" for="form6Example1">Precio:</label>
                                                            <input type="text" name="precio" value="3500" id="precio" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                          
                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
                                        <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
                                      </svg> Guardar</button>
                              </form>
                        </div>
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
                        <th scope="col">MATRICULA</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">TELEFONO</th>
                        <th scope="col">CURSO</th>
                        <th scope="col">TURNO</th>
                        <th scope="col">ENTERADO POR</th>
                        <th scope="col">DEUDA</th>
                        </tr>
                    </thead>
                    <tbody>
                         @foreach ($alumnos as $alumno)
                            <tr>
                                <th scope="row" style="color: #666666;">{{$alumno->matricula}}</th>
                                <td> {{$alumno->name}} </td>
                                <td> {{$alumno->email}} </td>
                                <td> {{$alumno->telefono}} </td>
                                <td> {{$alumno->curso->name}} </td>
                                <td> {{$alumno->turno}} </td>
                                <td> {{$alumno->enterado}} </td>
                                <td> ${{$alumno->deuda}} </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                    {{-- {{$data->links('pagination::bootstrap-5')}} --}}
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>


@endsection