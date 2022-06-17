@extends('template')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Manajemen User</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Dashboard</a></li>
            <li class="breadcrumb-item">Manajemen User</li>

        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')
<section class="col-lg-12 connectedSortable">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <p><a href="{{ url('user/create') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Buat Baru</a></p>
                @if (session('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>INFO</strong> {{ session('success') }}
                    </div>
                @endif

                <table class="table table-bordered" id="tbl-user">
                    <thead>
                        <tr>
                            <th>Tgl. Entry</th>
                            <th>Tgl. Update</th>
                            <th>Nama</th>
                            <th>eMail</th>
                            <th>#</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection

@section('footer_script')
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script>
$(function () {
    var table = $('#tbl-user').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('user-management.index') }}",
        columns: [
            {data: 'created_at', name: 'created_at'},
            {data: 'updated_at', name: 'updated_at'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'action', name: 'action', orderable: false, searcable: false},
        ]
    })
});
</script>
@endsection
