 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
 <!-- Google Fonts -->
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
 <!-- Bootstrap core CSS -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
 <!-- Material Design Bootstrap -->
 <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css" rel="stylesheet">

 <h1 class="text-center">{{isset($mahasiswa) ? 'EDIT' : 'TAMBAH' }} DATA</h1>
 <div class="container">
     <form action="{{ isset($mahasiswa) ? route('update', $mahasiswa->id) :
                        route('store') }}" method="POST">
         @csrf
         @if (isset($mahasiswa))
         @method('PATCH')
         @endif
         <div class="modal-body">
             <div class="md-form mb-5" class="form-group">
                 <label data-error="wrong" data-success="right" for="NIM">NIM</label>
                 @error('NIM') <span style="color: red">{{$message}}</span> @enderror
                 <input type="integer" name="NIM" id="NIM" class="form-control validate" value="{{isset($mahasiswa) ? $mahasiswa->NIM : old('NIM')}}">
             </div>
             <div class="md-form mb-5" class="form-group">
                 <label data-error="wrong" data-success="right" for="Nama">Nama</label>
                 @error('Nama') <span style="color: red">{{$message}}</span> @enderror
                 <input type="text" name="Nama" id="Nama" class="form-control validate" value="{{isset($mahasiswa) ? $mahasiswa->Nama : old('Nama')}}">
             </div>
             <div class="md-form mb-5" class="form-group">
                 <label data-error="wrong" data-success="right" for="jurusan">Jurusan</label>
                 @error('jurusan') <span style="color: red">{{$message}}</span> @enderror
                 <input type="text" name="jurusan" id="jurusan" class="form-control validate" value="{{isset($mahasiswa) ? $mahasiswa->jurusan : old('jurusan')}}">
             </div>
             <div class="md-form mb-5" class="form-group">
                 <label data-error="wrong" data-success="right" for="angkatan">Angkatan</label>
                 @error('angkatan') <span style="color: red">{{$message}}</span> @enderror
                 <input type="numerik" name="angkatan" id="angkatan" class="form-control validate" value="{{isset($mahasiswa) ? $mahasiswa->angkatan : old('angkatan')}}">
             </div>
             <div class="md-form mb-5" class="form-group">
                 <label data-error="wrong" data-success="right" for="jenis_kelamin">Jenis Kelamin</label>
                 @error('jenis_kelamin') <span style="color: red">{{$message}}</span> @enderror
                 <input type="text" name="jenis_kelamin" id="jenis_kelamin" class="form-control validate" value="{{isset($mahasiswa) ? $mahasiswa->jenis_kelamin : old('jenis_kelamin')}}">
             </div>
             <div class="md-form mb-5" class="form-group">
                 <label data-error="wrong" data-success="right" for="No_hp">Nomor hp</label>
                 @error('No_hp') <span style="color: red">{{$message}}</span> @enderror
                 <input type="numerik" name="No_hp" id="No_hp" class="form-control validate" value="{{isset($mahasiswa) ? $mahasiswa->No_hp : old('No_hp')}}">
             </div>
         </div>

         <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary" value="save">SAVE</button>
         </div>
     </form>
 </div>
 <!-- </div>
 </div>
 </div> -->

 <!-- JQuery -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <!-- Bootstrap tooltips -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
 <!-- Bootstrap core JavaScript -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
 <!-- MDB core JavaScript -->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/js/mdb.min.js"></script>