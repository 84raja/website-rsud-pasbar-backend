@extends('frontend.layouts.main')

@section('content')

<section id="doctors" class="doctors mt-5">

    <div class="container mt-5">
        <div class="section-title">
            <h2>{{ $pageName }}</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat
                sit
                in iste officiis commodi quidem hic quas.</p>
        </div>
        <div class="row">
            @forelse ($doctors as $doctor)
            <div class="col-lg-6 my-2">
                <div class="member d-flex align-items-start">
                    <div class="pic">
                        <img src="{{ asset('storage/'.$doctor->uploads->url) }}" class="img-fluid"
                            alt="{{ $doctor->name }}" width="150px" />
                    </div>
                    <div class="member-info">
                        <h4>{{ $doctor->name }}</h4>
                        <span>{{ $doctor->group }} - {{ $doctor->polyclinic->name }}</span>
                        <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                        <div class="social">
                            <a href=""><i class="ri-twitter-fill"></i></a>
                            <a href=""><i class="ri-facebook-fill"></i></a>
                            <a href=""><i class="ri-instagram-fill"></i></a>
                            <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
            @empty

            @endforelse
        </div>
    </div>

</section>

@endsection