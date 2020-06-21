<!-- Section: Blog v.3 -->
<section class="py-5">

  <div class="container my-5">
   
    <div class="col pb-4 py-5">

      <h1 class="font-weight-bold dark-grey-text my-2 text-center"><lang>News</lang></h1>
      <hr class="w-header bg-blue-hr">      
      <p class="text-center text-grey mb-4"><small><a href="<?= base_url()?>">Home</a> / <a href="#"><lang>News</lang></a></small></p>
    </div>

    <!-- Grid row -->
    <div id="viewNewsAll"></div>
    
  </div>
</section>

<script type="text/javascript">
  $(document).ready(function () { 
    getDataContentAll('news','#viewNewsAll');

  });    
  
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

