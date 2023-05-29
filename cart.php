
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">

<title>my cart</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
    body{
    margin-top:20px;
    background:#eee;
}
.ui-w-40 {
    width: 40px !important;
    height: auto;
}

.card{
    box-shadow: 0 1px 15px 1px rgba(52,40,104,.08);    
}

.ui-product-color {
    display: inline-block;
    overflow: hidden;
    margin: .144em;
    width: .875rem;
    height: .875rem;
    border-radius: 10rem;
    -webkit-box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
    box-shadow: 0 0 0 1px rgba(0,0,0,0.15) inset;
    vertical-align: middle;
}
    </style>
</head>
<body>
<div class="container px-3 my-5 clearfix">

<div class="card">
<div class="card-header">
<h2>Shopping Cart</h2>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table table-bordered m-0">
<thead>
<tr>

<th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
<th class="text-right py-3 px-4" style="width: 100px;">Price</th>
<th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
<th class="text-right py-3 px-4" style="width: 100px;">Total</th>
<th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#" class="shop-tooltip float-none text-light" title data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
</tr>
</thead>
<tbody>
<?php 
$price = -10;
require_once "database.php";
$query = "SELECT* FROM favtable";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $price += $row["price"];
       echo' <tr>';
       echo ' <td class="p-4">';
       echo '   <div class="media align-items-center">';
       echo '   <img src="'.$row["image"].'" class="d-block ui-w-40 ui-bordered mr-4" alt>';
       echo '  <div class="media-body">';
       echo '  <a href="#" class="d-block text-dark">'.$row["title"].'</a>';
       echo '    <small>';
       echo '  <span class="text-muted">'.$row["dis"].'</span> EU 37 &nbsp;';
       echo '  </small>';
       echo '  </div>';
       echo '  </div>';
       echo '  </td>';
       echo '  <td class="text-right font-weight-semibold align-middle p-4">'.$row["price"].' SAR</td>';
       echo '  <td class="align-middle p-4"><input type="text" class="form-control text-center" value="1"></td>';
       echo ' <td class="text-right font-weight-semibold align-middle p-4">'.$row["price"].' SAR</td>';
       echo '  <td class="text-center align-middle px-0"><a href="#" class="shop-tooltip close float-none text-danger" title data-original-title="Remove">×</a></td>';
       echo '  </tr>';
        }
    }
    else{
        echo "";
    }
    
        ?>

</tbody>
</table>
</div>

<div class="d-flex flex-wrap justify-content-between align-items-center pb-4">
<div class="mt-4">
<label class="text-muted font-weight-normal"></label>

</div>
<div class="d-flex">
<div class="text-right mt-4 mr-5">
<label class="text-muted font-weight-normal m-0">Discount</label>
<div class="text-large"><strong>10 SAR</strong></div>
</div>
<div class="text-right mt-4">
<label class="text-muted font-weight-normal m-0">Total price</label>
<div class="text-large"><strong><?php echo $price ; ?> SAR</strong></div>
</div>
</div>
</div>
<div class="float-right">
<a href="index1.php"><button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Back to shopping</button></a>
<a href='checkout.php'><button type="button" class="btn btn-lg btn-primary mt-2">Checkout</button></a>
</div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.1/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	
</script>
</body>
</html>