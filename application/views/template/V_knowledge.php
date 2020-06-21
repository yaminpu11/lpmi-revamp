<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script> -->

<style type="text/css">
	.bootstrap-select .btn{
		margin: 0px !important;
	}
	#bs-select-1 .dropdown-menu{
		padding: 0.375rem 0.60rem;
	}
</style>
<script type="text/javascript">
	$(function () {
	    $('select').selectpicker();
	});
</script>



<section class="py-5" >

  	<div class="container" style="margin-top: 100px;">       
        
        <div class="col pb-4 py-5">
          <h1 class="font-weight-bold dark-grey-text my-2 text-center h1-responsive"><lang>Knowledge Base</lang></h1>
          <hr class="w-header bg-blue-hr">      
          <p class="text-center text-grey mb-4"><small><a href="<?= base_url()?>">Home</a> / <a href="#"><lang>Knowledge Base</lang></a></small></p>
        </div>
        <div class="row justify-content-md-center pb-5">
		  <div class="col-sm-8">
		    <div class="form-group">		      
		      	<select class="selectpicker form-control" data-live-search="true">
				  <option data-tokens="ketchup mustard">Hot Dog, Fries and a Soda</option>
				  <option data-tokens="mustard">Burger, Shake and a Smile</option>
				  <option data-tokens="frosting">Sugar, Spice and all things nice</option>
				</select>
		    </div>
		  </div>
		</div>
        <div class="row">
	        <div class="col-lg-3">
	        	<div class="card list-group">
				  <button type="button" class="list-group-item list-group-item-action active">
				    Cras justo odio
				  </button>
				  <button type="button" class="list-group-item list-group-item-action">Dapibus ac facilisis in</button>
				  <button type="button" class="list-group-item list-group-item-action">Morbi leo risus</button>
				  <button type="button" class="list-group-item list-group-item-action">Porta ac consectetur ac</button>
				  <button type="button" class="list-group-item list-group-item-action" disabled>Vestibulum at eros</button>
				</div>
	        </div>
	        <div class="col-lg-9  card">
	        	<!--Accordion wrapper-->
				<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

				  <!-- Accordion card -->
				  <div class="card">

				    <!-- Card header -->
				    <div class="card-header" role="tab" id="headingOne1">
				      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
				        aria-controls="collapseOne1">
				        <h5 class="mb-0">
				          Collapsible Group Item #1 <i class="fas fa-angle-down rotate-icon"></i>
				        </h5>
				      </a>
				    </div>

				    <!-- Card body -->
				    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
				      data-parent="#accordionEx">
				      <div class="card-body">
				        <div class="row my-4">
				          <div class="col-md-8">
				            <h2 class="font-weight-bold mb-3 black-text">Hi! I am the first one.</h2>
				            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
				              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
				              ullamco laboris</p>
				            <p class="mb-0">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
				              fugiat nulla pariatur.</p>
				          </div>
				          <div class="col-md-4 mt-3 pt-2">
				            <div class="view z-depth-1">
				              <img src="https://mdbootstrap.com/img/Photos/Others/nature.jpeg" alt="" class="img-fluid">
				            </div>
				          </div>
				        </div>
				      </div>
				    </div>

				  </div>
				  <!-- Accordion card -->

				  <!-- Accordion card -->
				  <div class="card">

				    <!-- Card header -->
				    <div class="card-header" role="tab" id="headingTwo2">
				      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
				        aria-expanded="false" aria-controls="collapseTwo2">
				        <h5 class="mb-0">
				          Collapsible Group Item #2 <i class="fas fa-angle-down rotate-icon"></i>
				        </h5>
				      </a>
				    </div>

				    <!-- Card body -->
				    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
				      data-parent="#accordionEx">
				      <div class="card-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
				        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
				        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
				        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
				        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
				        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
				        labore sustainable VHS.
				      </div>
				    </div>

				  </div>
				  <!-- Accordion card -->

				  <!-- Accordion card -->
				  <div class="card">

				    <!-- Card header -->
				    <div class="card-header" role="tab" id="headingThree3">
				      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
				        aria-expanded="false" aria-controls="collapseThree3">
				        <h5 class="mb-0">
				          Collapsible Group Item #3 <i class="fas fa-angle-down rotate-icon"></i>
				        </h5>
				      </a>
				    </div>

				    <!-- Card body -->
				    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
				      data-parent="#accordionEx">
				      <div class="card-body">
				        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3
				        wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum
				        eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla
				        assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
				        nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer
				        farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus
				        labore sustainable VHS.
				      </div>
				    </div>

				  </div>
				  <!-- Accordion card -->

				</div>
				<!-- Accordion wrapper -->
	        	<!-- <div class="row" style="padding: 15px 0;">

		       		<?php 
						foreach ($allcategory as $key => $value) 
					{
					?>
					<a href="<?= base_url()?>knowledge/<?=$value->ID?>"><div class="btn btn-primary"><?=$value->Name?> <span class="badge badge-danger ml-2"><?=$value->jml;?></span></div></a>
					<?php }?>	
		        
		        	<div class="col">
		        		<div class="card testimonial-card h-100">
		        			<div class="row">
		        			<div class="col-md-9 col-sm-12" id="filedocument">
			        			
								<div class="tab-content" id="v-pills-tabContent">
							      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
							      	<iframe
								    src="<?= base_url('assets/file/download.pdf')?>"
								    width="800px"
								    height="600px"
								    style="border: none;" />
									</iframe>
							      </div>
							      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
							      <iframe
							    	src="<?= base_url('assets/file/download.pdf')?>"
								    width="800px"
								    height="600px"
								    style="border: none;" />
									</iframe>
								  </div>
							      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
							      	<iframe
							    	src="<?= base_url('assets/file/download.pdf')?>"
								    width="800px"
								    height="600px"
								    style="border: none;" />
									</iframe>
								  </div>
							      
							    </div>
							</div>
							<div class="col-md-3 col-sm-12" >
								<div class="nav flex-column nav-pills mr-3 titledocument px-0" id="v-pills-tab" role="tablist" aria-orientation="vertical" style="padding: 1rem;   padding-top: 2rem;">
							      <!-- <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab"
							        aria-controls="v-pills-home" aria-selected="true">Document one</a>
							      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab"
							        aria-controls="v-pills-profile" aria-selected="false">Document two</a>
							      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab"
							        aria-controls="v-pills-messages" aria-selected="false">Document tree</a>
							      
							    </div>
							</div>
						</div>
						</div>

		        	</div>
				</div> --> 
	        </div>
    	</div>
        
        

	</div>

</section>

<script type="text/javascript">
  $(document).ready(function () { 
  	var id='<?= $this->uri->segment(2) ?>';
  	console.log(id);
  	// if (id==''){
   //  	getDataKnowledge('knowledge','#filedocument');     
  	// }else{
   //  	getDataKnowledge('knowledge',id,'#filedocument');     
  	// }
	    getDataKnowledge('knowledge',id,'#filedocument');     
  		
  	

});    
</script>