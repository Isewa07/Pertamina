<form action="<?php echo site_url('Product/saveRedirect'); ?>" method="post">
    <input type="hidden" name="ProductID" value="<?php echo isset($product['ID']) ? $product['ID'] : ''; ?>">

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Product Name</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" ID="ProductName" 
                   name="ProductName" 
                   value="<?php echo isset($product['Name']) ? $product['Name'] : ''; ?>" 
                   required>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Product Price</label>
        <div class="col-sm-10">
            <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" 
                   class="form-control" ID="ProductPrice" 
                   name="ProductPrice" 
                   value="<?php echo isset($product['Price']) ? $product['Price'] : ''; ?>" 
                   required>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Product Stock</label>
        <div class="col-sm-10">
            <input type="text" oninput="this.value=this.value.replace(/[^0-9]/g,'');" 
                   class="form-control" ID="ProductStock" 
                   name="ProductStock" 
                   value="<?php echo isset($product['Stock']) ? $product['Stock'] : ''; ?>" 
                   required>
        </div>
    </div>

    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">For Sale</label>
        <div class="col-sm-10">
            <select ID="ProductSale" name="ProductSale" class="form-control">
                <option value="1" <?php echo (isset($product['Is_sell']) && $product['Is_sell'] == 1) ? 'selected' : ''; ?>>For Sale</option>
                <option value="0" <?php echo (isset($product['Is_sell']) && $product['Is_sell'] == 0) ? 'selected' : ''; ?>>Not For Sale</option>
            </select>
        </div>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="<?php echo site_url('Product/redirect_view'); ?>" class="btn btn-secondary">Cancel</a>
</form>
