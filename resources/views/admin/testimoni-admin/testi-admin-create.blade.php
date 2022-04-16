<!-- Modal Tambah Bidang -->
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel2">Tambah Data Testimoni</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/admin-testi/store') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="nama">Nama Customer :</label>
                        <input type="text" class="form-control form-control-border @error('nama') is-invalid @enderror" id="nama" placeholder="nama....." name="nama" value="{{ old('nama') }}" required>
                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="service">Pilih Pelayanan :</label>
                        <select type="text" class="custom-select form-control-border @error('service') is-invalid @enderror" id="service" placeholder="service....." name="service" value="{{ old('service') }}" required>
                            <option selected="Selected" value="" disabled>Pilih Jasa</option>
                            <option value="Desain">Desain</option>
                            <option value="Desain dan Bangun">Desain dan Bangun</option>
                            <option value="Renovasi">Renovasi</option>
                            <option value="Desain Interior">Desain Interior</option>
                        </select>
                        @error('service')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="review">Review Customer :</label>
                        <input type="text" class="form-control form-control-border @error('review') is-invalid @enderror" id="review" placeholder="review....." name="review" value="{{ old('review') }}" required>
                        @error('review')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="item form-group" style="margin-right:-40px;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align:left; margin-right: -100px;" >Masukkan Foto Customer <span class="required">*</span></label>
                        <div class="col-md-9 col-sm-6 col-xs-12" style="margin-left:60px;">
                            <input type="file" name="foto" id="foto" accept=".png, .jpg, .jpeg" required>
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