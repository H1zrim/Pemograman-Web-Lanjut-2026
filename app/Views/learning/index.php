<?php ?>

<div class="container mt-5">
    <h1 class="mb-4"><?= $title; ?></h1>
    
    <!-- Section MVC -->
    <div class="row mb-5">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">🏗️ Konsep MVC (Model-View-Controller)</h5>
                </div>
                <div class="card-body">
                    <p class="lead">MVC adalah pola arsitektur yang memisahkan aplikasi menjadi 3 komponen utama:</p>
                    
                    <h6 class="mt-4 fw-bold">1. Model</h6>
                    <p>Menangani logika bisnis dan akses data ke database.</p>
                    <ul>
                        <li>Berinteraksi dengan database</li>
                        <li>Melakukan validasi data</li>
                        <li>Mengembalikan data yang diproses</li>
                    </ul>
                    <p class="text-muted small">📁 Lokasi: <code>app/Models/</code></p>
                    
                    <h6 class="mt-4 fw-bold">2. View</h6>
                    <p>Menampilkan data kepada pengguna dalam bentuk HTML/UI.</p>
                    <ul>
                        <li>Menerima data dari Controller</li>
                        <li>Menampilkan interface kepada user</li>
                        <li>Tidak mengandung logika bisnis</li>
                    </ul>
                    <p class="text-muted small">📁 Lokasi: <code>app/Views/</code></p>
                    
                    <h6 class="mt-4 fw-bold">3. Controller</h6>
                    <p>Menerima input dari user, memproses melalui Model, dan menampilkan View.</p>
                    <ul>
                        <li>Menerima request dari user</li>
                        <li>Memanggil Model untuk proses bisnis</li>
                        <li>Mengirim data ke View untuk ditampilkan</li>
                    </ul>
                    <p class="text-muted small">📁 Lokasi: <code>app/Controllers/</code></p>
                    
                    <div class="alert alert-info mt-4">
                        <strong>✨ Keuntungan MVC:</strong>
                        <ul class="mb-0 mt-2">
                            <li>Pemisahan concerns (tanggung jawab)</li>
                            <li>Kode lebih terorganisir dan mudah dipelihara</li>
                            <li>Testing lebih mudah</li>
                            <li>Kolaborasi tim lebih efisien</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Section Routing -->
    <div class="row mb-5">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">🛣️ Konsep Routing - PENJELASAN MENDALAM</h5>
                </div>
                <div class="card-body">
                    <p class="lead">Routing adalah mekanisme untuk mengarahkan URL untuk memanggil Controller dan method yang sesuai.</p>
                    
                    <h6 class="mt-4 fw-bold text-success">📍 APA ITU ROUTING?</h6>
                    <p>Routing adalah "peta" yang menghubungkan URL yang diakses user dengan function tertentu di dalam controller. Ketika user mengakses URL, router akan mencari aturan routing yang cocok dan menjalankan function yang telah didefinisikan.</p>
                    
                    <hr>
                    
                    <h6 class="mt-4 fw-bold text-success">🔄 CARA KERJA ROUTING STEP BY STEP:</h6>
                    <div class="accordion" id="routingProcess">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#step1">
                                    <strong>STEP 1:</strong> User mengakses URL di browser
                                </button>
                            </h2>
                            <div id="step1" class="accordion-collapse collapse show" data-bs-parent="#routingProcess">
                                <div class="accordion-body">
                                    <p>User mengetikkan URL di address bar:</p>
                                    <div class="bg-light p-2 rounded">
                                        <code>http://localhost/PWL/Mini-MVC/about</code>
                                    </div>
                                    <p class="mt-2"><strong>Bagian penting:</strong> URL path = <code>/about</code></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#step2">
                                    <strong>STEP 2:</strong> Server menerima request
                                </button>
                            </h2>
                            <div id="step2" class="accordion-collapse collapse" data-bs-parent="#routingProcess">
                                <div class="accordion-body">
                                    <p>Server menerima request HTTP dari browser dan membaca path URL yang diakses: <code>/about</code></p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#step3">
                                    <strong>STEP 3:</strong> Router mencari routing rule yang cocok
                                </button>
                            </h2>
                            <div id="step3" class="accordion-collapse collapse" data-bs-parent="#routingProcess">
                                <div class="accordion-body">
                                    <p>Router membaca semua aturan routing di <code>app/Routes/web.php</code> dan mencari yang cocok dengan path <code>/about</code></p>
                                    <div class="bg-light p-2 rounded small">
                                        <code>
                                            Router::get('/', 'HomeController@index'); &nbsp; ← Tidak cocok<br>
                                            Router::get('/about', 'HomeController@about'); &nbsp; ← <span class="text-success">✓ COCOK!</span><br>
                                            Router::get('/contact', 'HomeController@contact'); &nbsp; ← Tidak cocok
                                        </code>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#step4">
                                    <strong>STEP 4:</strong> Router memanggil Controller dan method yang sesuai
                                </button>
                            </h2>
                            <div id="step4" class="accordion-collapse collapse" data-bs-parent="#routingProcess">
                                <div class="accordion-body">
                                    <p>Dari routing rule yang cocok: <code>'HomeController@about'</code></p>
                                    <p>Router akan:</p>
                                    <ul>
                                        <li>Membuat instance class <code>HomeController</code></li>
                                        <li>Memanggil function/method <code>about()</code> dari class tersebut</li>
                                    </ul>
                                    <p>Dalam pseudo-code:</p>
                                    <div class="bg-light p-2 rounded small">
                                        <code>
                                            $controller = new HomeController();<br>
                                            $controller->about();
                                        </code>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#step5">
                                    <strong>STEP 5:</strong> Controller memproses logic dan data
                                </button>
                            </h2>
                            <div id="step5" class="accordion-collapse collapse" data-bs-parent="#routingProcess">
                                <div class="accordion-body">
                                    <p>Dalam <code>HomeController.php</code>, method <code>about()</code> dieksekusi:</p>
                                    <div class="bg-light p-2 rounded small">
                                        <code>
                                            public function about()<br>
                                            {<br>
                                            &nbsp;&nbsp;$data = [ 'title' => 'About', ... ];<br>
                                            &nbsp;&nbsp;$this->view('home/index', $data);<br>
                                            }
                                        </code>
                                    </div>
                                    <p class="mt-2">Controller bisa:</p>
                                    <ul>
                                        <li>Memanggil Model untuk ambil data dari database</li>
                                        <li>Memproses data</li>
                                        <li>Menyiapkan data untuk ditampilkan ke View</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#step6">
                                    <strong>STEP 6:</strong> View di-render dan dikembalikan ke browser
                                </button>
                            </h2>
                            <div id="step6" class="accordion-collapse collapse" data-bs-parent="#routingProcess">
                                <div class="accordion-body">
                                    <p>Controller memanggil view dengan cara: <code>$this->view('nama/view', $data)</code></p>
                                    <p>View akan:</p>
                                    <ul>
                                        <li>Menerima data dari controller</li>
                                        <li>Menampilkan data dalam format HTML</li>
                                        <li>Mengirim HTML ke browser user</li>
                                    </ul>
                                    <p>Browser menampilkan halaman kepada user.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <hr class="mt-4">
                    
                    <h6 class="mt-4 fw-bold text-success">📋 CONTOH REAL: URL `/about` MEMANGGIL METHOD MANA?</h6>
                    <div class="border rounded p-3 bg-light">
                        <p class="mb-2"><strong>1️⃣ Routing Rule di <code>app/Routes/web.php</code>:</strong></p>
                        <div class="bg-white p-2 rounded mb-3 border">
                            <code class="d-block">Router::get('/about', 'HomeController@about');</code>
                        </div>
                        
                        <p class="mb-2"><strong>2️⃣ Controller: <code>app/Controllers/HomeController.php</code></strong></p>
                        <div class="bg-white p-2 rounded mb-3 border" style="font-size: 0.85em;">
                            <code>
                                class HomeController {<br>
                                &nbsp;&nbsp;public function about() {<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;$data = ['title' => 'About', 'description' => 'Tentang kami...'];<br>
                                &nbsp;&nbsp;&nbsp;&nbsp;$this->view('home/index', $data);<br>
                                &nbsp;&nbsp;}<br>
                                }
                            </code>
                        </div>
                        
                        <p class="mb-2"><strong>3️⃣ View: <code>app/Views/home/index.php</code></strong></p>
                        <div class="bg-white p-2 rounded mb-3 border" style="font-size: 0.85em;">
                            <code>
                                &lt;h1&gt;&lt;?= $title ?&gt;&lt;/h1&gt;<br>
                                &lt;p&gt;&lt;?= $description ?&gt;&lt;/p&gt;
                            </code>
                        </div>
                        
                        <p class="mb-2"><strong>🎯 HASIL AKHIR:</strong></p>
                        <p>User mengakses: <code>http://localhost/PWL/Mini-MVC/about</code></p>
                        <p>➜ Router mendeteksi path <code>/about</code></p>
                        <p>➜ Router memanggil <code>HomeController::about()</code></p>
                        <p>➜ Method <code>about()</code> memproses data</p>
                        <p>➜ Method <code>about()</code> menampilkan view dengan data</p>
                        <p>➜ Browser menampilkan halaman "About" dengan title dan description</p>
                    </div>
                    
                    <hr class="mt-4">
                    
                    <h6 class="mt-4 fw-bold text-success">📊 TABEL PERBANDINGAN ROUTING:</h6>
                    <table class="table table-sm table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>URL yang diakses</th>
                                <th>Routing Rule</th>
                                <th>Controller</th>
                                <th>Method dipanggil</th>
                                <th>View ditampilkan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>/</code></td>
                                <td><code>'/', 'HomeController@index'</code></td>
                                <td>HomeController</td>
                                <td><code>index()</code></td>
                                <td>home/index.php</td>
                            </tr>
                            <tr>
                                <td><code>/about</code></td>
                                <td><code>'/about', 'HomeController@about'</code></td>
                                <td>HomeController</td>
                                <td><code>about()</code></td>
                                <td>home/index.php</td>
                            </tr>
                            <tr>
                                <td><code>/contact</code></td>
                                <td><code>'/contact', 'HomeController@contact'</code></td>
                                <td>HomeController</td>
                                <td><code>contact()</code></td>
                                <td>home/index.php</td>
                            </tr>
                            <tr>
                                <td><code>/learning</code></td>
                                <td><code>'/learning', 'HomeController@learning'</code></td>
                                <td>HomeController</td>
                                <td><code>learning()</code></td>
                                <td>learning/index.php</td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="alert alert-info mt-4">
                        <strong>💡 PENTING:</strong> 
                        <ul class="mb-0 mt-2">
                            <li>Format: <code>Router::METHOD('path', 'ControllerName@methodName')</code></li>
                            <li>Setiap URL path harus punya routing rule yang sesuai</li>
                            <li>Jika tidak cocok dengan rule manapun, akan error "Route not found"</li>
                            <li>Satu method controller bisa memanggil view berbeda</li>
                            <li>Satu view bisa dipanggil oleh multiple method controller</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Section Flow Diagram -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0">📊 Alur Request di MVC</h5>
                </div>
                <div class="card-body">
                    <div class="bg-light p-4 rounded text-center">
                        <div class="mb-3">
                            <span class="badge bg-primary p-2">User/Browser</span>
                        </div>
                        <div class="mb-3">↓</div>
                        <div class="mb-3">
                            <span class="badge bg-primary p-2">Router</span>
                            <p class="small text-muted">Mencocokkan URL dengan routing rules</p>
                        </div>
                        <div class="mb-3">↓</div>
                        <div class="mb-3">
                            <span class="badge bg-success p-2">Controller</span>
                            <p class="small text-muted">Menerima & memproses request</p>
                        </div>
                        <div class="mb-3">↓</div>
                        <div class="mb-3">
                            <span class="badge bg-warning p-2">Model</span>
                            <p class="small text-muted">Mengambil/menyimpan data dari database</p>
                        </div>
                        <div class="mb-3">↓</div>
                        <div class="mb-3">
                            <span class="badge bg-info p-2">View</span>
                            <p class="small text-muted">Menampilkan data sebagai HTML</p>
                        </div>
                        <div class="mb-3">↓</div>
                        <div class="mb-3">
                            <span class="badge bg-primary p-2">Browser</span>
                            <p class="small text-muted">Menampilkan halaman ke user</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>
