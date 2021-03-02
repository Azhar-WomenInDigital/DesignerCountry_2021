@extends('layouts.admin.backend-layouts')
@section ('page-title', 'Blog Create')
@push ('page-css')
<style>
.blog_post{
  display: flex;
  justify-content: center;
  align-items: center;
  height: 70vh;
}
.blog_post .button i {
  font-size: 100px;
  color: #009688;
}
</style>
@endpush
@section('page-content')
<div class="app-title">
  <div>
    <h1><i class="fab fa fa-blog"></i></i> Blog</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item"><a href="#">Create Blog</a></li>
  </ul>
</div>
<section class="blog_post">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="blog-content-page">
          <div class="title">
            <h1 class="text-center"><span style="border-bottom: 2px solid #009688; padding-bottom: 20px;">Create Blog Post</span></h1>
            <div class="credetial pt-sm-3 pt-md-4 pt-lg-5 text-center">
              <h3>Before Create Blog Fillup with</h3>
              <p><strong>Email : </strong>designercountry@gmail.com</p>
              <p><strong>Password : </strong>designercountry</p>
            </div>
          </div>
          <div class="body">
            <div class="button text-center">
              <a href="http://localhost:8000/wink/login" target="blank"><i class="fas fa-plus-square"></i></a>
            </div>
            <marquee><p style="color: #009688; font-size: 20px; text-align: center;">Write Your Blog For Designer Country <i class="fas fa-heart"></i></p></marquee>
          </div>
        </div>
      </div>
    </div>
  </div>
</section> 
@endsection
@push('page-js')
@endpush
