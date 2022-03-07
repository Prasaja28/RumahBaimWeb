@extends('/admin/layout-komponen/master')
@section('title','Akun')
@section('css')
<!-- css internal place -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
@endsection
@section('akun-admin','active')
@section('konten')
<!-- Content Body place -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Akun Admin</h1>
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
                            <th>Nama</th>
                            <th>password</th>
                            <th>email</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($user as $users)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->password}}</td>
                            <td>{{$users->email}}</td>
                            @if($users->status == 1)
                                <td>Aktif</td>
                            @else
                                <td>NonAktif</td>
                            @endif
                            <td class="text-center">
                            @if($users->status == 1)
                                <button class="btn btn-danger" alt="Hapus" data-toggle="modal" data-target="#delete{{$users->id}}"><i class="fas fa-trash-alt"></i></i></button>
                                |
                            @endif
                                <button class="btn btn-success" alt="Edit" data-toggle="modal" data-target="#edit{{$users->id}}"><i class="fas fa-pen-square"></i></button>
                            </td>
                        </tr>
                        @empty
                        <div class="alert alert-danger">
                            Data Akun belum Tersedia
                        </div>
                    @endforelse
                    </tbody>
                    
                </table>
              </div>
            </div>
        </div>
    </section>
</div>
<!-- Model Delete -->
@include('admin.akun-admin.akun-admin-delete')
<!-- Model Update -->
@include('admin.akun-admin.akun-admin-update')
@include('admin.akun-admin.akun-admin-create')
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