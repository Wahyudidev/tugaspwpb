<div class="container " style="margin:5rem ; align-item:center; ">
<div class="col-sm-10">
    <h1>Edit Blog</h1>
            <div class="form-group">
                <label for="image">Gambar:</label>
                <input type="file" name="image" class="form-control-file" accept="image/*">
            </div>

    <form method="POST" action="">
        <input type="hidden" name="id_blog" value="<?php echo $data['blog']['id_blog']; ?>">
        <div class="form-group ">
            <label for="judul">Judul:</label>
            <input type="text" name="judul" class="form-control" value="<?php echo $data['blog']['judul']; ?>" required>
        </div>

        <div class="form-group">
            <label for="author">Author:</label>
            <input type="text" name="author" class="form-control" value="<?php echo $data['blog']['author']; ?>" required>
        </div>

        <div class="form-group">
    <label for="konten">Konten:</label>
    <textarea name="konten" class="form-control" rows="4" required><?php echo $data['blog']['konten']; ?></textarea>
</div>


        <div class="form-group">
            <button type="submit" class="btn btn-primary float-right ml-2">Ubah</button>
            <a href="<?= BASEURL; ?>/admin/blog" class="btn btn-secondary float-right">Batal</a>
        </div>
    </form>
</div>
</div>

