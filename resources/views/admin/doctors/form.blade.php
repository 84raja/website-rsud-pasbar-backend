<div class="card card-body mx-4 mb-4  overflow-hidden">
    <div class="row gx-4 d-flex justify-content-between col-md-12">
        <div class="col-md-12">
            <div class="col-auto my-auto">
                <div class="h-100 mb-1">
                    <label for="name">Nama Dokter</label>
                    <input type="text" class="form-control text-bold @error('name') is-invalid @enderror" name="name"
                        value="{{$doctor->name ?? old('name')}}">
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
            <div class="col-auto my-auto">
                <div class="h-100 mb-1">
                    <label for="name">No Telphone</label>
                    <input type="text" class="form-control text-bold @error('no_hp') is-invalid @enderror" name="no_hp"
                        value="{{$doctor->no_hp ?? old('no_hp')}}">
                    @error('no_hp')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100 mb-1">
                    <label for="name">Email</label>
                    <input type="email" class="form-control text-bold @error('email') is-invalid @enderror" name="email"
                        value="{{$doctor->email ?? old('email')}}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100 mb-1">
                    <label for="name">Group Dokter</label>
                    <select name="group" id="group" class="form-control text-bold @error('group') is-invalid
                    @enderror" required>
                        <option class="text-bold" value="{{ $doctor->group ?? ""}}" selected>{{
                            $doctor->group ?? "Pilih Group Dokter"}}</option>
                        @forelse ($groupDoctors as $group)
                        @if ($group != $doctor->group )
                        <option class="text-bold" value="{{ $group }}" @if (old('group')==$group) selected="selected"
                            @endif>{{
                            $group }}
                        </option>
                        @endif
                        @empty

                        @endforelse

                    </select>
                    @error('group')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="col-auto my-auto">
                <div class="h-100 mb-1">
                    <label for="name">Poliklinik/Instalasi</label>
                    <select name="polyclinic_id" id="polyclinic_id"
                        class="form-control text-bold @error('polyclinic_id') is-invalid @enderror" required>
                        <option value="{{ $doctor->polyclinic_id ?? "" }}" class="text-bold" selected>
                            {{$doctor->polyclinic->name
                            ?? "Pilih Poliklinik/Instalasi" }}</option>\
                        @forelse ($polyclinics as $poly)
                        @if ( $doctor->polyclinic_id !=$poly->id)
                        <option class="text-bold" value="{{ $poly->id }}" @if(old('polyclinic_id')==$poly->id)
                            selected="selected" @endif>{{
                            $poly->name }}
                        </option>
                        @endif

                        @empty

                        <option class="text-bold" value="">Data Poliklinik/Instalasi Masih Kosong</option>
                        @endforelse
                    </select>
                    @error('polyclinic_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
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