<?php 
require_once '../config.php';
$output = '';

$sql = "SELECT * FROM products ORDER BY productid DESC ";
$result = mysqli_query($connect_database, $sql);

$output .= '
<div class="table-responsive">
	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
	<thead>
		<tr>
		 <th>Product Name</th>
               <th>No. of Products</th>
             <th>Product Cost</th>
              <th>No. of Barcodes</th>
              <th>Barcodes-Issued Date</th>
             <th>Barcodes-Expiry Date</th>
		</tr>
	</thead>
	';
	if(mysqli_num_rows($result)>0){
		$row=0;
		while(mysqli_fetch_array($result)){
			$output .= '<td>'.$row["productid"].'</td>
			<td class="productname" data-id1="productname"'.$row["productid"].' " contenteditable>' .$row["productname"]. '</td>
			<td class="productprice" data-id2="productprice"'.$row["productid"].' " contenteditable>' .$row["productprice"]. '</td>
			<td class="productspecification" data-id3="productspecification"'.$row["productid"].' " contenteditable>' .$row["productspecification"]. '</td>
			<td class="mfgdate" data-id4="mfgdate"'.$row["productid"].' " contenteditable>' .$row["mfgdate"]. '</td>
			<td class="expdate" data-id5="expdate"'.$row["productid"].' " contenteditable>' .$row["expdate"]. '</td>
			<td class="productqty" data-id6="productqty"'.$row["productid"].' " contenteditable>' .$row["productqty"]. '</td>
			<td><button name="btn_delete" id="btn_delete" data-id3="'.$row["productid"].'">X</button></td>


			';
		}

		$output .= '<tr><td id="productname" contenteditable></td>
		<td id="productprice" contenteditable></td>
		<td id="productspecification" contenteditable></td>
		<td id="mfgdate" contenteditable></td>
		<td id="expdate" contenteditable></td>
		<td id="productqty" contenteditable></td>
		<td><button name="btn_add" id="btn_add" class="btn btn-sm btn-success">+</button></td>
		</tr>';
		}
	else{
		$output .= '<tr>
		<td colspan="4"> Data not Found</td>
		</tr>';
	}
	$output .= '</div></table>';
 ?>