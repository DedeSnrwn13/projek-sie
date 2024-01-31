@extends('layouts.front')

@section('title', 'Home - Wisata Sukabumi')

@section('content')
    <style scoped>
        #hero-home {
            background-image: url('{{ Storage::Url($heroBanner->image) }}');
        }
    </style>
    <div class="hero-wrap js-fullheight" id="hero-home">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
                <div class="col-md-7 ftco-animate">
                    <span class="subheading">{{ $heroBanner->title ?? '' }}</span>
                    <h1 class="mb-4">{{ $heroBanner->subtitle ?? '' }}</h1>
                    <p class="caps">{{ $heroBanner->description ?? '' }}</p>
                </div>
                <a href="https://www.youtube.com/watch?v=D1CuYJ6hBp0"
                    class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                    <span class="fa fa-play"></span>
                </a>
            </div>
        </div>
    </div>

    <section class="ftco-section services-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
                    <div class="w-100">
                        <span class="subheading">Selamat Datang di Sukabumi</span>
                        <h2 class="mb-4">Saatnya memulai petualangan Anda</h2>
                        <p>
                            Selamat datang di Sukabumi, pusat petualangan yang penuh kegembiraan! Setelah melangkah melewati
                            pintu gerbang utama, dunia keindahan alam dan keunikan kultural Sukabumi akan segera memukau
                            Anda. Saat ini adalah waktunya untuk memulai perjalanan eksplorasi Anda di destinasi yang
                            dipenuhi dengan keajaiban alam, warisan budaya, dan pesona lokal yang tak terlupakan.
                        </p>
                        <p>
                            Bersiaplah untuk merasakan sensasi petualangan yang menggetarkan di bawah cakrawala Sukabumi
                            yang menanti
                            untuk dijelajahi.</p>
                        <p><a href="#" class="btn btn-primary py-3 px-4">Cari Destinasi</a></p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-1 d-block img"
                                style="background-image: url(assets/images/services-1.jpg);">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-paragliding"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Kegiatan</h3>
                                    <p>
                                        Eksplorasi aktifitas seru di Sukabumi, sebagaimana sungai Duden memperkaya pengalaman Anda.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-2 d-block img"
                                style="background-image: url(assets/images/services-2.jpg);">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-route"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Agenda Perjalanan</h3>
                                    <p>
                                        Atur perjalanan mudah di Sukabumi dengan layanan kami, serupa aliran Duden yang lancar.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-3 d-block img"
                                style="background-image: url(assets/images/services-3.jpg);">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-tour-guide"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Panduan Pribadi</h3>
                                    <p>
                                        Nikmati Sukabumi dengan pemandu pribadi kami, seperti menyelami keindahan tanpa batas.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
                            <div class="services services-1 color-4 d-block img"
                                style="background-image: url(assets/images/services-4.jpg);">
                                <div class="icon d-flex align-items-center justify-content-center"><span
                                        class="flaticon-map"></span></div>
                                <div class="media-body">
                                    <h3 class="heading mb-3">Manajer Lokasi</h3>
                                    <p>
                                        Pantau lokasi Anda di Sukabumi dengan Manajer Lokasi kami, memastikan segalanya berjalan lancar.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section img ftco-select-destination" style="background-image: url(assets/images/bg_3.jpg);">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Sukabumi Menyediakan Tempat</span>
                    <h2 class="mb-4">Pilih Tujuan Anda</h2>
                </div>
            </div>
        </div>
        <div class="container container-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel-destination owl-carousel ftco-animate">
                        @foreach ($groupedDestinations as $groupedDestination)
                            <div class="item">
                                <div class="project-destination">
                                    <style scoped>
                                        #group-destination{{ $groupedDestination->id }} {
                                            background-image: url('{{ Storage::Url($groupedDestination->thumbnail) }}');
                                        }
                                    </style>
                                    <a href="#" class="img" id="group-destination{{ $groupedDestination->id }}">
                                        <div class="text">
                                            <h3>{{ $groupedDestination->name }}</h3>
                                            <span>{{ $groupedDestination->total }} Tempat</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Destinasi</span>
                    <h2 class="mb-4">Tujuan Wisata</h2>
                </div>
            </div>
            <div class="row">
                @foreach ($destinations as $destination)
                    <div class="col-md-4 ftco-animate">
                        <div class="project-wrap">
                            <style scoped>
                                #destination-img{{ $destination->id }} {
                                    background-image: url('{{ Storage::url($destination->thumbnail) }}');
                                }
                            </style>
                            <a href="#" class="img" id="destination-img{{ $destination->id }}">
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
        </div>
    </section>

    <style scoped>
        #footer-home {
            background-image: url('{{ Storage::Url($footerBanner->image) }}');
        }
    </style>

    <section class="ftco-section ftco-about img" id="footer-home">
        <div class="overlay"></div>
        <div class="container py-md-5">
            <div class="row py-md-5">
                <div class="col-md d-flex align-items-center justify-content-center">
                    <a href="{{ $footerBanner->video_link ?? '#' }}"
                        class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                        <span class="fa fa-play"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-about ftco-no-pt img">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 about-intro">
                    <div class="row">
                        <div class="col-md-6 d-flex align-items-stretch">
                            <div class="img d-flex w-100 align-items-center justify-content-center"
                                style="background-image:url(assets/images/web_situgunung_lake-1024x432.jpg);">
                            </div>
                        </div>
                        <div class="col-md-6 pl-md-5 py-5">
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate">
                                    <span class="subheading">Tempat Kami</span>
                                    <h2 class="mb-4">Jadikan Tur Anda Berkesan dan Aman Bersama Kami</h2>
                                    <p>Sukabumi, sebuah destinasi wisata yang memukau, diperkenalkan oleh aliran kata-kata
                                        yang menawan. Sebuah sungai kecil bernama Cidurian mengalir melewati tempat ini,
                                        menyuplai keindahan regelialia yang diperlukan. Menyajikan pengalaman paradisal,
                                        Sukabumi adalah negeri wisata di mana potongan-potongan cerita tentang tempat-tempat
                                        menakjubkan terbang ke dalam penjelajahan Anda.</p>
                                    <p><a href="#" class="btn btn-primary">Pesan Tujuan Anda</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-4">
                <div class="col-md-12 heading-section text-center ftco-animate">
                    <span class="subheading">Blog Kami</span>
                    <h2 class="mb-4">Postingan Terbaru</h2>
                </div>
            </div>
            <div class="row d-flex">
                @foreach ($articles as $article)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <style scoped>
                                #blog-img{{ $article->id }} {
                                    background-image: url('{{ Storage::url($article->image) }}');
                                }
                            </style>
                            <a href="{{ route('blog.detail', $article->slug) }}" class="block-20" id="blog-img{{ $destination->id }}"></a>
                            <div class="text">
                                <div class="d-flex align-items-center mb-4 topp">
                                    <div class="one">
                                        <span class="day">{{ $article->created_at->format('d') }}</span>
                                    </div>
                                    <div class="two">
                                        <span class="yr">{{ $article->created_at->format('Y') }}</span>
                                        <span class="mos">{{ $article->created_at->format('F') }}</span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="{{ route('blog.detail', $article->slug) }}">{{ \Illuminate\Support\Str::of($article->title)->limit(50) }}</a></h3>
                                <p>{!! \Illuminate\Support\Str::of($article->body)->limit(80) !!}</p>
                                <p><a href="{{ route('blog.detail', $article->slug) }}" class="btn btn-primary">Selengkapnya</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
