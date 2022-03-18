<!-- Modal Tambah Bidang -->
<!-- Modal -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css" rel="stylesheet" />
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
                    <form action="{{ url('/admin-profil/store-foto') }}" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">
                    @csrf
                        <div class="needsclick dropzone" id="document-dropzone">
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
  <script>
      var uploadedDocumentMap = {}
      Dropzone.options.documentDropzone = {
         url: '{{ url('/admin-profil/store-foto-media') }}',
         maxFilesize: 2, // MB
         addRemoveLinks: true,
         acceptedFiles: ".jpeg,.jpg,.png,.gif",
         headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}"
         },
         success: function(file, response) {
            $('form').append('<input type="hidden" name="photo[]" value="' + response.name + '">')
            uploadedDocumentMap[file.name] = response.name
         },
         removedfile: function(file) {
            file.previewElement.remove()
            var name = ''
            if (typeof file.file_name !== 'undefined') {
               name = file.file_name
            } else {
               name = uploadedDocumentMap[file.name]
            }
            $('form').find('input[name="photo[]"][value="' + name + '"]').remove()
         }
      }
   </script>