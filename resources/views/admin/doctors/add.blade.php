@extends('layouts.main')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-2">
                <div class="row d-flex justify-content-between my-4 mx-2 col-md-12">
                    <div class="col-md-12">
                        <h4> Tambah Data {{ $pageName }}</h4>
                        <span>Data {{ $pageName }} merupakan list {{ $pageName }} yang dimiliki RSUD Pasaman Barat.
                        </span>
                    </div>

                </div>
                <form action="{{ route('doctor.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @include('admin.doctors.form')
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('js')

<script>
    const groupSelect = document.getElementById('group');
    var polyclinicSelect = document.getElementById('polyclinic_id');

    groupSelect.addEventListener('change',setPoly);

    function setPoly(){
        if(groupSelect.value == "Dokter Umum"){
            document.querySelectorAll("#polyclinic_id option").forEach(opt=>{
                if(opt.text != "IGD" ){
                    opt.disabled = true;
                }else{
                    opt.selected=true;
                }
            })
        }else{
            document.querySelectorAll("#polyclinic_id option").forEach(opt=>{
                opt.disabled=false;
                if(opt.text == "Pilih Poliklinik/Instalasi"){
                    opt.selected =true;
                } 
                if(opt.text == "IGD"){
                    opt.disabled = true
                }

            })
        }        
    }
</script>

@endpush