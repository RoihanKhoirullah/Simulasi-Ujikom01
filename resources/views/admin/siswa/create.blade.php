<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>PPDB SMK Merdeka Belajar</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.min.css') }}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>

<body>
   
    <br>
    <br>
    <section>
            <div class="container">
                  <div class="row">
                        <div class="col-md-12">
                              <div class="main-card mb-3 card card-body">
                                    <h3>Formulir Pendaftaran</h3>
                                    <div class="table-responsive">
                                          <form action="{{ route('simpan-siswa') }}" method="POST">
                                          @csrf
                                                
                                                <div class="modal-body">
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="reg" class="form-label">No Registrasi</label>
                                                                  <input type="text" class="form-control" value="" name="reg" id="reg" required>
                                                            </div>
                                                      </div>
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="nama" class="form-label">Nama</label>
                                                                  <input type="text" class="form-control" name="nama" id="nama" onkeypress="return event.charCode <48 || event.charCode >57" required>
                                                            </div>
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="jk">Jenis Kelamin</label>
                                                            <select name="jk" id="jk" class="form-control" required>
                                                            <option value="" >Pilih Jenis Kelamin</option>
                                                                <option value="laki-laki">laki-laki</option>
                                                                <option value="perempuan">perempuan</option>
                                                            </select>
                                                        </div>
                                                        <br>
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="alamat" class="form-label">Alamat</label>
                                                                  <input type="text" class="form-control" name="alamat" id="alamat" required>
                                                            </div>
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="agama">Agama</label>
                                                            <select name="agama" id="agama" class="form-control" required>
                                                            <option value="" >Pilih Agama</option>
                                                                <option value="islam">islam</option>
                                                                <option value="kristen">kristen</option>
                                                            </select>
                                                    </div>
                                                    <br>
                                                      <div class="row">
                                                            <div class="mb-3 col-md-12">
                                                                  <label for="asal_sekolah" class="form-label">Asal Sekolah</label>
                                                                  <input type="text" class="form-control" name="asal_sekolah" id="asal_sekolah" required>
                                                            </div>
                                                      </div>
                                                      <div class="form-group">
                                                        <label for="minat_jurusan">Minat Jurusan</label>
                                                            <select name="minat_jurusan" id="minat_jurusan" class="form-control" required>
                                                            <option value="" >Pilih Minat Jurusan</option>
                                                                <option value="rpl">rpl</option>
                                                                <option value="tkj">tkj</option>
                                                            </select>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="modal-footer">
                                                      <br>
                                                      <br>
                                                      <button type="submit" class="btn btn-primary">Daftar</button>
                                                </div>
                                          </form>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
    </section>

</body>

</html>