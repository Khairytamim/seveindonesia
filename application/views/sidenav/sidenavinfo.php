<div class="container">
<div class="row">
     	<div class="left hide-on-small-only col s3" style="margin-bottom: 30px;">
  	        <div class="row">
						<div class="col s10.5" style="word-break: break-all; hyphens: auto;">
							<img src="<?php echo base_url();?>assets/img/logo_seve/logo-01.png" style="margin-top:0.6em; width:80px">
						</div>
            </div>
                    <hr />
                    
                
                <div class="col s10.5" style="word-break: break-all; hyphens: auto;">
	                <ul>
	                	<li><b><?php echo $banner;?></b></li><br>
	             		<?php for ($i = 0; $i < 4 ; $i++) {?>
				    <li><a href="<?php echo base_url();?>" style="color:black"><?php echo $seve[$i];?></a></li>
				<?php }?>
	                </ul>
				</div>
		
       </div>