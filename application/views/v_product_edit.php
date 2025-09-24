<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Edit Produk</h1>
    <form method="post">
        <div class="form-group">
            <label>Nama Produk</label>
            <input type="text" name="name" class="form-control" value="<?php echo $product->name; ?>" required>
        </div>
        <div class="form-group">
            <label>Harga</label>
            <input type="number" name="price" class="form-control" value="<?php echo $product->price; ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Update</button>
        <a href="<?php echo site_url('ProductRedirect'); ?>" class="btn btn-secondary">Kembali</a>
    </form>
</div>
