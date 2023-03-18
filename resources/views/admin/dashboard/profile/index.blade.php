@include('admin.layout.head')
@include('admin.layout.sidebar')
@include('admin.layout.navbar')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Form Entry Profile</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            @include('admin.dashboard.pesan')
            <form class="p-3" action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                  @if (get_meta_value('_foto'))
                      <center>
                        <img class="foto-profile" src="{{ asset('foto') . '/' . get_meta_value('_foto') }}">
                      </center>
                    @endif
                </div>
                <div class="row justify-content-between">
                  <div class="col-md-5">
                    <center><h4>-- PROFILE --</h4></center>
                    <div class="mb-3">
                      <label for="_foto" class="form-label">Foto</label>
                      <input type="file" class="form-control form-control-sm" name="_foto" id="_foto">
                    </div>
                    <div class="mb-3">
                        <label for="_kota" class="form-label">Kota</label>
                        <input type="text" class="form-control form-control-sm" name="_kota" id="_kota" placeholder="Nama Kota" value="{{ get_meta_value('_kota') }}">
                    </div>
                    <div class="mb-3">
                      <label for="_provinsi" class="form-label">Provinsi</label>
                      <input type="text" class="form-control form-control-sm" name="_provinsi" id="_provinsi" placeholder="Nama Provinsi" value="{{ get_meta_value('_provinsi') }}">
                    </div>
                    <div class="mb-3">
                      <label for="_nohp" class="form-label">Nomor HP</label>
                      <input type="number" class="form-control form-control-sm" name="_nohp" id="_nohp" placeholder="Nomor HP" value="{{ get_meta_value('_nohp') }}">
                    </div>
                    <div class="mb-3">
                      <label for="_email" class="form-label">Email</label>
                      <input type="email" class="form-control form-control-sm" name="_email" id="_email" placeholder="Email" value="{{ get_meta_value('_email') }}">
                    </div>
                  </div>
                  <div class="col-md-5">
                    <center><h4>-- AKUN MEDIA SOSIAL --</h4></center>
                    <div class="mb-3">
                      <label for="_facebook" class="form-label">Facebook</label>
                      <input type="text" class="form-control form-control-sm" name="_facebook" id="_facebook"placeholder="Akun Facebook" value="{{ get_meta_value('_facebook') }}">
                    </div>
                    <div class="mb-3">
                      <label for="_twitter" class="form-label">Twitter</label>
                      <input type="text" class="form-control form-control-sm" name="_twitter" id="_twitter"placeholder="Akun Twitter" value="{{ get_meta_value('_twitter') }}">
                    </div>
                    <div class="mb-3">
                      <label for="_linkedin" class="form-label">Linkedin</label>
                      <input type="text" class="form-control form-control-sm" name="_linkedin" id="_linkedin"placeholder="Akun Linkedin" value="{{ get_meta_value('_linkedin') }}">
                    </div>
                    <div class="mb-3">
                      <label for="_github" class="form-label">Github</label>
                      <input type="text" class="form-control form-control-sm" name="_github" id="_github"placeholder="Akun Github" value="{{ get_meta_value('_github') }}">
                    </div>
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