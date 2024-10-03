# Database Structure

On this page we provide the lists of both functional and non functional requirements.

## Functional Requirements

### FR01 ...
**1. Analisis Umum**

  Saat ini proses manajemen tugas akhir di IT Del masih memiliki kekurangan. Oleh karena itu diperlukan sebuah sistem yang mampu mengelola proses manajemen tugas akhir secara terkomputerisasi. 
Dengan sistem yang berjalan saat ini, terdapat beberapa kendala, diantaranya: 
1.	Penjadwalan dalam manajemen tugas akhir yang kurang terstruktur.
2.	Proses manajemen rapat (meeting management) dan persetujuan dokumen (document approval) dalam manajemen tugas akhir tidak efektif.
Berdasarkan permasalah tersebut, kami mencoba membuat solusi dari permasalahan yang ada.  Adapun system yang akan dibangun adalah Manajemen Tugas Akhir (MANTA). Sistem ini akan membantu pengguna untuk mendapatkan informasi dan mempercepat proses manajemen tugas akhir.
Pada sistem, kami menentukan bahwa ada 5 aktor yang bersangkutan, yaitu Mahasiswa, Dosen Pembimbing, Dosen penguji, Koordinator TA, BAAK. 

Adapun fitur-fitur yang akan disediakan oleh sistem adalah:

**•	Fitur Pendaftaran Mahasiswa TA**

Fitur Pendaftaran Mahsiswa TA bertujuan agar mahasiswa ingin melaksanakan TA dapat langsung mendaftar melalui sistem. Dimana pada fitur ini mahasiswa diminta untuk mengisi Nama Lengkap, NIM dan Total SKS.. 

**•	Fitur Login/Logout**

Fitur Login/Logout , pengguna diharuskan Login mengunakan username dan 
password yang diginkaan pada web kampus seperti CIS, ECourse dan Zimbra.

**•	Fitur pengajuan topik TA**

Fitur Penngajuan Topik, mahasiswa dapat menginput topik TA ke dalam sistem. Dimana pada fitur ini mahasiswa akan mengisi Topik yang ingin di ajukan dan alasan memilih Topik. 

**•	Fitur Pengajuan Kelompok dan Dosen Pembimbing**

Fitur Penentuan Kelompok dan Dosen Pembimbing bertujuan agar mahasiswa menentukan kelompoknya sendiri dan dapat diubah oleh koordinator TA dan mahasiswa dapat memilih Dosen Pembimbing. Dimana Fitur ini , mahasiswa juga menyertakan alasan Memilih kelompok dan Dosen Pembimbing.

**•	Fitur jadwal**

Fitur Jadwal ini berisikan 2 jadwal ,yaitu : Jadwal Bimbingan dan Seminar yang bertujuan untuk menginput jadwal kosong yang dimiliki oleh dosen, agar mahasiswa mudah menyesuaikan jadwalnya dengan jadwal dosen pembimbing. Mahasiswa yang bukan Koordinator TA dapat mengakses fitur tersebut untuk melihat jadwal-jadwal penting.

**•	Fitur Meeting Management**

Fitur Meeting Management digunakan oleh Mahasiswa dan Dosen Pembimibng untuk melakukan bimbingan. Dimana Mahasiswa dapat melihat Informasi Kegiatan yang akan dilaksanakan dan Dosen pembimbing  kemudian akan memilih kelompok mana yang akan melakukan diskusi atau disebut juga sebagai bimbingan. Kemudian dosen akan menginput Nomor Kelompok, Jenis Kegiatan, alamat tautan untuk meeting, seperti link zoom atau google meet, tanggal dan Waktu.


**•	Fitur berita acara** 

Fitur Berita Acara bertujuan agar BAAk dapat memasukkan semua pengumuman yang berkaitan dengan proses TA ke dalam sistem. Dimana fitur ini yang berisikan Judul Berita Acara dan Isi Berita Acara.

**•	Fitur penilaian**

Fitur Penilaian berfungsi untuk menginput semua nilai yang diberikan oleh dosen penguji dan dosen pembimbing selama proses TA berlangsung. DImana pada fitur ini mahasiswa dapat mengetahui Nilai Seminar dan Tugas akhir 1 .

**•	Fitur Finalisasi**

Fitur Finalisasi bertujuan agar mahasiswa TA dapat langsung mengumpulkan dokumen TA tanpa harus bertemu langsung dengan dosen pembimbing. Dimana fitur ini mahasiswa dapat mengumpulkan Artefak seperi buku TA, poster, vidio,dll. 


**2.	BPMN (Business Process Model and Notation)**

**2.1	BPMN - Pendaftaran Mahasiswa TA**

Mahasiswa harus mendaftarkan diri terlebih dahulu untuk mengikuti TA pada sistem. Sistem akan menyediakan form untuk mahasiswa mengumpulkan bukti bukti persyaratan. Persyaratan yang dibutuhkan berada di dalam panduan Mahasiswa TA. Adapun persyaratan yang diberikan adalah harus telah mengambil minimal 90% dari total SKS mata kuliah semester 3-6 dan telah lulus minimal 90% dari total SKS mata kuliah semester 3-6 yang telah diambil, kemudian harus memiliki IP > 2 dan telah mendapat persetujuan dari dosen wali. Mahasiswa dapat mengubah data persyaratan yang telah diunggah dengan menggunakan fitur edit yang dimiliki oleh sistem.

 ![image](https://user-images.githubusercontent.com/78069858/133878882-19115817-450a-467e-8300-661962a69ecc.png)
 
`Gambar 1 - BPMN Pendaftaran Mahasiswa TA`

**2.2	BPMN – Login/Logout**

Sebelum memasuki sistem, mahasiswa harus login terlebih dahulu dengan memasukkan username dan password. Mahasiswa juga dapat keluar dari sistem dengan menekan button logout.

 ![image](https://user-images.githubusercontent.com/78069858/133878913-63efe312-67b4-4cbb-a6e5-ae9f92039fcb.png)

`Gambar 2 - BPMN Login/Logout`

**2.3	BPMN – Menentukan Kelompok TA**

Penentuan kelompok pada sistem akan dilakukan terlebih dahulu oleh mahasiswa baru kemudian oleh Koordinator TA. Koordinator TA bisa mengubah daftar kelompok yang telah dibuat oleh mahasiswa tersebut dengan fitur edit yang dimiliki oleh sistem.

 ![image](https://user-images.githubusercontent.com/78069858/133878914-b4cf8905-d96d-446e-b9bb-d181e1dccdf1.png)
 
`Gambar 3 - BPMN Menentukan Kelompok TA`

**2.4	BPMN - Mengajukan Topik, Menentukan Dosen Pembimbing dan Dosen Penguji**

Mahasiswa akan menentukan topik dan mengumpulkannya melalui sistem yang telah menyediakan fitur ‘Topik’. Jika kelompok sudah menentukan topiknya dan mengumpulkan nya melalui fitur Topik tersebut, maka selanjutnya Koordinator TA akan menentukan dosen pembimbing melalui sistem. Dosen pembimbing yang ditentukan harus berhubungan dengan topik yang ditentukan. Pada fitur ‘Topik’, sistem juga menyediakan fitur untuk mengedit topik yang ingin diubah.
Jika kelompok sudah menentukan topiknya dan mengumpulkan nya melalui fitur Topik tersebut, maka selanjutnya Koordinator TA akan menentukan dosen pembimbing melalui sistem. Saat melakukan bimbingan, dosen dan mahasiswa akan mengisi daftar bimbingan yang telah disediakan oleh sistem. Sistem juga akan meminta bukti misalnya adalah tanda tangan dosen pembimbing dan mahasiswa bahwa mereka telah melakukan bimbingan. Jadwal bimbingan akan diatur oleh BAAK pada sistem.
Di tengah-tengah pengerjaan proposal, Koordinator TA akan menentukan dosen penguji yang akan menguji mahasiswa di setiap seminar nantinya melalui penginputan data melalui sistem yang telah menyediakan form pengisian.

![image](https://user-images.githubusercontent.com/78069858/133878917-bc2a387c-702a-4b08-a3da-6ad35fd5186c.png)

`Gambar 4 - BPMN Mengajukan Topik, Menentukan Dosen Pembimbing dan Dosen Penguji`

**2.5	BPMN – Meeting Management**

Pada proses ini Dosen pembimbing akan membuka menu meeting pada sistem MANTA kemudian sistem akan menampilkan menu meeting dimana dalam menu ini ditampilkan daftar anggota kelompok TA. Dosen kemudian akan memilih kelompok mana yang akan melakukan diskusi atau disebut juga sebagai bimbingan. Kemudian dosen akan menginput alamat tautan untuk meeting, seperti link zoom atau google meet. System akan memberikan notifikasi kepada mahasiswa yang dipilih. Setelah notifikasi terkirim, mahasiswa dapat membuka link tautan untuk meeting tersebut.

![image](https://user-images.githubusercontent.com/78069858/133878927-c6509c3b-0f7f-456b-a5aa-04f7a3ef5229.png)

`Gambar 5 - BPMN Meeting Management`

**2.6	BPMN – Menentukan Jadwal**

Pada proses ini, Penilai yaitu Dosen Pembimbing dan Penguji akan menginput data tentang jadwal kosong yang dimiliki mereka Kemudian BAAK akan mengelola data tersebut sehingga mendapatkan jadwal kegiatan TA yang kemudian akan diinput ke dalam sistem untuk dipublikasikan dan akan digunakan oleh Mahasiswa dan User lainnya.

 ![image](https://user-images.githubusercontent.com/78069858/133878934-a1f50a93-61ff-46dc-82c1-16538339973f.png)
 
`Gambar 6 - BPMN Menentukan Jadwal`

**2.7	BPMN – Membuat Berita Acara**

Berita Acara akan dibuat oleh pihak BAAK di sistem tersebut, dimana berita acara akan berbentuk Pengumuman di sistem Manajemen Tingkat Akhir. Berita Acara biasanya berisi tentang hal-hal apa saja yang perlu diperbaiki, nilai dan lain-lain.

![image](https://user-images.githubusercontent.com/78069858/133878944-7ab3c359-3faa-4374-8dd6-84c58453d7c6.png)

`Gambar 7 - BPMN Membuat Berita Acara`

**2.8	BPMN – Melakukan Penilaian**

Pada tahap ini, dosen penguji dan pembimbing akan memberikan penilaian terhadap hasil seminar dari mahasiswa. Hasil penilaian akan diinput ke dalam sistem oleh tim penilai, yaitu dosen penguji dan dosen pembimbing. Dari hasil penilaian akan langsung dapat ditentukan status kelulusan setiap seminar. Mahasiswa yang lulus dalam setiap seminar akan lanjut ke tahap berikutnya, sedangkan mahasiswa yang tidak lulus akan mengulang seminar Kembali.

![image](https://user-images.githubusercontent.com/78069858/133878952-a5ccf57a-922d-4372-8c63-ebf948528e28.png)

`Gambar 8 - BPMN Melakukan Penilaian`

**2.9	BPMN – Finalisasi oleh Mahasiswa**

Pada tahap finalisasi ini, mahasiswa harus menghasilkan artefak-artefak seperti buku TA, poster dan lain-lain. Sistem akan meminta bukti finalisasi, sehingga mahasiswa harus mengumpulkan bukti finalisasi ke sistem yang berupa buku TA dalam bentuk pdf, poster dalam bentuk jpg dan lain lain. Setelah finalisasi selesai dilakukan, maka mahasiswa dapat mengikuti wisuda.

![image](https://user-images.githubusercontent.com/78069858/133878960-e8954303-9b92-472a-991a-477f5468e718.png)

`Gambar 9 - BPMN Finalisasi`

**3.	Functional Requirement**

Pada bagian ini menjelaskan lingkungan software dan hardware yang digunakan oleh developer dalam membangun sistem dan lingkungan dimana user dapat mengoperasikan sistem yang mencakup lingkungan pengembangan dan operasional.

Spesifikasi yang digunakan:
Server 	: Apache
Client	: 4 GB RAM, QuadCore Processors 2,5 GHz.
Operating Sistem 	: Windows 8 to Windows 10, android, Linux
DBMS	: MariaDB


## Non Functional Requirements

### NFR-Availability

Sistem mampu diakses selama  24 jam per hari agar seluruh user dapat menggunakan sistem kapan saja.

### NFR-Reliability

Prediksi kegagalan Sistem saat dijalankan adalah 5%

### NFR-Ergonomy

Sistem memiliki tampilan yang sederhana sehingga membuat user nyaman menggunakannya.

### NFR-Portability 

Sistem dapat digunakan di environment mana saja.

### NFR-Response time 

Sistem merespon perintah Maksimal 1 menit.

### NFR-Security

Sistem meminta username dan password dari user agar data milik user di dalam sistem lebih aman.

### NFR-Language

Bahasa yang digunakan pada sistem adalah Bahasa Indonesia 

### ER-Diagram

![image](https://user-images.githubusercontent.com/78069858/133879454-1ec00df4-9258-49e5-b36f-21a53b4a2e18.png)

`Gambar 10 – ER-Diagram`

### CDM

![image](https://user-images.githubusercontent.com/78069858/133879482-c180370b-75d4-4e5f-9c08-0114fae4bb7c.png)

`Gambar 11 - CDM`

### PDM

![image](https://user-images.githubusercontent.com/78069858/133879490-070ddf67-6f34-4438-9c92-5f1470b890ef.png)

Gambar 12 – PDM

## Mockup

Put and describe your mockup. Pin point into which FR or NFR it your mockup adheres.

## Related

+ [Table of Content](README.md).
+ [Software Requirements](Software-Requirements.md).
+ [Installation](Installation.md).
+ [Features](Features.md)
+ [Database Structure](Database-Structure.md)
