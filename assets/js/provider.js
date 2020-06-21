
function getDataContent(IDType, element) {

    var url = base_url_js_server_ws+'api-lpmi/__getContentLPMI';

    var data = {
        LangCode : current_language,
        IDType : IDType,
    };
    var token = jwt_encode(data,'UAP)(*');
    var locimg = base_url_js_server_ws+'uploads/lpmi/';
    $.post(url,{token:token},function (jsonResult) {

        // console.log(jsonResult);
        var type= IDType;
        console.log(type);
        if(type==="slider"){
            // console.log('ok');
            if(jsonResult.length>0){

                var response = '',
                    indicator = '';
                $.each(jsonResult,function (i,v) {

                    response += '<div class="carousel-item item">'+
                        '<img class="d-block w-100 img-fitter"  data-src="'+locimg+''+v.File+'" height="600px" alt="'+v.Title+'">'+
                        // '<div class="carousel-caption">'+
                        //     '<div class="animated fadeInUp">'+
                        //        '<div class="container  h-100">'+
                        //             '<div class="row justify-content-center align-self-center">'+
                        //                 '<div class="col-md-12 intro-info order-md-first order-last">'+
                        //                   ' <h2></h2>'+
                        //                 '<div>'+
                        //                     '<a href="'+v.Url+'" class="btn-get-started scrollto">Read More</a>'+
                        //             '</div>'+
                        //         '</div>'+
                        //     '</div>'+
                        // '</div>'+
                        '</div>';

                    indicator += '<li data-target="#carousel-example-1z" data-slide-to="'+i+'"></li>';

                });

                $('#viewSlider').append(response);
                $('#indicators').append(indicator);
                $('.item').first().addClass('active');
                $('.carousel-indicators > li').first().addClass('active');
                $("#carousel-example-1z").carousel();

            }
            else{

                $('#viewSlider').append('<div class="carousel-item item active">'+
                    '<img class="d-block w-100 img-fitter"  data-src="http://via.placeholder.com/1028x600" height="600px" alt="">'+
                    '</div>');

            }
            loadImgFitter();



        }else if(type==="news"){
            // console.log('ok');
            if(jsonResult.length>0){

                var response = '';
                // $('#owl-news').html('<div id="testingnew" class="owl-carousel"></div>');
                    // for(var i=0;i<result.length;i++){
                    //     $(".owl-carousel").append('<div class="item"><img src="/img/sub_category/'+result[i].subcategory_img+'" /></div>');
                    // };
                    
                $.each(jsonResult,function (i,v) {
                    str=v.Description
                    var res = (str.length>50) ? str.split(' ')[0]+' '+str.split(' ')[1]+' '+str.split(' ')[2]+' '+str.split(' ')[3]+'...' : str;
                    response += '<div class="col-lg-4 col-md-6 pb-4">'+
                                    '<div class="card mb-2">'+
                                      '<div class="view overlay">'+
                                        '<img class="d-block w-100 img-fitter"  data-src="'+locimg+''+v.File+'"  height="360px" alt="'+v.Title+'">'+
                                        '<a href="'+base_url_js+'news/'+v.ID+'/'+v.SEO_title+'">'+
                                          '<div class="mask rgba-white-slight"></div>'+
                                        '</a>'+
                                      '</div>'+
                                      '<div class="card-body">'+
                                        '<div class="collapse-content">'+
                                          '<h4 class="">'+v.Title+'</h4>'+
                                          '<p class="card-text">'+res +'</p>'+
                                         
                                          '<a href="'+base_url_js+'news/'+v.ID+'/'+v.SEO_title+'" class="btn btn-flat red-text p-1 my-1 mr-0 mml-1" ></a>'+
                                          // '<i class="fas fa-share-alt text-blue float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this post"></i>'+
                                          // '<i class="fas fa-heart text-blue float-right p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>'+
                                        '</div>'+
                                      '</div>'+
                                    '</div>'+
                                '</div>';   

                });
                // owl.trigger('refresh.owl.carousel');
               
                
            }
             $('#viewNews').append(response);
            // else{

            //     $('#viewNews').append('<div class="carousel-item item active">'+
            //         '<img class="d-block w-100 img-fitter"  data-src="http://via.placeholder.com/1028x600" height="600px" alt="">'+
            //         '</div>');

            // }
            

            loadImgFitter();


        }else if(type==="event"){
            // console.log('ok');
            if(jsonResult.length>0){

                var des = '';
                $.each(jsonResult,function (i,v) {
                    var getdate = v.AddDate;
                    var fromat = moment(getdate).format("D-MM-YYYY HH:mm")
                    var day = moment(getdate).format("DD");
                    var month = moment(getdate).format("MMMM");
                    var year = moment(getdate).format("YYYY");

                    console.log(month); 
                    
                    des += '<div class="col-lg-6 col-md-12">'+

                              '<div class="single-news mb-4">'+

                                '<div class="row">'+

                                  '<div class="col-md-3">'+
                                  '<a href="'+base_url_js+'event/'+v.ID+'">'+
                                    '<time datetime="">'+
                                      '<span class="day">'+day+'</span>'+
                                      '<span class="month">'+month+'</span>'+
                                      '<span class="year">'+year+'</span>'+
                                      '<span class="time">'+fromat+'</span>'+
                                    '</time> '+
                                  '</a>'+
                                  '</div>'+

                                  '<div class="col-md-9">'+

                                    '<a href="'+base_url_js+'event/'+v.ID+'" class="font-weight-bold dark-grey-text">'+v.Title+'</a>'+
                                    '<div class="d-flex justify-content-between">'+
                                      '<div class="col-11 text-truncate pl-0 mb-3">'+
                                        '<p class="grey-text">'+v.Description+'</p>'+
                                      '</div>'+
                                      // '<a href="'+base_url_js+'event/'+v.ID+'"><i class="fas fa-angle-double-right"></i></a>'+
                                    '</div>'+

                                  '</div>'+

                                '</div>'+

                              '</div>'+
                            '</div>';

                });

                $('#viewEvent').append(des);
               
           }else{
                $('#viewEvent').append('<div class="col-lg-6 col-md-12">'+

                              '<div class="single-news mb-4">'+

                                '<div class="row">'+

                                  '<div class="col-md-3">'+
                                  '<a href="#">'+
                                    '<time datetime="">'+
                                      '<span class="day"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></span>'+
                                      '<span class="month"></span>'+
                                      // '<span class="year">'+year+'</span>'+
                                      // '<span class="time">'+fromat+'</span>'+
                                    '</time> '+
                                  '</a>'+
                                  '</div>'+

                                  '<div class="col-md-9">'+

                                    '<a href="" class="font-weight-bold dark-grey-text">Coming Soon !</a>'+
                                    '<div class="d-flex justify-content-between">'+
                                      '<div class="col-11 pl-0 mb-3">'+
                                        '<p class="grey-text">Event! Stay tunened! Exceting event news coming soon!</p>'+
                                      '</div>'+
                                      // '<a href="'+base_url_js+'event/'+v.ID+'"><i class="fas fa-angle-double-right"></i></a>'+
                                    '</div>'+

                                  '</div>'+

                                '</div>'+

                              '</div>'+
                            '</div>'+
                            '<div class="col-lg-6 col-md-12">'+

                              '<div class="single-news mb-4">'+

                                '<div class="row">'+

                                  '<div class="col-md-3">'+
                                  '<a href="#">'+
                                    '<time datetime="">'+
                                      '<span class="day"><i class="fa fa-exclamation-circle" aria-hidden="true"></i></span>'+
                                      '<span class="month"></span>'+
                                      // '<span class="year">'+year+'</span>'+
                                      // '<span class="time">'+fromat+'</span>'+
                                    '</time> '+
                                  '</a>'+
                                  '</div>'+

                                  '<div class="col-md-9">'+

                                    '<a href="" class="font-weight-bold dark-grey-text">Coming Soon !</a>'+
                                    '<div class="d-flex justify-content-between">'+
                                      '<div class="col-11 pl-0 mb-3">'+
                                        '<p class="grey-text">Event! Stay tunened! Exceting event news coming soon!</p>'+
                                      '</div>'+
                                      // '<a href="'+base_url_js+'event/'+v.ID+'"><i class="fas fa-angle-double-right"></i></a>'+
                                    '</div>'+

                                  '</div>'+

                                '</div>'+

                              '</div>'+
                            '</div>');

            }


        }else if(type==="testimonials"){
            // console.log('ok');
            if(jsonResult.length>0){

                var response = '';

                $.each(jsonResult,function (i,v) {

                    response += '<div class="testimonial-item items">'+
                                    '<img class="testimonial-img mr-3 d-block img-fitter"  data-src="'+locimg+''+v.File+'"  height=120px" alt="'+v.Title+'">'+
                                    '<h3>'+v.Title+'</h3>'+
                                    '<p>'+v.Description+'</p>'+
                                '</div>';


                });                

                $("#viewTesti").html('<div class="owl-carousel testimonials-carousel wow fadeInUp" >'+response+'</div>');
                // $('#viewTesti').append(response); 

                var owl = $('.owl-carousel');
                    owl.owlCarousel({
                        items:1,
                        loop:true,
                        margin:10,
                        autoplay:true,
                        autoplayTimeout:4000,
                        autoplayHoverPause:true
                    });
                    owl.trigger('insertContent.owl',response);
                    $('.play').on('click',function(){
                        owl.trigger('play.owl.autoplay',[4000])
                    })
                    $('.stop').on('click',function(){
                        owl.trigger('stop.owl.autoplay')
                    })

            }
            else{

                $('#viewTesti').append('<div class="testimonial-item item">'+
                        '<img class="testimonial-img mr-3 d-block w-100 img-fitter"  data-src="http://via.placeholder.com/160x160"  height=120px" alt="">'+
                         '<h3>Example</h3>'+
                            '<p>Some quick example text to build on the card title and make up the bulk of the card</p>'+
                        '</div>');

            }
            // loadTestimonialCarosel();
            loadImgFitter();


        }else if(type==="partner"){
            // console.log('ok');
            if(jsonResult.length>0){

                var response = '';

                $.each(jsonResult,function (i,v) {

                    response += '<img class="mr-3 d-block img-fitter"  data-src="'+locimg+''+v.File+'" width="660px" height=260px" alt="'+v.Title+'">';


                });                

                $("#viewPartner").html('<div class="owl-carousel clients-carousel wow fadeInUp" >'+response+'</div>');
                // $('#viewTesti').append(response); 

                var owl = $('.clients-carousel');
                    owl.owlCarousel({
                        items:4,
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
            else{

                $('#viewPartner').append('<div class="owl-carousel clients-carousel">'+
                      '<img class="mr-3 d-block " src="http://via.placeholder.com/660x260" alt="">'+
                      '<img class="mr-3 d-block "  src="http://via.placeholder.com/660x260" alt="">'+
                      '<img class="mr-3 d-block "  src="http://via.placeholder.com/660x260" alt="">'+
                      '<img class="mr-3 d-block " src="http://via.placeholder.com/660x260" alt="">'+
                      '<img class="mr-3 d-block "  src="http://via.placeholder.com/660x260" alt="">'+
                    '</div>');
                var owl = $('.clients-carousel');
                    owl.owlCarousel({
                        items:4,
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
            // loadTestimonialCarosel();
            loadImgFitter();


        }else{
            if(jsonResult.length>0){

                var d = jsonResult[0];
                $(element).html(d.Description);
            }
        } 
            
    });

}

function getDataContentAll(IDType, element) {

    var url = base_url_js_server_ws+'api-lpmi/__getContentLPMIall';

    var data = {
        LangCode : current_language,
        IDType : IDType,
    };
    var token = jwt_encode(data,'UAP)(*');
    var locimg = base_url_js_server_ws+'uploads/lpmi/';
    $.post(url,{token:token},function (jsonResult) {

        // console.log(jsonResult);
        var type= IDType;
        console.log(type);
        if(type==="news"){

          // console.log('ok news');
            if(jsonResult.length>0){

                var response = '';
                // $('#owl-news').html('<div id="testingnew" class="owl-carousel"></div>');
                    // for(var i=0;i<result.length;i++){
                    //     $(".owl-carousel").append('<div class="item"><img src="/img/sub_category/'+result[i].subcategory_img+'" /></div>');
                    // };
                    
                $.each(jsonResult,function (i,v) {
                    str=v.Description
                    var res = (str.length>200) ? str.split(' ')[0]+' '+str.split(' ')[1]+' '+str.split(' ')[2]+' '+str.split(' ')[3]+'...' : str;
                    response += '<div class="row py-4">'+

                              '<div class="col-lg-5 col-xl-4 ">'+

                                '<div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">'+
                                  '<img class="d-block w-100 img-fitter"  data-src="'+locimg+''+v.File+'"  height="260px" alt="'+v.Title+'">'+
                                 ' <a href="'+base_url_js+'news/'+v.ID+'/'+v.SEO_title+'">'+
                                   ' <div class="mask rgba-white-slight"></div>'+
                                  '</a>'+
                                '</div>'+

                              '</div>'+

                              '<div class="col-lg-7 col-xl-8">'+

                                '<h3 class="font-weight-bold mb-3"><strong>'+v.Title+'</strong></h3>'+
                                '<p class="dark-grey-text">'+res+'</p>'+
                                '<p>by <a class="font-weight-bold">'+v.Name+'</a></p>'+
                                '<a href="'+base_url_js+'news/'+v.ID+'/'+v.SEO_title+'" class="btn bg-red btn-md">Read more</a>'+

                              '</div>'+

                            '</div>'; 

                });
                // owl.trigger('refresh.owl.carousel');
               
                
            }
             $('#viewNewsAll').append(response);
            // else{

            //     $('#viewNews').append('<div class="carousel-item item active">'+
            //         '<img class="d-block w-100 img-fitter"  data-src="http://via.placeholder.com/1028x600" height="600px" alt="">'+
            //         '</div>');

            // }
            

            loadImgFitter();


        }else if(type==="event"){

          // console.log('ok event');
            if(jsonResult.length>0){

                var response = '';
                // $('#owl-news').html('<div id="testingnew" class="owl-carousel"></div>');
                    // for(var i=0;i<result.length;i++){
                    //     $(".owl-carousel").append('<div class="item"><img src="/img/sub_category/'+result[i].subcategory_img+'" /></div>');
                    // };
                    
                $.each(jsonResult,function (i,v) {
                    var getdate = v.AddDate;
                    var fromat = moment(getdate).format("D-MM-YYYY HH:mm")
                    var day = moment(getdate).format("DD");
                    var month = moment(getdate).format("MMMM");
                    var year = moment(getdate).format("YYYY");
                    
                    var datecreate = v.CreateAt;
                    var craete = moment(datecreate).format("D-MM-YYYY");

                    console.log(getdate);    
                    str=v.Description
                    var res = (str.length>200) ? str.split(' ')[0]+' '+str.split(' ')[1]+' '+str.split(' ')[2]+' '+str.split(' ')[3]+'...' : str;
                    response += '<div class="col-lg-4 col-md-12 mb-lg-5 mb-4">'+
                                    '<div class="view overlay rounded z-depth-2 mb-4">'+
                                      '<time datetime="">'+
                                        '<span class="day">'+day+'</span>'+
                                        '<span class="month">'+month+'</span>'+
                                        '<span class="year">'+year+'</span>'+
                                        '<span class="time">'+fromat+'</span>'+
                                      '</time>'+
                                      '<a href="'+base_url_js+'event/'+v.ID+'">'+
                                        '<div class="mask rgba-white-slight"></div>'+
                                      '</a>'+
                                    '</div>'+

                                    
                                    '<h4 class="font-weight-bold mb-3"><strong>'+v.Title+'</strong></h4>'+
                                    '<p>by <a class="font-weight-bold">'+v.Name+'</a>, '+craete+'</p>'+
                                    '<p class="dark-grey-text">'+res+'</p>'+
                                    '<a href="'+base_url_js+'event/'+v.ID+'" class="btn btn-blue btn-rounded btn-md">Read more</a>'+
                                    
                                    '</div>'+ 
                                '</div>';

                });
                // owl.trigger('refresh.owl.carousel');
             $('#viewEventAll').html    (response);
  
                
            }
            else{

                $('#viewEventAll').append('<div class="col-lg-4 col-md-12 mb-lg-5 mb-4">'+
                                    '<div class="view overlay rounded z-depth-2 mb-4">'+
                                      '<time datetime="">'+
                                        '<span class="day">Coming</span>'+
                                        '<span class="month">Soon !!!</span>'+
                                        // '<span class="year">'+year+'</span>'+
                                        // '<span class="time">'+fromat+'</span>'+
                                      '</time>'+
                                      // // '<a href="'+base_url_js+'event/'+v.ID+'">'+
                                      //   '<div class="mask rgba-white-slight"></div>'+
                                      // '</a>'+
                                    '</div>'+

                                    
                                    '<h4 class="font-weight-bold mb-3"><strong>Coming soon !</strong></h4>'+
                                    '<p>by <a class="font-weight-bold">admin</a>, </p>'+
                                    '<p class="dark-grey-text">Stay tunened! Exceting event news coming soon!</p>'+
                                    // '<a href="'+base_url_js+'event/'+v.ID+'" class="btn btn-blue btn-rounded btn-md">Read more</a>'+
                                    
                                    '</div>'+ 
                                '</div>'+
                                '<div class="col-lg-4 col-md-12 mb-lg-5 mb-4">'+
                                    '<div class="view overlay rounded z-depth-2 mb-4">'+
                                      '<time datetime="">'+
                                        '<span class="day">Coming</span>'+
                                        '<span class="month">Soon !!!</span>'+
                                        // '<span class="year">'+year+'</span>'+
                                        // '<span class="time">'+fromat+'</span>'+
                                      '</time>'+
                                      // // '<a href="'+base_url_js+'event/'+v.ID+'">'+
                                      //   '<div class="mask rgba-white-slight"></div>'+
                                      // '</a>'+
                                    '</div>'+

                                    
                                    '<h4 class="font-weight-bold mb-3"><strong>Coming soon !</strong></h4>'+
                                    '<p>by <a class="font-weight-bold">admin</a>, </p>'+
                                    '<p class="dark-grey-text">Stay tunened! Exceting event news coming soon!</p>'+
                                    // '<a href="'+base_url_js+'event/'+v.ID+'" class="btn btn-blue btn-rounded btn-md">Read more</a>'+
                                    
                                    '</div>'+ 
                                '</div>'+
                                '<div class="col-lg-4 col-md-12 mb-lg-5 mb-4">'+
                                    '<div class="view overlay rounded z-depth-2 mb-4">'+
                                      '<time datetime="">'+
                                        '<span class="day">Coming</span>'+
                                        '<span class="month">Soon !!!</span>'+
                                        // '<span class="year">'+year+'</span>'+
                                        // '<span class="time">'+fromat+'</span>'+
                                      '</time>'+
                                      // // '<a href="'+base_url_js+'event/'+v.ID+'">'+
                                      //   '<div class="mask rgba-white-slight"></div>'+
                                      // '</a>'+
                                    '</div>'+

                                    
                                    '<h4 class="font-weight-bold mb-3"><strong>Coming soon !</strong></h4>'+
                                    '<p>by <a class="font-weight-bold">admin</a>, </p>'+
                                    '<p class="dark-grey-text">Stay tunened! Exceting event news coming soon!</p>'+
                                    // '<a href="'+base_url_js+'event/'+v.ID+'" class="btn btn-blue btn-rounded btn-md">Read more</a>'+
                                    
                                    '</div>'+ 
                                '</div>');

            }
            

            // loadImgFitter();


        }else{
            // console.log('ok ok');
            if(jsonResult.length>0){

                var d = jsonResult[0];
                $(element).html(d.Description);
            }
        } 

        

    });
}


function getDataContentDetail(IDType,id, element) {

    var url = base_url_js_server_ws+'api-lpmi/__getContentLPMIdetails';

    var data = {
        LangCode : current_language,
        IDType : IDType,
        ID : id,
    };
    var token = jwt_encode(data,'UAP)(*');
    var locimg = base_url_js_server_ws+'uploads/lpmi/';
    $.post(url,{token:token},function (jsonResult) {

        // console.log(jsonResult);
        var type= IDType;
        console.log(data);
        if(type==="news"){

          // console.log('ok');
            if(jsonResult.length>0){

                var response = '';
                // $('#owl-news').html('<div id="testingnew" class="owl-carousel"></div>');
                    // for(var i=0;i<result.length;i++){
                    //     $(".owl-carousel").append('<div class="item"><img src="/img/sub_category/'+result[i].subcategory_img+'" /></div>');
                    // };
                    
                $.each(jsonResult,function (i,v) {
                    str=v.Description
                    var res = (str.length>200) ? str.split(' ')[0]+' '+str.split(' ')[1]+' '+str.split(' ')[2]+' '+str.split(' ')[3]+'...' : str;
                    response += '<img src="'+locimg+''+v.File+'" alt="'+v.Title+'" class="img-fluid d-block w-100">'+
                            '<div class="card-body px-0">'+
                                // '<a href="'+base_url_js+'category/'+data[i].ID_category+'" class="pink-text">'+
                                //     '<h2 class="font-weight-bold mb-3" id="category"><i class="fas fa-image pr-2"></i>'+data[i].Category+'</h2>'+
                                // '</a>'+
                                '<h1 class="font-weight-bold mb-3"><strong id="title">'+v.Title+'</strong></h1>'+
                                '<small>Posted by <a style="cursor: default;"><strong id="user">'+v.Name+' </strong></a> , '+v.UpdatedAt+'</small>'+
                                '<p class="card-text">'+v.Description+'</p>'+
                            '</div>'; 

                });
                // owl.trigger('refresh.owl.carousel');
               
                
            }
             $('#detail_content').append(response);
            // else{

            //     $('#viewNews').append('<div class="carousel-item item active">'+
            //         '<img class="d-block w-100 img-fitter"  data-src="http://via.placeholder.com/1028x600" height="600px" alt="">'+
            //         '</div>');

            // }
            

            loadImgFitter();


        }else if(type==="event"){

          // console.log('ok');
            if(jsonResult.length>0){

                var response = '';
                var img = '';
                // $('#owl-news').html('<div id="testingnew" class="owl-carousel"></div>');
                    // for(var i=0;i<result.length;i++){
                    //     $(".owl-carousel").append('<div class="item"><img src="/img/sub_category/'+result[i].subcategory_img+'" /></div>');
                    // };
                    
                $.each(jsonResult,function (i,v) {
                    var getdate = v.AddDate;
                    var fromat = moment(getdate).format("D-MM-YYYY HH:mm")
                    var day = moment(getdate).format("DD");
                    var month = moment(getdate).format("MMMM");
                    var year = moment(getdate).format("YYYY");

                    var datecreate = v.CreateAt;
                    var craete = moment(datecreate).format("D-MM-YYYY");
                    console.log(day);  

                    str=v.Description
                    var res = (str.length>200) ? str.split(' ')[0]+' '+str.split(' ')[1]+' '+str.split(' ')[2]+' '+str.split(' ')[3]+'...' : str;
                    if(v.File==null || v.File==''){
                        img += '';
                    }else{
                        img +='<img src="'+locimg+''+v.File+'" alt="'+v.Title+'" class="img-fluid d-block w-100">';
                    }
                    response += '<div id="imgada"></div>'+ 
                                '<time datetime="">'+
                                      '<span class="day">'+day+'</span>'+
                                      '<span class="month">'+month+'</span>'+
                                      '<span class="year">'+year+'</span>'+
                                      '<span class="time">'+fromat+'</span>'+
                                    '</time> '+
                                '<div class="card-body px-0">'+
                                    // '<a href="'+base_url_js+'category/'+data[i].ID_category+'" class="pink-text">'+
                                    //     '<h2 class="font-weight-bold mb-3" id="category"><i class="fas fa-image pr-2"></i>'+data[i].Category+'</h2>'+
                                    // '</a>'+
                                    '<h1 class="font-weight-bold mb-3"><strong id="title">'+v.Title+'</strong></h1>'+
                                    '<small>Posted by <a style="cursor: default;"><strong id="user">'+v.Name+' </strong></a> , '+craete+'</small>'+
                                    '<p class="card-text">'+v.Description+'</p>'+
                                '</div>'; 

                });
                // owl.trigger('refresh.owl.carousel');
               
                
            }
            $('#imgada').append(response);
            $('#detail_content').append(response);
            // else{

            //     $('#viewNews').append('<div class="carousel-item item active">'+
            //         '<img class="d-block w-100 img-fitter"  data-src="http://via.placeholder.com/1028x600" height="600px" alt="">'+
            //         '</div>');

            // }
            

            loadImgFitter();


        }
        

    });
}

function getDataContentCommittee(IDType, element) {

    var url = base_url_js_server_ws+'api-lpmi/__getContentLPMICommitee';

    var data = {
        LangCode : current_language,
        IDType : IDType,
    };
    var token = jwt_encode(data,'UAP)(*');
    var locimg = base_url_js_server_ws+'uploads/employees/';
    $.post(url,{token:token},function (jsonResult) {
        // console.log('ok');
        if(jsonResult.length>0){

            var response = '';
            var img = '';
           
            $.each(jsonResult,function (i,v) {
                  

                var ta = (v.TitleAhead!='' && v.TitleAhead!=null) ? v.TitleAhead+' ' : '';
                var tb = (v.TitleBehind!='' && v.TitleBehind!=null) ? ' '+v.TitleBehind : '';
                var lpminame= ta+v.Name+tb;

                response += '<div class="col-lg-4 col-md-4 mb-3">'+
                              '<div class="card mb-2 testimonial-card h-100">'+
                                '<div class="card-up indigo lighten-1"></div>'+
                                '<div class="img-card avatar mx-auto white">'+
                               ' <img class="rounded-circle w-100 img-fitter"  data-src="'+locimg+''+v.Photo+'"  height="110px" alt="'+v.Name+'">'+
                                '</div>'+
                                '<div class="card-body">'+
                                  '<h4 class="card-title font-weight-bold">'+lpminame+'</h4>'+
                                  '<p class="card-text">'+v.Position+' </p>'+
                                  '<p class="card-text">Sistem Penjaminan Mutu Internal </p>'+                               
                               
                                '</div>'+
                              '</div>'+
                            '</div>';

                });
               
                
            }
            $('#viewcommittee').append(response);
            loadImgFitter();
            // $('.img-fitter').imgFitter({

            //     // CSS background position
            //     backgroundPosition: 'center center',

            //     // for image loading effect
            //     fadeinDelay: 400,
            //     fadeinTime: 1200

            //     });
          

    });
}


function getDataKnowledge(IDType,IDCat, element) {

    var url = base_url_js_server_ws+'api-lpmi/__getContentLPMIKnowledge';

    var data = {
        LangCode : current_language,
        IDType : IDType,
        IDCat : IDCat,
    };
    var token = jwt_encode(data,'UAP)(*');
    var locimg = base_url_js_server_ws+'uploads/lpmi/';
    $.post(url,{token:token},function (jsonResult) {
        // console.log('ok');
        var no='1';
            if(jsonResult.length>0){

                var dok = '',
                    title = '';
                $.each(jsonResult,function (i,v) {

                    dok += '<div class="tab-content" id="v-pills-tabContent">'+
                                '<div class="tab-pane fade show " id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">'+
                                '<iframe src="'+locimg+''+v.File+'" width="100%" height="600px" style="border: none;" />'+
                                '</iframe>'+
                                '</div>'
                            '</div>';

                    title +='<a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><label>'+no++ +'. </label> '+v.Title+'</a>';



                });

                $('#filedocument').append(dok);
                $('#v-pills-tab').append(title);
                $('.tab-pane').first().addClass('active');
                $('.nav-link').first().addClass('active');

            }else{

                $('#filedocument').append('<div class="panel py-5 px-5">'+
                    '<h1>Sorry something went wrong file not found !!!</h1>'+
                    '</div>');

            }        
          

    });
}
