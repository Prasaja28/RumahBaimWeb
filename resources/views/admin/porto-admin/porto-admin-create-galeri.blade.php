<!-- Modal Tambah Bidang -->
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="tambahGaleri" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel2">Tambah Galeri</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="label label-default">Masukkan Foto Galeri</label>
                    <form action="{{ url('admin-porto/save-galeri/'.$porto[0]['id'])}}" method="POST" class="dropzone" name="photos" id="portoPhotos">
                    @csrf
                    </form>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <button class="btn btn-info" id="simpanGaleri">Simpan</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
            </div>
        </div>
    </div>
</div>
<!-- End modal Tambah -->