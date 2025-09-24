<form action="<?php echo site_url('Product/saveRedirect'); ?>" method="post">
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Product Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="EditProductName" name="ProductName" required>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Product Price</label>
        <div class="col-sm-10">
            <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" 
                class="form-control" id="EditProductPrice" name="ProductPrice" required>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Product Stock</label>
        <div class="col-sm-10">
            <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" 
                class="form-control" id="EditProductStock" name="ProductStock" required>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">For Sale</label>
        <div class="col-sm-10">
            <select id="EditProductSale" name="ProductSale" class="form-control">
                <option value="1">For Sale</option>
                <option value="0">Not For Sale</option>
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="<?php echo site_url('Product/redirect_view'); ?>" class="btn btn-secondary">Cancel</a>
</form>
