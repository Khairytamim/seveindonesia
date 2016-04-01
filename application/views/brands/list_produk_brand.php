<div class="col s12 m9 l9">

		<div class="row" style="margin-left:auto;margin-right:auto;">
		
		<div class="bcrumbs" style="margin-bottom: 2em; margin-left: 2em;"><a href="#">Men</a> / <b style="text-transform: capitalize;">Brand Name</b></div>
		
               <?php foreach ($produk->result() as $row){ ?>
                    <div class="col s6 m4 l4">
                    <a href="<?php echo base_url();?>brands/detail/<?php echo $row->id_produk;?>">
                    	<div class="card_1">
                         	<div class="card-image"> 
                         		<div class="item">
                              			<img style="width:100%" src="<?php echo base_url();?>assets/gambar_kaos/small/1/<?php echo $row->id_produk;?>.jpg">
                              	</div>
                              </div>
                              <div class="card-content" style="padding: 0.5em">
                                   <p class="truncate"><b><?php echo $row->nama_produk;?></b></p>
                                   <p style="font-size: 0.8em" class="truncate"><?php echo $row->nama_produk;?></p>
                                  <p style="font-size: 0.9em; text-align: left; font-weight: bold; margin-top: 0.7em; color: #e45d25"><!--span class="chip right" style="font-weight: bold; background-color: rgba(228,93,37,1); color: white;">10% OFF</span--> Rp <?php echo $row->harga;?></p> 
                         	</div>
                    	</div>
                    	</a>
                    </div>
               <?php } ?>
               </div>
	</div>
</div>
</div>