@extends('Vullnerabilities::layout')

@section('title', 'Top Web Application Security Risks')

@section('content')  
<div class="container max-w-7xl mx-auto mt-8">
  <div class="mb-4">
    <div class="flex justify-end">
      <a href="{{ route('vullnerabilities.create') }}" class="px-4 py-2 rounded-md bg-sky-500 text-sky-100 hover:bg-sky-600">Create Vullnerability</a>
    </div>
  </div>
  <div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
      <div class="inline-block min-w-full overflow-hidden align-middle border-b border-gray-200 shadow sm:rounded-lg">
        <table class="min-w-full">
          <thead>
            <tr>
              <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                ID</th>
              <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Name</th>
              <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Description</th>
              <th
                class="px-6 py-3 text-xs font-medium leading-4 tracking-wider text-left text-gray-500 uppercase border-b border-gray-200 bg-gray-50">
                Published</th>
              <th class="px-6 py-3 text-sm text-left text-gray-500 border-b border-gray-200 bg-gray-50" colspan="3">
                Action</th>
            </tr>
          </thead>

          <tbody class="bg-white">
            @foreach($data as $vullnerability)
            <tr>
                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <div class="flex items-center">
                    {{ $vullnerability->id }}
                    </div>
                </td>

                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <div class="text-sm leading-5 text-gray-900">{{ $vullnerability->name }}</div>
                </td>

                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                    <p>{{ $vullnerability->short }}</p>
                </td>

                <td class="px-6 py-4 text-sm leading-5 text-gray-500 whitespace-no-wrap border-b border-gray-200">
                    <span>{{ $vullnerability->published }}</span>
                </td>

                <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                    <x-forms.buttons.edit :id="$vullnerability->id" />    
                </td>

                <td class="text-sm font-medium leading-5 text-center whitespace-no-wrap border-b border-gray-200 ">
                    <x-forms.buttons.view :id="$vullnerability->id" />
                </td>

                <td class="text-sm font-medium leading-5 whitespace-no-wrap border-b border-gray-200 ">
                    <x-forms.buttons.delete :id="$vullnerability->id" />
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection