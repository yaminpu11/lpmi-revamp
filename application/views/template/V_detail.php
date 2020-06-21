<section style="padding-top: 70px">
<input type="hidden" name="id" id="id" value="<?= $this->uri->segment(2) ?>">
<!-- <div class="view bg-category">
  <div class="mask flex-center waves-light bg-title">
    <h1 class="flex-center text-uppercase text-white"><strong id="category1"></strong></h1>
  </div>
</div> -->
<div class="row mx-xs-2 mx-sm-3 mx-md-3 mx-lg-5 py-5">

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-4">
				<nav aria-label="breadcrumb my-md-4">
				    <ol class="breadcrumb  lighten-4 bg-transparant px-0">
				      <li class="breadcrumb-item"><a class="black-text" href="<?= base_url()?>"><i class="fas fa-home mx-2" aria-hidden="true"></i> Home</a><i class="fas fa-angle-right mx-2" aria-hidden="true"></i></li>
				      <li class="breadcrumb-item"><a class="black-text" href="<?= base_url()?><?= $this->uri->segment(1) ?>"><?= $this->uri->segment(1) ?></a>
				      </li>
				      <li class="breadcrumb-item"><a class="black-text" href="#!"><?= $this->uri->segment(3) ?></a>
				      </li>
				    </ol>
				</nav>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8">
				<div class="#shadow">
				 	<div class="list-group list-group-flush">
				 		<div class="list-group-item px-0 pb-4">
				 			<div class="row mx-0 mb-2">
							 			
				 				<div id="detail_content" class="w-100">

							  	</div>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<script type="text/javascript">
	$(document).ready(function () { 
	var id=<?= $this->uri->segment(2) ?>;
    getDataContentDetail('news','<?= $this->uri->segment(2) ?>','#detail_content');
    getDataContentDetail('event','<?= $this->uri->segment(2) ?>','#detail_content');

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