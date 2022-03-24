@extends('/admin/layout-komponen/master')
@section('title','Profil')
@section('css')
<!-- css internal place -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
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
                    <h4>Data Foto Bagian Depan</h4>
                </div>
                    <div class="container"><br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#ModalCreateFotoHome">Masukan Data Foto</button><br><br>
                    </div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Urutan Tampil</th>
                            <th>Tanggal Diunggah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($foto as $dataFoto)
                            <tr>
                                @if($dataFoto->foto == null)
                                    <td><img style="width: 150px;" src= "{{ asset('img/profil-img'.$dataFoto->foto) }}" alt=""></td>
                                @else
                                    <td><img style="width: 150px;" src="{{ $dataFoto->foto }}" alt=""></td>
                                @endif
                                @if($dataFoto->status == 1)
                                    <td>Pertama</td>
                                @else
                                    <td>Kedua</td>
                                @endif
                                <td>{{$dataFoto->created_at}}</td>
                                <td class="">
                                    <button class="btn btn-success" alt="Edit" data-toggle="modal" data-target="#editFoto{{$dataFoto->id}}"><i class="fas fa-pen-square"></i></button>
                                    |
                                    <button class="btn btn-danger" alt="Hapus" data-toggle="modal" data-target="#deleteFoto{{$dataFoto->id}}"><i class="fas fa-trash-alt"></i></i></button>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
                <!-- Tentang Kami -->
                <div class="container text-center"><br>
                    <h4>Data Tentang Kami</h4>
                </div>
                @if($tentang->count() < 4) 
                    <div class="container"><br>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#ModalCreateTentang">Masukan Data Tentang Kami</button><br><br>
                    </div>
                @endif
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Deskripsi</th>
                            <th>Tanggal Diunggah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tentang as $dataTentang)
                            <tr>
                                <td>{{$dataTentang->deskripsi}}</td>
                                <td>{{$dataTentang->created_at}}</td>
                                <td class="">
                                    <button class="btn btn-success" alt="Edit" data-toggle="modal" data-target="#editTentang{{$dataTentang->id}}"><i class="fas fa-pen-square"></i></button>
                                    |
                                    <button class="btn btn-danger" alt="Hapus" data-toggle="modal" data-target="#deleteTentang{{$dataTentang->id}}"><i class="fas fa-trash-alt"></i></i></button>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
                <!-- Kontak -->
                <div class="container text-center"><br>
                    <h4>Data Kontak</h4>
                </div>
                @if(count($kontak) < 4)
                <div class="container"><br>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#ModalCreateKontak">Masukan Data Kontak</button><br><br>
                </div>
                @endif
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
                        @foreach($kontak as $data)
                            <tr>
                                <td>{{$data->jenis}}</td>
                                <td>{{$data->isian}}</td>
                                <td>{{$data->created_at}}</td>
                                <td class="">
                                    <button class="btn btn-success" alt="Edit" data-toggle="modal" data-target="#editKontak{{$data->id}}"><i class="fas fa-pen-square"></i></button>
                                    |
                                    <button class="btn btn-danger" alt="Hapus" data-toggle="modal" data-target="#deleteKontak{{$data->id}}"><i class="fas fa-trash-alt"></i></i></button>
                                    
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    
                </table>
              </div>
            </div>
        </div>
    </section>
</div>


<!-- Model Tentang Kami -->
@if (!empty($tentang))
@include('admin.profil-admin.profil-admin-create-tentang')
@include('admin.profil-admin.profil-admin-update-tentang')
@include('admin.profil-admin.profil-admin-delete-tentang')
@endif
<!-- Model Kontak -->
@if (!empty($kontak))
@include('admin.profil-admin.profil-admin-create-kontak')
@include('admin.profil-admin.profil-admin-update-kontak')
@include('admin.profil-admin.profil-admin-delete-kontak')
@endif
<!-- Model Video -->
@if (!empty($foto))
@include('admin.profil-admin.profil-admin-create-foto')
@include('admin.profil-admin.profil-admin-update-foto')
@include('admin.profil-admin.profil-admin-delete-foto')
@endif
@endsection


@section('script')
<!-- script internal place -->
<script src="{{asset('https://code.jquery.com/jquery-3.5.1.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection

@section('js-internal')
<script type="text/javascript">
  
    Dropzone.autoDiscover = false;
  
    var myDropzone = new Dropzone(".dropzone", { 
       autoProcessQueue: false,
       maxFilesize: 1,
       uploadMultiple: true,
       headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
       acceptedFiles: ".jpeg,.jpg,.png,.gif",
       success: function(file, res) {
           console.log(res);
       }
    });
  
    $('#btn_uploadFiles').click(function(){
       myDropzone.processQueue();
    });
      
</script>

@endsection