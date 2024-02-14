<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo-update-white.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud Operation in CI</title>
</head>

<body>
    <div class="jumbotron">
        <h1 class="text-center">Crud CI App</h1>
    </div>



    <div class="container">
        <div class="clear-fix">
            <h3 style="float:left;">All Product</h3>
            <a href="#" class="btn btn-info" style="float:right;" data-toggle="modal" data-target="#exampleModalCenter">Add Product</a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Product Price</th>
                    <th>Product Quantity</th>
                    <th>Product Image</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($product_details as $products) : ?>

                    <tr>
                        <td>
                            <?php echo $products->name; ?>
                        </td>
                        <td>
                            <?php echo $products->price; ?>
                        </td>
                        <td>
                            <?php echo $products->quantity; ?>
                        </td>
                        <td>
                            <img src="<?php base_url(); ?>assets/img/<?php echo $products->image_url; ?>" alt="Product Image" class="image-post">
                        </td>
                        <td>
                            <a href="<?php base_url(); ?>crud/editProduct/<?php echo $products->id; ?>" class="btn btn-success">Edit</a>
                            <a href="<?php base_url(); ?>crud/deleteProduct/<?php echo $products->id; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- <pre>
    <?php
    print_r($product_details);
    ?>
    </pre> -->

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <form action="<?php base_url(); ?>crud/addProduct" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add Product by Admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Product's Name: </label>
                            <input type="text" name="name" placeholder="Enter Product Name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="price">Product's Price: </label>
                            <input type="text" name="price" placeholder="Enter Product price" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="quantity">Product's Quantity: </label>
                            <input type="text" name="quantity" placeholder="Enter Quantity quantity" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="image_url">Product's Image: </label>
                            <input type="file" name="image_url" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        <input type="submit" name="insert" value="Add Product" class="btn btn-info">
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php if ($this->session->flashdata('error')) : ?>
        <div class="bg-danger" align="center" style="color:#fff;">
            <?php echo $this->session->flashdata('error'); ?>
        </div>

    <?php endif; ?>

    <?php if ($this->session->flashdata('inserted')) : ?>
        <div class="bg-success" align="center" style="color:#fff;">
            <?php echo $this->session->flashdata('inserted'); ?>
        </div>

    <?php endif; ?>

    <?php if ($this->session->flashdata('updated')) : ?>
        <div class="bg-success" align="center" style="color:#fff;">
            <?php echo $this->session->flashdata('updated'); ?>
        </div>

    <?php endif; ?>

    <?php if ($this->session->flashdata('deleted')) : ?>
        <div class="bg-success" align="center" style="color:#fff;">
            <?php echo $this->session->flashdata('deleted'); ?>
        </div>

    <?php endif; ?>





    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>