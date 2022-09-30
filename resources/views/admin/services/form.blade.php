<div class="card card-body mx-4 mb-4 overflow-hidden">
    <div class="row gx-4 d-flex justify-content-between col-md-12">
        <div class="col-md-12">
            <div class="col-auto my-auto">
                <div class="h-100 mb-1">
                    <label for="name">Nama Layanan</label>
                    <input type="text" class="form-control text-bold @error('name') is-invalid @enderror" name="name"
                        value="{{$service->name ?? old('name')}}">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
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
            <div class="col-md-12 mb-4">
                <div class="card h-100">
                    <label for="">Description</label>
                    <textarea class="form-control  @error('description') is-invalid @enderror" name="description"
                        id="textarea-add-service" cols="30"
                        rows="25">{{ $service->description ?? old('description') }}</textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-md mt-2 btn-info">Simpan</button>
            </div>
        </div>

    </div>
</div>