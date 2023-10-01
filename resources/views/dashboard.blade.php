@extends('layouts.app')
@include('layouts.navbars.sidebar')
@include('layouts.navbars.nav')
@section('cards')
    <div class="w-full h-full p-6 mx-auto  rounded-2xl">
        <div class="w-full h-full grid grid-rows-2 gap-8">
            <div class="w-full max-w-full flex justify-center px-3 ">
                <h3>Dashboard Menu</h3>
            </div>
            <div class="h-full flex flex-col gap-4 bg-white rounded-lg font-poppins">
                <div class="flex p-4" id="input-name">
                    <label for="name" class=" text-slate-600 font-semibold">Company Name :</label>
                    <input class="ml-4 flex-1 rounded-lg shadow-inner shadow-slate-500" type="text" id="name">
                </div>
                <div class="flex p-4" id="input-description">
                    <label for="name" class=" text-slate-600 font-semibold">Company Description :</label>
                    <input class="ml-4 flex-1 rounded-lg shadow-inner shadow-slate-500" type="text" id="name">
                </div>
            </div>
        </div>
    </div>
@endsection
