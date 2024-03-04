<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Edit Siswa') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action=" {{ url("/siswa/edit/$data->id") }} " method="post">
                        @csrf
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Nama</span>
                            </div>
                            <input name="nama" type="text" placeholder="Budi" class="input input-bordered w-full"
                                value="{{ $data->name }}" />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">NIS</span>
                            </div>
                            <input name="nis" type="text" placeholder="1234" class="input input-bordered w-full"
                                value="{{ $data->nis }}" />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">NISN</span>
                            </div>
                            <input name="nisn" type="text" placeholder="8080" class="input input-bordered w-full"
                                value="{{ $data->nisn }}" />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Kelas</span>
                            </div>
                            <input name="kelas" type="text" placeholder="12 RPL 1"
                                class="input input-bordered w-full" value="{{ $data->kelas }}" />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Tempat Tanggal Lahir</span>
                            </div>
                            <input name="date" type="text" placeholder="Banjarbaru, 22 Oktober 2005"
                                class="input input-bordered w-full" value="{{ $data->date }}" />
                        </label>
                        <button type="submit" class="btn btn-accent mt-4">Simpan Perubahan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
