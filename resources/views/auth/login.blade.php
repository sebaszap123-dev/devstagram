@extends('layouts.app')

@section('title')
    Inicia sesión en DevStagram
@endsection

@section('content')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img class="rounded-lg" src="{{ asset('img/login.jpg') }}"
                alt="Una persona haciendo programación en un computador">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{ route('login') }}" method="POST" novalidate>
                @csrf
                @if (session('message'))
                    <p class="bg-red-500 text-white my-2 rounded-md p-2">{{ session('message') }}</p>
                @endif
                {{-- Email --}}
                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Correo electrónico</label>
                    <input type="email" id="email" name="email" placeholder="Tu correo electrónico"
                        class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror"
                        value="{{ old('email') }}" />
                    @error('email')
                        <p class="bg-red-500 text-white my-2 rounded-md p-2">{{ $message }}</p>
                    @enderror
                </div>
                {{-- Password --}}
                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Contraseña</label>
                    <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña"
                        class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror" />
                    @error('password')
                        <p class="bg-red-500 text-white my-2 rounded-md p-2">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5 align-middle">
                    <input type="checkbox" name="remember"> <label class="text-gray-500 text-sm">Keep sesion open</label>
                </div>
                <input type="submit" value="Iniciar sesión"
                    class="bg-sky-600 hover:bg-sky-700 cursor-pointer uppercase font-bold text-white w-full rounded-lg p-3">
            </form>
        </div>
    </div>
@endsection
