@extends('frontend.layouts.main')

@section('content')

<section id="departments" class="departments mt-5">
    <div class="container mt-5">
        <div class="section-title">
            <h2>Layanan</h2>
            <p>
                Jenis layanan yang ada di Rumah Sakit Umum Daerah Pasaman Barat
            </p>
        </div>

        <div class="row gy-4">
            <div class="col-lg-3">
                <ul class="nav nav-tabs flex-column" id="listService">
                    @forelse ($services as $index=>$service)
                    <li class="nav-item">
                        <a class="nav-link {{$index+1 == 1 ?'active show':''}}" data-bs-toggle="tab"
                            href="{{'#tab-'.$service->id }}">
                            {{ $service->name }}
                        </a>
                    </li>
                    @empty

                    @endforelse
                </ul>
            </div>

            <div class="col-lg-9">
                <div class="tab-content" id="listDescriptionServices">
                    @forelse ($services as $index=>$service)
                    <div class="tab-pane {{$index+1 == 1 ?'active show':''}}" id="{{ 'tab-'.$service->id }}">
                        <div class="row gy-4">
                            <div class="col-lg-8 details order-2 order-lg-1">
                                <h3>{{ $service->name }}</h3>
                                {!! $service->description !!}
                            </div>
                            <div class="col-lg-4 text-center order-1 order-lg-2">
                                <img src="{{ asset('storage/'.$service->uploads->url) }}" alt="" class="img-fluid" />
                            </div>
                        </div>
                    </div>
                    @empty

                    @endforelse
                </div>
            </div>

        </div>
    </div>
</section>
@endsection

@push('js')
<script>
    // Add active class to the link service
    var list = document.getElementById("listService");
    var links = header.getElementsByClassName("nav-link");
    for (var i = 0; i < links.length; i++) {
        links[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active show");
        if (current.length > 0) { 
            current[0].className = current[0].className.replace(" active show", "");
        }
        this.className += " active show";
        });
    }

   
</script>
@endpush