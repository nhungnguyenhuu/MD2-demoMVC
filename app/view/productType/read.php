<a href="index.php?page=productType-create">Create</a>
<table border="10">
    <thead>
    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>description</th>
        <th colspan="3">Action</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($productTypes as $key=>$productType): ?>
    <tr>
        <td><?php echo $key+1 ?></td>
        <td><?php echo $productType->name ?></td>
        <td><?php echo $productType->description ?></td>
        <td><a href="index.php?page=productType-edit&id=<?php echo $productType->id ?>">edit</a></td>
        <td><a href="index.php?page=productType-detail&id=<?php echo $productType->id ?>">Detail</a></td>
        <td><a onclick="return confirm('Are you sure?')" href="index.php?page=productType-delete&id=<?php echo $productType->id ?>">delete</a></td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>