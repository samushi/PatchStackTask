@extends('Vullnerabilities::layout')

@section('title', $vullnerability->name)

@section('content')
<div>
  <div class="flex flex-col items-center min-h-screen pt-6 bg-gray-100 sm:justify-center sm:pt-0">
    <div class="w-full px-16 py-12 mt-6 overflow-hidden bg-white rounded-lg lg:max-w-4xl text-right">
      <div class="w-full px-6 py-4 text-left mb-5 bg-white rounded shadow-md ring-1 ring-gray-900/10">
        <h3 class="text-2xl font-semibold">{{ $vullnerability->name }}</h3>
        <div class="flex items-center mb-4 space-x-2">
            <span class="text-xs text-gray-500"> {{ $vullnerability->created_at->format('Y/m/d') }}</span>
        </div>
        <p class="text-base text-gray-700">{{ $vullnerability->description }}</p>
      </div>
      <x-forms.buttons.cancel text="Go Back" />
    </div>
  </div>
</div>
@endsection