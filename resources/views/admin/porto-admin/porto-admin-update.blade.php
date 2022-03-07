<!-- Modal -->
@foreach ($porto as $portos)
<div class="modal fade bd-example-modal-lg" id="edit{{$portos->id}}" tabindex="-1" role="dialog" aria-labelledby="faqupdate" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="faqupdate">Update Data Portofolio</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/admin-porto/update/'.$portos->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                        <label for="nama_desain">Nama Desain :</label>
                        <input type="text" class="form-control form-control-border @error('nama_desain') is-invalid @enderror" id="nama_desain" placeholder="Nama....." name="nama_desain" value="{{ $portos->nama_desain }}" required>
                        @error('nama_desain')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi :</label>
                        <input type="text" class="form-control form-control-border @error('deskripsi') is-invalid @enderror" id="deskripsi" placeholder="Deskripsi....." name="deskripsi" value="{{ $portos->deskripsi }}" required>
                        @error('deskripsi')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="item form-group" style="margin-right:-40px;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align:left; margin-right: -100px;" >Foto Utama</label>
                        <div class="col-md-9 col-sm-6 col-xs-12" style="margin-left:60px;">
                            <input type="file" name="foto_utama" id="foto_utama" accept=".png, .jpg, .jpeg">
                            <img src="{{ asset($portos->foto_utama) }}" alt="Tidak Ada gambar" style="width:150px; height:100px; margin-top:10px;">
                            <input type="text" hidden class="form-control @error('foto_utama2') is-invalid @enderror" id ="foto_utama2" name="foto_utama2" value="{{$portos->foto_utama}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>

            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach