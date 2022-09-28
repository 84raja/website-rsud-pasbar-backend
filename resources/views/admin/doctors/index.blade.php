@extends('admin.layouts.main')

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
                    <div class="col-md-2 mt-3 mx-3">
                        <div>
                            <a href="{{ route('doctor.add') }}" class="btn btn-sm btn-primary text-xsm">Tambah {{
                                $pageName
                                }}</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="p-0">
                        <table class="mx-4 table-bordered" id="table-doctors" width="95%">
                            <thead>
                                <tr class="text-center" style="height: 100px">
                                    <td class="text-secondary text-uppercase">
                                        Nama {{ $pageName }}</td>
                                    <td class="text-secondary text-uppercase">
                                        Dokter</td>
                                    <td class="text-secondary text-uppercase text-center ">
                                        No HP</td>
                                    <td class="text-secondary text-uppercase text-center ">
                                        Poli / Instalasi</td>
                                    <td class="text-secondary text-uppercase text-center ">
                                        Email</td>
                                    <td class="text-secondary text-uppercase text-center ">
                                        Foto</td>
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
                                        {{ $doctor->group }}
                                    </td>
                                    <td class="text-center">
                                        {{ $doctor->no_hp }}
                                    </td>
                                    <td class="text-center">
                                        {{ $doctor->polyclinic->name }}
                                    </td>
                                    <td class="text-center">
                                        {{ $doctor->email }}
                                    </td>
                                    <td class="align-middle text-center">
                                        <div>
                                            @if ($doctor->uploads)
                                            <img src="{{ asset('storage/'.$doctor->uploads->url) }}"
                                                alt="{{ $doctor->name }}" width="150px" height="150px">
                                            @else
                                            <img src="" alt="{{ $doctor->name }}" width="150px" height="150px">
                                            @endif

                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('doctor.edit',$doctor->id) }}"
                                            class="btn btn-sm btn-secondary">Edit</a>
                                        <form action="{{ route('doctor.destroy',$doctor->id) }}" method="POST">
                                            @csrf @method('DELETE')
                                            <button class="btn btn-sm btn-danger"
                                                onclick="return confirm('Anda yakin ingin menghapus data?')">Hapus</button>
                                        </form>
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
        jQuery('#table-doctors').DataTable({
            "scrollX": true,
            "scrollY": true,
            dom: "<'row col-mm-12 mx-4 mt-4 d-flex justify-content-between '<' col-md-6'l><'col-md-6  d-flex justify-content-end'f>><'row'<'col-sm-12'tr>><'row mx-4 my-4'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 d-flex justify-content-end'p>>"
        });
    });

</script>
@endpush