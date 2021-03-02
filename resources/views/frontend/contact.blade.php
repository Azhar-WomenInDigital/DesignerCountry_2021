@extends ('layouts.frontend.master')
@section ('page-title', 'Professional Photo Editing | Clipping Path Ghost Manipulation')
@push('page-css')
<style type="text/css">
</style>
@endpush
@section ('page-content')
<!--  Contact  -->
<section class="contact pb-col-3 pb-sm-4 pb-md-5 mobile-pt-20">
  <div class="container pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
    <div class="section-title">
      <h2>Contact</h2>
      <h3>Feel to free contact us becase we are always active for you!</h3>
      <p>We wold give to like you any support to achieve your setecfaction.</p>
    </div>
    <div class="row">
      <div class="col-lg-5 d-flex align-items-stretch">
        <div class="info">
          <div class="address">
            <i class="icofont-google-map"></i>
            <h4>Location:</h4>
            <p>Dhaka, Bangladesh</p>
          </div>
          <div class="email">
            <i class="icofont-envelope"></i>
            <h4>Email:</h4>
            <p>
              <a href="mailto:designercountry@gmail.com" rel="preload">designercountry@gmail.com</a>
            </p>
          </div>
          <div class="phone">
            <i class="icofont-phone"></i>
            <h4>Call:</h4>
            <p>
              <a href="tel:+8801914106753" rel="preload">+8801914106753</a>
            </p>
          </div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d4655.227807798314!2d90.3887027!3d23.7507683!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bb54f6ebcd%3A0xe7dfdca493b15269!2sDesigner%20Country!5e1!3m2!1sen!2sbd!4v1613878857705!5m2!1sen!2sbd" width="100%" height="290" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
      <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
        <form action="{{ route('contact.send') }}" method="POST" class="php-email-form">
          @csrf
          <div class="row">
            <div class="form-group col-md-6">
              <label for="name">Your Name</label>
              <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="form-group col-md-6">
              <label for="email">Your Email</label>
              <input type="email" class="form-control" name="email" id="email">
            </div>
          </div>
          <div class="row">
            <div class="form-group">
              <label for="subject">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject">
            </div>
          </div>
          <div class="row">
          <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" name="message" rows="10" id="message"></textarea>
          </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn submit">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- End Contact  -->
@endsection
@push('page-js')
@endpush