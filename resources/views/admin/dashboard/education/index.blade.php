@include('admin.layout.head')
@include('admin.layout.sidebar')
@include('admin.layout.navbar')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h6>Education table</h6>
          </div>
          <div class="mb-4">
              <div class="card-header pb-0">
                <a href="{{ route('education.create') }}" class="btn btn-primary btn-sm">
                    <i class="fa fa-plus"></i>&nbsp; Tambah
                </a>
              </div>
          </div>
          <div class="card-body px-0 pt-0 pb-2">
            @include('admin.dashboard.pesan')
            <div class="table-responsive p-4">
              <table id="tabel_education" class="table table-striped table-bordered" style="width:100%">
                <thead class="header-tabel-sub">
                  <tr>
                    <th class="col-md-1" style="text-align: center">NO</th>
                    <th style="text-align: center">UNIVERSITAS</th>
                    <th style="text-align: center">NAMA FAKULTAS</th>
                    <th style="text-align: center">NAMA PRODI</th>
                    <th style="text-align: center">IPK</th>
                    <th style="text-align: center">TGL MULAI</th>
                    <th style="text-align: center">TGL AKHIR</th>
                    <th class="col-md-2" style="text-align: center">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                    <?php $i=1 ?>
                    @foreach ($data as $item)
                    <tr>
                        <td style="text-align: center">{{ $i }}</td>
                        <td>{{ $item->judul }}</td>
                        <td>{{ $item->info1 }}</td>
                        <td>{{ $item->info2 }}</td>
                        <td style="text-align: center">{{ $item->info3 }}</td>
                        <td style="text-align: center">{{ $item->tgl_mulai_indo }}</td>
                        <td style="text-align: center">{{ $item->tgl_akhir_indo }}</td>
                        <td style="text-align: center">
                            <a href="{{ route('education.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form onsubmit="return confirm('Yakin mau hapus data ini?')" action="{{ route('education.destroy', $item->id) }}" class="d-inline" method="POST">
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