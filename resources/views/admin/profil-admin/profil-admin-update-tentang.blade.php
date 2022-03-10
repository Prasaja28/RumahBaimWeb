<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="editTentang{{$dataTentang->id}}" tabindex="-1" role="dialog" aria-labelledby="faqupdate" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="faqupdate">Update Data Tentang Kami</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="{{ url('/admin-profil/update-tentang/'.$data->id) }}" method="post" enctype="multipart/form-data">
                  @method('put')
                  @csrf
                      <div class="form-group">
                          <label for="tentang">Deskripsi :</label>
                          <textarea type="text" rows="5" class="form-control form-control-border @error('tentang') is-invalid @enderror" id="tentang" placeholder="Deskripsi....." name="tentang" required>{{ $data->deskripsi }}</textarea>
                          @error('tentang')
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