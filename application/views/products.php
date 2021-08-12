<?php include('top.php') ?>
<h1 class="text-center mt-2">Products</h1>
<div class="container mt-5">
    <a href="<?= base_url('Product/add') ?>"><button class="btn btn-primary float-right mb-3">Add New</button></a>
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">product name</th>
                <th scope="col">standard price</th>
                <th scope="col">list price</th>
                <th scope="col">category</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($products)) {
                $i = 1;
                foreach ($products as $product) { ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><?= $product->product_name ?></td>
                        <td><?= $product->standard_cost ?></td>
                        <td><?= $product->list_price ?></td>
                        <td><?= $product->category ?></td>
                        <td><a href="<?= base_url('Product/edit?id=' . $product->id)   ?>"><i class="text-info fa fa-edit"></i></a></td>
                        <td><a href="<?= base_url('Product/delete?id=' . $product->id)   ?>"><i class="text-danger fa fa-trash"></i></a></td>
                    </tr>
                <?php $i++;
                }
            } else { ?>
                <tr>
                    <th class="text-center" colspan="7">No data found</th>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>