<!-- Modal -->
@foreach ($kontak as $data)
<div class="modal fade bd-example-modal-lg" id="editKontak{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="faqupdate" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="faqupdate">Update Data Kontak</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <form action="{{ url('/admin-profil/update-kontak/'.$data->id) }}" method="post" enctype="multipart/form-data">
                  @method('put')
                  @csrf
                    <div class="form-group">
                        <label for="jenis">Jenis :</label>
                        <select class="form-control form-control-border @error('jenis') is-invalid @enderror" id="jenis" name="jenis" required>
                            @if($data->jenis == "alamat")
                            <option value="alamat" selected>Alamat</option>
                            <option value="email">Email</option>
                            <option value="whatsapp">WhatsApp</option>
                            <option value="instagram">Instagram</option>
                            @endif
                            @if($data->jenis == "email")
                            <option value="alamat">Alamat</option>
                            <option value="email" selected>Email</option>
                            <option value="whatsapp">WhatsApp</option>
                            <option value="instagram">Instagram</option>
                            @endif
                            @if($data->jenis == "whatsapp")
                            <option value="alamat">Alamat</option>
                            <option value="email" >Email</option>
                            <option value="whatsapp" selected>WhatsApp</option>
                            <option value="instagram">Instagram</option>
                            @endif
                            @if($data->jenis == "instagram")
                            <option value="alamat">Alamat</option>
                            <option value="email" >Email</option>
                            <option value="whatsapp" >WhatsApp</option>
                            <option value="instagram" selected>Instagram</option>
                            @endif
                            
                        </select>
                        @error('jenis')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="isian">Isi :</label>
                        <input type="text" class="form-control form-control-border @error('isian') is-invalid @enderror" id="isian" placeholder="Isi....." name="isian" value="{{ $data->isian }}" required>
                        @error('isian')
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
  @endforeach