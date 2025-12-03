 <div class="header-topbar style-2">
     <div class="container padding-none">
         <div class="row">
             <div class="col-md-8 col-sm-6 welcome-top">
                 <ul class="list-inline top-icon">
                     <li><i class="fa fa-envelope"></i> contact@youdomain.com</li>
                     <li><i class="fa fa-clock-o"></i> Mon - Sat 8.00 - 18.00</li>
                 </ul>
             </div>
             <div class="col-md-4 col-sm-6">
                 <ul class="list-inline text-right icon-style-1">
                     <li class=" hvr-rectangle-out"><a href="#"><i class="fa fa-twitter"
                                 aria-hidden="true"></i></a></li>
                     <li class=" hvr-rectangle-out"><a href="#"><i class="fa fa-instagram"
                                 aria-hidden="true"></i></a></li>
                     <li class=" hvr-rectangle-out"><a href="#"><i class="fa fa-linkedin"
                                 aria-hidden="true"></i></a></li>
                     <li class=" hvr-rectangle-out"><a href="#"><i class="fa fa-dribbble"
                                 aria-hidden="true"></i></a></li>
                     <li class=" hvr-rectangle-out"><a href="#"><i class="fa fa-google-plus"
                                 aria-hidden="true"></i></a></li>
                 </ul>
             </div>
         </div>
     </div>
 </div>

 <div class="main-navbar conner-style style-2 position-fixed">
     <div class="container padding-none">
         <div class="row">
             <div class="col-md-12">
                 <nav class="navbar navbar-default">
                     <div class="navbar-header">
                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                             data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                             <span class="sr-only">Toggle navigation</span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                             <span class="icon-bar"></span>
                         </button>
                         <a class="navbar-brand dis-none" href="index-2.html"><img
                                 src="{{ asset('frontend/img/logo-black.png') }}" alt="">
                         </a>
                         <a class="navbar-brand dis-block" href="index-2.html"><img
                                 src="{{ asset('frontend/img/logo-black.png') }}" alt="">
                         </a>
                     </div>
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown"
                         data-animations-delay="1.8s" data-animations="fadeInUp">
                         <ul class="nav navbar-nav bg-none navbar-right style-3">
                             <li class="dropdown active">
                                 <a href="{{ url('/') }}" role="button" aria-haspopup="true"
                                     aria-expanded="true"><span data-hover="Home">Home <i class="fa fa-angle-down"
                                             aria-hidden="true"></i></span> </a>
                             </li>
                             <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                     aria-haspopup="true" aria-expanded="false"><span data-hover="Depertment">Depertment
                                         <i class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                                 <ul class="dropdown-menu">
                                     <li><a href="{{ url('/department-one') }}">Cardilogists Depertment</a>
                                     </li>
                                     <li><a href="{{ url('/department-two') }}">Orthopaedics Depertment</a>
                                     </li>
                                     <li><a href="{{ url('/department-three') }}">Gastroenlogy Depertment</a>
                                     </li>
                                     <li><a href="{{ url('/department-four') }}">Neuroscien Depertment</a>
                                     </li>
                                     <li><a href="{{ url('/department-five') }}">Spine Depertment</a>
                                     </li>
                                     <li><a href="{{ url('/department-six') }}">Cancer Depertment</a>
                                     </li>

                                 </ul>
                             </li>
                             <li class="dropdown">
                                 <a href="{{ url('/doctors-team') }}">
                                     <span data-hover="Doctors">
                                         Doctors <i class="fa fa-angle-down" aria-hidden="true"></i>
                                     </span>
                                 </a>
                             </li>

                             <li class="dropdown">
                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                     aria-haspopup="true" aria-expanded="false"><span data-hover="Pages">Madicine Shop<i
                                             class="fa fa-angle-down" aria-hidden="true"></i></span></a>
                                 <ul class="dropdown-menu">
                                     <li><a href="{{url('/shop-grid')}}">Shop Grid</a>
                                     </li>
                                     <li><a href="{{url('/shop-list')}}">Shop List</a>
                                     </li>
                                     <li><a href="{{url('/shop-single')}}">Shop Single</a>
                                     </li>
                                     <li><a href="{{url('/shop-cart')}}">Shop Cart</a>
                                     </li>
                                     <li><a href="{{url('/shop-checkout')}}">Shop Checkout</a>
                                     </li>
                                     <li><a href="{{url('/testimonials')}}">Testimonials</a>
                                     </li>
                                     
                                 </ul>
                             </li>
                             <li class="dropdown">
                                 <a href="#" role="button" aria-haspopup="true" aria-expanded="true"><span
                                         data-hover="Contact">Contact <i class="fa fa-angle-down"
                                             aria-hidden="true"></i></span></a>
                             </li>
                             <li>
                                 <div class="dropdown-buttons">
                                     <div class="btn-group menu-search-box">
                                         <button type="button" class="btn dropdown-toggle" id="header-drop-3"
                                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                 class="icon icon-Search"></i></button>
                                         <ul class="dropdown-menu dropdown-menu-right dropdown-animation"
                                             aria-labelledby="header-drop-3">
                                             <li>
                                                 <form role="search" class="search-box">
                                                     <div class="form-group">
                                                         <input type="text" class="form-control"
                                                             placeholder="Search">
                                                         <i class="icon icon-Search form-control-feedback"></i>
                                                     </div>
                                                 </form>
                                             </li>
                                         </ul>
                                     </div>
                                     <div class="btn-group">
                                         <button type="button" class="btn dropdown-toggle" id="header-drop-4"
                                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                                 class="icon icon-ShoppingCart"></i><span
                                                 class="menu-cart">8</span></button>
                                         <ul class="dropdown-menu dropdown-menu-right cart dropdown-animation"
                                             aria-labelledby="header-drop-4">
                                             <li>
                                                 <table class="table table-hover">
                                                     <thead>
                                                         <tr>
                                                             <th class="quantity">QTY</th>
                                                             <th class="product">Product</th>
                                                             <th class="amount">Subtotal</th>
                                                         </tr>
                                                     </thead>
                                                     <tbody>
                                                         <tr>
                                                             <td class="quantity">2 x</td>
                                                             <td class="product"><a href="shop-product.html">Android
                                                                     4.4 Smartphone</a><span class="small">4.7" Dual
                                                                     Core 1GB</span></td>
                                                             <td class="amount">$199.00</td>
                                                         </tr>
                                                         <tr>
                                                             <td class="quantity">3 x</td>
                                                             <td class="product"><a href="shop-product.html">Android
                                                                     4.2 Tablet</a><span class="small">7.3" Quad Core
                                                                     2GB</span></td>
                                                             <td class="amount">$299.00</td>
                                                         </tr>
                                                         <tr>
                                                             <td class="quantity">3 x</td>
                                                             <td class="product"><a href="shop-product.html">Desktop
                                                                     PC</a><span class="small">Quad Core 3.2MHz, 8GB
                                                                     RAM, 1TB Hard Disk</span></td>
                                                             <td class="amount">$1499.00</td>
                                                         </tr>
                                                         <tr>
                                                             <td class="total-quantity" colspan="2"><strong>Total 8
                                                                     Items</strong></td>
                                                             <td class="total-amount"><strong>$1997.00</strong></td>
                                                         </tr>
                                                     </tbody>
                                                 </table>
                                                 <div class="panel-body text-right">
                                                     <a href="#" class="menu-shop-btn">View Cart</a>
                                                     <a href="#" class="menu-shop-btn">Checkout</a>
                                                 </div>
                                             </li>
                                         </ul>
                                     </div>
                                 </div>
                             </li>
                         </ul>
                     </div>
                 </nav>
             </div>
         </div>
     </div>
 </div>
