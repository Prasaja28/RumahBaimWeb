<!-- Modal Tambah Bidang -->
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="ModalCreateVideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Tambah Data Foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                    <form action="{{ url('/admin-profil/store-foto') }}" method="post" enctype="multipart/form-data" class="dropzone">
                    @csrf
                        <div class="item form-group" style="margin-right:-40px;">
                            <!-- <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align:left; margin-right: -100px;" >Masukkan Foto <span class="required">*</span></label> -->
                            <div>
                                <h3>Masukkan Foto Disini</h3>
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

<script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize         :       1,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };
</script>