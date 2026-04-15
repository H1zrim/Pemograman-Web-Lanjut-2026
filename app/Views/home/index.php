<?php ?>

<div class="container mt-5">
    <h1><?= $title; ?></h1>
    <p class="text-muted"><?= $message ?? ''; ?></p>
    
    <?php if (!empty($produ)): ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Kode Prodi</th>
                        <th>Nama Prodi</th>
                        <th>Jenjang</th>
                        <th>Akreditasi</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($produ as $item): ?>
                        <tr>
                            <td><?= htmlspecialchars($item['id'] ?? ''); ?></td>
                            <td><?= htmlspecialchars($item['kode_prodi'] ?? ''); ?></td>
                            <td><?= htmlspecialchars($item['nama_prodi'] ?? ''); ?></td>
                            <td><?= htmlspecialchars($item['jenjang'] ?? ''); ?></td>
                            <td><?= htmlspecialchars($item['akreditasi'] ?? ''); ?></td>
                            <td><?= !empty($item['create_at']) ? date('d-m-Y H:i', strtotime($item['create_at'])) : '-'; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <div class="alert alert-info" role="alert">
            Tidak ada data program studi.
        </div>
    <?php endif; ?>
</div>