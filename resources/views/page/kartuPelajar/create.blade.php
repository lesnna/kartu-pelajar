<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form Kartu Pelajar') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action=" {{ url('/kartu/add') }} " method="post">
                        @csrf
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Nama</span>
                            </div>
                            <select id="siswa" name="siswa_id" class="select w-full max-w-xs" onchange="isiNilai()">
                                <option disabled selected>Pilih Nama Siswa</option>
                                @foreach ($siswas as $siswa)
                                <option value="{{ $siswa->id }}">{{ $siswa->name }}</option>
                                @endforeach
                            </select>
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">NIS</span>
                            </div>
                            <input id="nis" name="nis" type="text" placeholder="1234" class="input input-bordered w-full" disabled />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">NISN</span>
                            </div>
                            <input id="nisn" name="nisn" type="text" placeholder="8080" class="input input-bordered w-full" disabled />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Kelas</span>
                            </div>
                            <input id="kelas" name="kelas" type="text" placeholder="12 RPL 1" class="input input-bordered w-full" disabled />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Tempat Tanggal Lahir</span>
                            </div>
                            <input id="date" name="date" type="text" placeholder="Banjarbaru, 22 Oktober 2005"
                            class="input input-bordered w-full" disabled />
                        </label>
                        <label class="form-control w-full">
                            <div class="label">
                                <span class="label-text">Tanggal terbit Kartu</span>
                            </div>
                            <input name="tgl_buat" type="date" class="input input-bordered w-full" />
                        </label>
                        <button type="submit" class="btn btn-accent mt-4">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        function isiNilai() {
            var siswaId = document.getElementById("siswa").value;
            var siswa = @json($siswas);
            var selectedSiswa = siswa.find(s => s.id == siswaId);
            document.getElementById("nis").value = selectedSiswa.nis;
            document.getElementById("nisn").value = selectedSiswa.nisn;
            document.getElementById("kelas").value = selectedSiswa.kelas;
            document.getElementById("date").value = selectedSiswa.date;
        }
    </script>
    
</x-app-layout>