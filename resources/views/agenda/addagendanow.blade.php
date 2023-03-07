@extends('templates.default')

@section('content')
    <div class="row row-cards">
        <div class="col-12">
            <form action="/simpanagenda" class="card" method="post">
                @csrf
                <div class="card-header">
                    <h4 class="card-title">Tambah Agenda (H)</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                            <div class="mb-3">
                                <label class="form-label">Nama Agenda</label>
                                <input type="text" class="form-control" name="nama_agenda" placeholder="Nama Agenda">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Waktu Agenda</label>
                                <input type="text" class="form-control" name="waktu_agenda" placeholder="Waktu Agenda">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tempat Agenda</label>
                                <input type="text" class="form-control" name="tempat_agenda" placeholder="Tempat Agenda">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Disposisi</label>
                                <input type="text" class="form-control" name="disposisi_agenda" placeholder="Disposisi Agenda">
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