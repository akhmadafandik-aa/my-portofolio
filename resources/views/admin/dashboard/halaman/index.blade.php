@include('admin.layout.head')
@include('admin.layout.sidebar')
@include('admin.layout.navbar')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Page table</h6>
          </div>
          <div class="mb-4">
              <div class="card-header pb-0">
                <a href="{{ route('halaman.create') }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-plus"></i>&nbsp; Tambah
                </a>
              </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            @include('admin.dashboard.pesan')
            <div class="table-responsive p-4">
              <table id="tabel_halaman" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead class="header-tabel-sub">
                  <tr>
                    <th class="col-md-1" style="text-align: center">NO</th>
                    <th style="text-align: center">JUDUL</th>
                    <th class="col-md-2" style="text-align: center">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>
                    @foreach ($data as $item)
                    <tr>
                        <td style="text-align: center">{{ $i }}</td>
                        <td>{{ $item->judul }}</td>
                        <td style="text-align: center">
                            <a href="{{ route('halaman.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form onsubmit="return confirm('Yakin mau hapus data ini?')" action="{{ route('halaman.destroy', $item->id) }}" class="d-inline" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" name="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    <?php $i++ ?>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>

@include('admin.layout.footer')

<script>
    $(document).ready(function() {
        setTimeout(function(){
          $("#msg-success").slideToggle("slow");
      },3000);
    })
</script>