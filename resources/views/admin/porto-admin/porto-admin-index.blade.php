@extends('/admin/layout-komponen/master')
@section('title','Portofolio')
@section('css')
<!-- css internal place -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
@endsection
@section('porto-admin','active')
@section('konten')
<!-- Content Body place -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Portofolio</h1>
        </div>
        <div class="row">
            <div class="col-12">
              <div class="card card-statistic-1">
                <div class="container"><br>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#createPortofolio">Tambah Data</button><br><br>
                </div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Desain</th>
                            <th>Foto Utama</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($porto as $portos)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$portos->nama_desain}}</td>
<<<<<<< HEAD
=======
                            <td>{{$portos->deskripsi}}</td>
>>>>>>> 8530c88ca8ce647574b7a588ebb22d5ff02eac11
                            @if($portos->foto_utama == null)
                                <td><img style="width: 150px;" src= "{{ asset('img/porto-img'.$portos->file_path) }}" alt=""></td>
                            @else
                                <td><img style="width: 150px;" src="{{ $portos->foto_utama }}" alt=""></td>
                            @endif
                            <td class="">
                                <button class="btn btn-info" alt="View" data-toggle="modal" data-target="#view{{$portos->id}}"><i class="fas fa-eye"></i></i></button>
                                |
                                <button class="btn btn-danger" alt="Hapus" data-toggle="modal" data-target="#delete{{$portos->id}}"><i class="fas fa-trash-alt"></i></i></button>
                                |
                                <button class="btn btn-success" alt="Edit" data-toggle="modal" data-target="#edit{{$portos->id}}"><i class="fas fa-pen-square"></i></button>
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
@include('admin.porto-admin.porto-admin-create')
<!-- Model Delete -->
@include('admin.porto-admin.porto-admin-delete')
<!-- Model Update -->
@include('admin.porto-admin.porto-admin-update')
@include('admin.porto-admin.porto-admin-detail')
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