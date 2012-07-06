<div id="piano" style="display:none;" ></div>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/audio.js" ></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/piano.js" ></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/masonry.js" ></script>
        <script type="text/javascript">
            var docmt=$(document);
            var win=$(window);
            pp=0;

            var winh,winw;

            function masounoraya(){
              var $container = $('#contenido-maso');

              $container.imagesLoaded( function(){
                //$(".box",$container).css("height","auto");
                $//(".listprovent",$container).css("height","auto");
                $container.masonry({
                  itemSelector : '.box'
                });
                if($("#corta").height()<$(".default_pag").height()){
                    $("#corta").height($(".default_pag").height()+50)
                }
              });
            }

            function cambiobar(){

              // $("#pagna .paginauno, #pagna2 .paginauno").stop();

              //   $("#pagna .paginauno, #pagna2 .paginauno").animate({
              //       top: 0
              //     }, 200,'easeInExpo');

                str=location.hash;
                n=str.replace("!","");

                    $("#corta").height(winh);
                    $("#pagna").height(winh);
                    //$(n).height(winh);
                if((!n=="")||(!n=="backtop")){

                    $("body").data({"index":$(n).index()});

                    $("paginauno.").stop();

                    $(".paginauno").animate({
                        left: 0
                      }, 500,'easeInExpo');

                    nattr=$(".bags",n).attr("src");

                    if(nattr==""){
                      $(".bags",n).attr("src",$(".bags",n).attr("data-src")+"&w="+$(".span5",n).width());
                    }

                    $(n).stop();

                    $(n).animate({
                        left: -winw*$("body").data().index
                      }, 1000,'easeOutExpo',function(){
                        ppbn=$(n+" .container").height();
                        if($("#pagna").height()<ppbn){
                            $("#corta").height(ppbn+50);
                            //$("#corta").width(winw-15);
                            $("#pagna").height(ppbn+50);
                            //$(n).height(ppbn+50);
                        }
                        $(n).addClass("default_pag");
                      });


                    if(n=="#portafolio"){
                      
                      $("#contenido-maso img").each(function(){
                          imgcar=$(this);
                          imgcar.attr("src",imgcar.attr("data-src"));
                      });
                      masounoraya();
                    }

                }else if((location.hash=="")||(location.hash=="#")){

                    $(".default_pag").stop();

                    $(".default_pag").animate({
                        left: 0
                      }, 1000,'easeInExpo',function(){
                        ppbn=$(".default_pag .container").height();
                      });
                    $(n).removeClass("default_pag");
                }
            }

            var centrio=function(){

                winh=win.height();
                winw=win.width();

                $("#corta").width(winw);
                $(".paginauno, .backtop").width(winw);
                $("#pagna").width((winw)*$(".paginauno, .backtop").length);
                vrh=(winh*0.95)-20;
                $("#logo").height(vrh);
                //$("#logo").css("line-height",vrh+"px");
            };

            $("#cualog .flbc").hover(
              function(){

                pipo($(this).attr("tecla"));

                  $("#cualog2 .flbc:eq("+$(this).index()+")").animate({
                    opacity: 1
                  }, 500);

                  $(this).animate({
                    opacity: 0
                  }, 500);

              }, 
              function(){
                $(this).animate({
                    opacity: 1
                  }, 200,function(){
                    $("#cualog2 .flbc:eq("+$(this).index()+")").animate({
                    opacity: 0
                    }, 200);
                  });
              }
            );

            if ("onhashchange" in window) {
              $(window).bind( 'hashchange', function(e) { 
                cambiobar();
              });
            }

            win.resize(function(){
                centrio();
                cambiobar();
                masounoraya();
            });

            $(".social-btn, .share-cl").click(function(){
              ppobj=$(this);
                $("#twitter-wid").css("display","block");
                $("#buscador").css("display","none");
                $("#pagna .paginauno, #pagna2 .paginauno").animate({
                    top: 140
                  }, 500,'easeInExpo');

                $('#socialall').html('<div class="shareme" data-text="Unoraya.com Agencia creativa" ></div>');
                $('.shareme').sharrre({
                  share: {
                    googlePlus: true,
                    facebook: true,
                    twitter: true
                  },
                  buttons: {
                    googlePlus: {size: 'tall'},
                    facebook: {layout: 'box_count'},
                    twitter: {count: 'vertical'}
                  },
                  enableHover: false,
                  enableCounter: false,
                  enableTracking: true,
                  url: ppobj.attr("data-socialu")
                });

                $('body,html').animate({
                scrollTop: 0
                }, 200); 
            });

            $(".buscador-btn").click(function(){
              ppobj=$(this);
                $("#twitter-wid").css("display","none");
                $("#buscador").css("display","block");
                $("#pagna .paginauno, #pagna2 .paginauno").animate({
                    top: 140
                  }, 500,'easeInExpo');
            });

            $(".cierra-tr").click(function(){
                $("#pagna .paginauno,#pagna2 .paginauno").animate({
                    top: 0
                  }, 500,'easeInExpo');
            });

            $(".listprovent").hover(
              function(){
                $(".reloitem li",this).animate({
                    opacity: 0.75
                    }, 200);
              }, 
              function(){
                $(".reloitem li",this).animate({
                    opacity: 0
                    }, 200);
              }
            );

            centrio();
            cambiobar();



        </script>
    </body>
</html>