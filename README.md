# **Praktikum 11**
  ---------------
|Nama			|Kelas		|NIM		|
|-----			|-----		|-----		|
|Syahru	Raga Ramdhani	|TI.20.A.2	|312010354	|

# Langkah Praktikum

### **Persiapan** <br>
Sebelum memulai menggunakan Framework Codeigniter, perlu dilakukan konfigurasi
pada webserver. Beberapa ekstensi PHP perlu diaktifkan untuk kebutuhan
pengembangan Codeigniter 4. <br>

Berikut beberapa ekstensi yang perlu diaktifkan: <br>
* **php-json** ekstension untuk bekerja dengan JSON;
* **php-mysqlnd** native driver untuk MySQL;
* **php-xml** ekstension untuk bekerja dengan XML;
* **php-intl** ekstensi untuk membuat aplikasi multibahasa;
* **libcurl** (opsional), jika ingin pakai Curl. <br>

Untuk mengaktifkan ekstensi tersebut, melalui **XAMPP Control Panel**, pada bagian Apache klik **Config -> PHP.ini** <br>
![Gambar](/gambar/Capture1.PNG)<br>

Pada bagian extention, hilangkan tanda ; (titik koma) pada ektensi yang akan diaktifkan. Kemudian simpan kembali filenya dan restart Apache web server. <br>
![Gambar](/gambar/Capture2.PNG)<br>

### **Instalasi Codeigniter 4** <br>
Untuk melakukan instalasi Codeigniter 4 dapat dilakukan dengan dua cara, yaitu cara
manual dan menggunakan composer. Pada praktikum ini kita menggunakan cara
manual.<br>
* Unduh **Codeigniter dari website** https://codeigniter.com/download
* Ekstrak file zip Codeigniter ke direktori **htdocs/lab11_ci.**
* Ubah nama directory **framework-4.x.xx menjadi ci4.
* buka browser dengan alamat http://localhost/lab11_ci/ci4/public/
![Gambar](/gambar/Capture3.PNG)<br>
### **Menjalankan CLI (Command Line Interface)** <br>
Codeigniter 4 menyediakan CLI untuk mempermudah proses development. Untuk
mengakses CLI buka terminal/command prompt.
![Gambar](/gambar/Capture4.PNG)<br>

Arahkan lokasi direktori sesuai dengan direktori kerja project dibuat (xampp/**htdocs/praktikum11/ci4**/)<br>

Perintah yang dapat dijalankan untuk memanggil CLI Codeigniter adalah;
``` php spark ``` 
![Gambar](/gambar/Capture5.PNG)<br>

### **Mengaktifkan Mode Debugging** <br>
Codeigniter 4 menyediakan fitur **debugging** untuk memudahkan developer untuk mengetahui pesan error apabila terjadi kesalahan dalam membuat kode program.<br>

Secara default fitur ini belum aktif. Ketika terjadi error pada aplikasi akan ditampilkan pesan kesalahan seperti berikut.
![Gambar](/gambar/Capture6.PNG)<br>

Semua jenis error akan ditampilkan sama. Untuk memudahkan mengetahui jenis
errornya, maka perlu diaktifkan mode debugging dengan mengubah nilai konfigurasi
pada environment variable **CI_ENVIRINMENT** menjadi **development**.
![Gambar](/gambar/Capture7.PNG)<br>

Ubah nama file **env** menjadi **.env** kemudian buka file tersebut dan ubah nilai variable **CI_ENVIRONMENT** menjadi **develoment**
![Gambar](/gambar/Capture8.PNG)<br>

Contoh error yang terjadi. Untuk mencoba error tersebut, ubah kode pada file **app/Controller/Home.php** hilangkan titik koma pada akhir kode.
![Gambar](/gambar/Capture9.PNG)<br>

### **Struktur Direktori** <br>
Untuk lebih memahami Framework Codeigniter 4 perlu mengetahui struktur direktori
dan file yang ada. Buka pada **Windows Explorer** atau dari **Visual Studio Code** -> **Open Folder**. <br>
* **.github** folder ini kita butuhkan untuk konfigurasi repo github, seperti konfigurasi untuk build dengan github action;
* **app** folder ini akan berisi kode dari aplikasi yang kita kembangkan
* **public** folder ini berisi file yang bisa diakses oleh publik, seperti file index.php, robots.txt, favicon.ico, ads.txt, dll;
* **tests** folder ini berisi kode untuk melakukan testing dengan PHPunit;
* **vendor** folder ini berisi library yang dibutuhkan oleh aplikasi, isinya juga termasuk kode core dari system CI.
* **writeable** folder ini berisi file yang ditulis oleh aplikasi. nantinya, kita bisa pakai untuk menyimpan file yang di-upload, logs, session, dll. <br>

Sedangkan file-file yang berada pada root direktori CI sebagai berikut.
* **.env** adalah file yang berisi variabel environment yang dibutuhkan oleh aplikasi.
* **.gitignore** adalah file yang berisi daftar nama file dan folder yang akan diabaikan oleh Git.
* **build** adalah script untuk mengubah versi codeigniter yang digunakan. ada versi release (stabil) dan development (labil).
* **composer.json** adalah file JSON yang berisi informasi tentang proyek dan daftar library yang dibutuhkannya. File ini digunakan oleh Composer sebagai acuan.
* **composer.lock** adalah file yang berisi informasi versi dari library yang digunakan aplikasi.
* **licence.txt** adalah file yang berisi penjelasan tentang lisensi Codeigniter;
* **phpunit.xml** adalah file XML yang berisi konfigurasi untuk PHPunit.
* **README.md** adalah file keterangan tentang codebase CI. Ini biasanya akan dibutuhkan pada repo github atau gitlab.
* **spark** adalah program atau script yang berfungsi untuk menjalankan server, generate kode, dll. <br>
![Gambar](/gambar/Capture10.PNG)<br>

Fokus kita pada folder **app**, dimana folder tersebut adalah area kerja kita untuk
membuat aplikasi. Dan folder **public** untuk menyimpan aset web seperti css, gambar, javascript, dll. <br>

### **Memahami Konsep MVC** <br>
Codeigniter menggunakan konsep MVC. MVC meripakan singkatan dari Model-View-Controller. MVC merupakan konsep arsitektur yang umum digunakan dalam pengembangan aplikasi. Konsep MVC adalah memisahkan kode program berdasarkan logic proses, data, dan tampilan. Untuk logic proses diletakkan pada direktori Contoller, Objek data diletakkan pada direktori Model, dan desain tampilan diletakkan pada direktori View. <br>

Codeigniter menggunakan konsep pemrograman berorientasi objek dalam mengimplementasikan konsep MVC <br>

**Model** merupakan kode program yang berisi pemodelan data. Data dapat berupa database ataupun sumber lainnya. <br>

**View** merupakan kode program yang berisi bagian yang menangani terkait tampilan user interface sebuah aplikasi. didalam aplikasi web biasanya pasti akan berhubungan dengan html dan css. <br>

**Controller** merupakan kode program yang berkaitan dengan logic proses yang menghubungkan antara view dan model. Controller berfungsi untuk menerima request dan data dari user kemudian diproses dengan menghubungkan bagian model dan view. <br>

**Routing dan Controller** <br>
Routing merupakan proses yang mengatur arah atau rute dari request untuk menentukan fungsi/bagian mana yang akan memproses request tersebut. Pada framework CI4, routing bertujuan untuk menentukan Controller mana yang harus merespon sebuah request. Controller adalah class atau script yang bertanggung jawab merespon sebuah request. <br>

Pada Codeigniter, request yang diterima oleh file index.php akan diarahkan ke Router untuk meudian oleh router tersebut diarahkan ke Controller. <br>

Router terletak pada file **app/config/Routes.php**
![Gambar](/gambar/Capture11.PNG)<br>

Pada file tersebut kita dapat mendefinisikan route untuk aplikasi yang kita buat. <br>

Contoh:
```$routes->get('/', 'Home::index');```
<br>
Kode tersebut akan mengarahkan rute untuk halaman home <br>

### **Membuat Route Baru** <br>
Tambahkan kode berikut ini di dalam **Routes.php** <br>

```
$routes->get('/about', 'Page::about');
$routes->get('/contact', 'Page::contact');
$routes->get('/faqs', 'Page::faqs');
```

Untuk mengetahui route yang ditambahkan sudah benar, buka CLI dan jalankan perintah berikut. <br>
``` php spark routes ```
![Gambar](/gambar/Capture12.PNG)<br>

Selanjutnya coba akses route yang telah dibuat dengan mengakses alamat url http://localhost:8080/about
![Gambar](/gambar/Capture13.PNG)<br>

Ketika diakses akan mucul tampilan error 404 file not found, itu artinya file/page tersebut tidak ada. Untuk dapat mengakses halaman tersebut, harus dibuat terlebih dahulu Contoller yang sesuai dengan routing yang dibuat yaitu Contoller Page. <br>

### **Membuat Controller** <br>
Selanjutnya adalah membuat Controller Page. Buat file baru dengan nama page.php pada direktori Controller kemudian isi kodenya seperti betikut. <br>
![Gambar](/gambar/Capture14.PNG)<br>

Selanjutnya refresh kembali browser, maka akan ditampilkan hasilnya yaitu halaman sudah dapat diakses.
![Gambar](/gambar/Capture15.PNG)<br>

### **Auto Routing** <br>
Secara default fitur _autoruote_ pada Codeigniter sudah aktif. untuk mengubah status autorute dapat mengubah nilai variabelnya. untuk menonaktifkan ubah nilai **true** menjadi **false**.
```$routes->setAutoRoute(true);```

Tambahkan method baru pada **Controller Page** seperti berikut.
![Gambar](/gambar/Capture16.PNG)<br>

Method in belum ada pada **routing**, sehingga cara mengaksesnya dengan menggunakan alamat: http://localhost:8080/page/tos 
![Gambar](/gambar/Capture17.PNG)<br>

### **Membuat View** <br>
Selanjutnya adalah membuat view untuk tampilan web agar lebih menarik. Buat file baru dengan nama about.php pada direktori view (**app/view/about.php) kemudian isi kodenya seperti berikut.
![Gambar](/gambar/Capture18.PNG)<br>

Ubah **method about** pada class **Controller Page** menjadi seperti berikut:
![Gambar](/gambar/Capture19.PNG)<br>

Kemudian lakukan refresh pada halaman tersebut.<br>
![Gambar](/gambar/Capture20.PNG)<br>

### **Membuat Layout Web dengan CSS**
Pada dasarnya layout web dengan css dapat diimplamentasikan dengan mudah pada codeigniter. Yang perlu diketahui adalah, pada Codeigniter 4 file yang menyimpan asset css dan javascript terletak pada direktori **public**.<br>

Buat file css pada direktori **public** dengan nama **style.css**. <br>
![Gambar](/gambar/Capture20.PNG)<br>

Kemudian buat folder **template** pada direktori **view** kemudian buat file **header.php** dan **footer.php** <br>

File **app/view/template/header.php**<br>
```
<!DOCTYPE html>
<html>
<head>
    <title><?= $title; ?></title>
    <meta name=”viewport” content=”widthdevice-width, initial-scale=1.0″>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
</head>
<body>
    <script src=”http://code.jquery.com/jquery.js”></script>
    <script src=”js/bootstrap.min.js”></script>
    <div class="header">
        <div class="jarak">
            <h2>Layout Sederhana</h2>
        </div>
    </div>
    <div class="menu">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>
    <div class="content">
        <div class="jarak">
            <!-- kiri -->
            <div class="kiri">
                <!-- blog -->
                <div class="border">
                    <div class="jarak">
                        <h3>Lorem Ipsum</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, [...]</p>
                        <button class="btn">Read More ..</button>
                    </div>
                </div>
                <!-- end blog -->
                <!-- blog -->
                <div class="border">
                    <div class="jarak">
                        <h3>Lorem Ipsum</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, [...]</p>
                        <button class="btn">Read More ..</button>
                    </div>
                </div>
                <!-- end blog -->
            </div>
            <!-- kiri -->
            <!-- kanan -->
            <div class="kanan">
                <div class="jarak">
                    <h3>CATEGORY</h3>
                    <hr/>
                    <p><a href="#" class="undecor">HTML</a></p>
                    <p><a href="#" class="undecor">CSS</a></p>
                    <p><a href="#" class="undecor">BOOTSTRAP</a></p>
                </div>
            </div>
            <!-- kanan -->
        </div>
    </div>
```
<br>

File **app/view/template/footer.php**
```
<div class="footer">
        <div class="jarak">
            <p>Dibuat Pada April 2022</p>
        </div>
</div>
```
<br>

Selanjutnya refresh tampilan pada alamat http://localhost:8080/about <br>
![Gambar](/gambar/Capture22.PNG)<br>

# **Pertanyaan dan Tugas**
Lengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.