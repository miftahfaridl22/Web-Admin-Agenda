@extends('templates.default')

@section('content')
<div class="row row-cards">
  <div class="col-12">
    <div class="table-responsive">
      <table class="table table-bordered data-table">
        <thead>
          <tr>
            <th>NIP</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Jabatan</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('userweb.index') }}",
      columns: [
        {data: 'nip', name: 'nip'},
        {data: 'nama_lengkap', name: 'nama_lengkap'},
        {data: 'email', name: 'email'},
        {data: 'jabatan', name: 'jabatan'},
      ]
    });

  });
</script>
@endsection