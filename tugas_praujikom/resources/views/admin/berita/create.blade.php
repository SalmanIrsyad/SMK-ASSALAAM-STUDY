<div class="modal fade" id="addberita" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form action="{{ route('store') }}" method="post"  enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah berita</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div class="form-group">
                    <label for="">Judul berita</label>
                    <input type="text" name="judul_berita"
                    class="form-control @error('judul_berita') is-invalid @enderror" id="">
                    @error('judul_berita')
                    <span class="invalid-feedback" role="">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="form-group">
                    <label for="">Isi Berita</label>
                    <input type="text" name="isi_berita"
                    class="form-control @error('isi_berita') is-invalid @enderror" id="">
                    @error('isi_berita')
                    <span class="invalid-feedback" role="">
                    <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>

                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>