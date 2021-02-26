## CODEIGNITER 4 SIMPLE STARTER
<p><b>
adalah simpel starter untuk codeigniter 4 dengan template adminLTE 3 , keuntungan nya adalah kita tidak perlu memulai integrasi,sistem login dari awal.
</b></p>

## Instalasi
- download zip <a href="https://github.com/rahmathidayat9/codeigniter-4-adminlte-3/archive/master.zip">disini</a> 
- atau clone : git clone https://github.com/rahmathidayat9/codeigniter-4-adminlte-3.git

## Setup
- buka direktori project di terminal anda.
- ketikan command : cp .env.example .env (copy paste file .env.example)
- buka file .env dengan teks editor , edit database sesuaikan
(sesuaikan dengan nama database yang anda buat)

Lalu ketik command dibawah ini : 

- composer install
- php spark cache:clear 
- php spark migrate (migrasi database)
- php spark db:seed (mengisi data seeding)

## Login
- Email : admin@example.com	
- Password : password
<br>
- Email : rikka@example.com
- Password : password

## Fitur
- Fitur Simpel
- Autentikasi
- Penggunaan Filter
- Profile
- Change Profile & Password
- Example Crud Datatabl
