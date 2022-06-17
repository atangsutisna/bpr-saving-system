@extends('backend.template')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Dashboard</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $countPosted }}</h3>

                <p>Posting</p>
            </div>
            <div class="icon">
                <i class="fas fa-blog"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $countContributor }}</h3>

                <p>Kontributor</p>
            </div>
            <div class="icon">
                <i class="fas fa-hands-helping"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $countEditor }}</h3>

                <p>Editor</p>
            </div>
            <div class="icon">
                <i class="fas fa-spell-check"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>741.87 MB</h3>

                <p>Ukuran Data</p>
            </div>
            <div class="icon">
                <i class="fas fa-hdd"></i>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <!-- Left col -->
    <section class="col-lg-6 connectedSortable">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Editor</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="table-count-posted">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jml Postingan</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- /.Left col -->

    <!-- right col (We are only adding the ID to make the widgets sortable)-->
    <section class="col-lg-6 connectedSortable">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Kontributor</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="table-contributor">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jml Upload</th>
                            <th>Total File Size</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Asep Setiyadi</td>
                            <td>5 File</td>
                            <td class="text-danger">3.83 MB</td>
                        </tr>
                        <tr>
                            <td>Kontributor 1</td>
                            <td>3 File</td>
                            <td class="text-danger">76.38 MB</td>
                        </tr>
                        <tr>
                            <td>Ramses</td>
                            <td>4 File</td>
                            <td class="text-danger">15.63 MB</td>
                        </tr>
                        <tr>
                            <td>Khansa</td>
                            <td>2 File</td>
                            <td class="text-danger">34.66 MB</td>
                        </tr>
                        <tr>
                            <td>Pius</td>
                            <td>1 File</td>
                            <td class="text-danger">14.18 MB</td>
                        </tr>
                        <tr>
                            <td>Totoh Wildan Tohari</td>
                            <td>2 File</td>
                            <td class="text-danger">58.01 MB</td>
                        </tr>
                        <tr>
                            <td>Tardi</td>
                            <td>5 File</td>
                            <td class="text-danger">42.77 MB</td>
                        </tr>
                        <tr>
                            <td>Danoer</td>
                            <td>2 File</td>
                            <td class="text-danger">7.02 MB</td>
                        </tr>
                        <tr>
                            <td>Gritania</td>
                            <td>1 File</td>
                            <td class="text-danger">0.04 MB</td>
                        </tr>
                        <tr>
                            <td>Heri</td>
                            <td>1 File</td>
                            <td class="text-danger">0.02 MB</td>
                        </tr>
                        <!-- page 2 -->
                        <tr>
                            <td>Siti Hartina Fatimah</td>
                            <td>1 File</td>
                            <td class="text-danger">3.07 MB</td>
                        </tr>
                        <tr>
                            <td>Teguh Pribadi</td>
                            <td>3 File</td>
                            <td class="text-danger">4.73 MB</td>
                        </tr>
                        <tr>
                            <td>Royandi Hutasoit</td>
                            <td>1 File</td>
                            <td class="text-danger">0.13 MB</td>
                        </tr>
                        <tr>
                            <td>Riri Wahyuni</td>
                            <td>1 File</td>
                            <td class="text-danger">0.10 MB</td>
                        </tr>
                        <tr>
                            <td>Fajar Dhika</td>
                            <td>2 File</td>
                            <td class="text-danger">7.81 MB</td>
                        </tr>
                        <tr>
                            <td>Wiwiniarmy Andi Lolo</td>
                            <td>2 File</td>
                            <td class="text-danger">0.27 MB</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <!-- right col -->
    <section class="col-xl-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Login Terakhir User</h3>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="table-last-login">
                    <thead>
                        <tr>
                            <th>Nama User</th>
                            <th>Role</th>
                            <th>Terakhir Login</th>
                            <th>Ip</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection

@section('footer_script')
@parent
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('js/dashboard/index.js') }}"></script>
@endsection
