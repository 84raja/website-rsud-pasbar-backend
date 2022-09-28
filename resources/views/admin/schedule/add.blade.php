@extends('admin.layouts.main')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-2">
                <div class="row d-flex justify-content-between my-4 mx-2 col-md-12">
                    <div class="col-md-12">
                        <h4> Eidt Data {{ $pageName }}</h4>
                        <span>data {{ $pageName }} merupakan list {{ $pageName }} yang dimiliki RSUD Pasaman Barat.
                        </span>
                    </div>

                </div>
                <form action="{{ route('schedule.store',$doctor->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('admin.schedule.form')
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

{{-- @push('js')
<script>
    let docterSelect = document.querySelector("#doctor");

    docterSelect.addEventListener('change',setPolyclinic);

    function setPolyclinic(){
        const polyclinic = docterSelect.options[docterSelect.selectedIndex].dataset.poly;
        document.querySelector("#polyclinic").value = polyclinic
    }
</script>
@endpush --}}