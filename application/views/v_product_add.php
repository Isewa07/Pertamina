<div class="row">
    <div class="col-lg-12 mb-4">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Product</h6>
            </div>

            <div class="card-body">
                <form action="<?php echo site_url('Product/saveRedirect'); ?>" method="post">
                    
                    <!-- Product Name -->
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Product Name</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                   class="form-control" 
                                   id="ProductName" 
                                   name="ProductName" 
                                   required>
                        </div>
                    </div>

                    <!-- Product Price -->
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Product Price</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                   class="form-control" 
                                   id="ProductPrice" 
                                   name="ProductPrice" 
                                   oninput="this.value=this.value.replace(/[^0-9]/g,'');" 
                                   required>
                        </div>
                    </div>

                    <!-- Product Stock -->
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Product Stock</label>
                        <div class="col-sm-10">
                            <input type="text" 
                                   class="form-control" 
                                   id="ProductStock" 
                                   name="ProductStock" 
                                   oninput="this.value=this.value.replace(/[^0-9]/g,'');" 
                                   required>
                        </div>
                    </div>

                    <!-- For Sale -->
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">For Sale</label>
                        <div class="col-sm-10">
                            <select id="ProductSale" name="ProductSale" class="form-control">
                                <option value="1">For Sale</option>
                                <option value="0">Not For Sale</option>
                            </select>
                        </div>
                    </div>

                    <!-- Buttons -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?php echo site_url('Product/redirect_view'); ?>" class="btn btn-secondary">Cancel</a>
                </form>
            </div>
        </div>                        
    </div>
</div>
