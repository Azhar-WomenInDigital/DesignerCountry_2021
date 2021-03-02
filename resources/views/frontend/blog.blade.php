@extends ('layouts.frontend.master')
@section ('page-title', 'Professional Photo Editing | Clipping Path Background Change Services')
@push('page-css')
<style type="text/css">
</style>
@endpush
@section ('page-content')
<!--==** Blog Section Start **==-->
<section class="mobile-common-page py-sm-4 py-md-5 mt-lg-2">
    <div class="container">
        <!-- Blog Category  Grid -->
        <div class="text-center pb-sm-4 mobile-pb-20">
            <h2>Designer Country Blogs</h2>
            <p>Photographers for Outsourcing Online Store</p>
        </div>
        <div class="row">
            @foreach($posts as $post)
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                <div class="content blog-card">
                    <h4 class="py-1">
                        <a href="/blog/{{ $post->slug }}">{{ strlen($post->excerpt) > 30 ? substr($post->excerpt, 0,30)."..." : $post->excerpt }}
                        </a>
                    </h4>
                    <a href="/blog/{{ $post->slug }}">
                        <img src="{{ $post->featured_image }}"
                            class="img-fluid py-2"  alt="Mountains">
                    </a>
                    <div class="title">
                        <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                    </div>
                    <div class="publish-and-author">
                        <small><strong>Author Name:</strong> {{ $post->author->name }}</small><br>
                        <small><strong>Publication Date:</strong> {{ $post->publish_date }}</small>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $posts->links() }}
        </div>
    </div>
</section>
@endsection
@push('page-js')
@endpush
