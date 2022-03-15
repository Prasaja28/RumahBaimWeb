<!-- Modal -->
@if ($tentang->count() != 0)
@foreach($tentang as $dataTentang)
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
                  <form action="{{ url('/admin-profil/update-tentang/'.$dataTentang->id) }}" method="post" enctype="multipart/form-data">
                  @method('put')
                  @csrf
                      <div class="form-group">
                        <label for="tentang">Paragraf Ke-?</label>
                        <select name="paragraf" class="form-control">
                            @if($dataTentang->paragraf == 1)
                            <option value="1" selected>Pertama</option>
                            <option value="2">Kedua</option>
                            <option value="3">Ketiga</option>
                            <option value="4">Keempat</option>
                            @elseif($dataTentang->paragraf == 2)
                            <option value="1">Pertama</option>
                            <option value="2" selected>Kedua</option>
                            <option value="3">Ketiga</option>
                            <option value="4">Keempat</option>
                            @elseif($dataTentang->paragraf == 3)
                            <option value="1">Pertama</option>
                            <option value="2">Kedua</option>
                            <option value="3" selected>Ketiga</option>
                            <option value="4">Keempat</option>
                            @elseif($dataTentang->paragraf == 4)
                            <option value="1">Pertama</option>
                            <option value="2">Kedua</option>
                            <option value="3">Ketiga</option>
                            <option value="4"selected>Keempat</option>
                            @endif
                        </select>
                      </div>
                      <div class="form-group">
                          <label for="tentang">Deskripsi :</label>
                          <textarea type="text" rows="5" class="form-control form-control-border @error('tentang') is-invalid @enderror" id="tentang" name="tentang" required>{{ $dataTentang->deskripsi }}</textarea>
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
  @endforeach
  @endif