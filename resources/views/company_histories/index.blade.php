@extends('layouts.dashboard.app')
@section('cards')
    <div class="w-full h-full p-6 mx-auto rounded-2xl">
        <div class="flex flex-col gap-4">
            <div class="w-full flex justify-center p-3 bg-white shadow-soft-lg rounded-lg font-poppins ">
                <h3>Sejarah Perusahaan</h3>
            </div>
            <section class="h-full flex flex-col  bg-white shadow-soft-lg rounded-lg font-poppins">
                <form action="{{ route('company_histories.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col p-4 gap-1" id="input-histories-title">
                        <label for="histories-title" class="text-base text-slate-600 font-semibold">Judul Timeline Sejarah
                            Perusahaan</label>
                        <input type="text" id="histories-title" name="histories-title"
                            placeholder="Timeline Sejarah Perusahaan"
                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                        @error('histories-title')
                            <div class="error-alert relative w-full mt-3 p-4 text-white bg-red-500 rounded-lg">
                                {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col p-4 gap-1" id="input-histories-year">
                        <label for="histories-year" class="text-base text-slate-600 font-semibold">Timeline Sejarah
                            Perusahaan</label>
                        <input type="date" id="histories-year" name="histories-year"
                            placeholder="Timeline Sejarah
                            Perusahaan"
                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                        @error('histories-year')
                            <div class="error-alert relative w-full mt-3 p-4 text-white bg-red-500 rounded-lg">
                                {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col p-4 gap-1" id="input-histories-description">
                        <label for="histories-description" class="text-base text-slate-600 font-semibold">Deksripsi Sejarah
                            Perusahaan</label>
                        <textarea name="histories-description" id="histories-description" rows="5"
                            placeholder="Deskripsi Sejarah Perusahaan"
                            class="focus:shadow-soft-primary-outline min-h-unset text-sm leading-5.6 ease-soft block h-auto w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">{{ old('description') }}</textarea>
                        @error('histories-description')
                            <div class="error-alert relative w-full mt-3 p-4 text-white bg-red-500 rounded-lg">
                                {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col p-4 gap-1" id="input-histories-img">
                        <label for="histories-img" class="text-base text-slate-600 font-semibold">Gambar Keunggulan
                            Perusahaan</label>
                        <input type="file" id="histories-img" name="histories-img"
                            placeholder="Gambar Sejarah Perusahaan"
                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                        @error('histories-img')
                            <div class="error-alert relative w-full mt-3 p-4 text-white bg-red-500 rounded-lg">
                                {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex justify-end p-4 gap-1" id="btn-group">
                        <button type="submit"
                            class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl  from-green-500 to-green-700 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Submit</button>
                    </div>
                </form>
            </section>

            <section class="h-full bg-white shadow-soft-lg rounded-lg font-poppins">
                <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
                    <h6>Tabel Sejarah Perusahaan</h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Judul Timeline Sejarah Perusahaan</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Timeline Tahun Sejarah Perusahaan</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Deskripsi Sejarah Perusahaan</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Gambar Sejarah Perusahaan</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companyHistory as $index => $item)
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 leading-tight text-xs text-slate-400 text-center">
                                                {{ $item->title }}
                                            </p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 leading-tight text-xs text-slate-400 text-center">
                                                {{ $dateFormat[$index] }}
                                            </p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 leading-tight text-xs text-slate-400 text-center">
                                                {{ Str::limitWords($item->description, 10) }}
                                            </p>
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                            <img class="inline-flex items-center justify-center w-20 h-20 mr-2 text-white transition-all duration-200 ease-in-out text-sm rounded-xl"
                                                src="{{ $item->image_url }}" alt="default img">
                                        </td>
                                        <td class="p-8 gap-4 flex justify-center">
                                            <x-button-edit href="{{ route('company_histories.edit', $item->id) }}" />
                                            <form action="{{ route('company_histories.destroy', $item->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <x-button-delete />
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            setTimeout(() => {
                $('.error-alert').hide(1000);
            }, 1000);


            $('[data-selector="button-delete"]').click(function(e) {
                var form = $(this).closest("form")
                e.preventDefault();
                Swal.fire({
                    title: 'Menghapus data Keunggulan Perusahaan',
                    text: "apakah anda yakin untuk menghapus data ?",
                    cancelButtonText: "tidak",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Iya'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                })
            });
        });
    </script>
@endpush
