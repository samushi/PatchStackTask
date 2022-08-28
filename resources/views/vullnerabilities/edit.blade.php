@extends('Vullnerabilities::layout')

@section('title', "Edit | " . $vullnerability->name)

@section('content')
    <!-- Edit Vullnerability -->
    <div>
      <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
        <div class="w-full px-16 py-20 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl">
          <div class="mb-4">
            <h1 class="font-serif text-3xl font-bold underline decoration-gray-400">
              Edit Vullnerability
            </h1>
          </div>
          @if(session('success'))
          <div class="text-sm text-green-500 my-1">
              {{ session('success') }}
          </div>
          @endif
          <div class="w-full px-6 py-4 bg-white rounded shadow-md ring-1 ring-gray-900/10">
            <form method="POST" action="{{ route('vullnerabilities.update', $vullnerability->id) }}">
              @csrf
              @method('PUT')
              <!-- Name -->
              <div>
                <label class="block text-sm font-bold text-gray-700" for="name">
                  Name
                </label>

                <input
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  type="text" name="name" value="{{ $vullnerability->name }}" />

                  @error('name')
                    <div class="text-sm text-red-500 my-1">{{ $message }}</div>
                  @enderror
              </div>

              <!-- Description -->
              <div class="mt-4">
                <label class="block text-sm font-bold text-gray-700" for="password">
                  Description
                </label> 
                <textarea name="description"
                  class="block w-full mt-1 border-gray-300 rounded-md shadow-sm placeholder:text-gray-400 placeholder:text-right focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                  rows="4">{{ trim($vullnerability->description) }}</textarea>

                  @error('description')
                    <div class="text-sm text-red-500 my-1">{{ $message }}</div>
                  @enderror
              </div>

              <div class="flex items-center justify-start mt-4 gap-x-2">
                <button type="submit"
                  class="px-6 py-2 text-sm font-semibold rounded-md shadow-md text-sky-100 bg-sky-500 hover:bg-sky-700 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300">
                  Update
                </button>
                <x-forms.buttons.cancel />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection