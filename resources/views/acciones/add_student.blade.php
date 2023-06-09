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


    <form action="{{route('alumno')}}" method="POST">
        @csrf
        <div class="form-outline">
            <div class="d-flex justify-content-between">
                <div class="form-group flex-grow-1">
                  <label class="form-label text-form" for="form6Example1">Nombre Completo</label>    
                  <input placeholder="Nombre" name="name" type="text" id="form6Example1" class="form-control" /> 
                </div>
                
                <div class="form-group flex-shrink-0">
                  <label class="form-label text-form" for="form6Example2">Matricula</label>    
                  <input readonly placeholder="Matricula" name="matricula" type="text" id="form6Example2" class="form-control" value="<?php echo $NuevaMatricula ?>" />
                </div>
              
                <div class="form-group flex-shrink-0">
                  <label class="form-label text-form" for="form6Example3">Edad</label>    
                  <input placeholder="" name="edad" type="text" id="form6Example3" class="form-control" value="" />
                </div>
              </div>
              
              
              

            <div class="row">
            {{-- Informacion Personal --}}
                <div class="col-md-6">
                    <label class="form-label text-form" for="form6Example1">Ocupación</label>    
                    <input placeholder="" name="ocupacion" type="text" id="form6Example1" class="form-control" />
                </div>
                
                <div class="col-md-6">
                    <label class="form-label text-form" for="form6Example1">Telefono</label>    
                    <input placeholder="" name="telefono" type="text" id="form6Example1" class="form-control" />
                </div>

                <div class="col-md-6">
                    <label class="form-label text-form" for="form6Example1">Email</label>    
                    <input placeholder="" name="email" type="email" id="form6Example1" class="form-control" />
                </div>
            </div>

            <br>

            <div style="border: 1px solid #ccc; padding: 10px;">
                <div class="check">
                  <label class="checkbox-item"><input type="checkbox" name="enterado" value="Facebook">Facebook</label>
                  <label class="checkbox-item"><input type="checkbox" name="enterado" value="Twitter">Twitter</label>
                  <label class="checkbox-item"><input type="checkbox" name="enterado" value="Instagram">Instagram</label>
                  <label class="checkbox-item"><input type="checkbox" name="enterado" value="Google">Google</label>
                  <label class="checkbox-item"><input type="checkbox" name="enterado" value="Amigos">Amigos</label>
                  <label class="checkbox-item"><input type="checkbox" name="enterado" value="Otro">Otro</label>
                </div>
            </div>

            <div class="form-outline">
                <label class="form-label text-form text-form" for="form6Example1">Curso</label>
                <select class="form-control" name="curso" id="cursos">

                    @foreach ($cursos as $curso)
                     <!--aqui quedo tal cual como lo tenias con el value que sea igual al ID -->
                        <option value="{{$curso->id}}" data-precio="{{$curso->price}}">{{$curso->name}}</option>
                    @endforeach
                </select>


                <label class="form-label text-form text-form" for="form6Example1">Horario</label>
                <select class="form-control" name="horario" id="horarios">
                    <option value="vespertino">Por la Tarde</option>
                    <option value="matutino">Por la Mañana</option>
                </select>
                <div class="col">
                    <label class="form-label text-form text-form" for="form6Example1">Precio:</label>
                    <div class="form-outline">
                        
                        <input id="idprecio" type="text" name="precio" value="{{$cursos[0]['price']}}" id="precio" readonly>
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>

                    <!--aqui quedo tal cual como lo tenias con el value que sea igual al ID -->
                    //aqui fue donde empezo la magia amigo
                    $(document).ready(function(){
                        //converti tu arreglo de cursos a JSON para poder ecorrerlo y comparar datos
                         var cursos = @json($cursos);

                        $('#cursos').change(function(){
                            //una vez seleccionas algo entra en esta funcion y aqui ya tienes tu valor
                            // del ID y ahora si puedes usar la funcion find 

                            var precioSeleccionado = $(this).val();

                            // aqui creas una variable que tome el dato de esa busqueda y que sea igual y lo retornas 
                            var seleccion = cursos.find(function(elemento){
                                return elemento.id == precioSeleccionado
                            });
                            if(seleccion){

                                //aqui se lo mandas al input amigo y YYAAAAA.... 
                                $('#idprecio').val(seleccion.price);
                            }                                          
                        });
                    });
                </script>
            </div>
              


            <div class="row">
                <div style="border: 1px solid #ccc; padding: 10px;">
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
                                        <input type="radio" name="radiodesc" value="Instagram">
                                        15%
                                    </label>
                                    <label class="checkbox-item">
                                        <input type="radio" name="radiodesc" value="Twitter">
                                        20%
                                    </label>
                                    <label class="checkbox-item">
                                        <input type="radio" name="radiodesc" value="Google">
                                        Linea
                                    </label><br>
                                    <br>
                                    <input type="text">
                                    <label class="checkbox-item">
                                        <input type="radio" name="radiodesc" value="Google">
                                        Promoción
                                    </label><br>
                                    <input type="text">
                                    <label class="checkbox-item">
                                        <input type="radio" name="radiodesc" value="Google">
                                        Empresarial
                                    </label><br>
                                    <input type="text">
                                    <label class="checkbox-item">
                                        <input type="radio" name="radiodesc" value="Google">
                                        Codigo Promocional
                                    </label><br>

                                    {{-- <button class="buton float-right">Aplicar</button> --}}

                                </div>
                                
                            </div>
                            </div>
                        </div>
                        
                        

                        <div class="col">
                            <label for="">¿Traerás tu propio equipo?</label>
                            <br>
                            <input type="radio" name="radioequipo" value="NO"> No
                            <br>
                            <input type="radio" name="radioequipo" value="SI"> Si
                            <br>
                            <br>
                            <label for="">¿Requieres Factura?</label>
                            <br>
                            <input type="radio" name="radiofactura" value="NO"> No
                            <br>
                            <input type="radio" name="radiofactura" value="SI"> Si

                        </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">
            Enviar
        </button>
        {{-- <button type="submit" class="btn btn-primary "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-save" viewBox="0 0 16 16">
            <path d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z"/>
          </svg> Guardar</button> --}}
    </form>
@endsection