@extends('/admin/layout-komponen/master')
@section('title','Testimoni')
@section('css')
<!-- css internal place -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
@endsection
@section('testimoni-admin','active')
@section('konten')
<!-- Content Body place -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Testimoni</h1>
        </div>
        <div class="row">
            <div class="col-12">
              <div class="card card-statistic-1">
                <div class="container"><br>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Tambah Data</button><br><br>
                </div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>foto</th>
                            <th>nama</th>
                            <th>service</th>
                            <th>review</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($testi as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$data->foto}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->service}}</td>
                            <td>{{$data->review}}</td>
                            @if ($data->status == 1)
                            <td>Review Aktif</td>
                            @else
                            <td>Review Tidak Aktif</td>
                            @endif
                            <td class="text-center">
                                <button class="btn btn-success" alt="Edit" data-toggle="modal" data-target="#edit{{$data->id}}"><i class="fas fa-pen-square"></i></button>
                                |
                                <button class="btn btn-danger" alt="Hapus" data-toggle="modal" data-target="#delete{{$data->id}}"><i class="fas fa-trash-alt"></i></i></button>
                            </td>
                        </tr>
                        @empty
                    @endforelse
                    </tbody>
                </table>
              </div>
            </div>
        </div>
    </section>
</div>
<!-- Model Delete -->

@include('admin.testimoni-admin.testi-admin-create')
@include('admin.testimoni-admin.testi-admin-update')
@include('admin.testimoni-admin.testi-admin-delete')
@endsection

@section('script')
<!-- script internal place -->
<script src="{{asset('https://code.jquery.com/jquery-3.5.1.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js')}}"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection