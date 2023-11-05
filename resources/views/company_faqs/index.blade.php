@extends('layouts.dashboard.app')
@section('cards')
    <div class="w-full h-full p-6 mx-auto rounded-2xl">
        <div class="flex flex-col gap-4">
            <div class="w-full flex justify-center p-3 bg-white shadow-soft-lg rounded-lg font-poppins ">
                <h3>Faq Perusahaan</h3>
            </div>
            {{-- Form Company Profile --}}
            <section class="h-full flex flex-col  bg-white shadow-soft-lg rounded-lg font-poppins">
                <form action="" method="post">
                    <div class="flex flex-col p-4 gap-1" id="input-faq-question">
                        <label for="faq-question" class="text-base text-slate-600 font-semibold">Pertanyaan tentang
                            Perusahaan</label>
                        <input type="text" id="faq-question" name="faq-question"
                            placeholder="Pertanyaan tentang perusahaan"
                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                    </div>
                    <div class="flex flex-col p-4 gap-1" id="input-faq-answer">
                        <label for="faq-answer" class="text-base text-slate-600 font-semibold">
                            Jawaban tentang
                            Perusahaan</label>
                        <textarea name="faq-answer" id="faq-answer" rows="5" placeholder="Jawaban tentang perusahaan"
                            class="focus:shadow-soft-primary-outline min-h-unset text-sm leading-5.6 ease-soft block h-auto w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none"></textarea>
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
                    <h6>Table Faqs Perusahaan</h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Pertanyaan tentang Perusahaan</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Jawaban tentang Perusahaan</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 text-xs text-slate-400 text-center">test</p>
                                    </td>
                                    <td
                                        class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 leading-tight text-xs text-center text-slate-400">test</p>
                                    </td>
                                    <td
                                        class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                        <div class="flex justify-center items-center gap-4">
                                            <x-button-edit href="" />
                                            <x-button-delete />
                                        </div>
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
