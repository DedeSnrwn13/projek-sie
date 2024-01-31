@extends('layouts.front')

@section('title', 'Blog - ' . $article->title)

@section('content')
    <style scoped>
        #blog-{{ $article->id }} {
            background-image: url('{{ Storage::Url($article->image) }}');
        }
    </style>
    <section class="hero-wrap hero-wrap-2 js-fullheight" id="blog-{{ $article->id }}">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                    class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a
                                href="index.html">Blog <i class="fa fa-chevron-right"></i></a></span> <span>Blog Single <i
                                class="fa fa-chevron-right"></i></span></p>
                    <h1 class="mb-0 bread">{{ $article->title }}</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 ftco-animate py-md-5 mt-md-5">
                    <h2 class="mb-3">{{ $article->title }}</h2>
                    {!! $article->body !!}
                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            <a href="#" class="tag-cloud-link">{{ $article->category->name }}</a>
                        </div>
                    </div>

                    <div class="about-author d-flex p-4 bg-light">
                        <div class="bio mr-5">
                            <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image placeholder" class="img-fluid mb-4" width="120">
                        </div>
                        <div class="desc">
                            <h3>Admin</h3>
                            <p>Seorang Mahasiswa</p>
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->

                <div class="col-lg-4 sidebar ftco-animate bg-light py-md-5">
                    <div class="sidebar-box pt-md-5">
                        <form action="#" class="search-form">
                            <div class="form-group">
                                <span class="icon fa fa-search"></span>
                                <input type="text" class="form-control" placeholder="Search...">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <div class="categories">
                            <h3>Categories</h3>
                            @foreach ($categories as $category)
                                <li><a href="#">{{ $category->name }} <span>({{ $category->total_posts }})</span></a></li>
                            @endforeach
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3>Recent Blog</h3>
                        @foreach ($articles as $article)
                            <div class="block-21 mb-4 d-flex">
                                <style scoped>
                                    #post-{{ $article->id }} {
                                        background-image: url('{{ Storage::Url($article->image) }}');
                                    }
                                </style>
                                <a class="blog-img mr-4" id="post-{{ $article->id }}"></a>
                                <div class="text">
                                    <h3 class="heading"><a href="#">{!! \Illuminate\Support\Str::of($article->title)->limit(40) !!}</a></h3>
                                    <div class="meta">
                                        <div><a href="#"><span class="fa fa-calendar"></span> {{ $article->created_at->format('F d, Y') }}</a>
                                        </div>
                                        <div><a href="#"><span class="fa fa-user"></span> Admin</a></div>
                                        <div><a href="#"><span class="fa fa-comment"></span> 0</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section> <!-- .section -->
@endsection
