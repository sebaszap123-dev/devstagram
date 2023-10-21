@extends('layouts.app')

@section('title')
    Perfil: {{ $user->username }}
@endsection

@section('content')
    <div class="flex justify-center">
        <div class="w-full md:w-8/12 lg:w-6/12 flex flex-col items-center md:flex-row">
            <div class="w-8/12 lg:w-6/12 px-5">
                <img src="{{ asset('usuario.svg') }}" alt="foto de perfil usuario">
            </div>
            <div class="md:w-8/12 lg:w-6/12 px-5 flex flex-col items-center md:justify-center md:items-start md:py-10 py-10">
                <p class="text-gray-700 text-2xl"> {{ $user->username }}</p>

                <p class="text-gray-800 text-sm mb-4 font-bold mt-5">
                    0
                    <span class="font-normal">Seguidores</span>
                </p>
                <p class="text-gray-800 text-sm mb-4 font-bold">
                    0
                    <span class="font-normal">Siguendo</span>
                </p>
                <p class="text-gray-800 text-sm mb-4 font-bold">
                    0
                    <span class="font-normal">Posts</span>
                </p>
            </div>
        </div>
    </div>
@endsection
