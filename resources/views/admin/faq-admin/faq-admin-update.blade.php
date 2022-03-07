<!-- Modal -->
@foreach ($faq as $data)
<div class="modal fade bd-example-modal-lg" id="edit{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="faqupdate" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="faqupdate">Update Data FAQ</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/admin-faq/update/'.$data->id) }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                    <div class="form-group">
                        <label for="pertanyaan">Pertanyaan :</label>
                        <input type="text" class="form-control form-control-border @error('pertanyaan') is-invalid @enderror" id="pertanyaan" placeholder="Pertanyaan....." name="pertanyaan" value="{{ $data->pertanyaan }}" required>
                        @error('pertanyaan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jawaban">Jawaban :</label>
                        <input type="text" class="form-control form-control-border @error('jawaban') is-invalid @enderror" id="jawaban" placeholder="Jawaban....." name="jawaban" value="{{ $data->jawaban }}" required>
                        @error('jawaban')
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