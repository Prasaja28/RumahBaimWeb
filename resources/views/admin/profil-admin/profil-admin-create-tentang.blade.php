<!-- Modal Tambah Bidang -->
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="ModalCreateTentang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Tambah Data Tentang Kami</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="{{ url('/admin-profil/store-tentang') }}" method="post" enctype="multipart/form-data">
                  @csrf
                        <div class="form-group">
                            <label for="tentang">Paragraf Ke-?</label>
                            <select name="paragraf" class="form-control">
                                <option value="1">Pertama</option>
                                <option value="2">Kedua</option>
                                <option value="3">Ketiga</option>
                                <option value="4">Keempat</option>
                            </select>
                        </div>
                        <div class="form-group">
                          <label for="tentang">Deskripsi Tentang Kami:</label>
                          <textarea type="text" style="min-width: 100%" rows="5" class="form-control form-control-border @error('tentang') is-invalid @enderror" id="tentang" name="tentang" required></textarea>
                          @error('tentang')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                          <p><i>*tarik garis dua samping kanan bawah untuk memperlebar text area</i></p>
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