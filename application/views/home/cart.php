<div class="container" style="padding: 2em 0 2em 0">
	<h4><b>Shopping Cart</b></h4>
	<div class="chip" style="font-size:1em"><b>2</b> Produk</div>
	
	<div class="row">
	    <form>
		<div class="col s12 m12 l8">
			<table style="min-width:600px ;overflow-x: scroll">
		        <thead style="border-style: none">
		          <tr>
		              <th style="width: 12em"></th>
		              <th></th>
		              <th>Harga</th>
		              <th>Kuantitas</th>
		          </tr>
		        </thead>
		
		        <tbody>
                         <?php if(empty($_SESSION['cart'])){$_SESSION['cart'] = array();}
                          $ukuran_array = sizeof($_SESSION['cart']);
                          $j=0;
		          for ($i=0; $i < ($ukuran_array/6); $i++){
		          if($_SESSION['cart'][$j+5]==1){
                          ?>
		          <tr>
		            <td>
			        <a class="remove" href="<?php echo base_url();?>brands/remove_cart/<?php echo $j+5;?>"><img style="width: 2.5em" src="<?php echo base_url();?>assets/img/remove.png"></a>
		            	<img src="<?php echo base_url();?>assets/gambar_kaos/small/1/<?php echo $_SESSION['cart'][$j];?>.jpg" style="width: 10em">
		            </td>
		            <td>
		            	<b><?php echo $_SESSION['cart'][$j+1];?></b><br>
		            	<div class="chip" style="font-size:0.7em; margin-top: 1em">Ready Stock</div>
		            </td>
		            <td>
		            	<h5>Rp <?php echo $_SESSION['cart'][$j+2];?></h5>
		            </td>
		            <td>
		            	<input class="browser-default" name="quantity1" type="number" min="1" max="100" value="1">
		            </td>
		          </tr>
                       <?php } $j=$j+6; }?>
		        </tbody>
		      </table>
		</div>
		<div class="col l3 offset-l1 m12 s12" style="border: solid 1px lightgrey; padding: 1em">
			<h5>Detail Pesanan</h5>
			<div class="col s6">
				<p>
					Subtotal:<br>
					Pengiriman:<br><br>
					<b>Total:</b>
				</p>
			</div>
			<div class="col s6">
				<p>
					Rp 200.266<br>
					Rp 40.000<br><br>
					<b>Rp 240.266</b>
				</p>
			</div>
			<button class="btn waves-effect waves-light" type="submit" style="margin-top: 1em; width:100%">BAYAR</button>
		</div>
	    </form>
	</div>
</div>

<style>
	td {
		vertical-align: top;
	}
</style>