<style type="text/css">
  /*time {
        display: inline-block;
        width: 100%;
        color: rgb(255, 255, 255);
        background-color: rgb(137, 185, 243);
        padding: 5px;
        text-align: center;
        text-transform: uppercase;
      }

time > span {
  display: none;
}
time > .day {
  display: block;
  font-size: 56pt;
  font-weight: 100;
  line-height: 1;
}
time > .month {
  display: block;
  font-size: 24pt;
  font-weight: 900;
  line-height: 1;
}*/

/* medium - display 2  */
@media (min-width: 768px) {

  .carousel-inner .carousel-item-right.active,
  .carousel-inner .carousel-item-next {
      transform: translateX(50%);
  }

  .carousel-inner .carousel-item-left.active,
  .carousel-inner .carousel-item-prev {
      transform: translateX(-50%);
  }
}

/* large - display 3 */
@media (min-width: 992px) {

  .carousel-inner .carousel-item-right.active,
  .carousel-inner .carousel-item-next {
      transform: translateX(33%);
  }

  .carousel-inner .carousel-item-left.active,
  .carousel-inner .carousel-item-prev {
      transform: translateX(-33%);
  }
}

@media (max-width: 768px) {
  .carousel-inner .carousel-item>div {
      display: none;
  }

  .carousel-inner .carousel-item>div:first-child {
      display: block;
  }
}

.carousel-inner .carousel-item.active,
.carousel-inner .carousel-item-next,
.carousel-inner .carousel-item-prev {
  display: flex;
}

.carousel-inner .carousel-item-right,
.carousel-inner .carousel-item-left {
  transform: translateX(0);
}

@media (min-width: 768px) {
    .carousel-item.active-next {
        display: flex;
    }
}

</style>

<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators" id="indicators">
    <!-- <li data-target="#carousel-example-2" data-slide-to="0" class="bg-red active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1" class="bg-red"></li>
    <li data-target="#carousel-example-2" data-slide-to="2" class="bg-red"></li> -->
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox" id="viewSlider">
    
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span  aria-hidden="true"><i class="fas fa-caret-left fa-3x"></i></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span  aria-hidden="true"><i class="fas fa-caret-right fa-3x"></i></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->


<section class="dark-grey">
<div class="container py-5">
  <div class="row">
    <div class="col-12 text-center">
    <h1 class="font-weight-bold dark-grey-text my-4 pb-2 text-center"><lang>Vision</lang> </h1>
    <hr class="w-header bg-blue-hr mb-4">
      <p class="grey-text text-center" id="viewVisi">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
      <h1 class="font-weight-bold dark-grey-text my-4 pb-2 text-center"><lang>Mission</lang></h1>
      <hr class="w-header bg-blue-hr mb-4">
      <p class="grey-text text-center" id="viewMisi">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
      </p>
    </div>
    <div class="col-12 py-4 text-center">
        <a href="<?= base_url('vision-mission')?>" class="btn bg-red white-text btn-rounded waves-effect mb-2 ">Read More </a>

    </div>
  </div>
  <!--Grid row-->
</div>
</section>


<div class="clearfix"></div>
<div class="container">
    <hr class="w-100 m-0">
</div>


<section class="dark-grey">
  <div class="container py-5">
    <div class="col" >
      <h1 class="font-weight-bold dark-grey-text my-2  text-center"><lang>News</lang></h1>
      <hr class="w-header bg-blue-hr">
<!--       <p class="text-center "> Lorem ipsum dolor sit amet</p> -->
    </div>
    
    <div class="row my-5 justify-content-center" id="viewNews">
      
    </div>  
    <div class="col-12 text-center">
        <a href="<?= base_url('news')?>" class="btn bg-red white-text btn-rounded waves-effect mb-2 ">View all </a>

    </div>
  </div>
<!--/.Carousel Wrapper-->

  </div>
</section>

<div class="clearfix"></div>
<div class="container">
    <hr class="w-100 m-0">
</div>


<div class="view jarallax" style="height: 15vh;background-attachment:fixed; ">
<section class="jarallax-img" style="background-image: url('<?= base_url('assets/img/bg_podomoro.jpg')?>'); background-repeat: no-repeat; background-size: cover; background-position: center center;background-attachment:fixed;z-index: 1; ">
  
  <div class="mask rgba-black-strong py-5">

    <div class="container text-center my-5">

      <h1 class="font-weight-bold text-center white-text pb-2"><lang>Knowledge Base</lang></h1 >
      <hr class="w-header hr-light my-4">
      <!-- <p class="lead text-center white-text pt-2 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. </p> -->

      <a href="<?=base_url('knowledge')?>"  class="btn-floating bg-red btn-lg" ><i class="fas fa-link"></i></a>

    </div>

  </div>

</section>
</div>



<!-- Event-->
<section class="">
  <div class="container py-5">
  <!-- Section heading -->
  <div class="col pb-4">
    <h1 class="font-weight-bold dark-grey-text my-2 text-center"><lang>Event</lang></h1>
    <hr class="w-header bg-blue-hr">
  <!-- Section description -->
  </div>

  <!-- Grid row -->
    <div class="row" id="viewEvent">

    </div>
    <!--Grid column-->
    <div class="col text-center">
      <a href="<?= base_url()?>event"><button type="button" class="btn bg-red white-text btn-rounded waves-effect my-4 ">View All </button>
      </a>
    </div>
  </div>
  <!-- Grid row -->
  </div>
</section>
<!-- Event -->


<div class="clearfix"></div>
<div class="container">
    <hr class="w-100 m-0">
</div>


<!--==========================
  Team Section
============================-->
<section id="team" class="section-bg my-5">
  <div class="container">
   
    <div class="col pb-4">
      <h1 class="font-weight-bold dark-grey-text my-2 text-center"><lang>SPMI Committee</lang></h1>
      <hr class="w-header bg-blue-hr">
      <!-- <p class="text-center mb-4"> Lorem ipsum dolor sit amet</p> -->
    </div>

    <div class="row justify-content-center row-cols-1 row-cols-md-3" id="viewcommittee">


    </div>

</section>
<!-- #team -->

<div class="clearfix"></div>
<div class="container">
    <hr class="w-100 m-0">
</div>

<!--==========================
  Clients Section
============================-->
<section id="testimonials">
  <div class="container py-5">

    <div class="col pb-4">
      <h1 class="font-weight-bold dark-grey-text my-2 text-center"><lang>Testimonials</lang></h1>
      <hr class="w-header bg-blue-hr">
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div id="viewTesti"></div>

        </div>

      </div>
    </div>

  </div>
</section>
<!-- #testimonials -->

<div class="clearfix"></div>

<!--==========================
  Clients Section
============================-->
<section id="clients" class="wow fadeInUp">
  <div class="container py-5">

    <div class="col pb-4">
    <h1 class="font-weight-bold dark-grey-text my-2 text-center"><lang>Partner Collaborations</lang></h1>
    <hr class="w-header bg-blue-hr">
    </div>
    <div id="viewPartner"></div>
    <!-- <div class="owl-carousel clients-carousel">
      <img src="http://via.placeholder.com/660x260" alt="">
      <img src="http://via.placeholder.com/660x260" alt="">
      <img src="http://via.placeholder.com/660x260" alt="">
      <img src="http://via.placeholder.com/660x260" alt="">
      <img src="http://via.placeholder.com/660x260" alt="">      
    </div> -->

  </div>
</section>
<!-- #clients -->


<script type="text/javascript">
$('#myCarousel').carousel({
    interval: 5000
})

$('.carousel .carousel-item').each(function() {
    var minPerSlide = 4;
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i < minPerSlide; i++) {
        next = next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
    }
});

$(document).ready(function(){
        loadImgFitter();    
    });

var owl = $('.news-carousel');
    owl.owlCarousel({
        items:1,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true
    });
    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[4000])
    })
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
    })

var owl = $('.testimonials-carousel');
    owl.owlCarousel({
        items:1,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:4000,
        autoplayHoverPause:true
    });
    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[4000])
    })
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
    })

var owl = $('.clients-carousel');
    owl.owlCarousel({
        items:4,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:2500,
        autoplayHoverPause:true
    });
    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[2500])
    })
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
    })



</script> 

<script type="text/javascript">

$(document).ready(function () { 
    getDataContent('slider','#viewSlider'); 
    getDataContent('vision','#viewVisi');
    getDataContent('mission','#viewMisi'); 
    getDataContent('event','#viewEvent'); 
    getDataContentCommittee('committee','#viewcommittee');  
    getDataContent('news','#viewNews');
    getDataContent('testimonials','#viewTesti');
    getDataContent('partner','#viewPartner');
});

function loadTestimonialCarosel(){
 var  owl = $('.testimonials-carousel');
      owl.owlCarousel({
          items:1,
          loop:true,
          margin:10,
          autoplay:true,
          autoplayTimeout:4000,
          autoplayHoverPause:true
      });
      $('.play').on('click',function(){
          owl.trigger('play.owl.autoplay',[4000])
      })
      $('.stop').on('click',function(){
          owl.trigger('stop.owl.autoplay')
      })
 }

function loadImgFitter(){
    $('.img-fitter').imgFitter({

                // CSS background position
                backgroundPosition: 'center center',

                // for image loading effect
                fadeinDelay: 400,
                fadeinTime: 1200

            });
  }

</script>