    <!-- start of banner section ---------------------------------------------- -->
    @extends('./front.master')
      @section('content')
    <section class="brand-banner ">
        <!-- <div class="container-with ght-img"> -->
          <div class="container-with-right-img">
          
            <div class="row justify-content-between align-items-center">
              <div class="col-lg-5 ">
            <div class="banner-content">
                <h2   data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
                data-aos-easing="ease-in-out"  >Brand<br> Activation</h2>
                <div class="content">
                <p  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
                data-aos-easing="ease-in-out"  >Connect is known for its success in
                    managing branding events in Saudi Arabia.
                    It features an integrated team that covers
                    all parts of the event marketing strategy
                    from start to finish</p>
                    </div>
            </div></div>

             <div class="col-lg-5 img-box     text-center d-flex justify-content-center align-items-center "  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
             data-aos-easing="ease-in-out"  >
           
                <img src="{{asset('front/assets/images/brand-img2.png')}}" alt="" class=" d-none">
              </div>
            </div> 
     
</div>
            <div class="banner-bg right-side-img  ">
                <img src="{{asset('front/assets/images/brand-banner-img.png')}}" alt="">
                <div class="img-layer">
                  <img src="{{asset('front/assets/images/brand-img2.png')}}" alt="">
                </div>
            </div>
        
    </section>

    <!-- end o brand activation section --------------------------------------------------- -->

    <!-- start of brand gallery ------------------------------------------------------------- -->
    <section class="brand-gallery">
      <div class="container "   data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
      data-aos-easing="ease-in-out"   >
        <div class="imgs ">
          <div class="img-container">
            <img src="{{asset('front/assets/images/img1.png')}}" alt="">
          </div>

          <div class="img-container">
            <img src="{{asset('front/assets/images/img2.png')}}" alt="">
          </div>

          <div class="img-container">
            <img src="{{asset('front/assets/images/img3.png')}}" alt="">
          </div>

          <div class="img-container">
            <img src="{{asset('front/assets/images/img4.png')}}" alt="">
          </div>
          <div class="img-container">
            <img src="{{asset('front/assets/images/img5.png')}}" alt="">
          </div>

          <div class="img-container">
            <img src="{{asset('front/assets/images/img6.png')}}" alt="">
          </div>
        </div>
      </div>
    </section>

    <!-- end of brand gallery ------------------------------ -->

    <!-- start of other-services-section ------------------------ -->
    <section class="other-services">
      <div class="container">
         <div class="other-services-content d-flex justify-content-center ">
          <div class="title">
            <h2  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
            data-aos-easing="ease-in-out"   >Other Services</h2>
          </div>

          <div class="content">
             <ul  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
             data-aos-easing="ease-in-out"   >
              <li>POSM Promotional and Advertising Materials</li>
              <li>Managing Social Media Accounts</li>
              <li>Graphic Design</li>
              <li>Personalized Gifts</li>
              <li>Exhibition Management</li>
              <li>Event Management</li>
             </ul>
          </div>
         </div>
      </div>
    </section>
  
      @endsection('content')

    <!-- end of other-services-section ----------------------------- -->