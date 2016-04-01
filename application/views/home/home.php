<script type="text/javascript" src="<?php echo base_url();?>assets/js/jssor.slider.min.js"></script>
    <script>
        jssor_1_slider_init = function() {
            
            var jssor_1_SlideoTransitions = [
              [{b:5500,d:3000,o:-1,r:240,e:{r:2}}],
              [{b:-1,d:1,o:-1,c:{x:51.0,t:-51.0}},{b:0,d:1000,o:1,c:{x:-51.0,t:51.0},e:{o:7,c:{x:7,t:7}}}],
              [{b:-1,d:1,o:-1,sX:9,sY:9},{b:1000,d:1000,o:1,sX:-9,sY:-9,e:{sX:2,sY:2}}],
              [{b:-1,d:1,o:-1,r:-180,sX:9,sY:9},{b:2000,d:1000,o:1,r:180,sX:-9,sY:-9,e:{r:2,sX:2,sY:2}}],
              [{b:-1,d:1,o:-1},{b:3000,d:2000,y:180,o:1,e:{y:16}}],
              [{b:-1,d:1,o:-1,r:-150},{b:7500,d:1600,o:1,r:150,e:{r:3}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:10000,d:2000,x:-379,e:{x:7}}],
              [{b:-1,d:1,o:-1,r:288,sX:9,sY:9},{b:9100,d:900,x:-1400,y:-660,o:1,r:-288,sX:-9,sY:-9,e:{r:6}},{b:10000,d:1600,x:-200,o:-1,e:{x:16}}]
            ];
            
            var jssor_1_options = {
              $AutoPlay: true,
              $SlideDuration: 800,
              $SlideEasing: $Jease$.$OutQuint,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };
            
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);
            
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizing
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1920);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            //responsive code end
        };
    </script>

    <style>
    
        .jssorb05 {
            position: absolute;
        }
        .jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
            position: absolute;
            /* size of bullet elment */
            width: 16px;
            height: 16px;
            background: url('img/b05.png') no-repeat;
            overflow: hidden;
            cursor: pointer;
        }
        .jssorb05 div { background-position: -7px -7px; }
        .jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
        .jssorb05 .av { background-position: -67px -7px; }
        .jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('<?php echo base_url();?>assets/img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
    </style>
    
<script src="<?php echo base_url();?>assets/js/jquery.unveil.js"></script>
    <script>
    $(function() {
        $(".item img").unveil(300);
    });

</script>

<div class="row">
        
     <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden; visibility: hidden;">
        <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1300px; height: 500px; overflow: hidden;">
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="<?php echo base_url();?>assets/img/slider/slider1.png" />
            </div>
            <div data-p="225.00" style="display: none;">
                <img data-u="image" src="<?php echo base_url();?>assets/img/slider/slider2.png" />
            </div>
        </div>
        <span data-u="arrowleft" class="jssora22l" style="top:0px;left:30px;width:40px;height:58px;" data-autocenter="2"></span>
        <span data-u="arrowright" class="jssora22r" style="top:0px;right:30px;width:40px;height:58px;" data-autocenter="2"></span>
    </div>
    <script>
        jssor_1_slider_init();
    </script>

        
        
	
	
	<!--div class="container"-->
                  
		            <!--our brand-->
          <div class="row" style ="padding-top: 3.5em; background-color: rgba(0,0,0,0.05); border-top: solid 0.3em #e45d25">
             <div class="container">
		   <h4 style="text-align:center">
					 <b style="color: rgba(0,0,0,0.87)">TOP BRANDS</b>
		   </h4>
		   <!--div class="divider"></div-->
		   <br>
		   <div class="row">
				<div class="col s3 m2 l2" style="padding:1em"> <a href="<?php echo base_url();?>brands/detail_brand/13"><img src="<?php echo base_url();?>assets/img/logo_brand/prelaunch/brand1.png" style="height:100%;width:100%"></a></div>
				<div class="col s3 m2 l2" style="padding:1em"> <a href="<?php echo base_url();?>brands/detail_brand/7"><img src="<?php echo base_url();?>assets/img/logo_brand/prelaunch/brand2.png" style="height:100%;width:100%"></a></div>
				<div class="col s3 m2 l2" style="padding:1em"> <a href="<?php echo base_url();?>brands/detail_brand/15"><img src="<?php echo base_url();?>assets/img/logo_brand/prelaunch/brand3.png" style="height:100%;width:100%"></a></div>
				<div class="col s3 m2 l2" style="padding:1em"> <a href="<?php echo base_url();?>brands/detail_brand/14"><img src="<?php echo base_url();?>assets/img/logo_brand/prelaunch/brand7.png" style="height:100%;width:100%"></a></div>
				<div class="col s3 m2 l2" style="padding:1em"> <a href="<?php echo base_url();?>brands/detail_brand/10"><img src="<?php echo base_url();?>assets/img/logo_brand/prelaunch/brand5.png" style="height:100%;width:100%"></a></div>
				<div class="col s3 m2 l2" style="padding:1em"> <a href="<?php echo base_url();?>brands/detail_brand/24"><img src="<?php echo base_url();?>assets/img/logo_brand/prelaunch/brand6.png" style="height:100%;width:100%"></a></div>

		   </div>
		   <div class="row">
		   	<center>
			<ul>
				<li>
					<a class="waves-effect waves-grey btn-flat" href="<?php echo base_url();?>brands">SEE ALL</a>
				</li>
			</ul>
			</center>
		     </div>
		   </div>
		</div>
          
	
          <!-- banner catalog-->
          <div style="padding-top: 2em">
               <h4 style="text-align:center">
                         <b style="color: #e45d25">TOP PRODUCTS</b>
               </h4>
               <!--div class="divider"></div-->
               <br>
               
               <div class="row" style="margin-left:auto;margin-right:auto">
               <div class="container">
               <?php foreach ($produk_terbaru->result() as $row){ ?>
               <?php if($row->status_tampil==1){?>
                    <div class="col s6 m4 l3" style="padding:0">
                    <a href="<?php echo base_url();?>brands/detail/<?php echo $row->id_produk;?>">
                    	<div class="card_1">
                         	<div class="card-image"> 
                         		<div class="item">
                              			<img style="width:100%" data-src="<?php echo base_url();?>assets/gambar_kaos/small/1/<?php echo $row->id_produk;?>.jpg" src="<?php echo base_url();?>assets/gambar_kaos/xsmall/1/<?php echo $row->id_produk;?>.jpg">
                              	</div>
                              </div>        	
				
                              <div class="card-content" style="padding: 0.5em">
                                   <p class="truncate"><b><?php echo strtoupper($row->nama_produk);?></b></p>
                                   <p class="truncate" style="font-size: 0.8em"><?php echo strtoupper($row->brand);?></p>
                                   <p style="font-size: 0.9em; text-align: left; font-weight: bold; margin-top: 0.7em; color: #e45d25">
                                   <?php if($row->diskon!=0){?>
                                   	<span class="chip right" style="font-weight: bold; background-color: rgba(228,93,37,1); color: white;"><?php echo $row->diskon?>% OFF</span>
                                   <?php } ?>
                                   <?php $yang_tampil =$row->harga-($row->harga*$row->diskon/100);?>
                                   <?php $format_indonesia = number_format ($yang_tampil, 0, '','.');?>
                                   Rp <?php echo $format_indonesia;?></p> 

                         	</div>
                    	</div>
                    	</a>
                    </div>
                  
               <?php }} ?>
               </div>
               </div>
          </div>

          
          <!--promotion-->
          <center>
          <!--ul class="pagination">
	    <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
	    <li class="active" style="background-color:#000"><a href="#!">1</a></li>
	    <li class="waves-effect"><a href="#!">2</a></li>
	    <li class="waves-effect"><a href="#!">3</a></li>
	    <li class="waves-effect"><a href="#!">4</a></li>
	    <li class="waves-effect"><a href="#!">5</a></li>
	    <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
	  </ul--></center>
	  
          <div class="container" style="margin-top: 5em">
                     <img src="<?php echo base_url();?>assets/img/banner bawah-01.png" style=" margin-bottom:1%; width:100%; height:100%">
          </div>
     </div>
</div>