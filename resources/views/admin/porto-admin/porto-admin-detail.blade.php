@extends('/admin/layout-komponen/master')
@section('title','Portofolio')
@section('css-internal')
<!-- css internal place -->
<style>
.deskripsi-porto p{
 margin-bottom: 0px;
}
</style>
@endsection
@section('konten')
<!-- Content Body place -->
<div class="main-content">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <section class="section">
        <div class="section-header">
            <h1>Detail Portofolio</h1>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card card-statistic-1 p-3">
              <div class="container"><br>
                  <a href="{{url('/admin-porto')}}" class="btn btn-info">Kembali</a><br><br>
              </div>
              <div class="container text-center">
                @if($porto->count() != 0)
                  <p>{{$porto[0]['nama_desain']}}</p>
                  <img style="width: 150px;" src="{{ url($porto[0]['foto_utama']) }}"><br>
                  <div class="deskripsi-porto">{!! $porto[0]['deskripsi'] !!}</div>
                @endif
              </div>
              <br>
              <div class="container">
                <button class="btn btn-primary" data-toggle="modal" data-target="#tambahGaleri">Tambah Galeri</button>
              </div>
              <br>
              <table id="tabel_galeri" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                      <tr>
                          <th>Foto</th>
                          <th class="text-center">Waktu Diunggah</th>
                          <th class="text-center">Hapus?</th>
                      </tr>
                  </thead>
                  <tbody>
                    @forelse($galeri as $data)
                      <tr>
                        <td>
                          <img style="width: 150px;" src="{{url($data->foto)}}" >
                        </td>
                        <td  class="text-center">{{$data->created_at}}</td>
                        <td class="text-center">
                          <button class="btn btn-danger" alt="Hapus" data-toggle="modal" data-target="#deleteFoto{{$data->id}}"><i class="fas fa-trash-alt"></i></i></button>
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

@endsection



@section('js-internal')
<script>
    $('#tabel_galeri').DataTable();
</script>
@endsection