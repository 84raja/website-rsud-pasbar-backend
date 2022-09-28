<div class="card card-body mx-4 mb-4  overflow-hidden">
    <div class="row gx-4 d-flex justify-content-between col-md-12">
        <div class="col-md-12">
            <div class="col-auto my-auto">
                <div class="h-100 mb-1">
                    <label for="name">Dokter Spesialis</label>
                    <select name="dokter" class="form-control" id="doctor" required>
                        <option value="{{ $doctor->id}}">{{ $doctor->name}}
                        </option>
                    </select>
                    @error('dokter_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100 mb-1">
                    <label for="name">Poliklinik</label>
                    <input type="text" class="form-control text-bold" value="{{ $doctor->polyclinic->name}}" readonly>
                </div>
            </div>
            <div class="card border col-auto my-auto col-md-12 mt-3 px-3 py-3">
                <label for="name" class="text-sm text-bold">Senin</label>
                <div class="row">
                    <div class="h-100 mb-1 col-md-6">
                        <label for="name">Mulai</label>
                        <input type="time" name="senin_mulai" class="form-control text-bold"
                            value="{{substr($doctor->schedule->senin??"",0,5)}}">
                        @error('senin_mulai')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="h-100 mb-1 col-md-6">
                        <label for="name">Selesai</label>
                        <input type="time" name="senin_selesai" class="form-control text-bold text-sm"
                            value="{{substr($doctor->schedule->senin??"",10,12)}}">
                        @error('senin_selesai')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card border col-auto my-auto col-md-12 mt-3 px-3 py-3">
                <label for="name" class="text-sm text-bold">Selasa</label>
                <div class="row">
                    <div class="h-100 mb-1 col-md-6">
                        <label for="name">Mulai</label>
                        <input type="time" name="selasa_mulai" class="form-control text-bold"
                            value="{{substr($doctor->schedule->selasa??"",0,5)}}">
                        @error('selasa_mulai')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="h-100 mb-1 col-md-6">
                        <label for="name">Selesai</label>
                        <input type="time" name="selasa_selesai" class="form-control text-bold"
                            value="{{substr($doctor->schedule->selasa??"",10,12)}}">
                        @error('selasa_selesai')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card border col-auto my-auto col-md-12 mt-3 px-3 py-3">
                <label for="name" class="text-sm text-bold">Rabu</label>
                <div class="row">
                    <div class="h-100 mb-1 col-md-6">
                        <label for="name">Mulai</label>
                        <input type="time" name="rabu_mulai" class="form-control text-bold"
                            value="{{substr($doctor->schedule->rabu??"",0,5)}}">
                        @error('rabu_mulai')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="h-100 mb-1 col-md-6">
                        <label for="name">Selesai</label>
                        <input type="time" name="rabu_selesai" class="form-control text-bold"
                            value="{{substr($doctor->schedule->rabu??"",10,12)}}">
                        @error('rabu_selesai')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card border col-auto my-auto col-md-12 mt-3 px-3 py-3">
                <label for="name" class="text-sm text-bold">Kamis</label>
                <div class="row">
                    <div class="h-100 mb-1 col-md-6">
                        <label for="name">Mulai</label>
                        <input type="time" name="kamis_mulai" class="form-control text-bold"
                            value="{{substr($doctor->schedule->kamis??"",0,5)}}">
                        @error('kamis_mulai')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="h-100 mb-1 col-md-6">
                        <label for="name">Selesai</label>
                        <input type="time" name="kamis_selesai" class="form-control text-bold"
                            value="{{substr($doctor->schedule->kamis??"",10,12)}}">
                        @error('kamis_selesai')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card border col-auto my-auto col-md-12 mt-3 px-3 py-3">
                <label for="name" class="text-sm text-bold">Jum'at</label>
                <div class="row">
                    <div class="h-100 mb-1 col-md-6">
                        <label for="name">Mulai</label>
                        <input type="time" name="jumat_mulai" class="form-control text-bold"
                            value="{{substr($doctor->schedule->jumat??"",0,5)}}">
                        @error('jumat_mulai')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="h-100 mb-1 col-md-6">
                        <label for="name">Selesai</label>
                        <input type="time" name="jumat_selesai" class="form-control text-bold"
                            value="{{substr($doctor->schedule->jumat??"",10,12)}}">
                        @error('jumat_selesai')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card border col-auto my-auto col-md-12 mt-3 px-3 py-3">
                <label for="name" class="text-sm text-bold">Sabtu</label>
                <div class="row">
                    <div class="h-100 mb-1 col-md-6">
                        <label for="name">Mulai</label>
                        <input type="time" name="sabtu_mulai" class="form-control text-bold"
                            value="{{substr($doctor->schedule->sabtu??"",0,5)}}">
                        @error('sabtu_mulai')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="h-100 mb-1 col-md-6">
                        <label for="name">Selesai</label>
                        <input type="time" name="sabtu_selesai" class="form-control text-bold"
                            value="{{substr($doctor->schedule->sabtu??"",10,12)}}">
                        @error('sabtu_selesai')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="nav-wrapper position-relative end-0">
                <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                    <li class="nav-item">
                        <button type="submit" class="btn btn-md mt-2 btn-info">Simpan</button>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>