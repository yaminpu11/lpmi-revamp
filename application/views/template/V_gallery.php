<style type="text/css">
  $lg: 580px;

html, 
body {
  margin: 0;
  padding: 10px;
  background: darken(whitesmoke, 10%);
}
#instafeed {
  max-width:1080px;
  width: 100%;
  margin: auto;
  display: flex;
  flex-wrap: wrap;
  
  a {
    display: flex;
    align-items: center;
    position: relative;
    width: 50%;
    background: white;
    
    @media only screen and (min-width: $lg) {
      width: 25%;
    }
    
    img {
      display: block;
      width: 100%;
    }
  }
}
</style>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
<!-- <script type="text/javascript">
  // Use the CDN or host the script yourself
// https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js
// https://matthewelsom.com/assets/js/libs/instafeed.min.js

var userFeed = new Instafeed({
  get: 'user',
  // a9fc98451ef247dd4044bb157836bb4c
  userId: '687478202040502',
  // clientId: '687478202040502',
  accessToken: 'IGQVJVRG1TNWlSbVZAsLW1EWXFfcVViUjUyMy1LVFdOS1JlU2lvRm1FVTlMYmlaTl9vekpYZAWtCRE5FdUVBM2xnM1UzNUM1WWtVSmJQVGZAkQUw2S01yczZAnWGF6RHpmRWRCaG0yNFIwSGtMZAFVHLUwxcQZDZD',
  resolution: 'standard_resolution',
  template: '<div class="col-md-4"><div class="card mb-4"><a href="{{link}}" target="_blank" id="{{id}}"><img class="w-100" src="{{image}}" /></a></div></div>',
  sortBy: 'most-recent',
  limit: 4,
  links: false
});
userFeed.run();
// var userFeed = new Instafeed({
//         get: 'tagged',
//         tagName: 'awesome',
//         clientId: '687478202040502'
//     });
//     userFeed.run();

</script> -->
<script type="text/javascript">
$(document).ready(function () {
  loadDataInstagram();
})
function loadImgFitter(){
    $('.img-fitter').imgFitter({

                // CSS background position
                backgroundPosition: 'center center',

                // for image loading effect
                fadeinDelay: 400,
                fadeinTime: 1200

            });
  }
function loadDataInstagram() {
        var no=0;
        $.ajax({
              type  : 'GET',
              url   : 'https://graph.instagram.com/me/media?fields=media_type,media_url,username,permalink,timestamp,caption&access_token=IGQVJVRG1TNWlSbVZAsLW1EWXFfcVViUjUyMy1LVFdOS1JlU2lvRm1FVTlMYmlaTl9vekpYZAWtCRE5FdUVBM2xnM1UzNUM1WWtVSmJQVGZAkQUw2S01yczZAnWGF6RHpmRWRCaG0yNFIwSGtMZAFVHLUwxcQZDZD',
              async : false,
              dataType : 'json',
              success : function(result){
                console.log(result);
                $.each(result.data, function(index, value){
                  // var no=0;
                  // console.log(item);
                  // $.each(item, function(key, value){
                  //   console.log(item);
                    var html='';
                    var caption=(value.caption!='undifined' && value.caption!=null) ? value.caption+' ' : '';
                    var urlimg=(value.media_url!='undifined' && value.media_url!=null) ? value.media_url+' ' : '';    
                    // console.log(urlimg);
                    // $('#photos').append(value.length);
                    if(urlimg!='undifined' && urlimg!='null'){

                        html += '<div class="col-lg-4 col-md-12 mb-4">'+

                                // <!--Modal: Name-->
                                '<div class="modal fade" id="modal'+value.id+'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">'+
                                  '<div class="modal-dialog modal-lg" role="document">'+

                                    // <!--Content-->
                                    '<div class="modal-content">'+

                                      // <!--Body-->
                                      '<div class="modal-body mb-0 p-0">'+

                                        '<div class="embed-responsive z-depth-1-half w-100">'+
                                          '<img class="img-responsive w-100 h-100" src="'+value.media_url+'" allowfullscreen></img>'+
                                        '</div>'+

                                      '</div>'+

                                      // <!--Footer-->
                                      '<div class="modal-footer justify-content-center">'+

                                        '<h5 class="mb-4">'+caption+'</h5>'+
                                        // '<span class="mr-4">Spread the word!</span>'

                                        '<a tabindex="-1" data-caption="'+value.caption+'" class="btn-floating btn-sm instagram"  title="Preview" data-fancybox="instagram" href="'+value.permalink+'"><i class="fab fa-instagram" style="position: absolute;left: 0px;font-size: 25px;"></i> </a>'+
                                        // <!--Twitter-->
                                        // '<a tabindex="-1" class="btn-floating btn-sm" href="'+value.permalink+'" target="_blank" data-if="'+value.permalink+'"><i class="fab fa-instagram"></i> </a>'+
                                        // <!--Google +-->
                                        // '<a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>'+
                                        // <!--Linkedin-->
                                        // '<a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>'+

                                        '<button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>'+

                                      '</div>'+

                                    '</div>'+
                                    // <!--/.Content-->

                                  '</div>'+
                                '</div>'+
                                // <!--Modal: Name-->

                                '<a><img class="img-fluid z-depth-1 img-fitter w-100" data-src="'+value.media_url+'" height="350px" alt="'+value.media_type+'"  data-toggle="modal" data-target="#modal'+value.id+'"></a>'+

                              '</div>';


                        $('#photos').append(html);
                        loadImgFitter();  

                      }
                        
                
                });
                $.each(result.paging, function(index, value){

                })

                
              },
              error: function(data){
                console.log(data);
              }
          })
    }


</script>
<section class="py-5">

  <div class="container py-5">       
    
    <div class="col pb-4 py-5">
      <h1 class="font-weight-bold dark-grey-text my-2 text-center h1-responsive"><lang>Gallery</lang></h1>
      <hr class="w-header bg-blue-hr">      
      <p class="text-center text-grey mb-4"><small><a href="<?= base_url()?>">Home</a> / <a href="#"><lang>Gallery</lang></a></small></p>
    </div>

    <!-- <div class="row" style="padding: 15px 0;">
      
        <div id="instafeed">
        </div>
      
    </div> -->
    <!-- Grid row -->

    <div class="row" id="photos">      
      
    </div>

    </div>
    <!-- Grid row -->


  </div>
</section>

