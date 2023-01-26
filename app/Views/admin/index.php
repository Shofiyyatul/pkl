<?= $this->extend('layout/template_d_admin'); ?>

<?= $this->section('content'); ?>
<?php
// foreach ($scientist as $row) {
//   $id[] = $row->id;
//   $email[] = $row->email;
// }
?>

  <table class="table table-striped table-hover shadow rounded overflow-hidden mt-3">
    <tr>
      <th>Nama</th>
      <th>Universitas</th>
      <th>Prodi</th>
      <th>Nomor HP</th>
      <th>Kelengkapan</th>
      <th>Catatan</th>
      <th>Penerimaan</th>
    </tr>
    <?php foreach ($scientist as $row) : ?>
      <tr>
        <td><?= $row->nama; ?></td>
        <td><?= $row->universitas; ?></td>
        <td><?= $row->prodi; ?></td>
        <td><?= $row->noHP; ?></td>
        <td>
          <a title="Detail" href="<?= base_url("scientist/detail/$row->id_daftar"); ?>" class="btn btn-success">Detail</a>
        </td>
        <td><?= $row->catatan; ?></td>
        <td>
          <a title="Diterima" href="<?= base_url(""); ?>" class="btn btn-primary"><i class="bi bi-check"></i></a>
          <a title="Tidak Diterima" href="<?= base_url(""); ?>" class="btn btn-danger"><i class="bi bi-x"></i></a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
 

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>

<?= $this->endSection(); ?>