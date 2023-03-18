@include('admin.layout.head')
@include('admin.layout.sidebar')
@include('admin.layout.navbar')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Form Edit Halaman Baru</h6>
          </div>
          <div class="mb-4">
              <div class="card-header pb-0">
                <a href="{{ route('halaman.index') }}" class="btn btn-dark btn-sm">
                    <<&nbsp; Kembali
                </a>
              </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            @include('admin.dashboard.pesan')
            <form class="p-3" action="{{ route('halaman.update', $data->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                  <label for="judul" class="form-label">Judul</label>
                  <input type="text"
                    class="form-control form-control-sm" name="judul" id="judul" aria-describedby="helpId" placeholder="Judul" value="{{ $data->judul }}">
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label">Isi</label>
                    <textarea name="isi" id="isi" class="form-control summernote" rows="15">{{ $data->isi }}</textarea>
                </div>
                <button type="submit" class="btn btn-info btn-sm" name="simpan" id="simpan">SIMPAN</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@include('admin.layout.footer')

<script>
    $(document).ready(function() {
        $('.summernote').summernote({
            tabsize: 3,
            height: 200
        });
        setTimeout(function(){
          $("#msg-eror").slideToggle("slow");
        //   $("#msg-success").slideToggle("slow");
      },3000);
    })
</script>