@extends('/admin/layout-komponen/master')
@section('title','Portofolio')
@section('css')
<!-- css internal place -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
@endsection
@section('porto-admin','active')
@section('konten')
<!-- Content Body place -->
<div class="main-content">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
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
                            @if($portos->foto_utama == null)
                                <td><img style="width: 150px;" src= "{{ asset('img/porto-img'.$portos->foto_utama) }}" alt=""></td>
                            @else
                                <td><img style="width: 150px;" src="{{ $portos->foto_utama }}" alt=""></td>
                            @endif
                            <td class="">
                                <a href="{{ url('admin-porto-detail/'.$portos->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></i></a>
                                |
                                <button class="btn btn-success" alt="Edit" data-toggle="modal" data-target="#edit{{$portos->id}}"><i class="fas fa-pen-square"></i></button>
                                |
                                <button class="btn btn-danger" alt="Hapus" data-toggle="modal" data-target="#delete{{$portos->id}}"><i class="fas fa-trash-alt"></i></i></button>
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

@section('js-internal')
<script>
    ClassicEditor
    .create( document.querySelector( '#deskripsiPorto' ) )
    .then( editor => {
        theEditor = editor;
            // console.log( editor );
    } )
    .catch( error => {
            console.error( error );
    } );
    function getDataFromTheEditor(){
        return theEditor.getData();
    }
    Dropzone.autoDiscover = false;
  
    var portoDropzone = new Dropzone(".dropzone", { 
       autoProcessQueue: false,
       maxFilesize: 10,
       uploadMultiple: true,
       addRemoveLinks:true,
       headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
       acceptedFiles: ".jpeg,.jpg,.png,.gif",
       success: function(file, res) {
        //    console.log(res);
       }
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#simpanPorto').click(function(){
        //save database
        var idPorto;
        try {
            var url = '{{ route("storePorto") }}';
            var nama = document.getElementById("nama_desain").value;
            var desk = getDataFromTheEditor();
            $.ajax({
                type : "POST",
                url : url,
                dataType:'json',
                data: { 
                    nama: nama, 
                    desk: desk 
                }, 
                success:function(response){
                    idPorto = response;
                    portoDropzone.processQueue();
                    console.log(idPorto);

                    location.reload();
                }
            });
        }
        catch(err) {
            console.log(err.message);
        }
        

    });
</script>
@endsection