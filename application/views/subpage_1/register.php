<head><link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
   
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
     <link rel="stylesheet" href="assets/css/register.css">
</head>
<div class="main-content">
	<section class ="container-fluid">
      <section class="row justify-content-center">
         <section class="col-12 col-sm-6 col-md-6">
            <form class="form-container">
              <a href="http://localhost/pemkot-app-LOGIN_REGIS/home"><img src="assets/img/Logo_Kota_Yogyakarta.png" style="width: 10%" class="rounded mx-auto d-block"></a>
            	<h3 style="text-align: center;">Registrasi</h3>
              <hr width="50%">
              <h4>Data Perusahaan</h4>
              <div class="form-row">

                <div class="form-group col-md-7">
                  <label for="inputNamaOrganisasi">Nama Organisasi</label>
                  <input type="text" class="form-control" id="inputNamaOrganisasi" placeholder="Nama Organisasi">
                </div>
                <div class="form-group col-md-5">
                  <label for="inputnomorTelepon">Nomor telepon</label>
                  <input type="text" class="form-control" id="inputnomorTelepon" placeholder="Nomor telepon organisasi">
                </div>
              </div>
              <div class="form-row">
                    <div class="form-group col-md-7">
                        <label for="exampleFormControlSelect1">Jenis Organisasi</label>
                        <select class="form-control" id="exampleFormControlSelect1">
                          <option selected>Pilih Jenis Organisasi</option>
                          <option va>OPD/Unit Kerja di Pemerintah Kota Yogyakarta</option>
                          <option>OPD/Unit Kerja di Pemda DIY</option>
                          <option>OPD/Unit Kerja di Pemda lain</option>
                          <option>Badan Usaha Berbadan Hukum</option>
                          <option>Kementrian/Badan/Lembaga (instansi vertikal)</option>
                          <option>Organisasi Kemasyarakatan (berbadan hukum/tidak berbadan hukum)</option>
                          <option>Perseorangan</option>
                          <option>Perwakilan Pemerintah RI di Luar Negeri</option>
                          <option>Pemerintah Daerah di Luar Negeri</option>
                          <option>Organisasi Internasional</option>
                        </select>
                    </div>
                    <div class="form-group col-md-5">
                      <label for="inputWebsite">Website atau Social Media</label>
                      <input type="text" class="form-control" id="inputWebsite" placeholder="Website atau social media">
                    </div>
              </div>
             
              <div class="form-row">
                <div class="form-group col-md-12">
                  <label for="inputAddress">Alamat kantor</label>
                  <input type="text" class="form-control" id="inputAddress" placeholder="Jl. Dr. Wahidin Sudirohusodo No.5-25">
                </div>
              </div>
              <hr>
            <h4>Data Perwakilan Perusahaan</h4>
            <div class="form-row">
              <div class="form-group col-md-12">
                  <label for="inputnamaLengkap">Nama Lengkap</label>
                  <input type="text" class="form-control" id="inputnamaLengkap" placeholder="Nama lengkap sesuai KTP">
                </div>
              
            </div>
            <div class='form-row'>
              <div class="form-group col-md-7">
                  <label for="inputEmailPribadi">Email Pribadi</label>
                  <input type="email" class="form-control" id="inputEmailPribadi" placeholder="Email pribadi">
                </div>
                <div class="form-group col-md-5">
                  <label for="inputNomorHP">Nomor Handphone</label>
                  <input type="text" class="form-control" id="inputNomorHP" placeholder="No. Handphone Pribadi">
                </div>
                
            </div>
            <div class="form-row">
              <div class="form-group col-md-7">
                  <label for="inputEmailOrganisasi">Email Organisasi</label>
                  <input type="email" class="form-control" id="inputEmailOrganisasi" placeholder="Email kantor">
                </div>
              <div class="form-group col-md-5">
                  <label for="inputJabatan">Jabatan di Organisasi</label>
                  <input type="text" class="form-control" id="inputJabatan" placeholder="Jabatan">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="tujuan">Tujuan Registrasi</label>
                  <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                      <label class="form-check-label" for="exampleRadios1">
                        Sebagai PPKSD
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                      <label class="form-check-label" for="exampleRadios2">
                        Melakukan kerja sama daerah
                      </label>
                    </div>
              </div>
              <div class="form-group col-md-6">
                <label for="fotoProfil">Pilih Foto Profil</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword" placeholder="Password">
              </div>
              <div class="form-group col-md-6">
                <label for="inputKonfirmasiPassword">Konfirmasi Password</label>
                <input type="password" class="form-control" id="inputKonfirmasiPassword" placeholder="Konfirmasi password">
              </div>
            </div>
            <hr>
            <div class="form-group">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck1">
                <label class="custom-control-label" for="customCheck1">Saya menyatakan bahwa informasi yang saya berikan adalah benar</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck2">
                <label class="custom-control-label" for="customCheck2">Dengan mengisi formulir ini saya memberikan izin kepada Pemerintah Kota Yogyakarta untuk menggunakan informasi yang saya berikan untuk kepentingan pengambilan kebijakan dalam melaksanakan kerja sama daerah</label>
              </div>
            </div>

            
              
          
              <button type="submit" class="btn btn-primary btn-block">Daftar</button>
              <p style="font-size: 12px">Punya akun mitra? <a href="http://localhost/pemkot-app-LOGIN_REGIS/login">Masuk di sini</a></p>
            </form>
            <section></section>
         </section>
      </section>
   </section>
</div>