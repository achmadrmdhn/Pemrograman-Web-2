<x-layout>
    <x-slot name="page_name">
        Halaman Pasien
    </x-slot>
    <x-slot name="page_content">
        <a href="{{ url('dashboard/pasien/create') }}" class="btn btn-primary mb-3">+ Tambah Pasien</a>
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Id</th>
                <th>Kode Pasien</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Nama Kelurahan</th>
                <th>Aksi</th>
            </tr>
            @foreach ($pasiens as $pasien)
            <tr>
                <td>{{ $pasien->id }}</td>
                <td>{{ $pasien->kode }}</td>
                <td>{{ $pasien->nama }}</td>
                <td>{{ $pasien->tmp_lahir }}</td>
                <td>{{ $pasien->tgl_lahir }}</td>
                <td>{{ $pasien->gender }}</td>
                <td>{{ $pasien->email }}</td>
                <td>{{ $pasien->alamat }}</td>
                <td>{{ $pasien->kelurahan_nama }}</td>
                <td>
                    <a href="{{ url('dashboard/pasien/show', $pasien->id) }}" class="btn btn-primary btn-sm"><i class="far fa-eye"></i> Lihat<a>
                    <a href="#" class="btn btn-warning btn-sm"><i class="far fa-edit"></i> Edit</a>
                    <a href="#" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Hapus</a>
                </td>
            </tr>
            @endforeach
        </table>
    </x-slot>
</x-layout>