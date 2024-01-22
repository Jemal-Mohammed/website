@include('includes.header')

  <body data-bs-spy="scroll" data-bs-target=".navbar">
    {{-- preloader --}}
    <div id="pre-loader"></div>
    <!-- navbar -->
   @include('includes.navbar')
      <!-- hero -->
      <section id="home" class="bg-cover hero" style="background-image: url('/images/hero1.jpg');">
        <div class="overlay"></div>
          <div class="container text-white text-center">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-left"      data-aos-duration="1500" class="display-4">Web Design And Mobile Application Devlopment <br />
                        In Addis Abeba Ethiopia
                    </h1>
                    <p data-aos="fade-up"      data-aos-duration="1500" class="my-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere molestiae doloribus quia officia <br />
                        magni qui veniam, error reprehenderit iure hic explicabo. Asperiores accusamus consequatur magnam!
                    </p>
                    <a data-aos="fade-right"      data-aos-duration="1500" class="btn btn-main" href="">Get Started</a>
                </div>
            </div>
          </div>
      </section>
      <!-- services -->
      <section id="services">
            <div class="container ">
                <div class="row">
                    <div class="col-12 section-intro text-center">
                         <h1>Our Services</h1>
                         <div class="divider"></div>
                         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas blanditiis repudiandae aliquam, maxime saepe quis suscipit <br />
                            libero est eligendi cum, reprehenderit veritatis animi aut recusandae. Consequuntur esse veniam, in labore et omnis! Aliquid faci eos?</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4" data-aos="fade-right"      data-aos-duration="1500">
                      >
                        <div class="service ">
                            <div class="service-img">
                                <img src="images/hero.jpg" alt="no-image">
                                <div class="icon"><i class="icon-cloud"></i></div>
                            </div>
                            <h5 class="mt-5 text-center ">Web  Design</h5>
                            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Volrighttatem quas dolore est labore, animi,
                                 quidem veritatis ipsa, nihil nisi nesciunt amet. Minima eos ipsam itaque doloribus odit quisquam
                                  quasi architecto?</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-right"      data-aos-duration="1500">
                      >
                        <div class="service ">
                            <div class="service-img">
                                <img src="images/05.png" alt="no-image">
                                <div class="icon"><i class="icon-browser"></i></div>
                            </div>
                            <h5 class="mt-5 text-center">Graphics  Design</h5>
                            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Volrighttatem quas dolore est labore, animi,
                                 quidem veritatis ipsa, nihil nisi nesciunt amet. Minima eos ipsam itaque doloribus odit quisquam
                                  quasi architecto?</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-left"      data-aos-duration="1500">
                      >
                        <div class="service ">
                            <div class="service-img">
                                <img src="images/07.png" alt="no-image">
                                <div class="icon"><i class="icon-mobile"></i></div>
                            </div>
                            <h5 class="mt-5 text-center">Mobile Application  Development</h5>
                            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quas dolore est labore, animi,
                                 quidem veritatis ipsa, nihil nisi nesciunt amet. Minima eos ipsam itaque doloribus odit quisquam
                                  quasi architecto?</p>
                        </div>
                    </div>
                </div>
            </div>
      </section>
  
    {{-- blogs --}}
      <section id="blogs">
        <div class="container ">
            <div class="row">
                <div class="col-12 section-intro text-center">
                     <h1>Our Blog</h1>
                     <div class="divider"></div>
                     <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas blanditiis repudiandae aliquam, maxime saepe quis suscipit <br />
                        libero est eligendi cum, reprehenderit veritatis animi aut recusandae. Consequuntur esse veniam, in labore et omnis! Aliquid faci eos?</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" data-aos="fade-right"      data-aos-duration="1500">
                  >
                    <div class="service ">
                        <div class="service-img">
                            <img src="images/img_06.jpg" alt="no-image">
                            {{-- <div class="icon"><i class="icon-cloud"></i></div> --}}
                        </div>
                        <h5 class="mt-5 text-center ">title of blog</h5>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Volrighttatem quas dolore est labore, animi,
                             quidem veritatis ipsa, nihil nisi nesciunt amet. Minima eos ipsam itaque doloribus odit quisquam
                              quasi architecto?</p>
                    </div>
                    <a class="btn btn-main" href="#">Read More</a>

                </div>
                <div class="col-md-4" data-aos="fade-right"      data-aos-duration="1500">
                  >
                    <div class="service ">
                        <div class="service-img">
                            <img src="images/img_05.jpg" alt="no-image">
                            {{-- <div class="icon"><i class="icon-browser"></i></div> --}}
                        </div>
                        <h5 class="mt-5 text-center ">title of blog</h5>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Volrighttatem quas dolore est labore, animi,
                             quidem veritatis ipsa, nihil nisi nesciunt amet. Minima eos ipsam itaque doloribus odit quisquam
                              quasi architecto?</p>
                    </div>
                    <a class="btn btn-main" href="#">Read More</a>

                </div>
                <div class="col-md-4" data-aos="fade-left"      data-aos-duration="1500">
                  >
                    <div class="service ">
                        <div class="service-img">
                            <img src="images/img_16.jpg" alt="no-image">
                            {{-- <div class="icon"><i class="icon-mobile"></i></div> --}}
                        </div>
                        <h5 class="mt-5 text-center ">title of blog</h5>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem quas dolore est labore, animi,
                             quidem veritatis ipsa, nihil nisi nesciunt amet. Minima eos ipsam itaque doloribus odit quisquam
                              quasi architecto?</p>
                            </div>
                            <a class="btn btn-main" href="#">Read More</a>
                </div>
            </div>
        </div>
  </section>
  {{-- fotter --}}
@include('includes.footer')
      <script src="js/main.js"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJLYTOxVnGEeQUnh8h/LS1hljA59bf5/jCIKHVHQSXWz8bylfZ5Ct" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyCWpB6BfRTt8kUFe1/1CrrKJc99x0U9ot" crossorigin="anonymous"></script>
    
    <script>
        var loader=document.getElementById('pre-loader');
            
            window.addEventListener('load', function(){
                loader.style.display='none'
            })
        
    </script>
 
 
</body>
</html>
