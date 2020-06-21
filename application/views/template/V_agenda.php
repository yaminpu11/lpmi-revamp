<!-- Section: Blog v.2 -->
<section class="text-center py-5">
  <div class="container my-5">
    <div class="col pb-4 py-5">
      <h1 class="font-weight-bold dark-grey-text my-2 text-center"><lang>Event</lang></h1>
      <hr class="w-header bg-blue-hr">      
      <p class="text-center text-grey mb-4"><small><a href="<?= base_url()?>">Home</a> / <a href="#"><lang>Event</lang></a></small></p>
    </div>
    <!-- Grid row -->
    <div class="row" id="viewEventAll">      

    </div>
    <!-- Grid row -->
  </div>
</section>

<script type="text/javascript">
$(document).ready(function () { 
    getDataContentAll('event','#viewEventAll');

  }); 

</script>