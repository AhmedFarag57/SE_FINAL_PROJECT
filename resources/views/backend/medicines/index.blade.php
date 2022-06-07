@extends('layouts.app')

@section('content')

    <div class="roles-permissions">

        <div class="flex items-center justify-between mb-6">
            <div>
                <h2 class="text-gray-700 uppercase font-bold">Medicines</h2>
            </div>
            <div class="flex flex-wrap items-center">
                <a href="{{ route('medicines.create') }}" class="bg-gray-200 text-gray-700 text-sm uppercase py-2 px-4 flex items-center rounded ml-3">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg>
                    <span class="ml-2 text-xs font-semibold">Medicine</span>
                </a>
                <a href="{{ route('pharmacy.index') }}" class="bg-gray-200 text-gray-700 text-sm uppercase py-2 px-4 flex items-center rounded ml-3">
                    <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="long-arrow-alt-left" class="svg-inline--fa fa-long-arrow-alt-left fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z"></path></svg>
                    <span class="ml-2 text-xs font-semibold">Back</span>
                </a>
            </div>
        </div>



        <div class="mt-8 bg-white rounded border-b-4 border-gray-300">

            <div class="flex flex-wrap items-center uppercase text-sm font-semibold bg-gray-300 text-gray-600 rounded-tl rounded-tr">
                <div class="w-2/12 px-4 py-3">Name</div>
                <div class="w-2/12 px-4 py-3">Manufacturar</div>
                <div class="w-2/12 px-4 py-3">Price/Unit</div>
                <div class="w-2/12 px-4 py-3 text-right">Action</div>
            </div>

            @foreach ($medicines as $medicine)
            
                <div class="flex flex-wrap items-center text-gray-700 border-t-2 border-l-4 border-r-4 border-gray-300">

                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $medicine->name }}</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $medicine->manufacturar }}</div>
                    <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $medicine->price }}</div>
                    <div class="w-2/12 flex items-center justify-end px-3">
                        <a class="px-2" href="{{ route('medicines.show', $medicine->id) }}">
                            <svg class="h-6 w-6 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"/></svg>
                        </a>
                        <a href="{{ route('medicines.edit', $medicine->id) }}">
                            <svg class="h-6 w-6 fill-current text-gray-600" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-square" class="svg-inline--fa fa-pen-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zM238.1 177.9L102.4 313.6l-6.3 57.1c-.8 7.6 5.6 14.1 13.3 13.3l57.1-6.3L302.2 242c2.3-2.3 2.3-6.1 0-8.5L246.7 178c-2.5-2.4-6.3-2.4-8.6-.1zM345 165.1L314.9 135c-9.4-9.4-24.6-9.4-33.9 0l-23.1 23.1c-2.3 2.3-2.3 6.1 0 8.5l55.5 55.5c2.3 2.3 6.1 2.3 8.5 0L345 199c9.3-9.3 9.3-24.5 0-33.9z"></path></svg>
                        </a>
                    </div>

                </div>

            @endforeach

        </div>

        <div class="mt-8">
            {{ $medicines->links() }}
        </div>

    </div>

@endsection