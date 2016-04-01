<div class="container" style="padding-top: 2em; min-height: 81vh">
    <h4><b>Akun Saya</b></h4>
    <p><b>Halo Joko Widodo!</b><br>Disini kamu dapat melihat atau memperbarui infromasimu. Silahkan klik link dibawah ini</p>
    
    <style>
        .user-panel {
            color:rgba(0,0,0,0.87);
            padding:1.2em;
            border:solid 1px lightgrey;
            margin-bottom: 1em;
            height: 14em;
        }
    </style>
    
    <div id="modal-pengaturan-akun" class="modal" style="padding: 1em">
      <div class="modal-content">
        <h4>Pengaturan Akun</h4>
        <form>
	   <div class="row">
              <div class="input-field col s6">
                <input placeholder="Masukkan nama anda" type="text">
                <label>Nama</label>
              </div>
              <div class="input-field col s6">
                <input placeholder="Masukkan username baru anda" type="text">
                <label>Username</label>
              </div>
              <div class="input-field col s6">
                <input placeholder="Masukkan email baru anda" type="text">
                <label>Email</label>
              </div>
              <div class="input-field col s6">
                <input placeholder="Masukkan password baru anda" type="password">
                <label>Email</label>
              </div>
              <button class="btn waves-effect waves-light" type="submit" style="width:100%; margin: 1em 0.5em 0 0.5em;">
                 Ganti
 	      </button>
           </div>
        </form>
      </div>
    </div>
    
    <div id="modal-alamat" class="modal" style="padding: 1em">
      <div class="modal-content">
        <h4>Alamat Pengiriman</h4>
        <form>
          <div class="row">
            <div class="col s12 m6 l6">
            	<p><b>Alamat saat ini</b><br> Menara Bidakara I, Lt. 17 Jl. Jendral Gatot Subroto Kav. 71 - 73 Menteng Dalam, Tebet, Jakarta Selatan</p>
            </div>
            <div class="input-field col s12 m6 l6">
              <textarea placeholder="Masukkan alamat baru anda disini" class="materialize-textarea"></textarea>
              <label>Alamat</label>
            </div>
            <button class="btn waves-effect waves-light" type="submit" style="width:100%; margin: 1em 0.5em 0 0.5em;">
                 Ganti
 	    </button>
          </div>
        </form>

      </div>
    </div>
    
    <div class="row" style="margin-top: 3em">
        <div class="col s12 m6 l6">
            <div class="user-panel">
                <h5>Pengaturan Akun</h5>
                <p>
                    Username: USER123<br>
                    Email: babi@ngepet.com<br>
                    Password: *****
                </p>
                <a class="waves-effect waves-light btn modal-trigger right" href="#modal-pengaturan-akun">Ubah</a>
            </div>
        </div>
        <div class="col s12 m6 l6">
            <div class="user-panel">
                <h5>Alamat Pengiriman</h5>
                <p>Menara Bidakara I, Lt. 17 Jl. Jendral Gatot Subroto Kav. 71 - 73 Menteng Dalam, Tebet, Jakarta Selatan</p>
                <a class="waves-effect waves-light btn modal-trigger right" href="#modal-alamat">Ubah</a>
            </div>
        </div>
    </div>
</div>