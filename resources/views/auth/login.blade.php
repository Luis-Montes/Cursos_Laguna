@extends('layouts.app')

@section('contenido')
    <div class="container">
        <section class="vh-100">
            <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="{{asset('img/cursos_lag_logo.png')}}"
                    class="img-fluid" alt="Sample image">
                </div>
                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
    
                    @if (session('mensaje'))
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">
                            {{ session('mensaje') }}
                        </p>
                    @endif
    
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                    <input type="text" id="username" name="username" class="form-control form-control-lg"
                        placeholder="Ingresa tu Usuario" />
                    <label class="form-label" for="form3Example3">Usuario</label>
                    </div>
    
    
        
                    <!-- Password input -->
                    <div class="form-outline mb-3">
                    <input type="password" id="password" name="password" class="form-control form-control-lg"
                        placeholder="Contraseña" />
                    <label class="form-label" for="form3Example4">Password</label>
                    </div>
    
    
        
                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg"
                          style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        {{-- <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="{{route('register')}}"
                            class="link-danger">Register</a></p> --}}
                      </div>
                    </div>
        
                </form>
                </div>
            </div>
            </div>
            </div>
        </section>
    </div>
@endsection