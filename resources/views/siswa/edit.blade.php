<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Data Mahasiswa</title>

   <!-- Bootstrap CDN -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
   <div class="container">
      <h1>Edit data siswa</h1>
      @if(session('sukses'))
      <div class="alert alert-success" role="alert">
         {{session('sukses')}}
      </div>
      @endif
      <div class="row">
         <div class="col-lg-12">
            <form action="/siswa/{{$siswa->id}}/update" method="POST">
            {{@csrf_field()}}
               <div class="form-group">
                     <label for="exampleInputEmail1">Nama Depan</label>
                     <input name="nama_depan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{$siswa->nama_depan}}">
               </div>
               <div class="form-group">
                     <label for="exampleInputEmail1">Nama Belakang</label>
                     <input name="nama_belakang" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Belakang" value="{{$siswa->nama_belakang}}">
               </div>
               
               <div class="form-group">
                     <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                     <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                        <option value="L" @if($siswa->jenis_kelamin == 'L') selected @endif>Laki-laki</option>
                        <option value="P" @if($siswa->jenis_kelamin == 'P') selected @endif>perempuan</option>
                     </select>
               </div>
               <div class="form-group">
                     <label for="exampleInputEmail1">Agama</label>
                     <input name="agama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Agama" value="{{$siswa->agama}}">
               </div>
               <div class="form-group">
                     <label for="exampleFormControlTextarea1">Alamat</label>
                     <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$siswa->alamat}}</textarea>
               </div>
               <button type="submit" class="btn btn-warning">Update</button>
            </form>
         </div>
      </div>
   </div>
    
    <!-- Js -->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
