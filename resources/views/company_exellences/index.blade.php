@extends('layouts.dashboard.app')
@include('layouts.navbars.sidebar')
@include('layouts.navbars.nav')
@section('cards')
    <div class="w-full h-full p-6 mx-auto rounded-2xl">
        <div class="flex flex-col gap-4">
            <div class="w-full flex justify-center p-3 bg-white shadow-soft-lg rounded-lg font-poppins ">
                <h3>Keunggulan Perusahaan</h3>
            </div>
            {{-- Form Company Profile --}}
            <section class="h-full flex flex-col  bg-white shadow-soft-lg rounded-lg font-poppins">
                <form action="" method="post">
                    <div class="flex flex-col p-4 gap-1" id="input-exellence-title">
                        <label for="exellence-title" class="text-base text-slate-600 font-semibold">Judul Keunggulan
                            Perusahaan</label>
                        <input type="text" id="exellence-title" name="exellence-title"
                            placeholder="Judul Keunggulan Perusahaan"
                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                    </div>
                    <div class="flex flex-col p-4 gap-1" id="input-exellence-description">
                        <label for="exellence-description" class="text-base text-slate-600 font-semibold">Deskripsi
                            Keunggulan
                            Perusahaan</label>
                        <textarea name="exellence-description" id="exellence-description" rows="5"
                            placeholder="Deskripsi Keunggulan Perusahaan"
                            class="focus:shadow-soft-primary-outline min-h-unset text-sm leading-5.6 ease-soft block h-auto w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"></textarea>
                    </div>
                    <div class="flex flex-col p-4 gap-1" id="input-exellence-img">
                        <label for="exellence-img" class="text-base text-slate-600 font-semibold">Gambar Keunggulan
                            Perusahaan</label>
                        <input type="file" id="exellence-img" name="exellence-img"
                            placeholder="Gambar Keunggulan Perusahaan"
                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                    </div>
                    <div class="flex justify-end p-4 gap-1" id="btn-group">
                        <button type="submit"
                            class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl  from-green-500 to-green-700 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Submit</button>
                    </div>
                </form>
            </section>
            {{--  Table Company Profile --}}
            <section class="h-full bg-white shadow-soft-lg rounded-lg font-poppins">
                <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
                    <h6>Company Profile table</h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Nama Perusahaan</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Deskripsi Perusahaan</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Alamat Perusahaan</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Nomor Perusahaan</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Email Perusahaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2 py-1">
                                            <div>
                                                {{-- <img src="../assets/img/team-2.jpg"
                                                    class="inline-flex items-center justify-center mr-4 text-white transition-all duration-200 ease-soft-in-out text-sm h-9 w-9 rounded-xl"
                                                    alt="user1" /> --}}
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 leading-normal text-sm"></h6>
                                                <p class="mb-0 leading-tight text-xs text-slate-400">
                                                </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 font-semibold leading-tight text-xs"></p>
                                        <p class="mb-0 leading-tight text-xs text-slate-400"></p>
                                    </td>
                                    <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                        {{-- <span
                                            class="bg-gradient-to-tl from-green-600 to-lime-400 px-3.6 text-xs rounded-1.8 py-2.2 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white">Online</span> --}}
                                    </td>
                                    <td
                                        class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <span class="font-semibold leading-tight text-xs text-slate-400"></span>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent text-center">
                                        <a href="javascript:;" id="edit-btn"
                                            class="font-semibold leading-tight text-xs  text-slate-400">
                                        </a>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
