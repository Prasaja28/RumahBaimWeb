@foreach($tentang as $tentangData)
<div class="modal fade bd-example-modal-lg" id="ModalEditDeskripsi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Edit Data Tentang Kami</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="{{ url('/admin-profile/update-tentang/'.$tentangData->id) }}" method="post" enctype="multipart/form-data">
                  @csrf
                        <div class="form-group">
                          <textarea name="content" id="tentangCkeUpdate">
                              <?php
                                echo htmlspecialchars_decode(stripslashes($tentangData->deskripsi))
                              ?>
                          </textarea>
                        </div>
                      
                      <button type="submit" class="btn btn-primary">Simpan</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </form>
              </div>
              <div class="modal-footer">
        </div>
      </div>
    </div>
  </div>
  @endforeach