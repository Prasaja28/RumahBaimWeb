@extends('/admin/layout-komponen/master')
@section('title','Profil')
@section('css-internal')
<!-- css internal place -->
<style>
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }
    
    .switch input { 
      opacity: 0;
      width: 0;
      height: 0;
    }
    
    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }
    
    input:checked + .slider {
      background-color: #2196F3;
    }
    
    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }
    
    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }
    
    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }
    
    .slider.round:before {
      border-radius: 50%;
    }
    </style>
@endsection
@section('profile-admin','active')
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
                  <div class="container"><br>
                    <div class="text-center mw-100">
                        <p class="h5">Data Foto <i>Home</i> </p>
                    </div>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#ModalCreateFotoHome">Tambah Data Foto</button><br><br>
                </div>
                <table id="tabelFoto" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th class="text-center">No</th>
                            <th>Foto</th>
                            <th class="text-center">Tampil?</th>
                            <th class="text-center">Hapus?</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($foto as $itemFoto)
                        <tr>
                            <td class="text-center">{{$loop->iteration}}</td>
                            <td><img style="width: 150px;" src="{{url($itemFoto->foto)}}" alt="foto"></td>
                            <td class="text-center" >
                                @if($itemFoto->status == 1)
                                <label class="switch">
                                    <input type="checkbox" class="updateStatusFoto" data-id="{{$itemFoto->id}}" checked>
                                    <span class="slider round"></span>
                                </label>    
                                @else
                                <label class="switch">
                                    <input type="checkbox" class="updateStatusFoto" data-id="{{$itemFoto->id}}">
                                    <span class="slider round"></span>
                                </label> 
                                @endif
                            </td>
                            <td class="text-center">
                                <button class="btn btn-danger" alt="Hapus" data-toggle="modal" data-target="#deleteFoto{{$itemFoto->id}}"><i class="fas fa-trash-alt"></i></i></button>
                            </td>
                        </tr>
                        
                        
                        @endforeach
                    </tbody>
                </table>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
              <div class="card card-statistic-1">
                  <div class="container"><br>
                    <div class="text-center mw-100">
                        <p class="h5">Data Deskripsi Tentang Kami </p>
                    </div>
                    @if($tentang->count() == 0)
                    <button class="btn btn-primary" data-toggle="modal" data-target="#ModalCreateDeskripsi">Tambah Deskripsi Tentang Kami</button><br><br>
                    @else 
                    <button class="btn btn-success" data-toggle="modal" data-target="#ModalEditDeskripsi">Edit Deskripsi Tentang Kami</button><br><br>
                    @endif
                </div>
                <table id="tabelFoto" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>Deskripsi</th>
                            <th class="text-center">Terakhir Diperbarui</th>
                            <th class="text-center">Hapus?</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($tentang as $itemDesk)
                        <tr>
                            <td>
                                <?php
                                echo htmlspecialchars_decode(stripslashes($itemDesk->deskripsi))
                                ?>
                            </td>
                            <td class="text-center">
                               @if($itemDesk->updated_at == null)
                               {{$itemDesk->created_at}}
                               @else
                               {{$itemDesk->updated_at}}
                               @endif
                            </td>
                            <td class="text-center">
                                <button class="btn btn-danger" alt="Hapus" data-toggle="modal" data-target="#deleteDesk{{$itemDesk->id}}"><i class="fas fa-trash-alt"></i></i></button>
                            </td>
                            
                        <tr>
                        @empty
                        @endforelse
                    </tbody>
                </table>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
              <div class="card card-statistic-1">
                  <div class="container"><br>
                    <div class="text-center mw-100">
                        <p class="h5">Data Kontak</p>
                    </div>
                </div>
                <div class="row p-4">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="label label-default" for="alamat">Alamat</label>
                            <input name="alamat" class="form-control" id="input_alamat" value="{{$kontak[0]->isian}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="label label-default" for="instagram">Instagram</label>
                            <input name="instagram" class="form-control" id="input_instagram" value="{{$kontak[3]->isian}}">
                        </div>
                    </div>
                </div>
                <div class="row p-4">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="label label-default" for="email">Email</label>
                            <input name="email" class="form-control" id="input_email" value="{{$kontak[1]->isian}}">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="label label-default" for="whatsapp">WhatsApp</label>
                            <input name="whatsapp" class="form-control" id="input_whatsapp" value="{{$kontak[2]->isian}}">
                        </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
    </section>
</div>
<!-- Model Delete -->
@include('admin.profile-admin.profile-admin-create-foto')
@include('admin.profile-admin.profile-admin-create-tentang')
@if($foto->count() != 0)
    @include('admin.profile-admin.profile-admin-delete-foto')
@endif
@if($tentang->count() != 0)
    @include('admin.profile-admin.profile-admin-delete-tentang')
    @include('admin.profile-admin.profile-admin-update-tentang')
@endif

@endsection

@section('script')
<!-- script internal place -->

<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection

@section('js-internal')
<script type="text/javascript">
    $('#tabelFoto').DataTable();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    Dropzone.autoDiscover = false;
  
    var myDropzone = new Dropzone(".dropzone", { 
       autoProcessQueue: false,
       maxFilesize: 1,
       uploadMultiple: true,
       addRemoveLinks:true,
       headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
       acceptedFiles: ".jpeg,.jpg,.png,.gif",
       success: function(file, res) {
           console.log(res);
       }
    });
  
    $('#btn_uploadFiles').click(function(){
       myDropzone.processQueue();
       setTimeout(function() {$('#ModalCreateFotoHome').modal('hide');},6000);
       window.location.href = "{{ route('admin-profile')}}";
    });

    $('.updateStatusFoto').click(function(){
        var id = $(this).attr('data-id');
        console.log(id);
        if($(this).is(':checked')){
            var status = 1;
        }else{
            var status = 0;
        }
        console.log(status);
        var url = '{{ route("updateFoto", ":id") }}';
        url = url.replace(':id', id);
        
        $.ajax({
            type : "POST",
            url : url,
            dataType:'json',
            data: { 
                id: id, 
                status: status 
            }, 
            success:function(response){
                console.log(response);
            }
        });

    });
    
    ClassicEditor
    .create( document.querySelector( '#tentangEditor' ) )
    .then( editor => {
            console.log( editor );
    } )
    .catch( error => {
            console.error( error );
    } );
    
    ClassicEditor
    .create( document.querySelector( '#tentangCkeUpdate' ) )
    .then( editor => {
            console.log( editor );
    } )
    .catch( error => {
            console.error( error );
    } );

    $('#input_alamat').blur(function(){
        console.log('blur:ON');
        var alamat = document.getElementById("input_alamat").value;
        var urlAlamat = '{{route("storeKontak")}}';
        var status = "alamat";
        console.log(alamat);
        $.ajax({
            type : "POST",
            url : urlAlamat,
            dataType:'json',
            data: {  
                status: status,
                data: alamat 
            }, 
            success:function(response){
                console.log(response);
            }
        })
    })
    $('#input_instagram').blur(function(){
        // console.log('blur:ON');
        var ig = document.getElementById("input_instagram").value;
        var urlIG = '{{route("storeKontak")}}';
        var status = "instagram";
        // console.log(alamat);
        $.ajax({
            type : "POST",
            url : urlIG,
            dataType:'json',
            data: {  
                status: status,
                data: ig 
            }, 
            success:function(response){
                console.log(response);
            }
        })
    })
    $('#input_email').blur(function(){
        // console.log('blur:ON');
        var email = document.getElementById("input_email").value;
        var urlEmail = '{{route("storeKontak")}}';
        var status = "email";
        // console.log(alamat);
        $.ajax({
            type : "POST",
            url : urlEmail,
            dataType:'json',
            data: {  
                status: status,
                data: email 
            }, 
            success:function(response){
                console.log(response);
            }
        })
    })
    $('#input_whatsapp').blur(function(){
        // console.log('blur:ON');
        var wa = document.getElementById("input_whatsapp").value;
        var urlWA = '{{route("storeKontak")}}';
        var status = "whatsapp";
        // console.log(alamat);
        $.ajax({
            type : "POST",
            url : urlWA,
            dataType:'json',
            data: {  
                status: status,
                data: wa 
            }, 
            success:function(response){
                console.log(response);
            }
        })
    })


</script>


@endsection