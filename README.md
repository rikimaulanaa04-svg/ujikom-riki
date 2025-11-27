🌟 GALERI SEKOLAH – SMKN 4 BOGOR

Galeri Sekolah SMKN 4 Bogor adalah platform web untuk mendokumentasikan kegiatan sekolah melalui foto dan berita.
Admin mengelola konten, dan pengunjung dapat mengakses galeri & berita tanpa perlu login.

🚀 Fitur Utama
🔐 Fitur Admin (Login Required)
Fitur	Deskripsi
Dashboard Statistik	Ringkasan jumlah galeri, berita, dan aktivitas
CRUD Galeri Foto	Tambah, edit, hapus foto
CRUD Berita	Kelola berita sekolah
CRUD Kategori	Mengelola kategori galeri & berita
Upload Foto	Validasi ukuran & format
Pengaturan Profil	Ubah password & profil admin
🌍 Fitur Pengunjung (Tanpa Login)
Fitur	Deskripsi
Beranda	Foto unggulan + berita terbaru
Galeri Foto	Pencarian + filter kategori
Detail Foto	Tampilan besar + info detail
Daftar Berita	Pencarian berita
Detail Berita	Konten lengkap
Tentang Sekolah	Profil sekolah
Kontak Sekolah	Info kontak + lokasi
⭐ Fitur Unggulan Tambahan

✔ Progressive Web App (PWA)

✔ Mobile Friendly (Responsive)

✔ SEO Friendly (Slug & Meta Tag)

✔ Social Sharing (WhatsApp, Facebook, Instagram, dll)

✔ View Counter untuk galeri & berita

✔ Featured Content di halaman beranda

✔ REST API Ready (struktur endpoint rapi)

🧩 Teknologi yang Digunakan
Teknologi	Versi
Laravel	12
Bootstrap	5
Font Awesome	6
Database	MySQL / SQLite
Storage	Local File Storage
API	RESTful API
🛠 Instalasi (Localhost)
git clone https://github.com/rikimaulanaa04-svg/ujikom-riki.git
cd ujikom-riki

composer install

cp .env.example .env
php artisan key:generate

php artisan migrate
php artisan storage:link

php artisan serve

🌐 Akses Aplikasi
Tipe	URL
Website	http://localhost:8000

Admin Login	http://localhost:8000/admin/login
👤 Default Admin (Seeder)
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
🔓 Public Routes
/               – Beranda
/galeri         – Galeri Foto
/galeri/{id}    – Detail Foto
/berita         – Berita Sekolah
/berita/{id}    – Detail Berita
/tentang        – Tentang Sekolah
/kontak         – Kontak Sekolah

🔐 Admin Routes
/admin/login
/admin/dashboard
/admin/gallery/*
/admin/news/*
/admin/settings

🏆 Keunggulan Aplikasi

Cepat & ringan

Clean Code — mudah dipahami untuk Ujikom

Siap dijadikan portofolio profesional

Bisa dikembangkan jadi aplikasi mobile (PWA)
