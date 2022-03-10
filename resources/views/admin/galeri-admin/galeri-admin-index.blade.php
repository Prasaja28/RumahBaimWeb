@extends('/admin/layout-komponen/master')
@section('title','Galeri Portofolio')
@section('css')
<!-- css internal place -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
@endsection
@section('galeri-admin','active')
@section('konten')
<!-- Content Body place -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Galeri Portofolio</h1>
        </div>
        <div class="row">
            <div class="col-12">
              <div class="card card-statistic-1">
                <div class="container"><br>
                    <form action="{{ url('/admin-galeri/show') }}" method="GET" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-3">
                                <select class="form-control" name="selectPorto">
                                    @if ($porto != null)
                                    @foreach ($porto as $dataPorto)
                                    <option value="{{$dataPorto->id}}">{{$dataPorto->nama_desain}}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                            <div class="col-lg-2">
                                <button class="btn btn-primary" type="submit">Cari Data</button>
                            </div>
                        </div>
                    </form>
                </div>
                <br>
                @if (session()->get('detail'))
                <?php $detail = session()->get('detail') ?>    
                    @foreach ($detail as $dataDetail)
                        <div class="row">
                            <div class="col-lg-3">
                                <h5 class="ml-4">{{$dataDetail->nama_desain}}</h5>
                            </div>
                        </div>
                        <div class="container"><br>
                            <button class="btn btn-primary" data-toggle="modal" data-target="#tambahGaleri{{$dataDetail->id}}">Tambah Data</button><br><br>
                        </div>
                    @endforeach
                @endif
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Tanggal Diunggah</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @if (!empty(session()->get('galeri')))
                    <?php $galeri = session()->get('galeri') ?>
                    @forelse($galeri as $data)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            @if($data->foto == null)
                                <td><img style="width: 150px;" src= "{{ asset('img/porto-img'.$data->foto) }}" alt=""></td>
                            @else
                                <td><img style="width: 150px;" src="{{ $data->foto }}" alt=""></td>
                            @endif
                            <td>{{$data->created_at}}</td>
                            <td class="">
                                <button class="btn btn-success" alt="Edit" data-toggle="modal" data-target="#edit{{$data->id}}"><i class="fas fa-pen-square"></i></button>
                                |
                                <button class="btn btn-danger" alt="Hapus" data-toggle="modal" data-target="#delete{{$data->id}}"><i class="fas fa-trash-alt"></i></i></button>
                            </td>
                        </tr>
                        @empty
                    @endforelse
                    @endif
                    </tbody>
                </table>
              </div>
            </div>
        </div>
    </section>
</div>


@include('admin.galeri-admin.galeri-admin-create')
@include('admin.galeri-admin.galeri-admin-update')
@include('admin.galeri-admin.galeri-admin-delete')
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