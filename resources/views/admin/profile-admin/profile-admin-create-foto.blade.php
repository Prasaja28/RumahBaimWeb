<div class="modal bd-example-modal-lg" id="ModalCreateFotoHome" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Tambah Data Foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body text-center">
                  <form action="/admin-profile/store-foto" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">
                  @csrf
                        
                  </form>
                  <br>
                  <div class="row">
                     <div class="col-lg-4"></div>
                     <div class="col-lg-2">
                        <button type="submit" class="btn btn-success" id="btn_uploadFiles">Simpan</button>
                     </div>
                     <div class="col-lg-2">
                        <button type="button" class="btn btn-danger" data-dismiss="modal" >Tutup</button>
                     </div>
                     <div class="col-lg-4"></div>
                  </div>
              </div>
              <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  <!-- End modal Tambah -->