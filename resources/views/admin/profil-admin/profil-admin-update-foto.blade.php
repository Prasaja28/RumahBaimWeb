<!-- Modal -->
@if ($foto->count() != 0)
@foreach ($foto as $dataFoto)
<div class="modal fade bd-example-modal-lg" id="editFoto{{$dataFoto->id}}" tabindex="-1" role="dialog" aria-labelledby="faqupdate" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="faqupdate">Update Data Video</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="{{ url('/admin-profil/update-foto/'.$dataFoto->id) }}" method="post" enctype="multipart/form-data">
                  @method('put')
                  @csrf
                        <div class="item form-group" style="margin-right:-40px;">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align:left; margin-right: -100px;" >Foto Home</label>
                            <div class="col-md-9 col-sm-6 col-xs-12" style="margin-left:60px;">
                                <input type="file" name="foto_home" id="foto_home" accept=".png, .jpg, .jpeg">
                                <img src="{{ asset($dataFoto->foto) }}" alt="Tidak Ada gambar" style="width:150px; height:100px; margin-top:10px;">
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
  @endforeach
  @endif