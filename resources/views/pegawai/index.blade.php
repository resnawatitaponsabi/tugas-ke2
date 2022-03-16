@extends('pegawai.master')
@section('content')

        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
          {{session('sukses')}}
        </div>
        @endif
          <div class="row">
            <div class="col-6">
              <h1 >DATA PEGAWAI echa taponsabi</h1>
            </div>
            <div class="col-6">
              
            <button type="button" class="btn btn-primary btn-sm float-right" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Tambah data pegawai</button>            
            </div>

            <table class='table table-hover'>
                <tr>
                    <th>NAMA</th>
                    <th>JENIS KELAMIN</th>
                    <th>AGAMA</th>
                    <th>JABATAN</th>
                    <th>STATUS</th>
                    <th>ASAL</th>
                    <th>AKSI</th>
                </tr>
                @foreach($data_pegawai as $Pegawai)
                <tr>
                    <td> {{$Pegawai->nama}} </td>
                    <td> {{$Pegawai->jenis_kelamin}} </td>
                    <td> {{$Pegawai->agama}} </td>
                    <td> {{$Pegawai->jabatan}} </td>
                    <td> {{$Pegawai->status}} </td>
                    <td> {{$Pegawai->asal}} </td>
                    <td>
                      <a href="/Pegawai/{{$Pegawai->id}}/edit" class="btn btn-info">Edit</a>
                      <a href="/Pegawai/{{$Pegawai->id}}/delete" class="btn btn-danger">Hapus</a>
                       
                      
                    </td>
                </tr>
            
                @endforeach
            </table>

          </div>
      

      <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form  method='POST' action= '/Pegawai/create/' >
                                 @csrf
                                 
                            
                                  <div class="mb-1">
                                    <label for="exampleInputEmail1" class="form-label">nama</label>
                                    <input name='nama' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                  </div>
                                  <div class="mb-1">jenis_kelamin</label>
                                      <select name='jenis_kelamin' class="form-select"  aria-label="Default select example">
                                          <option selected>isikan jenis kelamin</option>
                                          <option value="laki-laki">laki-laki</option>
                                          <option value="perempuan">perempuan</option>
                                          
                                        </select>
                                    </div>
                                    <div class="mb-1">
                                      <label for="exampleInputEmail1" class="form-label">agama</label>
                                      <select name='agama' class="form-select"  aria-label="Default select example">
                                          <option selected>isikan agama</option>
                                          <option value="islam">islam</option>
                                          <option value="kristen">kristen</option>
                                          <option value="hindu">hindu</option>
                                          <option value="budha">budha</option>
                                        </select>
                                    </div>
                                    <div class="mb-1">
                                      <label for="exampleInputEmail1" class="form-label">jabatan</label>
                                      <input name='jabatan' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="mb-1">
                                      <label for="exampleInputEmail1" class="form-label">status</label>
                                      <select name='status' class="form-select"  aria-label="Default select example">
                                          <option selected>isikan status</option>
                                          <option value="menikah">menikah</option>
                                          <option value="lajang">lajang</option>
                                          
                                        </select>
                                    </div>
                                    <div class="mb-1">
                                      <label for="exampleInputEmail1" class="form-label">asal</label>
                                      <input name='asal' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                  
                                  
                                
                              </div>
                              <div class="modal-footer">
                               
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </form>
                              </div>
                            </div>
                          </div>
                        </div>
@endsection 

    
