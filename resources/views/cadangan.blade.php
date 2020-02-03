<!-- nitip ya dari Home.blade.php -->
<!-- @extends('layouts.app') -->
<!-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection -->

<!-- nitip ya dari web.php -->
<!-- Route::get('/dashboard', 'MahasiswaController@index')->name('index');

Route::get('/create', 'MahasiswaController@create')->name('create');
Route::POST('/createproses', 'MahasiswaController@store')->name('store');
Route::get('/edit/{mahasiswa}', 'MahasiswaController@edit')->name('edit');
Route::patch('/update/{mahasiswa}', 'MahasiswaController@update')->name('update');
Route::delete('/delete/{mahasiswa}', 'MahasiswaController@destroy')->name('delete'); -->

<!-- Route::get('/dashboard', 'HomeController@index')->name('index');

Route::get('/create', 'HomeController@index')->name('create');
Route::POST('/createproses', 'HomeController@index')->name('store');

Route::get('/edit/{mahasiswa}', 'HomeController@index')->name('edit');
Route::patch('/update/{mahasiswa}', 'HomeController@index')->name('update');
Route::delete('/delete/{mahasiswa}', 'HomeController@index')->name('delete'); -->

<!-- nitip ya buat dropdown login dari index template sb 2 admin -->
<!-- tambahan dropdown -->
<!-- <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
    <a class="dropdown-item" href="#">
        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
        Profile
    </a>
    <a class="dropdown-item" href="#">
        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
        Settings
    </a>
    <a class="dropdown-item" href="#">
        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
        Activity Log
    </a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        Logout
    </a>
</div> -->