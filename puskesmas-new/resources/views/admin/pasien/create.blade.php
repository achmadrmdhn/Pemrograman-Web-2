<x-layout>
    <x-slot name="page_name">
        Form Pasien
    </x-slot>
    <x-slot name="page_content">
    <form class="forms-sample" action="{{ url('dashboard/pasien/store') }}" method="POST">
        @csrf

        <div class="form-group row">
            <label for="kode" class="col-4 col-form-label">Kode Pasien</label> 
            <div class="col-8">
            <input id="kode" name="kode" placeholder="Masukkan Kode Pasien" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
            <input id="nama" name="nama" placeholder="Masukkan Nama Pasien" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="tmp_lahir" class="col-4 col-form-label">Tempat Lahir</label> 
            <div class="col-8">
            <input id="tmp_lahir" name="tmp_lahir" placeholder="Masukkan Tempat Lahir" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="tgl_lahir" class="col-4 col-form-label">Tanggal Lahir</label> 
            <div class="col-8">
            <input id="tgl_lahir" name="tgl_lahir" placeholder="Masukkan Tanggal Lahir" type="date" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="gender" class="col-4 col-form-label">Gender</label> 
            <div class="col-8">
            <select id="gender" name="gender" class="custom-select">
                <option value="laki-laki">L</option>
                <option value="perempuan">P</option>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
            <input id="email" name="email" placeholder="Masukkan Email" type="email" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="alamat" class="col-4 col-form-label">Alamat</label> 
            <div class="col-8">
            <input id="alamat" name="alamat" placeholder="Masukkan Alamat" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="kelurahan_nama" class="col-4 col-form-label">Kelurahan</label> 
            <div class="col-8">
            <input id="kelurahan_nama" name="kelurahan_nama" placeholder="Masukkan Kelurahan" type="text" class="form-control">
            </div>
        </div> 
          <div class="form-group row">
              <div class="col-sm-4"></div>
              <div class="col-sm-8">
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="reset" class="btn btn-warning">Reset</button>
              </div>
          </div>
      </form>
    </x-slot>
</x-layout>