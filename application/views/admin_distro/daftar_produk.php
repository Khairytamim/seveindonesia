    <div class="col s9 panel-divider">
        <div class="card-panel lighten-2 title-panel">
          <h5><i class="material-icons">shopping_basket<sup>list</sup></i><br>Daftar Produk</h5>
        </div>
        
        <div class="card-panel lighten-2">
          <div class="row">
            <?php  
              foreach ($produk->result() as $row)  
              {  
            ?> 
            <div class="col s6 l4">
              <div class="card_1" style="border: none">
                <div class="card-image"> 
                  <a href="<?php echo base_url();?>AdminDistro/edit_produk/<?php echo $row->id_produk;?>"><img style="width:100%" src="<?php echo base_url();?>assets/gambar_kaos/small/1/<?php echo $row->id_produk;?>.jpg" onerror="this.src='<?php echo base_url();?>assets/img/notfound.png'" /></a>
                </div>
              <div class="card-content">
                <p><b><?php echo $row->nama_toko;?></b></p>
                <div style="border-bottom:1px #385678 solid"></div>
                <p style="font-size:12px"><?php echo $row->nama_produk;?></p>
                <p align="right" style="margin-top:10px">IDR <?php echo $row->harga;?></p>
                <!--
                <div class="chip">S=<?php echo $row->s;?></div>
                <div class="chip">M=<?php echo $row->m;?></div>
                <div class="chip">L=<?php echo $row->l;?></div>
                <div class="chip">XL=<?php echo $row->xl;?></div>
                <div class="chip">XXL=<?php echo $row->xxl;?></div>
                -->
              </div>
      		      <div class="row">
	                      <div class="col s2">
	                           <a href="<?php echo base_url();?>AdminDistro/edit_produk/<?php echo $row->id_produk;?>">
	                           <img style="width:20px ;height:20px;margin-left:auto;margin-right:auto" src="<?php echo base_url();?>assets/img/edit.png" >
	                           </a>
	     		      </div>
	                      <div class="col s2">
	                      	<a href="<?php echo base_url();?>AdminDistro/hapus_data/<?php echo $row->id_produk;?>">
	                           <img style="width:20px ;height:20px; margin:auto" src="<?php echo base_url();?>assets/img/delete.png" >
	                           </a>
	                      </div>
                      </div>  
            </div> 
          </div>

          <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>