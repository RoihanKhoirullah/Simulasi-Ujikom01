@extends('layouts.admin')
@section('content')

<div class="content">
        <div class="container-fluid">
          <div class="row">

          <div class="row">
<div class="col-lg-12 col-sm-12 col-md-9 offset">
        <button type="button" class="btn btn-primary my-2" data-toggle="modal" data-target="#addGalModal">
            + Data
        </button>

<!-- TAMBAH BERITA -->
<div class="modal fade" id="addGalModal" tabindex="-1" aria-labelledby="addAboutModalLabel" aria-hidden="true">
    <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title" id="addAboutModalLabel">Tambah Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">
                        <form action="{{ route('simpan-siswa') }}" method="post" enctype="multipart/form-data">
                        @csrf
                                                        
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
                            
                        
                </div>
                <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>

            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Data Siswa</h4>
                  <p class="card-category"> Data dari Pengisian Formulir Pendaftaran</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>reg</th>
                        <th>nama</th>
                        <th>jk</th>
                        <th>alamat</th>
                        <th>agama</th>
                        <th>asal_sekolah</th>
                        <th>minat_jurusan</th>
                        <th>Aksi</th>
                      </thead>
                      <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($siswa as $item)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $item->reg }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->jk }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->agama }}</td>
                            <td>{{ $item->asal_sekolah }}</td>
                            <td>{{ $item->minat_jurusan }}</td>
                            <td>
                            <a href="{{ route('edit-siswa', $item->id) }}"><i style="color : blue" class="material-icons">edit</i> </a> 

                            <a href="{{ route('delete-siswa', $item->id) }}"><i style="color : red" class="material-icons">delete</i> </a> 

                            <a href="{{ route('print-siswa', $item->id) }}"><i style="color : grey" class="material-icons">print</i> </a>
                        </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
           
@include('sweetalert::alert')
@endsection