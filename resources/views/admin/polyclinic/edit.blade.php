@extends('admin.layouts.main')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-2">
                <div class="row d-flex justify-content-between my-4 mx-2 col-md-12">
                    <div class="col-md-12">
                        <h4> Edit Data {{ $pageName }}</h4>
                        <span>data {{ $pageName }} merupakan list {{ $pageName }} yang dimiliki RSUD Pasaman Barat.
                        </span>
                    </div>

                </div>
                <form action="{{ route('polyclinic.update',$polyclinic->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf @method('PUT')
                    @include('admin.polyclinic.form')
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')
<script>
    ClassicEditor
        .create( document.querySelector( '#textarea-add-polyclinic' ) )
        .catch( error => {
            console.error( error );
        } );

</script>
@endpush