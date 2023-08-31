@extends('layouts.app')

@section('titulo')
Registrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('Materiales DevStagram/Diseño/registrar.jpg') }}" alt="Imagen registro usuarios">
        </div>
        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow">
            <form action="/crear-cuenta" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input type="text" id="name" name="name" placeholder="Tu Nombre" class="border p-3 w-full rounded-lg @error('name')
                        border-red-500
                    @enderror" value="{{old('name')}}">
                    @error('name')
                        <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre de usuario
                    </label>
                    <input type="text" id="username" name="username" value="{{old('username')}}" placeholder="Tu Nombre de usuario" class="border p-3 w-full rounded-lg @error('username')
                    border-red-500
                @enderror">
                    @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                </div>
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>
                    <input type="email" id="email" name="email" placeholder="Tu Email" class="border p-3 w-full rounded-lg @error('email')
                    border-red-500
                @enderror" value="{{old('email')}}">
                    @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                </div>
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña
                    </label>
                    <input type="password" id="password" name="password" placeholder="Tu Contraseña" class="border p-3 w-full rounded-lg @error('password')
                    border-red-500
                @enderror" value="{{old('password')}}">
                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir Contraseña
                    </label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Repite tu Contraseña" class="border p-3 w-full rounded-lg">
                </div>
                <input type="submit" value="Crear cuenta" class="bg-sky-600 hover:bg-sky-700 font-bold uppercase w-full p-3 transition-colors cursor-pointer text-white">
            </form>
        </div>
      
    </div>
@endsection