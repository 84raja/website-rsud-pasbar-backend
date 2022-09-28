@extends('admin.layouts.main')


@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-2">
                <div class="row d-flex justify-content-between my-4 mx-2 col-md-12">
                    <div class="col-md-12">
                        <h4> Edit Data {{ $pageName }}</h4>
                        <span>data pelayanan merupakan list layanan yang dimiliki.
                        </span>
                    </div>

                </div>
                <form action="{{ route('service.update',$service->id) }}" method="post" enctype="multipart/form-data">
                    @csrf @method('PUT')
                    @include('admin.services.form')
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script>
    ClassicEditor
        .create( document.querySelector( '#textarea-add-service' ) )
        .catch( error => {
            console.error( error );
        } );

</script>
@endpush