<?php
session_start();
global $invoiceid;
include_once "connection.php";

$email = $_SESSION['username'];
$uid = $_SESSION['id'];
$invoiceid = '';
$queryd = "SELECT id from invoice order by id DESC LIMIT 1";
    $stmt = $conn->query($queryd);
    if(mysqli_num_rows($stmt) > 0) {
        if ($row = mysqli_fetch_assoc($stmt)) {
            $invoiceid = $row['id'];
            $invoiceid = $invoiceid + 1;//Incrementing numeric part
            $value9 = $invoiceid; 
        }
    } 
    else {
        $invoiceid = "10000";
        $value9 = $invoiceid;
    }

$invoiceg = mysqli_query($conn,"INSERT INTO invoice (id,user_id,date_ts) VALUES('$invoiceid','$uid',now()) ");

foreach (array_combine($_POST['txt_bid'], $_POST['txt_quantity']) as $value=>$value2 ) 
{
 	 $qry="update invoice_items set invoice_id='$invoiceid',Quantity='$value2',Status=1 where bid='$value' and Status=0";
        $sql = mysqli_query($conn,$qry);
        
}

$invoice = mysqli_query($conn,"SELECT a.invoice_id,a.Quantity,b.Bottle_Category,b.litre,b.Price,b.image,u.Name, u.State, u.City, u.Area,u.Phone, u.Address, u.Pincode,u.Email FROM invoice_items as a JOIN bottles_details as b ON a.bid=b.bid JOIN userdetails as u where a.invoice_id='$invoiceid' and a.Status=1");
$invoiceData=mysqli_fetch_all($invoice,MYSQLI_ASSOC);
?>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?php

	if($invoiceData>=1){
?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
    		<div class="invoice-title">
    			<h2>Invoice</h2><h3 class="pull-right">Order # <?php echo $invoiceData[0]['invoice_id'] ?></h3>
    		</div>
    		<hr>
    		<div class="row">
    			<div class="col-xs-6">
    				<address>
    				<strong>Billed To:</strong><br>
    					<?php echo ucfirst($invoiceData[0]['Name'])?> <br>
                        <?php echo ucfirst($invoiceData[0]['Phone'])?> <br>
                        <?php echo ucfirst($invoiceData[0]['State'])?> <br>
    					<?php echo ucfirst($invoiceData[0]['Area'])?><br>
    					<?php echo ucfirst($invoiceData[0]['City'])?><br>
    					<?php echo ucfirst($invoiceData[0]['Address'])?><br>
                        <?php echo ucfirst($invoiceData[0]['Pincode'])?>
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
        			<strong>Shipped To:</strong><br>
    					<?php echo ucfirst($invoiceData[0]['Name'])?> <br>
                        <?php echo ucfirst($invoiceData[0]['Phone'])?> <br>
                        <?php echo ucfirst($invoiceData[0]['State'])?> <br>
                        <?php echo ucfirst($invoiceData[0]['Area'])?><br>
                        <?php echo ucfirst($invoiceData[0]['City'])?><br>
                        <?php echo ucfirst($invoiceData[0]['Address'])?><br>
                        <?php echo ucfirst($invoiceData[0]['Pincode'])?>
    				</address>
    			</div>
    		</div>
    		<div class="row">
    			<!-- <div class="col-xs-6">
    				<address>
    					<strong>Payment Method:</strong><br>
    					Visa ending **** 4242<br>
    					jsmith@email.com
    				</address>
    			</div>
    			<div class="col-xs-6 text-right">
    				<address>
    					<strong>Order Date:</strong><br>
    					March 7, 2014<br><br>
    				</address>
    			</div> -->
    		</div>
    	</div>
    </div>
    
    <div class="row">
    	<div class="col-md-12">
    		<div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title"><strong>Order summary</strong></h3>
    			</div>
    			<div class="panel-body">
    				<div class="table-responsive">
    					<table class="table table-condensed">
    						<thead>
                                <tr>
        							<td><strong>Sn No</strong></td>
                                    <td class="text-center"><strong>Name</strong></td>
        							<td class="text-center"><strong>Price</strong></td>
        							<td class="text-center"><strong>Quantity</strong></td>
        							<td class="text-right"><strong>Litre</strong></td>
        							<td class="text-right"><strong>Totals</strong></td>
                                </tr>
    						</thead>
    						<tbody>
    							<?php

    							$i=0;
    							$grandtotal=0;
    							foreach($invoiceData as $fetch)
    							{
    								$Total=$fetch['Price']*$fetch['Quantity'] ;
    								$grandtotal+=$Total;
    								?>

    								<tr>
    								<td><?php echo $i+1?></td>
                                    <td class="text-center"><?php echo $fetch['Bottle_Category'] ?></td>
    								<td class="text-center"><?php echo $fetch['Price'] ?></td>
    								<td class="text-center"><?php echo $fetch['Quantity'] ?></td>
    								<td class="text-right"><?php echo $fetch['litre'] ?></td>
    								<td class="text-right"><?php echo $Total?></td>

    							</tr>
    							<?php
    							$i++;
    							}
    							 ?>
    							<!-- foreach ($order->lineItems as $line) or some such thing here -->
    							<tr>
    								
    							</tr>
    							<tr>
    								
    							</tr>
    							<tr>
    								

    							</tr>
    							<tr>
                                    <td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line"></td>
    								<td class="no-line text-right"><strong>GrandTotal</strong></td>
    								<td class="no-line text-right"><?php echo  $grandtotal ?></td>
    							</tr>
                                <!-- <tr>
                                	
                                		<td ><strong style="margin-left: 10%;">Grand Total</strong></td>
                                		<td ><strong style="margin-left: 465%;"><?php echo  $grandtotal ?></strong></td>
                                	

                                </tr> -->
    						</tbody>
    					</table>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>

<?php
}else{
?>
<h1>Something Went Worng</h1>
<?php 
	}
?>