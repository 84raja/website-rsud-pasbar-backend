@extends('layouts.main')

@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="row d-flex justify-content-between my-4 mx-2 col-md-12">
                    <div class="col-md-8">
                        <h4>Data {{ $pageName }}</h4>
                        <span>data {{ $pageName }} merupakan list {{ $pageName }} yang dimiliki RSUD Pasaman Barat.
                        </span>
                    </div>
                    {{-- <div class="col-md-2 mt-3 mx-3">
                        <div>
                            <a href="{{ route('schedule.add') }}" class="btn btn-sm btn-primary text-xsm">Tambah {{
                                $pageName
                                }}</a>
                        </div>
                    </div> --}}
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="p-0">
                        <table class="mx-4 table-bordered" id="table-schedules" width="95%">
                            <thead>
                                <tr class="text-center" style="height: 100px">

                                    <td class="text-secondary text-uppercase">
                                        Dokter</td>
                                    <td class="text-secondary text-uppercase text-center ">
                                        Poli / Instalasi</td>
                                    <td class="text-secondary text-uppercase text-center ">
                                        Senin</td>
                                    <td class="text-secondary text-uppercase text-center ">
                                        Selasa</td>
                                    <td class="text-secondary text-uppercase text-center ">
                                        Rabu</td>
                                    <td class="text-secondary text-uppercase text-center ">
                                        Kamis</td>
                                    <td class="text-secondary text-uppercase text-center ">
                                        Jum'at</td>
                                    <td class="text-secondary text-uppercase text-center ">
                                        Sabtu</td>

                                    <td class="text-secondary text-uppercase"> Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($doctors as $doctor)
                                <tr>
                                    <td class="text-center">
                                        <h6 class="mb-0 text-sm">{{ $doctor->name }}</h6>
                                    </td>
                                    <td class="text-center">
                                        {{ $doctor->polyclinic->name }}
                                    </td>
                                    <td class="text-center">
                                        {!! $doctor->schedule->senin??"<sup class='text-danger'>Belum diinput</sup>" !!}
                                    </td>
                                    <td class="text-center">
                                        {!! $doctor->schedule->selasa??"<sup class='text-danger'>Belum diinput</sup>"!!}
                                    </td>
                                    <td class="text-center">
                                        {!! $doctor->schedule->rabu??"<sup class='text-danger'>Belum diinput</sup>" !!}
                                    </td>
                                    <td class="text-center">
                                        {!! $doctor->schedule->kamis??"<sup class='text-danger'>Belum diinput</sup>" !!}
                                    </td>
                                    <td class="text-center">
                                        {!! $doctor->schedule->jumat??"<sup class='text-danger'>Belum diinput</sup>" !!}
                                    </td>
                                    <td class="text-center">
                                        {!! $doctor->schedule->sabtu??"<sup class='text-danger'>Belum diinput</sup>" !!}
                                    </td>
                                    <td class="text-center">

                                        <a href="{{ route('schedule.add',$doctor->id) }}"
                                            class="btn btn-sm btn-primary text-xsm mt-3">Edit</a>
                                    </td>
                                </tr>
                                @empty

                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')

<script src="{{asset('assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('/data-tables/jquery.datatables.min.js')}}"></script>
<script src="{{asset('/data-tables/datatables.bootstrap4.min.js')}}"></script>

<script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery('#table-schedules').DataTable({
            "scrollX": true,
            "scrollY": true,
            dom: "<'row col-mm-12 mx-4 mt-4 d-flex justify-content-between '<' col-md-6'l><'col-md-6  d-flex justify-content-end'f>><'row'<'col-sm-12'tr>><'row mx-4 my-4'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 d-flex justify-content-end'p>>"
        });
    });

</script>
@endpush