@extends('frontend.layouts.main')

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <h1>SELAMAT DATANG <br />
            DI RSUD PASAMAN BARAT</h1>
        <h2>
            Kesembuhan Anda, Amanah Kami!!
        </h2>
    </div>
</section>
<!-- End Hero -->
{{-- sejarah --}}

<section id="about" class="about mt-5">
    <div class="container-fluid mt-5">
        <div class="row">
            <div
                class="col-xl-5 col-lg-6 video-box d-flex pt-5 justify-content-center align-items-stretch position-relative px-5">
                <a href="https://www.youtube.com/watch?v=hjxuku08xas" class="glightbox play-btn"></a>
            </div>

            <div
                class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center pt-5 px-lg-5 px-5 text-justify">
                <h3>Sejarah</h3>
                {!! $profile->sejarah !!}
            </div>
        </div>
    </div>
</section>
{{-- end sejarah --}}
{{-- visi & misi --}}
<section id="appointment" class="appointment section-bg">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-5 col-lg-6 icon-boxes d-flex flex-column align-items-stretch px-5">
                <h3>VISI</h3>
                {!! $profile->visi !!}
            </div>
            <div
                class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center px-5 text-justify">
                <h3>MISI</h3>
                {!! $profile->misi !!}
            </div>
        </div>
    </div>
</section>
{{-- end visi & misi --}}
@endsection