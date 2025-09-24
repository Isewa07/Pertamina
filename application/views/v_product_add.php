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
    <label class="col-sm-2 col-form-label">For Sale</label>
    <div class="col-sm-10">
        <select id="ProductSale" name="is_sale" class="form-control">
            <option value="1">For Sale</option>
            <option value="0">Not For Sale</option>
        </select>
    </div>
</div>


<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary" id="addBtn">Submit</button>