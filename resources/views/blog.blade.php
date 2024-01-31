@extends('layouts.front')

@section('title', 'Blog')

@section('content')
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url(assets/images/globalradio.co_.id_.webp);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i
                                    class="fa fa-chevron-right"></i></a></span> <span>Blog
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                @foreach ($blogs as $blog)
                    <div class="col-md-4 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <style scoped>
                                #blog-{{ $blog->id }} {
                                    background-image: url('{{ Storage::Url($blog->image) }}');
                                }
                            </style>
                            <a href="{{ route('blog.detail', $blog->slug) }}" class="block-20" id="blog-{{ $blog->id }}"></a>
                            <div class="text">
                                <div class="d-flex align-items-center mb-4 topp">
                                    <div class="one">
                                        <span class="day">{{ $blog->created_at->format('d') }}</span>
                                    </div>
                                    <div class="two">
                                        <span class="yr">{{ $blog->created_at->format('Y') }}</span>
                                        <span class="mos">{{ $blog->created_at->format('F') }}</span>
                                    </div>
                                </div>
                                <h3 class="heading"><a href="{{ route('blog.detail', $blog->slug) }}">{{ \Illuminate\Support\Str::of($blog->title)->limit(50) }}</a></h3>
                                <p>{!! \Illuminate\Support\Str::of($blog->body)->limit(80) !!}</p>
                                <p><a href="{{ route('blog.detail', $blog->slug) }}" class="btn btn-primary">Selengkapnya</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    {{ $blogs->links('pagination::default') }}
                </div>
            </div>
        </div>
    </section>
@endsection
