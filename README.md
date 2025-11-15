📌 GALERI SEKOLAH – SMKN 4 BOGOR

Platform web galeri sekolah yang dirancang untuk mendokumentasikan, mengarsipkan, dan mempublikasikan kegiatan sekolah. Website ini memungkinkan admin mengelola konten (foto dan berita), sementara pengunjung dapat melihat galeri dan berita tanpa login.

🚀 Fitur Utama
🔐 Fitur Admin (Login Required)

Fitur yang diberikan hanya untuk admin dengan keamanan autentikasi:

Dashboard Admin (ringkasan statistik dan jumlah konten)

Manajemen Galeri Foto (CRUD)

Manajemen Berita (CRUD)

Manajemen Kategori

Upload Gambar dengan validasi

Pengaturan Profil Admin

🌍 Fitur Pengunjung (Tanpa Login)

Pengunjung tidak perlu akun untuk mengakses konten:

Beranda dengan foto unggulan & berita terbaru

Galeri Foto lengkap dengan pencarian & filter

Detail Foto (informasi + tampilan besar)

Daftar Berita dengan pencarian & filter

Detail Berita

Halaman Tentang Sekolah

Halaman Kontak Sekolah

⭐ Fitur Unggulan Tambahan

Progressive Web App (PWA)

Desain Responsif (Mobile Friendly)

SEO Friendly

Social Sharing (Bagikan Berita/Foto)

View Counter untuk galeri dan berita

Featured Content (konten unggulan di beranda)

🛠 Teknologi yang Digunakan

Backend: Laravel 10/11

Frontend: Bootstrap 5 + Font Awesome

Database: MySQL / SQLite

Storage: Local File Storage

API Ready: Menggunakan struktur REST API

📦 Instalasi (Localhost)
git clone https://github.com/rikimaulanaa04-svg/ujikom-riki.git
cd ujikom-riki

composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve

🌐 Akses Aplikasi

Website: http://localhost:8000

Admin Login: http://localhost:8000/admin/login

👤 Default Admin (Jika Menggunakan Seeder)

Email: admin@sekolah.com
Password: password

🗂 Struktur Database (Singkat)
Users

id, name, email, password, role, avatar, timestamps

Galleries

id, title, description, image_path, category, views, is_featured

News

id, title, slug, content, image_path, category, views, is_published

📌 Routes Utama
Public Routes
/                 - Beranda
/galeri           - Galeri foto
/galeri/{id}      - Detail foto
/berita           - Berita sekolah
/berita/{id}      - Detail berita
/tentang          - Tentang sekolah
/kontak           - Kontak

Admin Routes
/admin/login
/admin/dashboard
/admin/gallery/*
/admin/news/*
/admin/settings

🏆 Fitur Khusus

Aplikasi ringan dan cepat

Siap dikembangkan menjadi aplikasi mobile dengan PWA

Struktur bersih dan mudah dipahami untuk Ujikom
