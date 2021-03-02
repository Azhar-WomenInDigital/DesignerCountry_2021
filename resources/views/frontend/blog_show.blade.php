@extends ('layouts.frontend.master')
@section ('page-title', "$post->title")
@push('page-css')
<style type="text/css">
 .embedded_image img{
    width: 100%;
  }
  .blog_banner img{
    width: 100%;
  }
  .recent-blog-wrap{
    overflow: auto;
    height: 700px;
  }
  .recent-blog{
    margin-top: 50px;
  }
</style>  
@endpush
@section ('page-content')
<!-- Blog -->
<section class="mobile-common-page px-2">
  <div class="container-fluid py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5 mobile-pt">
    <div class="row">
      <div class="col-sm-12 col-md-8">
        <div id="blog_banner" class="head py-col-2 py-sm-3 py-md-4 py-lg-4 py-xl-4">
          <h2 class="text-center">{{ $post->title }}</h2>
          <p class="text-center pb-col-2 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4 mobile-pb-20">{{ $post->excerpt }}</p>
          <h6 class="pb-sm-3"><strong>Author Name:</strong>{{ $post->author->name }}</h6>
          <h6 class="mobile-pb-10 pb-sm-3"><strong>Publication Date:</strong> {{ $post->publish_date }}</h6>
          <img src="{{ $post->featured_image }}" class="img-fluid mobile-pl" alt="" class="img-fluid" style="width: 100%; height:auto;">
        </div>
        <div id="blog_body" class="article px-col-2 px-sm-3 px-md-4 px-lg-5 px-xl-5 mobile-pl mobile-pr"
          style="width: 100%;">
          <div> {!! $post->body !!} </div>
        </div>
      </div>
      <div class="d-none d-md-block col-md-4">
        <div class="recent-blog-wrap">
          <h3 class="text-center mobile-pt-20 pt-sm-3 pt-md-4 pt-lg-5 pb-sm-2 pb-md-3 pb-mobile-10">Recent Blog</h3>  
          <?php
          $recentblog = DB::table('wink_posts')->orderBy('created_at','desc')->limit(5)->get();
          foreach($recentblog as $blog){
          ?>
          <div class="mb-md-3">
            <a href="/blog/{{ $blog->slug }}">
              <h5 class="pb-1">{{ $blog->publish_date }}</h5>
              <img src="{{ $blog->featured_image }}" alt="" class="img-fluid">
              <h6 class="pt-1">{{ $blog->title }}</h6>
            </a>
          </div>
        <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Blog  -->
<!-- Discus API -->
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="disqus_thread"></div>
        <script>
        /**
         *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
         *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
          var d = document,
            s = d.createElement('script');
          s.src = 'https://designer-country-1.disqus.com/embed.js';
          s.setAttribute('data-timestamp', +new Date());
          (d.head || d.body).appendChild(s);
        })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
            Disqus.</a></noscript>
      </div>
    </div>
  </div>
</section>
<!-- Discus API -->
@endsection
@push('page-js')
@endpush