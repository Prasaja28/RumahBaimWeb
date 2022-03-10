<!-- Modal -->
@if (Session::get('galeri'))
@foreach (Session::get('galeri') as $dataGaleri)
<div class="modal fade" id="delete{{$dataGaleri->id}}" tabindex="-1" role="dialog" aria-labelledby="portoDELETE" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="portoDELETE">Delete Data Galeri</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                    <p>Apakah Anda yakin untuk menghapus foto ?</p>
                   
            </div>
            <div class="modal-footer">
                <a href="{{ url('/admin-galeri/delete/'.$dataGaleri->id)}}" class="btn btn-danger">Delete</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endforeach
@endif