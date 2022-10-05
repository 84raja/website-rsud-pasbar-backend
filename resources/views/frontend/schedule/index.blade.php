@extends('frontend.layouts.main')

@section('content')
<section class="inner-page mt-5">
    <div class="mt-5 mx-3">
        <div class="section-title">
            <h2>{{ $pageName }}</h2>
        </div>
        <div class="card m-2 rounded-3 shadow-sm">
            <div class="card-header py-1 tab-header">
                <p class="my-0 fw-normal text-white">{{ $pageName }}</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-12">
                        <form action="{{ route('fSearch') }}" method="post">
                            @method('post') @csrf
                            <div class="row">
                                <div class="col-sm-4" data-select2-id="select2-data-5-f64g">
                                    <div class="form-group" data-select2-id="select2-data-4-4ecp">
                                        <label htmlFor="poli" class="form-label">
                                            Poli
                                        </label>
                                        <select class="form-select select2 select2-hidden-accessible" name="polyclinic">
                                            <option defaultValue="" value="all" data-select2-id="select2-data-2-9mpr">
                                                Semua
                                            </option>
                                            @forelse ($polyclinics as $polyclinic)
                                            <option value="{{ $polyclinic->id }}"
                                                data-select2-id="select2-data-37-e1b9">
                                                {{ $polyclinic->name }}
                                            </option>
                                            @empty

                                            @endforelse
                                        </select>
                                        <span
                                            class="select2 select2-container select2-container--default select2-container--below"
                                            dir="ltr" data-select2-id="select2-data-1-trso" style="width: 100%">
                                            <span class="selection">
                                                <span class="select2-selection select2-selection--single"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabIndex="0" aria-disabled="false"
                                                    aria-labelledby="select2-poli-container"
                                                    aria-controls="select2-poli-container">
                                                    <span class="select2-selection__arrow" role="presentation">
                                                        <b role="presentation"></b>
                                                    </span>
                                                </span>
                                            </span>
                                            <span class="dropdown-wrapper" aria-hidden="true"></span>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label htmlFor="hari" class="form-label">
                                            Hari
                                        </label>
                                        <select class="form-select" name="day">
                                            <option defaultValue="all">Semua</option>
                                            <option value="senin">Senin</option>
                                            <option value="selasa">Selasa</option>
                                            <option value="rabu">Rabu</option>
                                            <option value="kamis">Kamis</option>
                                            <option value="jumat">Jumat</option>
                                            <option value="sabtu">Sabtu</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label htmlFor="cari">&nbsp;</label>
                                        <button type="submit" class="form-control btn btn-success text-white">
                                            <i class="fa fa-search"> </i> Cari
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="doctors" class="doctors col-sm-12 mt-4">
                        <div class="row d-flex justify-content-between">
                            @forelse ($schedules as $schedule)
                            <div class="col-lg-6 mt-4 px-3">
                                <div class="row">
                                    <div class="member d-flex align-items-start px-3">
                                        <div class="pic">
                                            <img src="{{ asset('/storage/'.$schedule->doctor->uploads->url) }}"
                                                class="img-fluid" alt="" width="150px" />
                                        </div>
                                        <div class="member-info">
                                            <h4>{{ $schedule->doctor->name }}</h4>
                                            <span>{{ $schedule->doctor->group }} - {{
                                                $schedule->doctor->polyclinic->name }}</span>
                                            <span class="badge bg-bpjs my-2">BPJS</span>
                                            <div class="col-lg-12 mt-2">
                                                <table width="100%">
                                                    <thead>
                                                        <tr>
                                                            <td>
                                                                <div class="text-hari text-center">
                                                                    Senin
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-hari text-center">
                                                                    Selasa
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-hari text-center">
                                                                    Rabu
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-hari text-center">
                                                                    Kamis
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-hari text-center">
                                                                    Jum'at
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-hari text-center">
                                                                    Sabtu
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="text-center">
                                                            <td>
                                                                <div class="text-waktu">
                                                                    <div class="mt-1">
                                                                        {{ $schedule->senin}}
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-waktu">
                                                                    <div class="mt-1">
                                                                        {{ $schedule->selasa }}
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-waktu">
                                                                    <div class="mt-1">
                                                                        {{ $schedule->rabu }}
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-waktu">
                                                                    <div class="mt-1">
                                                                        {{ $schedule->kamis }}
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-waktu">
                                                                    <div class="mt-1">
                                                                        {{ $schedule->jumat }}
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="text-waktu">
                                                                    <div class="mt-1">
                                                                        {{ $schedule->sabtu }}
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @empty

                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection