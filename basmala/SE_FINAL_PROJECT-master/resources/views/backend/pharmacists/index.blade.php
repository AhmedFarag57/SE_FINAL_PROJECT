@extends('layouts.app')

@section('content')
    
<div class="roles-permissions">

<div class="flex items-center justify-between mb-6">
    <div>
        <h2 class="text-gray-700 uppercase font-bold">Pharmacists</h2>
    </div>
    <div class="flex flex-wrap items-center">
        <a href="{{ route('pharmacists.create') }}" class="bg-gray-200 text-gray-700 text-sm uppercase py-2 px-4 flex items-center rounded">
            <svg class="w-3 h-3 fill-current" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="plus" class="svg-inline--fa fa-plus fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z"></path></svg>
            <span class="ml-2 text-xs font-semibold">Pharmacist</span>
        </a>
    </div>
</div>


<div class="mt-8 bg-white rounded border-b-4 border-gray-300">

    <div class="flex flex-wrap items-center uppercase text-sm font-semibold bg-gray-300 text-gray-600 rounded-tl rounded-tr">
        <div class="w-2/12 px-4 py-3">Name</div>
        <div class="w-2/12 px-4 py-3">Phone</div>
        <div class="w-3/12 px-4 py-3">Period</div>
        <div class="w-2/12 px-4 py-3">Action</div>
    </div>

    @foreach ($pharmacists as $pharmacist)
    
        <div class="flex flex-wrap items-center text-gray-700 border-t-2 border-l-4 border-r-4 border-gray-300">

            <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $pharmacist->name }}</div>
            <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">{{ $pharmacist->phone }}</div>
        
            <div class="w-2/12 px-4 py-3 text-sm font-semibold text-gray-600 tracking-tight">
                @if($pharmacist->period == "8to4")
                    8:00am - 4:00pm
                @elseif ($pharmacist->period == "4to12")
                    4:00pm - 12:00am
                @elseif ($pharmacist->period == "12to8")
                    12:00am - 8:00am
                @endif
            </div>
            <div class="w-2/12 flex items-center justify-end px-3">
                <a class="px-2" href="{{ route('pharmacists.show', $pharmacist->id) }}">
                    <svg class="h-6 w-6 fill-current text-gray-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z"/></svg>
                </a>
                <a href="{{ route('pharmacists.edit', $pharmacist->id) }}">
                    <svg class="h-6 w-6 fill-current text-gray-600" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="pen-square" class="svg-inline--fa fa-pen-square fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M400 480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zM238.1 177.9L102.4 313.6l-6.3 57.1c-.8 7.6 5.6 14.1 13.3 13.3l57.1-6.3L302.2 242c2.3-2.3 2.3-6.1 0-8.5L246.7 178c-2.5-2.4-6.3-2.4-8.6-.1zM345 165.1L314.9 135c-9.4-9.4-24.6-9.4-33.9 0l-23.1 23.1c-2.3 2.3-2.3 6.1 0 8.5l55.5 55.5c2.3 2.3 6.1 2.3 8.5 0L345 199c9.3-9.3 9.3-24.5 0-33.9z"></path></svg>
                </a>
                {{-- <a href="{{ route('pharmacists.destroy', $pharmacist->id) }}" data-url="{{ route('pharmacists.destroy',$pharmacist->id) }}" class="deletebtn ml-1 bg-gray-600 block p-1 border border-gray-600 rounded-sm">
                    <svg class="h-3 w-3 fill-current text-gray-100" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" class="svg-inline--fa fa-trash fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z"></path></svg>
                </a> --}}

                <form id="delete-form-{{ $pharmacist->id }}" action="{{ route('pharmacists.destroy', $pharmacist->id) }}" method="POST" style="display: none;">
                    @csrf
                    @method('DELETE')
                </form>
                <a href="{{ route('pharmacists.destroy', $pharmacist->id) }}" data-url="{{ route('pharmacists.destroy',$pharmacist->id) }}" class="deletebtn ml-1 bg-gray-600 block p-1 border border-gray-600 rounded-sm"
                    onclick="event.preventDefault();
                    document.getElementById('delete-form-{{ $pharmacist->id }}').submit();">
                    <svg class="h-3 w-3 fill-current text-gray-100" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="trash" class="svg-inline--fa fa-trash fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16zM53.2 467a48 48 0 0 0 47.9 45h245.8a48 48 0 0 0 47.9-45L416 128H32z"></path></svg>
                </a>
                

            </div>

        </div>

    @endforeach

</div>

<div class="mt-8">
    {{ $pharmacists->links() }}
</div>

@include('backend.modals.delete', ['name' => 'pharmacist'])

</div>
@endsection

@push('scripts')
<script>
    $(function() {
        $( ".deletebtn" ).on( "click", function(event) {
            event.preventDefault();
            $( "#deletemodal" ).toggleClass( "hidden" );
            var url = $(this).attr('data-url');
            $(".remove-record").attr("action", url);
        })        
        
        $( "#deletemodelclose" ).on( "click", function(event) {
            event.preventDefault();
            $( "#deletemodal" ).toggleClass( "hidden" );
        })
    })
</script>
@endpush