@include('admin.layout.head')
@include('admin.layout.sidebar')
@include('admin.layout.navbar')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Form Pengaturan Halaman</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            @include('admin.dashboard.pesan')
            <form class="p-3" action="{{ route('pengaturanhalaman.update') }}" method="POST">
                @csrf
                <div class="form-group row">
                  <label class="col-sm-2">About</label>
                  <div class="col-sm-9">
                      <select class="form-control form-control-sm" name="_halaman_about">
                          <option value="">-pilih-</option>
                          @foreach ($datahalaman as $item)
                              <option value="{{ $item->id }}"
                                  {{ get_meta_value('_halaman_about') == $item->id ? 'selected' : '' }}>
                                  {{ $item->judul }}</option>
                          @endforeach
                      </select>
                  </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Interest</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-sm" name="_halaman_interest">
                            <option value="">-pilih-</option>
                            @foreach ($datahalaman as $item)
                                <option value="{{ $item->id }}"
                                    {{ get_meta_value('_halaman_interest') == $item->id ? 'selected' : '' }}>
                                    {{ $item->judul }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2">Award</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-sm" name="_halaman_award">
                            <option value="">-pilih-</option>
                            @foreach ($datahalaman as $item)
                                <option value="{{ $item->id }}"
                                    {{ get_meta_value('_halaman_award') == $item->id ? 'selected' : '' }}>
                                    {{ $item->judul }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-success btn-sm" name="simpan" id="simpan">SIMPAN</button>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>

@include('admin.layout.footer')

<script>
    $(document).ready(function() {

      // $('#_halaman_about').select2({});
      // $('#_halaman_interest').select2({});
      // $('#_halaman_award').select2({});
      $('.summernote').summernote({
          tabsize: 3,
          height: 200
      });
      setTimeout(function(){
        $("#msg-eror").slideToggle("slow");
        $("#msg-success").slideToggle("slow");
      },3000);
      
    })
</script>