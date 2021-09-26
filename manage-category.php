<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Order</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <!-- menu section start -->
    <div class="menu text-center">
        <div class="wrapper">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="manage-user.php">Admin</a></li>
                <li><a href="categories.php">Categories</a></li>
                <li><a href="food.php">Food</a></li>
                <li><a href="manage-order.php">Order</a></li>
            </ul>
        </div>
    </div>
    <!-- menu section End -->

    <!-- main start -->
    <div class="main-content">
        <div class="wrapper">

            <h1>ADD Category</h1> <br />
            <a href="" class="btn-primary">Add new users</a>
            <br /> <br /> <br />
            <!-- <table class="tbl-full">
                <tr>
                    <th>S.N.</th>
                    <th>Food</th>
                    <th>Price</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Customer Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
                <tr>
                    <td>1.</td>
                    <td>Mixed Pizza</td>
                    <td>10.00</td>
                    <td>2</td>
                    <td>20.00</td>
                    <td>2020-11-30 04:07:17</td>
                    <td>
                        <a href="" class="btn-fiveth">Delivery</a>
                    </td>
                    <td>Janas Bush</td>
                    <td>12345678910</td>
                    <td>linh123@gmail.com</td>
                    <td>Jddddddddddd</td>
                    <td><a href="" class="btn-seventh">Update Order</a>
                    </td>                   
                </tr>
                <tr>
                    <td>2.</td>
                    <td>Mixed Pizza</td>
                    <td>10.00</td>
                    <td>2</td>
                    <td>20.00</td>
                    <td>2020-11-30 04:07:17</td>
                    <td>
                        <a href="" class="btn-fiveth">Delivery</a>
                    </td>
                    <td>Janas Bush</td>
                    <td>12345678910</td>
                    <td>linh123@gmail.com</td>
                    <td>Jddddddddddd</td>
                    <td><a href="" class="btn-seventh">Update Order</a>
                    </td>
                </tr>
                <tr>
                    <td>3.</td>
                    <td>Mixed Pizza</td>
                    <td>10.00</td>
                    <td>2</td>
                    <td>20.00</td>
                    <td>2020-11-30 04:07:17</td>
                    <td>
                        <a href="" class="btn-sixth">Cancel</a>
                    </td>
                    <td>Janas Bush</td>
                    <td>12345678910</td>
                    <td>linh123@gmail.com</td>
                    <td>Jddddddddddd</td>
                    <td>
                        <a href="" class="btn-seventh">Update Order</a>
                    </td>
                </tr>

            </table> -->
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">S.N</th>
                        <th scope="col">Title</th>
                        <th scope="col">Images</th>
                        <th scope="col">Feature</th>
                        <th scope="col">Active</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Pizza</td>
                        <td>
                            <img src="images_food/pizza.jpg" alt="">
                        </td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Update Category</td>
                        <td>Delete Category</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Burger</td>
                        <td>
                            <img src="images_food/burger.jpg" alt="">
                        </td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Update Category</td>
                        <td>Delete Category</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>MoMo</td>
                        <td>
                            <img  src="images_food/momo.jpg" alt="">
                        </td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Update Category</td>
                        <td>Delete Category</td>
                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td>Qa exits ipsum id id</td>
                        <td style="width: 40px;height:40px;">
                            <img src="images_food/burger.jpg" alt="">
                        </td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>Update Category</td>
                        <td>Delete Category</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    <!-- main end -->

    <!-- footer start -->
    <div class="footer">
        <div class="wrapper">
            <p class="text-center">2020 all rights reserved, some restauran made by <a href="#">LinhMy</a></p>
        </div>
    </div>
    <!-- footer and -->
</body>

</html>