

<!--==========================
      visi Us Section
    ============================-->

    <section id="visi" class="intro-visi py-5">

      <div class="container py-5">       
        
        <div class="col pb-4 py-5">
          <h1 class="font-weight-bold dark-grey-text my-2 text-center h1-responsive"><lang>Vision</lang> & <lang>Mission</lang></h1>
          <hr class="w-header bg-blue-hr">      
          <p class="text-center text-grey mb-4"><small><a href="<?= base_url()?>">Home</a> / <a href="#"><lang>Vision</lang> & <lang>Mission</lang></a></small></p>
        </div>
        <div class="row" style="padding: 15px 0;">
          <div class="col-lg-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; text-align: center;">
            <!-- Card -->
            <div class="card testimonial-card h-100">

              <!-- Background color -->
              <div class="card-up bg-hd-trans lighten-1"></div>

              <!-- Avatar -->
              <div class="avatar mx-auto bg-blue" style="height:120px">
               
              <i class="rounded-circle text-white fas fa-binoculars fa-5x my-2 mx-2" style="line-height: 1.2;"></i> 
              
              </div>

              <!-- Content -->
              <div class="card-body pt-1">
                <!-- Name -->
                <strong><h1 style="font-size: 2rem;font-weight: 600"><lang>Vision</lang></h1></strong>
                <hr>
                <!-- Quotation -->
                <div class="visi-content py-4 px-3">
                <!--  <h2><lang>Vision</lang> </h2> -->
                    <div id="viewVisi"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident</div>
                <!--  <h2>Visi </h2>
                <?= $visi['VisiEng'];  ?> -->
                </div>
              </div>

            </div>
            <!-- Card -->

          </div>
       
          <div class="col-lg-6 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp; text-align: center;">
              <!-- Card -->
            <div class="card testimonial-card h-100">

              <!-- Background color -->
              <div class="card-up bg-hd-trans lighten-1"></div>

              <!-- Avatar -->
              <div class="avatar mx-auto bg-red" style="height:120px">
                  
              <i class="rounded-circle text-white far fa-gem fa-5x my-2 mx-2" style="line-height: 1.5;"></i> 
              
              </div>

              <!-- Content -->
              <div class="card-body pt-1">
                <!-- Name -->
                <strong><h1 style="font-size: 2rem;font-weight: 600"><lang>Mission</lang></h1></strong>
                <hr>
                <!-- Quotation -->
                <div class="visi-content py-4 px-3">
                <!--  <h2><lang>Vision</lang> </h2> -->
                   <div id="viewMisi"> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                <!--  <h2>Visi </h2>
                <?= $visi['VisiEng'];  ?> -->
                </div>
              </div>

            </div>
            <!-- Card -->
          </div>

    </section>
    
<!-- #visi -->

    <script type="text/javascript">
      $(document).ready(function () { 
        getDataContent('vision','#viewVisi');
        getDataContent('mission','#viewMisi');      

    });    
    </script>
