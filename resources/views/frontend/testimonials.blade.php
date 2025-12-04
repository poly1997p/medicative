@extends('frontend.master')

@section('content')
     <section class="inner-bg over-layer-black" style="background-image: url('{{asset('frontend/img/bg/4.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="mini-title inner-style-2">
                        <h3>testimonial</h3>
                        <p><a href="index-one.html">Home</a> <span class="fa fa-angle-right"></span> <a href="#">testimonial</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

   <!-- Testimonial start -->
    <section class="testimonial">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="testimonial-carousel-one">
                            <div class="item">
                                <div class="testimonial-item text-center">
                                    <div class="testimonial-author">
                                        <div class="author-img">
                                            <img class="img-responsive" src="{{asset('frontend/img/testimonial/1.png')}}" alt="" />
                                        </div>
                                        <h4>John Daniel</h4>
                                        <h6>business man</h6>
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                    <p>consectetur adipisicing elit. Nemo ex doloremque maiores quas, cumque commodi eaque molestiae in ratione nam obcaecati nihil provident illum eius sed ullam amet, expedita molestias iusto.</p> 
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-item text-center">
                                    <div class="testimonial-author">
                                        <div class="author-img">
                                            <img class="img-responsive" src="{{asset('frontend/img/testimonial/2.png')}}" alt="" />
                                        </div>
                                        <h4>John Daniel</h4>
                                        <h6>business man</h6>
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                    <p>consectetur adipisicing elit. Nemo ex doloremque maiores quas, cumque commodi eaque molestiae in ratione nam obcaecati nihil provident illum eius sed ullam amet, expedita molestias iusto.</p> 
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-item text-center">
                                    <div class="testimonial-author">
                                        <div class="author-img">
                                            <img class="img-responsive" src="img/testimonial/3.png" alt="" />
                                        </div>
                                        <h4>John Daniel</h4>
                                        <h6>business man</h6>
                                        <ul>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                            <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                        </ul>
                                    </div>
                                    <p>consectetur adipisicing elit. Nemo ex doloremque maiores quas, cumque commodi eaque molestiae in ratione nam obcaecati nihil provident illum eius sed ullam amet, expedita molestias iusto.</p> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial end -->

   <!-- divider start -->
    <section class="service-area over-layer-default" style="background-image:url({{asset('frontend/img/bg/5.jpg')}});">
        <div class="container padding-bottom-none padding-top-40">
            <div class="section-content">
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="service-item style-1 text-white border-right">
                            <div class="service-icon">
                                <i class="pe-7s-call"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Give us a Call</a></h5>
                                <p>+970-438-3258</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="service-item style-1 text-white border-right">
                            <div class="">
                                <i class="pe-7s-mail-open"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Send us a Message</a></h5>
                                <p>Your_malil@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="service-item style-1 text-white">
                            <div class="">
                                <i class="pe-7s-map-marker"></i>
                            </div>
                            <div class="content">
                                <h5><a href="#">Visit our Location</a></h5>
                                <p>12 New york, USA </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- divider end -->
@endsection