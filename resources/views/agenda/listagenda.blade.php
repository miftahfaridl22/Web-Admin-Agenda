@extends('templates.default')

@section('content')
<div class="row row-cards">
  <div class="col-12">
    <div class="table-responsive">
      <table class="table table-bordered data-table">
        <thead>
          <tr>
            <th>Tanggal</th>
            <th>Agenda</th>
            <th>Waktu</th>
            <th>Tempat</th>
            <th>Disposisi</th>
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
      ajax: "{{ route('agenda.index') }}",
      columns: [
        {data: 'tanggal_agenda', name: 'tanggal_agenda'},
        {data: 'nama_agenda', name: 'tanggal_agenda', searchable: true, orderable: true},
        {data: 'waktu_agenda', name: 'waktu_agenda'},
        {data: 'tempat_agenda', name: 'tempat_agenda'},
        {data: 'disposisi_agenda', name: 'disposisi_agenda'}
      ],
      order: [[0, 'desc']]
    });

  });
</script>
@endsection