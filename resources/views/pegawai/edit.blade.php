@extends('pegawai.master')
@section('content')

        <H1 class="text-center">Edit Data Pegawai</H1>
        @if(session('sukses'))
        <div class="alert alert-success" role="alert">
          {{session('sukses')}}
        </div>
        @endif
          <div class="row">
            <div-col class="lg 12">

            
            <form  method='POST' action= '/Pegawai/{{$Pegawai->id}}/update' >
                {{csrf_field()}}
               
           
                 <div class="mb-1">
                   <label for="exampleInputEmail1" class="form-label">nama</label>
                   <input name='nama' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$Pegawai->nama}}">
                 </div>
                 <div class="mb-1">jenis_kelamin</label>
                     <select name='jenis_kelamin' class="form-select"  aria-label="Default select example">
                         <option selected>{{$Pegawai->jenis_kelamin}}</option>
                         <option value="laki-laki">laki-laki</option>
                         <option value="perempuan">perempuan</option>
                         
                       </select>
                   </div>
                   <div class="mb-1">
                     <label for="exampleInputEmail1" class="form-label">agama</label>
                     <select name='agama' class="form-select"  aria-label="Default select example">
                         <option selected> {{$Pegawai->agama}} </option>
                         <option value="islam">islam</option>
                         <option value="kristen">kristen</option>
                         <option value="hindu">hindu</option>
                         <option value="budha">budha</option>
                       </select>
                   </div>
                   <div class="mb-1">
                     <label for="exampleInputEmail1" class="form-label">jabatan</label>
                     <input name='jabatan' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$Pegawai->jabatan}}">
                   </div>
                   <div class="mb-1">
                     <label for="exampleInputEmail1" class="form-label">status</label>
                     <select name='status' class="form-select"  aria-label="Default select example">
                         <option selected>{{$Pegawai->status}} </option>
                         <option value="menikah">menikah</option>
                         <option value="lajang">lajang</option>
                         
                       </select>
                   </div>
                   <div class="mb-1">
                     <label for="exampleInputEmail1" class="form-label">asal</label>
                     <input name='asal' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$Pegawai->asal}}">
                   </div>
                 
                 
               
             </div>
             <div class="modal-footer">
              
               <button type="submit" class="btn btn-warning">Update</button>
             </form>
            </div-col>
          </div>
          
          @endsection 
      