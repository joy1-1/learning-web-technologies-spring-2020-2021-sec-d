<?php
require_once ('../Model/ProductModel.php');
 ?>
	<div id="main_content">
	
		<table border="1">
			<tr>
				
				<th>NAME</th>
				<th>Buying Price</th>
				<th>Selling Price</th>
				<th>Profit </th>
				<th>Displayable</th>
			</tr>
			<?php 
             $product = getAllProduct() ;
	         for( $i=0 ; $i != count($product) ; $i++ ){
				 if(  $product[$i]['Desplayable'] == 'yes' ){
			?>
			<tr>
				<td> <?php echo $product[$i]['name']  ?>  </td>
				<td> <?php echo $product[$i]['buying_price'] ?> </td>
				<td> <?php echo $product[$i]['selling_price'] ?> </td>
				<td> <?php echo $product[$i]['profit'] ?> </td>
				<td> <?php echo $product[$i]['desplayable'] ?> </td>
				<td>
				    <a href="../View/Edit.php ?id=<?= $product[$i]['product_id']?>"> EDIT </a>|
					<a href="../Controller/UserDelete.php?id=<?= $product[$i]['product_id']?>"> DELETE </a> 
				</td>
			</tr>
			<?php 
				 }
			 }
			
			?>
		
			
		</table>
			
	</div>