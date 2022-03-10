<!-- Modal -->
@if(!empty(Session::get('galeri')))
@foreach (Session::get('galeri') as $dataGaleri)
<div class="modal fade bd-example-modal-lg" id="edit{{$dataGaleri->id}}" tabindex="-1" role="dialog" aria-labelledby="faqupdate" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="faqupdate">Update Data Galeri</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/admin-galeri/update/'.$dataGaleri->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                    <div class="item form-group" style="margin-right:-40px;">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" style="text-align:left; margin-right: -100px;" >Foto Utama</label>
                        <div class="col-md-9 col-sm-6 col-xs-12" style="margin-left:60px;">
                            <input type="file" name="foto_galeri" id="foto_galeri" accept=".png, .jpg, .jpeg">
                            <img src="{{ asset($dataGaleri->foto) }}" alt="Tidak Ada gambar" style="width:150px; height:100px; margin-top:10px;">
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