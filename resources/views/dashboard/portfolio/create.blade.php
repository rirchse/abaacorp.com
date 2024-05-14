@extends('home')
@section('title', 'Create New Portfolio')
@section('content')

<section id="main-banner-page" style="width:100%; height:80px;background:url(/images/banner1-1.jpg)"></section>

<div class="container-fluid">
    <div class="row flex-nowrap">

        @include('dashboard.sidebar')

        <div class="col py-3" style="background:#eee">

            @include('partials.message')

            <div class="col-md-8 whitebox">
                <div class="col-md-12 text-center wow fadeIn" data-wow-delay="300ms">
                    <h2 class="heading bottom30 darkcolor font-light2">Dashboard
                    </h2>
                </div>
                <div class="widget logincontainer">
                    <h3 class="darkcolor bottom30 text-center text-lg-start">Create New Portfolio 
                        <a class="btn btn-primary" style="float:right;font-size:15px" href="{{route('portfolio.index')}}">View</a>
                    </h3>
                    <form class="getin_form border-form" id="login" action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="title" class="d-none"></label>
                                    <input class="form-control" type="text" placeholder="Portfolio Title:" required id="title" name="title">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="image" class="d-none"></label>
                                    <input class="form-control" type="file" placeholder="portfolio Image:" id="image" name="image">
                                    <label style="color:red">Portfolio image size 6:6 or (600px X 600px)</label>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom35">
                                    <label for="details" class="d-none"></label>
                                    <textarea class="form-control" placeholder="portfolio details:" required id="details" name="details" rows="10"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group bottom30 ml-1">
                                    <div class="form-check text-left">
                                        <input class="form-check-input" checked type="checkbox" value="Active" name="status" id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Publish
                                        </label>
                                    </div>
                                    <div class="form-check text-left">
                                        <input class="form-check-input"  type="checkbox" value="Yes" name="home" id="home">
                                        <label class="form-check-label" for="home">Home</label>
                                    </div>
                                </div>
                            <div class="col-sm-12">
                                <button type="submit" class="button gradient-btn">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    $('.dropify').dropify();
    CKEDITOR.replace( 'portfolio-details' );
</script>
@endsection