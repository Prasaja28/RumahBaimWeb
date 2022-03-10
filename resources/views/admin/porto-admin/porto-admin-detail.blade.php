<!-- Modal -->
@foreach ($porto as $portos)
<div class="modal fade bd-example-modal-lg" id="view{{$portos->id}}" tabindex="-1" role="dialog" aria-labelledby="faqupdate" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="faqupdate">Lihat Detail Portofolio</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h6>{{ $portos->nama_desain }}</h6>
                        <img src="{{ asset($portos->foto_utama) }}" alt="Tidak Ada gambar" style="width:150px; height:100px; margin-top:10px;"><br><br>
                        <p><b>Deskripsi :</b> {{ $portos->deskripsi }}</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach