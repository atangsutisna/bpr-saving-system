@extends('template')

@section('content-header')
<div class="row mb-2">
    <div class="col-sm-6">
        <h1 class="m-0">Kode Transaksi</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ url('/trans-code-management') }}">Kode Transaksi</a></li>
            <li class="breadcrumb-item">Buat Baru</li>
        </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
@endsection

@section('content')
<div class="row">
    <!-- Left col -->
    <section class="col-lg-12 connectedSortable">
        <div class="card">
            <div class="card-body">
                <form method="post" action="{{ $action_uri }}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6 ">
                            <label for="trans_code" class="col-form-label">Kode<code> *</code></label>
                            <input type="text"
                                name="trans_code"
                                class="form-control @error('trans_code') is-invalid @enderror"
                                id="trans_code"
                                value="{{ $category->trans_code ?? old('trans_code') }}">
                            @error('trans_code')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="keterangan" class="col-form-label">Keterangan</label>
                        <textarea name="keterangan" class="form-control">{{ $category->keterangan ?? old('keterangan') }}</textarea>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <label for="trans_type_debet" class="form-check-label">
                                <input type="radio" class="form-check-input" name="trans_type" value="debet" id="trans_type_debet" checked/>
                                Debet
                            </label>
                        </div>
                        <div class="form-check">
                            <label for="trans_type_kredit" class="form-check-label">
                                <input type="radio" class="form-check-input" name="trans_type" value="kredit" id="trans_type_kredit"/>
                                Kredit
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Simpan</button>
                    <a href="{{ url('trans-code') }}" class="btn btn-default"><i class="fas fa-angle-left"></i> Kembali</a>
                </form>
            </div>
        </div>
    </section>
    <!-- /.Left col -->
</div>
@endsection
