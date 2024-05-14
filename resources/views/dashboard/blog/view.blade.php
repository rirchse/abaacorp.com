@extends('home')
@section('title', 'Create New Blog')
@section('content')

<section id="main-banner-page" style="width:100%; height:80px;background:url(/images/banner1-1.jpg)"></section>

<div class="container-fluid">
    <div class="row flex-nowrap">

        @include('dashboard.sidebar')
        <div class="col py-3" style="background:#eee">

            @include('partials.message');

            <div class="col-md-12 whitebox">
                <div class="col-md-12 text-center wow fadeIn" data-wow-delay="300ms">
                    <h2 class="heading bottom30 darkcolor font-light2">Dashboard
                    </h2>
                </div>
                <div class="widget logincontainer">
                    <h3 class="darkcolor bottom30 text-center text-lg-start">View Blog 
                        <a class="btn btn-primary" style="float:right;font-size:15px" href="{{route('blog.create')}}">Create</a>
                    </h3>
                    <table class="table table-responsive table-striped table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Publish Date</th>
                            <th>Status</th>
                            <th>Home</th>
                            <th>Action</th>
                        </tr>
                        @foreach($blogs as $blog)
                        <tr>
                            <td>{{$blog->id}}</td>
                            <td>{{$blog->blog_title}}</td>
                            <td>{{$blog->blog_date}}</td>
                            <td class="{{$blog->status == 'Deactive' ? 'text-danger' : 'text-success'}}">
                                {{$blog->status}}
                            </td>
                            <td class="{{$blog->home == 'No' ? 'text-danger' : 'text-success'}}">
                                {{$blog->home}}
                            </td>
                            <td>
                                <a class="text-warning" style="float:left" href="{{ route('blog.edit', $blog->id) }}"><i class="fa fa-edit"></i></a>
                                <form style="width:10px;float:left" action="{{route('blog.destroy', $blog->id)}}" method="POST">
                                @method('delete') @csrf 
                                <button type="submit" class="text-danger" style="background:none" onclick="return confirm('Are you sure, you want to delete the blog?')"><i class="fa fa-trash"></i></button></form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {!! $blogs->withQueryString()->links('pagination::bootstrap-5') !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection