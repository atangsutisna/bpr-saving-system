@extends('backend.template')

@section('content')
<div class="container">
    <div class="card card-secondary">
        <div class="card-header">
            GENERAL
        </div>
        <div class="card-body">
            <form action="{{ url('admin/profile') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="userid" value="{{ $user->id }}">
                <div class="form-group d-flex flex-column">
                    @if ($user->foto != null)
                    <div class="justify-content-center">
                        <img src="{{ url('storage/'.$user->foto) }}"
                            class="rounded mx-auto d-block img-circle mb-2"
                            style="width: 128px; height: 128px;"><br>
                    </div>
                    @endif

                    @if ($user->foto == null)
                    <div class="justify-content-center">
                        <img src="{{ asset('images/user.png') }}"
                            class="rounded mx-auto d-block img-circle mb-2"
                            style="width: 128px; height: 128px;"><br>
                    </div>
                    @endif
                </div>
                <div class="form-group">
                    <label class="text-muted">Nama Lengkap</label>
                    <input class="form-control @error('name') is-invalid @enderror"
                        type="text"
                        name="name"
                        value="{{ $user->name }}">
                </div>
                <div class="form-group">
                    <label class="text-muted">Email</label>
                    <input class="form-control @error('email') is-invalid @enderror"
                        type="email"
                        name="email"
                        value="{{ $user->email }}">
                </div>
                <div class="form-group">
                    <label class="text-muted">No. HP</label>
                    <input class="form-control @error('no_hp') is-invalid @enderror"
                        type="text"
                        name="no_hp"
                        value="{{ $user->no_hp }}">
                </div>
                <div class="form-group">
                    <label class="text-muted">Alamat</label>
                    <textarea name="alamat" cols="30" rows="5" class="form-control @error('alamat') is-invalid @enderror">{{ $user->alamat }}</textarea>
                </div>
                <div class="form-group">
                    <label class="text-muted">Photo</label>
                    <input class="form-control" type="file" name="foto">
                </div>
                <button type="submit" class="btn btn-primary"><i class="far fa-save"></i> Simpan Perubahan</button>
            </form>
        </div>
    </div>
    <!--/end general -->
</div>
@endsection
