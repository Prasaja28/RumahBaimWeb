<!-- Modal Tambah Bidang -->
<!-- Modal -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

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
                          <label for="tentang">Deskripsi Tentang Kami:</label>
                          <textarea type="text" style="min-width: 100%" rows="5" class="form-control form-control-border @error('tentang') is-invalid @enderror" id="summernote" name="tentang" required></textarea>
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

  <script>
      $('#summernote').summernote({
        placeholder: 'Silahkan diisi..',
        tabsize: 2,
        height: 100
      });
    </script>