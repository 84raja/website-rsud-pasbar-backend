@extends('layouts.main')


@section('content')

<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="row d-flex justify-content-between my-4 mx-2 col-md-12">
                    <div class="col-md-8">
                        <h4>Data {{ $pageName }}</h4>
                        <span>data pelayanan merupakan list layanan yang dimiliki.
                        </span>
                    </div>
                    <div class="col-md-2 mt-3">
                        <div>
                            <a href="{{ route('service.add') }}" class="btn btn-xsm btn-primary">Tambah Layanan</a>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="p-0">
                        <table class="mx-4 mt-4 table-bordered" id="table-service" id="table-service">
                            <thead>
                                <tr class="text-center" style="height: 100px">
                                    <th class="text-secondary text-uppercase">
                                        Nama layanan</th>
                                    <th class="text-secondary text-uppercase">
                                        Deskripsi</th>
                                    <th class="text-secondary text-uppercase text-center ">
                                        Profile Layanan</th>
                                    <th class="text-secondary text-uppercase"> Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($services as $service)
                                <tr>
                                    <td class="text-center">
                                        <h6 class="mb-0 text-sm">{{ $service->name }}</h6>
                                    </td>
                                    <td width='50%' class="text-justify py-2">
                                        {!! $service->description !!}
                                    </td>
                                    <td class="align-middle text-center">
                                        <div>
                                            @if ($service->uploads)
                                            <img src="{{ asset('storage/'.$service->uploads->url) }}"
                                                alt="{{ $service->name }}" width="150px" height="150px">
                                            @else
                                            <img src="" alt="{{ $service->name }}" width="150px" height="150px">
                                            @endif

                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('service.edit',$service->id) }}"
                                            class="btn btn-sm btn-secondary">Edit</a>
                                        <form action="{{ route('service.destroy',$service->id) }}" method="POST">
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
        jQuery('#table-service').DataTable({
            "scrollX": true,
            "scrollY": true,
            dom: "<'row col-mm-12 mx-4 mt-4 d-flex justify-content-between '<' col-md-6'l><'col-md-6  d-flex justify-content-end'f>><'row'<'col-sm-12'tr>><'row mx-4 my-4'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 d-flex justify-content-end'p>>"
        });
    });

</script>
@endpush