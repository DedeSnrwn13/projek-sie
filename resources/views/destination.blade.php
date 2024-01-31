@extends('layouts.front')

@section('title', 'Destination')

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(assets/images/globalradio.co_.id_.webp);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Destinasi
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                @foreach ($destinations as $destination)
                    <div class="col-md-4 ftco-animate">
                        <div class="project-wrap">
                            <style scoped>
                                #destination-{{ $destination->id }} {
                                    background-image: url('{{ Storage::Url($destination->thumbnail) }}');
                                }
                            </style>
                            <a href="#" class="img" id="destination-{{ $destination->id }}">
                                <span class="price">{{ $destination->address }}</span>
                            </a>
                            <div class="text p-4">
                                <span class="days">{{ $destination->category->name }}</span>
                                <h3><a href="#">{{ $destination->name }}</a></h3>
                                <p class="location"><span class="fa fa-map-marker"></span> {{ $destination->address }}, {{ $destination->village }}, Sukabumi</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    {{ $destinations->links('pagination::default') }}
                </div>
            </div>
        </div>
    </section>
@endsection
