<div style="padding:70px 0 20px 0">
    
    <div class="card col-md-8 mx-auto">      
        <div class="card-body">
            <h3>Product Update</h3>

            <?php
                if(!empty($err))
                {
                    echo $err;
                }
            ?>
            <form method='post' action='<?=base_url("index.php/admin/product/update_process")?>'>
                <input type="hidden" name="product_id" value="<?=$product["product_id"]?>">
                <div class='form-group'>
                    <label>Product Title</label>
                    <input type='text' value='<?=$product["product_title"]?>' name='product_title' class='form-control'>
                </div>               
                <div class='form-group'>
                    <label>Price</label>
                    <input type='text' value='<?=$product["price"]?>' name='price' class='form-control'>                
                </div>
                <div class='form-group'>
                    <label>Stock</label>
                    <input type='text' value='<?=$product["stock"]?>' name='stock' class='form-control'>                
                </div>
                <div class='form-group'>
                    <label>Product Description</label>
                    <textarea name='product_desc' class='form-control'><?=$product["product_desc"]?></textarea>               
                </div>
                <button type='submit' class='btn btn-success'>Submit</button>
            </form>
        </div>    
    </div>
</div>