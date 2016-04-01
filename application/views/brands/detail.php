<div class="container">
  <div class="row">
    <div class="col s12">
    
  
      <div class="row" style="margin-top:3em">
     
      	   <?php  
              foreach ($produk->result() as $row)  
              {  
            ?> 
            
        <div class="col s12 l4" style="text-align: right" id="gallery_01f"> 
        <div class="row">
        	<div class="s12">
             <img id="zoom_01" src='<?php echo base_url();?>assets/gambar_kaos/small/1/<?php echo $row->id_produk;?>.jpg' data-zoom-image="<?php echo base_url();?>assets/gambar_kaos/big/1/<?php echo $row->id_produk;?>.jpg"/ style="width:100%">  
 	</div>
 	<div class="s12">
	<a href="#" class="elevatezoom-gallery active" data-image="<?php echo base_url();?>assets/gambar_kaos/small/1/<?php echo $row->id_produk;?>.jpg" data-zoom-image="<?php echo base_url();?>assets/gambar_kaos/big/1/<?php echo $row->id_produk;?>.jpg"> 
		<img id="img_01" src="<?php echo base_url();?>assets/gambar_kaos/xsmall/1/<?php echo $row->id_produk;?>.jpg" /> 
	</a> 
	<a href="#" class="elevatezoom-gallery" data-image="<?php echo base_url();?>assets/gambar_kaos/small/2/<?php echo $row->id_produk;?>.jpg" data-zoom-image="<?php echo base_url();?>assets/gambar_kaos/big/2/<?php echo $row->id_produk;?>.jpg"> 
		<img id="img_01" src="<?php echo base_url();?>assets/gambar_kaos/xsmall/2/<?php echo $row->id_produk;?>.jpg" /> 
	</a> 
	<a href="#" class="elevatezoom-gallery" data-image="<?php echo base_url();?>assets/gambar_kaos/small/3/<?php echo $row->id_produk;?>.jpg" data-zoom-image="<?php echo base_url();?>assets/gambar_kaos/big/3/<?php echo $row->id_produk;?>.jpg"> 
		<img id="img_01" src="<?php echo base_url();?>assets/gambar_kaos/xsmall/3/<?php echo $row->id_produk;?>.jpg" /> 
	</a> 
	<a href="#" class="elevatezoom-gallery" data-image="<?php echo base_url();?>assets/gambar_kaos/small/4/<?php echo $row->id_produk;?>.jpg" data-zoom-image="<?php echo base_url();?>assets/gambar_kaos/big/4/<?php echo $row->id_produk;?>.jpg"> 
		<img id="img_01" src="<?php echo base_url();?>assets/gambar_kaos/xsmall/4/<?php echo $row->id_produk;?>.jpg" /> 
	</a> 
     	</div>
     	</div>
     	</div>
        <div class="col s12 l8" style="padding: 0 2em 2em 2em">
        
         <div class="bcrumbs" style="margin-bottom: 2em;"><b><a href="#">Men</a> / <a href="#">Kategori</a> / <a href="#">Subkategori</a> / <a href="#">Brand</a> / <?php echo $row->nama_produk;?></b></div>

         
          <h5><?php echo $row->nama_produk;?></h5>
          <h6><b><?php echo strtoupper($row->brand);?></b></h6>
          <?php $yang_tampil =$row->harga-($row->harga*$row->diskon/100);?>
           <?php $format_indonesia = number_format ($yang_tampil, 0, '','.');?>
          <h5> Rp <?php echo $format_indonesia;?></p></h5>
          <?php if($row->diskon!=0) {?>
          <p style="text-decoration:line-through">Rp <?php echo $row->harga;?></p>
          <?php }?>
          <p><?php echo $row->deskripsi_produk;?></p>
          <!--div class="chip">Katun</div>
          <div class="chip">Putih</div>
          <div class="chip">Kerah bulat</div>
          <div class="chip">Lengan pendek</div-->
          <p><b>ESTIMASI PENGIRIMAN</b><br />
            <i>1-4 hari kerja, luar Pulau Jawa 2-7 hari kerja</i></p>
            


<div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
  		  <select class="browser-default col l12" name="ukuran" id="ukuran">
          <?php if($tipe==0){?>
    		    <option value="" disabled selected>Size</option>
    		    <option value="u1">Satu Ukuran</option>
          <?php }?>
          <?php if($tipe==1){?>
            <option value="" disabled selected>Size</option>
            <option value="u1">XS</option>
            <option value="u2">S</option>
            <option value="u3">M</option>
            <option value="u4">L</option>
            <option value="u5">XL</option>
            <option value="u6">XXL</option>
          <?php }?>
          <?php if($tipe==2){?>
            <option value="" disabled selected>Size</option>
            <option value="u1">36</option>
            <option value="u2">37</option>
            <option value="u3">38</option>
            <option value="u4">39</option>
            <option value="u5">40</option>
            <option value="u6">41</option>
            <option value="u7">42</option>
            <option value="u8">43</option>
            <option value="u9">44</option>
            <option value="u10">45</option>
            <option value="u11">46</option>
            <option value="u12">47</option>
          <?php }?>
          <?php if($tipe==3){?>
            <option value="" disabled selected>Size</option>
            <option value="u1">27</option>
            <option value="u2">28</option>
            <option value="u3">29</option>
            <option value="u4">30</option>
            <option value="u5">31</option>
            <option value="u6">32</option>
            <option value="u7">33</option>
            <option value="u8">34</option>
            <option value="u9">35</option>
            <option value="u10">36</option>
            <option value="u11">37</option>
            <option value="u12">38</option>
          <?php }?>
  		  </select>
      </div>
      <div class="input-field col s12">
          <div id="ketersediaan">
        </div>
        <!--a id="pesan" href="<?php echo base_url();?>cart" class="waves-effect waves-light btn" style="margin-top:20px; margin-bottom:20px;">PESAN</a--> 
        <a id="pesan" href="#" class="waves-effect waves-light btn" style="margin-top:20px; margin-bottom:20px;">PESAN</a>  
      </div>
    </div>





            <a href="<?php echo base_url();?>cart/pesan/<?php echo $row->id_produk;?>" class="waves-effect waves-light btn" style="margin-top:20px; margin-bottom:20px;">PESAN</a>
        </div><!--
        <div class="col s12 m3">
          <div class="card">
            <div class="card-content">
            	<p><b>PILIH UKURAN</b></p>
		            	
		                
		  <select class="browser-default col l12">
		    <option value="" disabled selected>Size</option>
		    <option value="1">S</option>
		    <option value="2">M</option>
		    <option value="3">L</option>
		    <option value="4">XL</option>
		  </select>
		                
                
                <span style="font-size:12px">Tersedia semua ukuran</span>
                <span style="font-size:12px"><b>SHARE</b></span>
                <div class="row" style="margin-top:5px">
                    <div class="col s2">
                    	<img style="max-width:17px" src="<?php echo base_url();?>assets/img/sosial_media/Facebook.png" />
                    </div>
                    <div class="col s2">
                    	<img style="max-width:17px" src="<?php echo base_url();?>assets/img/sosial_media/Twitter.png" />
                    </div>
                    <div class="col s2">
                    	<img style="max-width:17px" src="<?php echo base_url();?>assets/img/sosial_media/GooglePlus.png" />
                    </div>
                    <div class="col s2">
                    	<img style="max-width:17px" src="<?php echo base_url();?>assets/img/sosial_media/Instagram.png" />
                    </div>
                    <div class="col s2">
                    	<img style="max-width:17px" src="<?php echo base_url();?>assets/img/sosial_media/Whatsapp.png" />
                    </div>
                </div>
            </div>
          </div>
	  -->
	  <!--
          <div class="card">
            <div class="card-content">
            	<p align="center"><b>SUKA PRODUK INI?</b><br /><span style="font-size:12px">Share dengan teman-temanmu dan hemat RP75.000</span></p>
                <a class="waves-effect waves-light btn" style="width:100%; margin-top:20px; margin-bottom:20px; background-color:#385678">SHARE & SAVE</a>
            </div>
          </div>
          -->
        </div>
      </div>
    </div>
  </div>
</div>


<script>
    $('#zoom_01').elevateZoom({
    zoomType: "inner",
cursor: "crosshair",
zoomWindowFadeIn: 500,
zoomWindowFadeOut: 750,
scrollZoom : true,
galleryActiveClass: "active",
gallery:'gallery_01f'
   }); 
   
   $("#zoom_01").bind("click", function(e) { var ez = $('#zoom_01').data('elevateZoom');
   $.fancybox(ez.getGalleryList()); return false; });
   
   $("img").error(function(){
        $(this).hide();
});
</script>
<script type="text/javascript">
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

</script>
<script type="text/javascript">
  $('#pesan').click(function() {
  var cabang = $("input[name=kota]").val();
  var ukuran = $("select[name=ukuran]").val();
  //console.log(ukuran);
  $.ajax({
            url: "<?php echo base_url();?>brands/add_cart",
            type: "POST",
            data: {'id_produk':<?php echo $row->id_produk;?>,id_toko:cabang ,ukuran:ukuran },
            success: function (response) {
                console.log(response);
            },
        });
});
</script>
<script type="text/javascript">
$(document).ready(function(){
    $('#ukuran').on("change",function () {
            var ukuran= $(this).find('option:selected').val();
        $.ajax({
            url: "<?php echo base_url();?>brands/cek_ketersediaan_produk/<?php echo $row->id_produk;?>",
            type: "POST",
            data: "ukuran="+ukuran,
            success: function (response) {
                $('#ketersediaan').html(response);
                console.log(response);
            },
        });
    }); 
});
</script>
<?php }?>