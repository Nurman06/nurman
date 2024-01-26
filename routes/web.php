<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/studyclub/{id}', function ($value) {
    //return view('welcome');
   echo "hai selamat datang di studyclub $value !!!";
});

Route::get('/studyclub', function () {
    //return view('welcome');
   echo "anda tidak memasukkan nama study club!!!";
});

Route::get('/latihanKirimData', function () {
    return view('welcome',['title'=>'mahasiswa sistem informasi']);
});

Route::get('/latihanKirimData/{title}', function ($title) {
    return view('welcome',['title'=>$title]);
});

Route::get('/latihanaja', function () {
    return view('latihan',['data1'=> 10000]);
});

Route::get('/latihan2', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('index');
})->name('dashboard');

use App\models\kategori;

/*Route::get('kategori/semua', function () {
    $kategori = kategori::all();
    foreach ($kategori as $data){
        echo $data->id . " . " . $data->nama_kategori . "<br>";
    }
});*/

use App\Http\Controllers\KategoriController;
Route::get('kategori/semua', [KategoriController::class,'semua'] 
);

use App\Http\Controllers\KategoriController2;
Route::resource('kategori',KategoriController2::class);

Route::get('kategori/tambah', function () {
    kategori::create([
    'nama_kategori'=>"pakaian Baru",
    'deskripsi'=> "Semua jenis pakaian baru"
    ]);
});

Route::get('kategori/update/{id}', function ($id) {
    kategori::find($id)->update([
    'nama_kategori'=>"pakaian Anak",
    'deskripsi'=> "Semua jenis pakaian anak"
    ]);
});

Route::get('kategori/hapus/{id}', function ($id) {
    kategori::find($id)->delete();
});

use App\models\mhs;

Route::get('mhs/semua', function () {
    $mhs = mhs::all();
    foreach ($mhs as $data){
        echo $data->id . " " . $data->nama ." " . $data->nim ." " . $data->kelas ." " . $data->des . "<br>";
    }
});

Route::get('mhs/tambah', function () {
    mhs::create([
    'nama'=>"jeruk",
    'nim'=>"001",
    'kelas'=>"R1",
    'des'=> "mahasiswa biasa"

    ]);
});

Route::get('mhs/tambah', function () {
    mhs::create([
    'nama'=>"lemon",
    'nim'=>"003",
    'kelas'=>"R1",
    'des'=> "mahasiswa biasa"

    ]);
});

Route::get('mhs/tambah', function () {
    mhs::create([
    'nama'=>"sendal",
    'nim'=>"002",
    'kelas'=>"R1",
    'des'=> "mahasiswa biasa"

    ]);
});

Route::get('mhs/hapus/{id}', function ($id) {
    mhs::find($id)->delete();
});

Route::get('/kategori/{id}', 'KategoriController@show')->name('kategori.show');

Use App\Http\Controllers\MahasiswaController;

Route::resource('mahasiswa', MahasiswaController::class);