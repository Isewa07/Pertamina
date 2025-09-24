

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Product</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="addProduct"><i
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
                                                <th>Action Button</th>
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



  <!-- Modal Add -->
 <div class="modal" id="modalAdd" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Add Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      <div class="modal-body">
        <form id="formAddProduct">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Product Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ProductName" name="ProductName" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Product Price</label>
                <div class="col-sm-10">
                    <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" 
                        class="form-control" id="ProductPrice" name="ProductPrice" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Product Stock</label>
                <div class="col-sm-10">
                    <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" 
                        class="form-control" id="ProductStock" name="ProductStock" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="ForSale" name="ForSale" value="1">
                        <label class="form-check-label" for="ForSale">
                            For Sale
                        </label>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="addBtn">Submit</button>
       
      </div>
      </form>
    </div>
  </div>
</div>


<!-- Modal Edit -->
 <div class="modal" id="modalEdit" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Edit Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
      <div class="modal-body">
        <form id="formAddProduct">
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Product Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="ProductName" name="ProductName" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Product Price</label>
                <div class="col-sm-10">
                    <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" 
                        class="form-control" id="ProductPrice" name="ProductPrice" required>
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Product Stock</label>
                <div class="col-sm-10">
                    <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" 
                        class="form-control" id="ProductStock" name="ProductStock" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-10 offset-sm-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="ForSale" name="ForSale" value="1">
                        <label class="form-check-label" for="ForSale">
                            For Sale
                        </label>
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="editBtn">Submit</button>
       
      </div>
      </form>
    </div>
  </div>
</div>

<script>
$(document).ready(function () {

    $("#addProduct").click(function () {
        $("#modalAdd").modal("show"); // open modal
    });
    
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
                    <button class="btn btn-sm btn-primary btn-edit" data-id="${row.product_id}">
                        <i class="fas fa-edit"></i> Edit
                    </button>
                    <button class="btn btn-sm btn-danger btn-delete" data-id="${row.product_id}">
                        <i class="fas fa-trash"></i> Delete
                    </button>
                `;
            },
            orderable: false,
            searchable: false
             }
            // contoh tambahan kolom:
            // {
            //     "data": 'qty',
            //     "render": function(data, type, row) {
            //         return data + ` item`;
            //     }
            // }
        ]
    });
    
    // Add product
    $("#addBtn").click(function () {
        let name  = $("#ProductName").val().trim();
        let price = $("#ProductPrice").val().trim();
        let stock = $("#ProductStock").val().trim();

        // reset invalid states first
        $("#ProductName, #ProductPrice, #ProductStock").removeClass("is-invalid");

        // --- Field by field validation ---
        if (name === "") {
            $("#ProductName").addClass("is-invalid");
            Swal.fire({
                icon: "warning",
                title: "Validation Error",
                text: "Product Name cannot be empty!"
            });
            return;
        }

        if (price === "") {
            $("#ProductPrice").addClass("is-invalid");
            Swal.fire({
                icon: "warning",
                title: "Validation Error",
                text: "Product Price cannot be empty!"
            });
            return;
        }

        if (stock === "") {
            $("#ProductStock").addClass("is-invalid");
            Swal.fire({
                icon: "warning",
                title: "Validation Error",
                text: "Product Stock cannot be empty!"
            });
            return;
        }

        if (parseInt(price) < 0) {
            $("#ProductPrice").addClass("is-invalid");
            Swal.fire({
                icon: "warning",
                title: "Validation Error",
                text: "Product Price cannot be less than 0!"
            });
            return;
        }

        if (parseInt(stock) < 0) {
            $("#ProductStock").addClass("is-invalid");
            Swal.fire({
                icon: "warning",
                title: "Validation Error",
                text: "Product Stock cannot be less than 0!"
            });
            return;
        }

        // --- Confirmation ---
        Swal.fire({
            title: "Are you sure?",
            text: "Do you want to add this product?",
            icon: "question",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, add it!",
            cancelButtonText: "Cancel"
        }).then((result) => {
            if (result.isConfirmed) {
                // --- AJAX Submit ---
                $.ajax({
                    url: "<?= site_url('product/save'); ?>",
                    type: "POST",
                    data: $("#formAddProduct").serialize(),
                    dataType: "json",
                    beforeSend: function () {
                        Swal.fire({
                            title: "Please wait...",
                            text: "Saving product...",
                            allowOutsideClick: false,
                            didOpen: () => {
                                Swal.showLoading();
                            }
                        });
                    },
                    success: function (response) {
                        if (response.status === "success") {
                            Swal.fire({
                                icon: "success",
                                title: "Added!",
                                text: "Product has been added successfully.",
                                showConfirmButton: false,
                                timer: 2000
                            });
                            $("#formAddProduct")[0].reset();
                            $("#modalAdd").modal("hide");
                            // table.ajax.reload(null, false); // reload datatable
                            $('#productTable').DataTable().ajax.reload();
                        } else {
                            Swal.fire({
                                icon: "error",
                                title: "Oops...",
                                text: response.message || "Failed to add product."
                            });
                        }
                    },
                    error: function () {
                        Swal.fire({
                            icon: "error",
                            title: "Error!",
                            text: "There was a problem submitting the form."
                        });
                    }
                });
            }
        });
    });

    // --- remove red border when user types ---
    $("#ProductName, #ProductPrice, #ProductStock").on("input", function () {
        if ($(this).val().trim() !== "") {
            $(this).removeClass("is-invalid");
        }
    });

});
</script>







   