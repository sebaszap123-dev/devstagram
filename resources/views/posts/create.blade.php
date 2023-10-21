@extends('layouts.app')

@section('title')
    Creating new publication
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('content')
    <div class="md:flex md:items-center md:flex-row ">
        <div class="md:w-1/2 px-10">
            <form action="{{ route('images.store') }}" id="my-dropzone" method="POST" enctype="multipart/form-data"
                class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center">
                @csrf
            </form>
        </div>
        <div class="md:w-1/2 p-10 bg-white rounded-lg shadow-xl mt-10 md:mt-0">
            <form action="{{ route('register') }}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="title" class="mb-2 block uppercase text-gray-500 font-bold">
                        Title
                    </label>
                    <input type="text" id="title" placeholder="Title for your publication"
                        class="border p-3 w-full rounded-lg @error('title') border-red-500 @enderror"
                        value="{{ old('title') }}" />
                    @error('title')
                        <p class="bg-red-500 text-white my-2 rounded-md p-2">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label for="description" class="mb-2 block uppercase text-gray-500 font-bold">
                        Description
                    </label>
                    <textarea id="description" placeholder="Description for you publication"
                        class="border p-3 w-full rounded-lg @error('description') border-red-500 @enderror">{{ old('description') }}</textarea>
                    @error('description')
                        <p class="bg-red-500 text-white my-2 rounded-md p-2">{{ $message }}</p>
                    @enderror
                </div>
                <input type="submit" value="Create publication"
                    class="bg-sky-600 hover:bg-sky-700 cursor-pointer uppercase font-bold text-white w-full rounded-lg p-3" />
            </form>
        </div>
    </div>
@endsection
