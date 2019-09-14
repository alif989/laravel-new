
<div class="form-group  row">
    <label class="col-sm-2 col-form-label">Product Name</label>
    <div class="col-sm-4">
        <input type="text" name="Product_name"  value="" class="form-control">
        <input type="hidden" name="TBL_ID"  value="" class="form-control">
    </div>
</div>
<div class="form-group  row">
    <label class="col-sm-2 col-form-label">Product Quantity</label>
    <div class="col-sm-4">
        <input type="text" name="Product_quantity" value="" class="form-control">
    </div>
</div>
<div class="form-group  row">
    <label class="col-sm-2 col-form-label">Product Price</label>
    <div class="col-sm-4">
        <input type="text" name="Product_Price" value="" class="form-control">
    </div>
</div>
<div class="form-group  row">
    <label class="col-sm-2 col-form-label">Product status</label>
    <div class="col-sm-4">
        <input type="checkbox" name="Product_status" value="Active" class="form-control">
    </div>
</div>

<div class="form-group  row">
    <div class="col-sm-2"></div>
    <div class="col-sm-4">
        <button class="btn btn-primary btn-sm" type="submit">Save changes</button>
    </div>
</div>
</form>
</div>
<script>
    $("#crud_id").validate({
        rules:{
            Product_name:{
                required: true,
            },
            Product_quantity:{
                required: true
            }  ,
            Product_Price:{
                required: true
            }

        }

    });

</script>