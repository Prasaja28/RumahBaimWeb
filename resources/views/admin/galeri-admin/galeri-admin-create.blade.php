<!-- Modal Tambah Bidang -->

<div class="modal fade bd-example-modal-lg" id="tambahGaleri{{Session::get('idPorto')}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel2">Tambah Data Galeri</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/admin-galeri/store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" id="idPorto" name="idPorto" value="{{Session::get('idPorto')}}" hidden>
                    </div>
                    
                    <div class="item form-group" style="margin-right:-40px;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align:left; margin-right: -100px;" >Masukkan Foto <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-6 col-xs-12" style="margin-left:60px;">
                            <input type="file" name="foto_galeri" id="foto_galeri" accept=".png, .jpg, .jpeg" required>
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

<!-- End modal Tambah -->