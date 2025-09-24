 <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Redirect Product</h1>
                        <a href="<?php echo site_url('Product/add_redirect'); ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="addProduct"><i
                                class="fas fa-download fa-sm text-white-50"></i> Add Product</a>
                    </div>

                    

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-12 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Product</h6>
                                </div>
                                <div class="card-body">
                                    <table id="productTable" class="table table-bordered table-striped" width="100%">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Product Name</th>
                                                <th>Price</th>
                                                <th>Stock</th>
                                                <th>For Sale</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>                        
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

<script>
$(document).ready(function () {

    let table = $('#productTable').DataTable({
        ajax: {
            url: '<?= site_url('Product/getProduct') ?>',
            type: 'GET',
            dataSrc: ''
        },
        columns: [
            {
            data: null,
            render: function (data, type, row, meta) {
                return meta.row + 1; // otomatis nomor urut
            },
            orderable: false,
            searchable: false
            },
            { "data": 'Name' },
            { "data": 'Price' },
            { "data": 'Stock' },
            {
                data: 'Is_sell',
                render: function (data, type, row) {
                    return data == 1 ? "For Sale" : "Not For Sale";
                }
            },
            {
                data: null,
                render: function (data, type, row) {
                    return `
                        <button class="btn btn-sm btn-primary btn-edit" data-id="${row.ID}">
                            <i class="fas fa-edit"></i> Edit
                        </button>
                        <button class="btn btn-sm btn-danger btn-delete" data-id="${row.ID}">
                            <i class="fas fa-trash"></i> Delete
                        </button>
                    `;
                },
                orderable: false,
                searchable: false
            }
        ]
    });

    // === HANDLE DELETE ===
    $(document).on("click", ".btn-delete", function () {
        let id = $(this).data("id");

        Swal.fire({
            title: "Are you sure?",
            text: "This product will be deleted!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "<?= site_url('Product/deleteRedirect/') ?>" + id,
                    type: "POST",
                    success: function () {
                        Swal.fire("Deleted!", "Product deleted successfully", "success");
                        $('#productTable').DataTable().ajax.reload();
                    },
                    error: function (xhr) {
                        Swal.fire("Error", xhr.responseText, "error");
                    }
                });
            }
        });
    });

});
</script>