<?= $this->extend('templates / template'); ?>
<?= $this->section('content'); ?>
<div>
    <div class="p-4">

        <form action="/update/<?= $id ?>" method="POST">

            <div class="form-group">
                <label for="npm">NPM</label>
                <input type="text" name="npm" class="form-control" id="npm" value="<?= $npm ?>">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" id="nama" value="<?= $nama ?>">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $alamat ?>">
            </div>
            <div class="form-group">
                <label for="alamat">Deskripso</label>
                <input type="text" name="deskripsi" class="form-control" id="deskripsi">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>