@extends('installer::install')

@section('step')
    <p class="pb-3 text-gray-800">
        Below you should enter your purchase code
    </p>
    @if(isset($error))
        <div class="p-4 mb-3 bg-red-100 border-l-4 border-red-500">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm leading-5 text-red-700">
                        {!! $error !!}
                    </p>
                </div>
            </div>
        </div>
    @endif
    <form method="post" action="{{ route('install.purchase-code.post') }}">
        @csrf
        <div class="mb-3">
            <label for="purchase_code" class="block pb-2 font-medium leading-5 text-gray-700">Purchase Code <span class="text-red-400">*</span></label>
            <input class="w-full px-3 py-2 leading-tight text-gray-700 border rounded appearance-none focus:outline-none focus:shadow-outline"
                   id="purchase_code" type="text" name="purchase_code" value="{{ $values['purchase_code'] ?? '' }}">
        </div>
        <div class="flex justify-end">
            <button type="submit" class="inline-flex items-center px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                Next step
                <svg class="w-5 h-5 ml-3 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"/>
                </svg>
            </button>
        </div>
    </form>
@endsection
