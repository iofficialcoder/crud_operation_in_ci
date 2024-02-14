<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation CI App</title>

    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logo-update-white.png" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="jumbotron">
        <h1 align="center">Crud CI App</h1>
    </div>

    <div class="container">
        <h1 align="center">Edit Product</h1>

        <form action="<?php echo base_url(); ?>crud/update/<?php echo $singleProduct->id; ?>" method="post">
            <div class="form-group">
                <label for="name">Product's Name: </label>
                <input type="text" name="name" placeholder="Enter Product Name" class="form-control" value="<?php echo $singleProduct->name; ?>">
            </div>

            <div class="form-group">
                <label for="price">Product's Price: </label>
                <input type="text" name="price" placeholder="Enter Product Price" class="form-control" value="<?php echo $singleProduct->price; ?>">
            </div>

            <div class="form-group">
                <label for="quantity">Product's Quantity: </label>
                <input type="text" name="quantity" placeholder="Enter Product Quantity" class="form-control" value="<?php echo $singleProduct->quantity; ?>">
            </div>

            <div class="form-group">
                <label for="image_url">Product's Image: </label>
                <input type="file" name="image_url" class="form-control" value="<?php echo $singleProduct->image_url; ?>">
            </div>

            <input type="submit" name="edit" value="update" class="btn btn-primary">
        </form>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>