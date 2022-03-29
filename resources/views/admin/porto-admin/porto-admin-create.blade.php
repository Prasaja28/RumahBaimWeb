<!-- Modal Tambah Bidang -->
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="createPortofolio" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel2">Tambah Data Portofolio</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label class="label label-default">Nama Portofolio</label>
                    <input class="form-control" placeholder="Masukkan Nama Portofolio" id="namaPorto" name="namaPorto">
                </div>
                <div class="form-group">
                    <label class="label label-default">Deskripsi</label>
                    <textarea class="form-control" id="deskripsiPorto" name="deskripsiPorto"></textarea>
                </div>
                <div class="form-group">
                    <label class="label label-default">Masukkan Foto Portofolio</label>
                    <form action="admin-porto/savePhotos" method="POST" class="dropzone" name="photos" id="portoPhotos">
                    @csrf
                    </form>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <button class="btn btn-info" id="simpanPorto">Simpan</button>
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