@include('admin.layout.head')
@include('admin.layout.sidebar')
@include('admin.layout.navbar')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Form edit page experience</h6>
          </div>
          <div class="mb-4">
              <div class="card-header pb-0">
                <a href="{{ route('experience.index') }}" class="btn btn-dark btn-sm">
                    <<&nbsp; Kembali
                </a>
              </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            @include('admin.dashboard.pesan')
            <form class="p-3" action="{{ route('experience.update', $data->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                  <label for="judul" class="form-label">Posisi</label>
                  <input type="text"
                    class="form-control form-control-sm" name="judul" id="judul" aria-describedby="helpId" placeholder="Posisi" value="{{ $data->judul }}">
                </div>
                <div class="mb-3">
                  <label for="info1" class="form-label">Nama Perusahaan</label>
                  <input type="text"
                    class="form-control form-control-sm" name="info1" id="info1" aria-describedby="helpId" placeholder="Nama Perusahaan" value="{{ $data->info1 }}">
                </div>
                <div class="mb-3">
                  <div class="row">
                    <div class="col-auto">
                      <label for="info1" class="form-label">Tanggal Mulai</label>
                    </div>
                    <div class="col-auto">
                      <input type="date" class="form-control form-control-sm" name="tgl_mulai" placeholder="dd/mm/yyy" value="{{ $data->tgl_mulai }}">
                    </div>
                    <div class="col-auto">
                      <label for="info1" class="form-label">Tanggal Akhir</label>
                    </div>
                    <div class="col-auto">
                      <input type="date" class="form-control form-control-sm" name="tgl_akhir" placeholder="dd/mm/yyy" value="{{ $data->tgl_akhir }}">
                    </div>
                  </div>
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