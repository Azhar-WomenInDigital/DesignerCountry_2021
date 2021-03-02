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
</style>  
@endpush
@section ('page-content')
<!-- Blog -->
<section class="mobile-common-page px-2">
  <div class="container py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5 mobile-pt">
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