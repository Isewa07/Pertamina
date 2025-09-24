<!-- application/views/v_product_redirect.php -->
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Product Redirect</h1>
        <a href="<?php echo site_url('Product/add_redirect'); ?>" class="btn btn-primary btn-sm">
            <i class="fas fa-plus"></i> Add Product
        </a>
    </div>

    <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')): ?>
        <div class="alert alert-danger">
            <?= $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <div class="card shadow mb-4">
        <div class="card-body">
            <?php if (!empty($products)): ?>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th style="width: 5%">#</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>For Sale</th>
                            <th style="width: 15%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($products as $row): ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo htmlspecialchars($row->Name, ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo number_format($row->Price, 0, ',', '.'); ?></td>
                                <td><?php echo htmlspecialchars($row->Stock, ENT_QUOTES, 'UTF-8'); ?></td>
                                <td>
                                    <?php echo ($row->Is_sell == 1) ? 'For Sale' : 'Not For Sale'; ?>
                                </td>
                                <td>
                                    <a href="<?php echo site_url('Product/edit_redirect/'.$row->ID); ?>" class="btn btn-warning btn-sm">
                                        Edit
                                    </a>
                                    <a href="<?php echo site_url('Product/deleteRedirect/'.$row->ID); ?>" 
                                       class="btn btn-danger btn-sm"
                                       onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>Tidak ada data produk.</p>
            <?php endif; ?>
        </div>
    </div>
</div>
