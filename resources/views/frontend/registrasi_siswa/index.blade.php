<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</head>
<body>

<div class="content">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-md-9 offset">

            <form action="{{ route('simpan-siswa') }}" method="post" enctype="multipart/form-data">
            @csrf
                
                <br>

                    <div class="form-group">
                            <label for="reg">reg</label>
                            <input type="number" name="reg" class="form-control" id="reg" required>
                    </div>

                    <br>
                    <br>

                    <div class="form-group">
                            <label for="nama">nama</label>
                            <input type="text" name="nama" class="form-control" id="nama" onkeypress="return event.charCode <48 || event.charCode >57" required>
                    </div>

                    <br>
                    <br>

                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                            <select name="jk" id="jk" class="form-control" required>
                            <option value="" >Pilih Jenis Kelamin</option>
                                <option value="laki-laki">laki-laki</option>
                                <option value="perempuan">perempuan</option>
                            </select>
                    </div>

                    <br>
                    <br>

                    <div class="form-group">
                            <label for="alamat">alamat</label>
                            <input type="text" name="alamat" class="form-control" id="alamat" required>
                    </div>

                    <br>
                    <br>

                    <div class="form-group">
                        <label for="agama">Agama</label>
                            <select name="agama" id="agama" class="form-control" required>
                            <option value="" >Pilih Agama</option>
                                <option value="islam">islam</option>
                                <option value="kristen">kristen</option>
                            </select>
                    </div>

                    <br>
                    <br>

                    <div class="form-group">
                            <label for="asal_sekolah">asal_sekolah</label>
                            <input type="text" name="asal_sekolah" class="form-control" id="asal_sekolah" required>
                    </div>

                    <br>
                    <br>

                    <div class="form-group">
                        <label for="minat_jurusan">Minat Jurusan</label>
                            <select name="minat_jurusan" id="minat_jurusan" class="form-control" required>
                            <option value="" >Pilih Minat Jurusan</option>
                                <option value="rpl">rpl</option>
                                <option value="tkj">tkj</option>
                            </select>
                    </div>

                <br>
                                                            
                <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                        <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    </div>        
</div>

</body>
</html>