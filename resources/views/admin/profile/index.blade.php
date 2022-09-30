@extends('admin.layouts.main')

@section('content')
<form action="{{ route('profile.update',1) }}" method="post" enctype="multipart/form-data">
    @csrf @method('put')
    <div class="mb-4">
        <div class="page-header min-height-300 border-radius-xl mt-4 mb-4"
            style="background-image: url('{{ asset('storage/'.$profileImg)}}'); background-position-y: 50%;">
            {{-- <span class="mask bg-gradient-primary opacity-6"></span> --}}
        </div>
        <div class="card card-body mx-4 mt-n6 overflow-hidden">
            <div class="row gx-4 d-flex justify-content-between col-md-12">
                <div class="col-md-8">
                    <div class="col-auto my-auto">
                        <div class="h-100 mb-1">
                            <label for="name">Nama Instansi</label>
                            <input type="text" class="form-control text-bold @error('name') is-invalid @enderror"
                                name="name" value="{{$profile->name}}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <label for="name">Email Instansi</label>
                            <input type="email" class="form-control text-bold @error('email') is-invalid @enderror"
                                name="email" value="{{$profile->email}}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <label for="telp">No Telpone Instansi</label>
                            <input type="text" class="form-control text-bold @error('telp') is-invalid @enderror"
                                name="telp" value="{{$profile->telp}}">
                            @error('telp')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <label for="name">No HP Instansi</label>
                            <input type="text" class="form-control text-bold @error('no_hp') is-invalid @enderror"
                                name="no_hp" value="{{$profile->no_hp}}">
                        </div>
                        @error('no_hp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-auto my-auto">
                        <div class="h-100">
                            <label for="name">Foto Profile</label>
                            <input type="file" class="form-control text-bold @error('foto_profil') is-invalid @enderror"
                                name="foto_profil" accept="image/png, image/gif, image/jpeg">
                        </div>
                        @error('foto_profil')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4 my-sm-auto ms-sm-auto me-sm-0 mx-auto mr-2">
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-md mt-2 btn-info">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 col-xl-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Sejarah Instansi</h6>
                </div>
                <div class="card-body p-3">
                    <textarea class="form-control  @error('sejarah') is-invalid @enderror" name="sejarah"
                        id="textarea-editor-sejarah" cols="30" rows="15">{{ $profile->sejarah }}</textarea>
                </div>
                @error('sejarah')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Visi Instansi</h6>
                </div>
                <div class="card-body p-3">
                    <textarea class="form-control" name="visi" id="textarea-editor-visi" cols="30"
                        rows="15">{{ $profile->visi }}</textarea>
                </div>
            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="card h-100">
                <div class="card-header pb-0 p-3">
                    <h6 class="mb-0">Misi Instansi</h6>
                </div>
                <div class="card-body p-3">
                    <textarea class="form-control" name="misi" id="textarea-editor-misi" cols="30"
                        rows="15">{{ $profile->misi }}</textarea>
                </div>
            </div>
        </div>

    </div>

</form>
@endsection

@push('js')

<script>
    ClassicEditor
        .create( document.querySelector( '#textarea-editor-sejarah' ) )
        .catch( error => {
            console.error( error );
        } );
        ClassicEditor
        .create( document.querySelector( '#textarea-editor-visi' ) )
        .catch( error => {
            console.error( error );
        } );
        ClassicEditor
        .create( document.querySelector( '#textarea-editor-misi' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endpush