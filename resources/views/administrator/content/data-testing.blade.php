@extends('administrator.layouts.app2')
@section('title', 'Data Testing E-Sentiment Analysis')
@section('data-testing', 'active')
@section('master-data', 'active')

@section('open', 'menu-open')

@section ('styles')
<!-- DataTables -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section ('content')

<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Halaman Kelola Data Testing</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
              <li class="breadcrumb-item active">Data Testing</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fas fa-plus-circle"></i> Tambah Data Testing
      </button>

      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Tambah Data Testing</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form method="POST" action="/admin/data-testing/predict">
                  {{ csrf_field()}}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Sentimen</label>
                    <textarea name="sentimen" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukkan Sentimen..." required></textarea>
                  </div>
                  <div class="form-group">
                    <label for="">Akun Twitter</label>
                    <input name="twitter_account" type="text" class="form-control" placeholder=" Masukkan Username Twitter Account..." required>
                  </div>
                  <div class="form-group">
                    <label for="">Tanggal dan Waktu:</label>
                    <input name="tgl_waktu" type="datetime-local" class="form-control" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Kategori</label>
                    <select name="kategori_id" class="form-control" id="exampleFormControlSelect1" required>
                      <option>Pilih Kategori</option>
                      @foreach ($kategori as $k)
                      <option value="{{$k->id}}">{{$k->kategori}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <br>
      <br>
        <div class="row">
          <div class="col-12">
              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Tabel Data testing</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Sentimen</th>
                    <th>Tanggal</th>
                    <th>Akun Twitter</th>
                    <th>Kategori</th>
                    <th>Predict Kategori</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $no=0; ?>
                  @foreach($raw_sentimen as $s)
                  <?php $no++; ?>
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$s->sentimen}}</td>
                    <td>{{$s->tgl_waktu}}</td>
                    <td>{{$s->twitter_account}}</td>
                    <td>@if($s->kategori_id == 1)
                            <span class="badge badge-pill badge-success">Positif</span>
                        @elseif($s->kategori_id == 2)
                            <span class="badge badge-pill badge-danger">Negatif</span>
                        @endif</td>
                    <td>
                        @if($s->predict_kategori == 1)
                            <span class="badge badge-pill badge-success">Positif</span>
                        @elseif($s->predict_kategori == 2)
                            <span class="badge badge-pill badge-danger">Negatif</span>
                        @endif
                    </td>
                    <td>
                    <!-- Main content -->
                    <section class="content">
                      <div class="container-fluid">
                      <!-- Button trigger modal -->
                      <a href="/admin/data-testing/edit/{{$s->id}}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                      <a href="#" id="{{$s->id}}" nama="{{$s->twitter_account}}" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
                    </td>

                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@section('javascripts')
<!-- DataTables  & Plugins -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
  $('.delete').click(function(){
  var id_datatesting = $(this).attr('id');
  var nama_akun = $(this).attr('nama')
  Swal.fire({
    title: 'Yakin?',
    text: "Mau hapus sentimen dari "+nama_akun+ " ?",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Hapus!'
  })
  .then((result) => {
    console.log(result);
    if (result.value) {
      window.location = "/admin/data-testing/delete/"+id_datatesting+"";
    }
  })
});
</script>
@endsection

@endsection
