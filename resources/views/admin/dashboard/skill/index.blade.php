@include('admin.layout.head')
@include('admin.layout.sidebar')
@include('admin.layout.navbar')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Form Entry Skill</h6>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            @include('admin.dashboard.pesan')
            <form class="p-3" action="{{ route('skill.update') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="judul" class="form-label">Programming Languages & Tools</label>
                  <input type="text"
                    class="form-control form-control-sm skill tokenfield" multiple name="_language" id="judul" aria-describedby="helpId" placeholder="Programming Languages & Tools" value="{{ get_meta_value('_language') }}">
                </div>
                <div class="mb-3">
                    <label for="isi" class="form-label">Workflow</label>
                    <textarea name="_workflow" id="isi" class="form-control summernote" rows="15">{{ get_meta_value('_workflow') }}</textarea>
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

      $('.skill').tokenfield({
            autocomplete: {
                source: [{!! $skill !!}],
                delay: 100
            },
            showAutocompleteOnFocus: true
        });
    })
</script>