@extends('layouts.app')

@section('titulo')
    Registrate en DevStagram
@endsection
@section('contenido')
<div class="md:flex md:justify-center md:gap-4 md:items-center">
    <div class="md:w-6/12">
        <img src="{{ asset ('img/registrar.jpg')}}" alt="Imagen de Registro de Usuario">
    </div>
    <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl ">
        <form action="{{ route('registro') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                    Nombre 
                </label>
                <input id="name"
                       name="name" 
                       type="text" 
                       placeholder="Tu Nombre" 
                       class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" 
                       value={{ old('name') }}
                        >
                
                @error('name')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p> 
                @enderror
            </div>

            <div class="mb-5">
                <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                    Nombre de Usuario 
                </label>
                <input id="username" 
                       name="username" 
                       type="text" 
                       placeholder="Tu Nombre de Usuario"
                       class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                       value={{ old('username')}}>
                    
               
                @error('username')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message}}</p> 
                @enderror
            </div>

            <div class="mb-5">
                <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                    Email 
                </label>
                <input id="email" 
                       name="email" 
                       type="email" 
                       placeholder="Email de Registro" 
                       class="border p-3 w-full rounded-lg @error('username') border-red-500 @enderror"
                       value={{ old('email')}}>
                
                @error('email')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p> 
                @enderror
            </div>

            <div class="mb-5">
                <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                    Contraseña 
                </label>
                <input id="password" 
                       name="password" 
                       type="password" 
                       placeholder="Contraseña de Registro" 
                       class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"
                       value={{ old('password')}}>
                
                @error('password')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message}}</p> 
                @enderror
            </div>

            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                    Confirmar Contraseña 
                </label>
                <input id="password_confirmation" 
                       name="password_confirmation" 
                       type="password" 
                       placeholder="Confirmar Contraseña" 
                       class="border p-3 w-full rounded-lg @error('password_confirmation') border-red-500 @enderror"
                       value={{ old('password_confirmation')}}>
            </div>
            @error('password_confirmation')
                <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message}}</p> 
                @enderror

            <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
        
            
        </form>

    </div>
</div>
@endsection