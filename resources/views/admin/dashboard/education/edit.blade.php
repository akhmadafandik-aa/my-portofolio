@include('admin.layout.head')
@include('admin.layout.sidebar')
@include('admin.layout.navbar')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Form edit page education</h6>
          </div>
          <div class="mb-4">
              <div class="card-header pb-0">
                <a href="{{ route('education.index') }}" class="btn btn-dark btn-sm">
                    <<&nbsp; Kembali
                </a>
              </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            @include('admin.dashboard.pesan')
            <form class="p-3" action="{{ route('education.update', $data->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="mb-3">
                  <label for="judul" class="form-label">Universitas</label>
                  <input type="text"
                    class="form-control form-control-sm" name="judul" id="judul" aria-describedby="helpId" placeholder="Universitas" value="{{ $data->judul }}">
                </div>
                <div class="mb-3">
                  <label for="info1" class="form-label">Nama Fakultas</label>
                  <input type="text"
                    class="form-control form-control-sm" name="info1" id="info1" aria-describedby="helpId" placeholder="Nama Fakultas" value="{{ $data->info1 }}">
                </div>
                <div class="mb-3">
                  <label for="info2" class="form-label">Nama Prodi</label>
                  <input type="text"
                    class="form-control form-control-sm" name="info2" id="info2" aria-describedby="helpId" placeholder="Nama Prodi" value="{{ $data->info2 }}">
                </div>
                <div class="mb-3">
                  <label for="info3" class="form-label">IPK</label>
                  <input type="text"
                    class="form-control form-control-sm" name="info3" id="info3" aria-describedby="helpId" placeholder="IPK" value="{{ $data->info3 }}">
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