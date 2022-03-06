<!-- Modal Tambah Bidang -->
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="ModalCreateVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Tambah Data Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="{{ url('/admin-profil/video-store') }}" method="post" enctype="multipart/form-data">
                  @csrf
                      <div class="form-group">
                          <label for="link">Link :</label>
                          <input type="text" class="form-control form-control-border @error('link') is-invalid @enderror" id="link" placeholder="Link....." name="link" value="{{ old('link') }}" required>
                          @error('link')
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