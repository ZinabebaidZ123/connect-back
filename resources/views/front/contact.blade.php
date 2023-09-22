   <!-- start contact-banner section -------------------------------------- -->

   @extends('./front.master')
      @section('content')
   <section class="contact-banner">
        <div class="container">
            <div class="form d-flex flex-column justify-content-center h-100">
            <h2  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
            data-aos-easing="ease-in-out">Contact us</h2>

            <form action="">
                <div class="input"   data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
                data-aos-easing="ease-in-out">
                    <label for="">Full name</label>
                    <input type="text" class="form-control">
                </div>

                <div class="input"  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
                data-aos-easing="ease-in-out">
                    <label for="">Email</label>
                    <input type="email" class="form-control">
                </div>

                <div class="textarea"  data-aos="fade-up" data-aos-duration="300" date-aos-delay="200"
                data-aos-easing="ease-in-out">
                    <label for="">Message</label>
                 <textarea name="" id="" cols="35" rows="2" class="form-control"></textarea>
                </div>

                <button type="submit">Send</button>
            </form>
</div>
           
        

         <div class="contact-us-img">
                <img src="{{asset('front/assets/images/contact-banner.png')}}" alt="">
            </div>
            </div>
    </section>

   
      @section('content')