<!-- Modal Tambah Bidang -->
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="ModalCreateKontak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Tambah Data Kontak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="{{ url('/admin-profil/store-kontak') }}" method="post" enctype="multipart/form-data">
                  @csrf
                      <div class="form-group">
                          <label for="jenis">Jenis :</label>
                          <select class="form-control form-control-border @error('jenis') is-invalid @enderror" id="jenis" name="jenis" required>
                            <option value="alamat">Alamat</option>
                            <option value="email">Email</option>
                            <option value="whatsapp">WhatsApp</option>
                            <option value="instagram">Instagram</option>
                          </select>
                          @error('jenis')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="form-group">
                        <label for="isian">Isian :</label>
                        <input type="text" class="form-control form-control-border @error('isian') is-invalid @enderror" id="isian" placeholder="Isi....." name="isian" value="{{ old('isian') }}" required>
                        @error('isian')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
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