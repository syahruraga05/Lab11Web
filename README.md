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
Codeigniter menggunakan konsep MVC. MVC meripakan singkatan dari
Model-View-Controller. MVC merupakan konsep arsitektur yang umum digunakan
dalam pengembangan aplikasi. Konsep MVC adalah memisahkan kode program
berdasarkan logic proses, data, dan tampilan. Untuk logic proses diletakkan pada
direktori Contoller, Objek data diletakkan pada direktori Model, dan desain tampilan
diletakkan pada direktori View. <br>

Codeigniter menggunakan konsep pemrograman berorientasi objek dalam mengimplementasikan konsep MVC <br>

**Model** merupakan kode program yang berisi pemodelan data
