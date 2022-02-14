<form action="" method="post">
    <input type="text" name="name">
    <input type="text" name="quantity">
    <input type="text" name="price">

    <select name="producttype_id" id="">
        <?php foreach ($productTypes as $productType):?>
        <option value="<?php echo $productType->id ?>"><?php echo $productType->name?></option>
        <?php endforeach;?>
    </select>
    <button>Create</button>
</form>
