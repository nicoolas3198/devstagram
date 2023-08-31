@extends('layouts.app')
@section('titulo')
    Editar Perfil: {{auth()->user()->username}} 
@endsection
@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w-1/2 bg-white shadow p-6">
            <form action="{{route('perfil.store')}}" method="POST" class="mt-10 md:mt-0" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre de usuario
                    </label>
                    <input id="username" name="username" placeholder="Tu nombre de usuario" class="border p-3 w-full rounded-lg @error('username')
                    border-red-500
                @enderror" value="{{old('username')}}">
                    @error('username')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{ $message }}</p>
                @enderror
                </div>
                <div class="mb-5">
                    <label for="imagen" class="mb-2 block uppercase text-gray-500 font-bold">
                       Foto de perfil
                    </label>
                    <input id="imagen" name="imagen" type="file" accept=".jpg, jpeg, .png" class="border p-3 w-full rounded-lg">
                </div>
                <input type="submit" value="Guardar Cambios" class="bg-sky-600 hover:bg-sky-700 font-bold uppercase w-1/3 p-3 transition-colors cursor-pointer text-white mx-auto block">

            </form>
        </div>
    </div>
@endsection