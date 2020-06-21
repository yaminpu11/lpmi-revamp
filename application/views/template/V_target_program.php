<section id="team" class="section-bg py-5">
  <div class="container my-5">
   
    <div class="col pb-4 py-5">

      <h1 class="font-weight-bold dark-grey-text my-2 text-center"><lang>Target</lang> & <lang>Program</lang></h1>
      <hr class="w-header bg-blue-hr">      
      <p class="text-center text-grey mb-4"><small><a href="<?= base_url()?>">Home</a> / <a href="#"><lang>Target</lang> & <lang>Program</lang></a></small></p>
    </div>
    <div class="row">
    	<div class="col">
    		<h1 class="font-weight-bold"><lang>Target</lang></h1>
            <div id="target">
    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
    		<ol>
    			<li>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</li>
    			<li>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</li>
    		</ol>
			<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
    	</div>
    	<div class="col"> 
    		<h1 class="font-weight-bold"><lang>Program</lang></h1>
            <div id="program">
    		<p> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
    		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
    	</div>
    </div>

</div>
</section>

<script type="text/javascript">
    $(document).ready(function () { 
        getDataContent('target','#target');
        getDataContent('program','#program');
    });
</script>