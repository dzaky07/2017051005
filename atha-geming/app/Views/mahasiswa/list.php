<a href="/create" type="button" class="btn btn-primary">Tambah</a>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">npm</th>
      <th scope="col">nama</th>
      <th scope="col">alamat</th>
      <th scope="col">created_at</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    $no = 1; 
    foreach($mahasiswa as $mhs) : 
    ?>
    <tr>
      <th scope="row"><?= $no ?></th>
      <td><?- $mhs['npm'] ?></td>
      <td><?- $mhs['nama'] ?></td>
      <td><?- $mhs['alamat'] ?></td>
      <td><?- $mhs['created_at'] ?></td>
    </tr>
    <?php $no++; endforeach; ?>
  </tbody>
</table>