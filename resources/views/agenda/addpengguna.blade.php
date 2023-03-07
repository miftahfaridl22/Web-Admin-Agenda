@extends('templates.default')

@section('content')
<div class="row row-cards">
        <div class="col-12">
            <form action="/pengguna" class="card" method="post">
                @csrf
                <div class="card-header">
                    <h4 class="card-title">Tambah Pengguna</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <div class="mb-3">
                                <label class="form-label">NIP/NIK</label>
                                <input type="text" class="form-control" name="nip" placeholder="NIP/NIK">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jabatan</label>
                                <input type="text" class="form-control" name="jabatan" placeholder="Jabatan">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Password</label>
                                <input type="text" class="form-control" name="password" placeholder="Password">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-end">
                    <div class="d-flex">
                        <a href="#" class="btn btn-link">Batal</a>
                        <button class="btn btn-primary ms-auto" type="submit">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection