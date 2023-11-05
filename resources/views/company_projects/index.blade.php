@extends('layouts.dashboard.app')
@section('cards')
    <div class="w-full h-full p-6 mx-auto rounded-2xl">
        <div class="flex flex-col gap-4">
            <div class="w-full flex justify-center p-3 bg-white shadow-soft-lg rounded-lg font-poppins ">
                <h3>Proyek Perusahaan</h3>
            </div>
            <section class="h-full flex flex-col  bg-white shadow-soft-lg rounded-lg font-poppins">
                <form action="" method="post">
                    <div class="flex flex-col p-4 gap-1" id="input-project-client">
                        <label for="project-client" class="text-base text-slate-600 font-semibold">Nama Klien
                            Perusahaan</label>
                        <input type="text" id="project-client" name="project-client" placeholder="Nama Klien Perusahaan"
                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                    </div>
                    <div class="flex flex-col p-4 gap-1" id="input-project-img">
                        <label for="project-img" class="text-base text-slate-600 font-semibold">Gambar Proyek
                            Perusahaan</label>
                        <input type="file" id="project-img" name="project-img" placeholder="Gambar Sejarah Perusahaan"
                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                    </div>
                    <div class="flex justify-end p-4 gap-1" id="btn-group">
                        <button type="submit"
                            class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl  from-green-500 to-green-700 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Submit</button>
                    </div>
                </form>
            </section>

            <section class="h-full bg-white shadow-soft-lg rounded-lg font-poppins">
                <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
                    <h6>Tabel Proyek Perusahaan</h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Nama Klien Perusahaan</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Gambar Proyek Perusahaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2 py-1">
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
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
