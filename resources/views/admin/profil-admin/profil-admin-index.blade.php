@extends('/admin/layout-komponen/master')
@section('title','Profil')
@section('css')
<!-- css internal place -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
@endsection
@section('profil-admin','active')
@section('konten')
<!-- Content Body place -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Profil</h1>
        </div>
        <div class="row">
            <div class="col-12">
              <div class="card card-statistic-1">
                <!--<div class="container"><br>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">Tambah Kategori</button><br><br>
                </div>-->
                <div class="container text-center"><br>
                    <h4>Data Video Profil Studio Arsitek</h4>
                </div>
                @forelse($video as $data) 
                    @empty
                    <div class="container"><br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#ModalCreateVideo">Masukan Data Video</button><br><br>
                    </div>
                @endforelse
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Link Video (Youtube)</th>
                            <th>Tanggal Diunggah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($video as $data)
                            <tr>
                                <td>{{$data->link}}</td>
                                <td>{{$data->created_at}}</td>
                                <td class="">
                                    <button class="btn btn-success" alt="Edit" data-toggle="modal" data-target="#editVideo{{$data->id}}"><i class="fas fa-pen-square"></i></button>
                                    |
                                    <button class="btn btn-danger" alt="Hapus" data-toggle="modal" data-target="#deleteVideo{{$data->id}}"><i class="fas fa-trash-alt"></i></i></button>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
                <!-- Tentang Kami -->
                <div class="container text-center"><br>
                    <h4>Data Tentang Kami</h4>
                </div>
                @forelse($tentang as $data) 
                    @empty
                    <div class="container"><br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#ModalCreateTentang">Masukan Data Tentang Kami</button><br><br>
                    </div>
                @endforelse
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Deskripsi</th>
                            <th>Tanggal Diunggah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tentang as $data)
                            <tr>
                                <td size="3">{{$data->deskripsi}}</td>
                                <td>{{$data->created_at}}</td>
                                <td class="">
                                    <button class="btn btn-success" alt="Edit" data-toggle="modal" data-target="#editTentang{{$data->id}}"><i class="fas fa-pen-square"></i></button>
                                    |
                                    <button class="btn btn-danger" alt="Hapus" data-toggle="modal" data-target="#deleteTentang{{$data->id}}"><i class="fas fa-trash-alt"></i></i></button>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
                <!-- Kontak -->
                <div class="container text-center"><br>
                    <h4>Data Kontak</h4>
                </div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Jenis</th>
                            <th>Isi</th>
                            <th>Tanggal Diunggah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                   
                    </tbody>
                    
                </table>
              </div>
            </div>
        </div>
    </section>
</div>
<!-- Model Video -->
@include('admin.profil-admin.profil-admin-create-video')
@include('admin.profil-admin.profil-admin-update-video')
@include('admin.profil-admin.profil-admin-delete-video')

<!-- Model Tentang Kami -->
@include('admin.profil-admin.profil-admin-create-tentang')
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