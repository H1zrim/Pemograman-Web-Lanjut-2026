# Pemograman Web Lanjut 2026

Repository untuk mata kuliah Pemograman Web Lanjut tahun 2026.

## 📚 Struktur Project

```
Mini-MVC/
├── app/
│   ├── Controllers/
│   │   └── HomeController.php
│   ├── Core/
│   │   ├── Controller.php
│   │   ├── Router.php
│   │   └── database.php
│   ├── Models/
│   │   └── M_prodi.php
│   ├── Routes/
│   │   └── web.php
│   └── Views/
│       ├── home/
│       │   └── index.php
│       ├── learning/
│       │   └── index.php
│       ├── layouts/
│       │   └── main.php
│       └── partials/
│           ├── footer.php
│           └── navbar.php
├── assets/
│   └── css/
│       └── navbar.css
├── config/
│   └── config.php
└── app/config/
    └── database.php
```

## 🚀 Fitur

- **MVC Architecture**: Implementasi pola arsitektur Model-View-Controller
- **Custom Router**: Routing system untuk menangani URL requests
- **Database Integration**: Koneksi database dengan MySQLi
- **Halaman Pembelajaran**: Penjelasan mendalam tentang konsep MVC dan Routing

## 📖 Routes

| URL | Controller | Method | Deskripsi |
|-----|------------|--------|-----------|
| `/` | HomeController | index() | Halaman utama |
| `/about` | HomeController | about() | Halaman tentang |
| `/contact` | HomeController | contact() | Halaman kontak |
| `/learning` | HomeController | learning() | Halaman pembelajaran MVC & Routing |

## 🗄️ Database

### Tabel `produ`

Struktur tabel program studi:

```sql
CREATE TABLE produ (
    id INT PRIMARY KEY AUTO_INCREMENT,
    kode_prodi VARCHAR(10) NOT NULL,
    nama_prodi VARCHAR(100) NOT NULL,
    jenjang VARCHAR(20) NOT NULL,
    akreditasi VARCHAR(5) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

### Model M_prodi

Model untuk mengelola data program studi:

```php
class M_prodi {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAll() {
        $result = $this->db->query("SELECT * FROM produ");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function find($id) {
        $stmt = $this->db->prepare("SELECT * FROM produ WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }
}
```

## 📅 Pertemuan Minggu Ini

### Pembuatan Model Khususnya Database

Pada pertemuan minggu ini, kita telah mempelajari dan mengimplementasikan:

#### 1. **Konsep Model dalam MVC**
- Model bertanggung jawab untuk logika bisnis dan akses data
- Menghubungkan aplikasi dengan database
- Melakukan validasi dan pemrosesan data

#### 2. **Implementasi Model M_prodi**
- Membuat class `M_prodi` yang extends dari core database
- Menggunakan singleton pattern untuk koneksi database
- Implementasi method `getAll()` dan `find($id)`

#### 3. **Koneksi Database**
- Konfigurasi database di `app/config/database.php`
- Menggunakan MySQLi untuk koneksi database
- Singleton pattern untuk efisiensi koneksi

#### 4. **Penggunaan Model di Controller**
```php
public function index() {
    $model = new M_prodi();
    $data = [
        'title' => 'Home',
        'produ' => $model->getAll()
    ];
    $this->view('home/index', $data);
}
```

#### 5. **Tampil Data di View**
- Menggunakan `foreach` untuk iterasi data
- Menampilkan data dalam tabel HTML
- Format tanggal `created_at` yang readable

## 🛠️ Teknologi yang Digunakan

- **PHP 8.x**: Bahasa pemrograman utama
- **MySQL**: Database management system
- **Bootstrap 5**: CSS framework untuk styling
- **MVC Pattern**: Arsitektur aplikasi
- **Custom Router**: Routing system

## 📝 Cara Menjalankan

1. **Setup Database**:
   ```sql
   CREATE DATABASE mini_mvc;
   -- Import struktur tabel produ
   ```

2. **Konfigurasi Database**:
   - Edit `app/config/database.php`
   - Sesuaikan host, username, password, dan nama database

3. **Jalankan Server**:
   ```bash
   # Menggunakan XAMPP atau server PHP built-in
   php -S localhost:8000
   ```

4. **Akses Aplikasi**:
   - Halaman utama: `http://localhost/PWL/Mini-MVC/`
   - Halaman pembelajaran: `http://localhost/PWL/Mini-MVC/learning`

## 📚 Pembelajaran

Kunjungi halaman `/learning` untuk mempelajari:
- Konsep MVC (Model-View-Controller)
- Cara kerja Routing
- Alur request dalam aplikasi MVC
- Implementasi praktis dalam project ini

## 👥 Kontribusi

Project ini dibuat untuk pembelajaran mata kuliah Pemograman Web Lanjut 2026.

---

**Dibuat dengan ❤️ untuk pembelajaran PHP MVC**