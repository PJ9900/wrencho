<?php require_once('header.php'); ?>

<?php
if(isset($_POST['form1'])) {

	$statement = $pdo->prepare("UPDATE tbl_social SET social_url=? WHERE social_name=?");
	$statement->execute(array($_POST['facebook'],'Facebook'));

	$statement = $pdo->prepare("UPDATE tbl_social SET social_url=? WHERE social_name=?");
	$statement->execute(array($_POST['twitter'],'Twitter'));

	$statement = $pdo->prepare("UPDATE tbl_social SET social_url=? WHERE social_name=?");
	$statement->execute(array($_POST['linkedin'],'LinkedIn'));

	$statement = $pdo->prepare("UPDATE tbl_social SET social_url=? WHERE social_name=?");
	$statement->execute(array($_POST['phone'],'Phone'));

	$statement = $pdo->prepare("UPDATE tbl_social SET social_url=? WHERE social_name=?");
	$statement->execute(array($_POST['address'],'Address'));

	$statement = $pdo->prepare("UPDATE tbl_social SET social_url=? WHERE social_name=?");
	$statement->execute(array($_POST['youtube'],'YouTube'));

	$statement = $pdo->prepare("UPDATE tbl_social SET social_url=? WHERE social_name=?");
	$statement->execute(array($_POST['instagram'],'Instagram'));

	$statement = $pdo->prepare("UPDATE tbl_social SET social_url=? WHERE social_name=?");
	$statement->execute(array($_POST['email'],'Email'));

	$statement = $pdo->prepare("UPDATE tbl_social SET social_url=? WHERE social_name=?");
	$statement->execute(array($_POST['maps_url'],'Map Url'));

	// $statement = $pdo->prepare("UPDATE tbl_social SET social_url=? WHERE social_name=?");
	// $statement->execute(array($_POST['reddit'],'Reddit'));

	// $statement = $pdo->prepare("UPDATE tbl_social SET social_url=? WHERE social_name=?");
	// $statement->execute(array($_POST['snapchat'],'Snapchat'));

	$statement = $pdo->prepare("UPDATE tbl_social SET social_url=? WHERE social_name=?");
	$statement->execute(array($_POST['whatsapp'],'WhatsApp'));

	// $statement = $pdo->prepare("UPDATE tbl_social SET social_url=? WHERE social_name=?");
	// $statement->execute(array($_POST['quora'],'Quora'));

	// $statement = $pdo->prepare("UPDATE tbl_social SET social_url=? WHERE social_name=?");
	// $statement->execute(array($_POST['stumbleupon'],'StumbleUpon'));

	// $statement = $pdo->prepare("UPDATE tbl_social SET social_url=? WHERE social_name=?");
	// $statement->execute(array($_POST['delicious'],'Delicious'));

	// $statement = $pdo->prepare("UPDATE tbl_social SET social_url=? WHERE social_name=?");
	// $statement->execute(array($_POST['digg'],'Digg'));

	$success_message = 'Social Media URLs are updated successfully.';

}
?>

<section class="content-header">
	<div class="content-header-left">
		<h1>Social Media</h1>
	</div>
</section>

<?php
$statement = $pdo->prepare("SELECT * FROM tbl_social");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);							
foreach ($result as $row) {
	if($row['social_name'] == 'Facebook') {
		$facebook = $row['social_url'];
	}
	if($row['social_name'] == 'Twitter') {
		$twitter = $row['social_url'];
	}
	if($row['social_name'] == 'LinkedIn') {
		$linkedin = $row['social_url'];
	}
	if($row['social_name'] == 'Instagram') {
		$instagram = $row['social_url'];
	}
	
	if($row['social_name'] == 'YouTube') {
		$youtube = $row['social_url'];
	}
	
	if($row['social_name'] == 'Phone') {
		$phone = $row['social_url'];
	}

	if($row['social_name'] == 'Address') {
		$address = $row['social_url'];
	}
	if($row['social_name'] == 'Email') {
		$email = $row['social_url'];
	}
	if($row['social_name'] == 'WhatsApp') {
		$whatsapp = $row['social_url'];
	}
	if($row['social_name'] == 'Map Url') {
		$map_url = $row['social_url'];
	}

	// if($row['social_name'] == 'StumbleUpon') {
	// 	$stumbleupon = $row['social_url'];
	// }
	// if($row['social_name'] == 'Delicious') {
	// 	$delicious = $row['social_url'];
	// }
	// if($row['social_name'] == 'Digg') {
	// 	$digg = $row['social_url'];
	// }
}
?>

<section class="content">
	<div class="row">
		<div class="col-md-12">

			<?php if($error_message): ?>
			<div class="callout callout-danger">
				<p>
					<?php echo $error_message; ?>
				</p>
			</div>
			<?php endif; ?>

			<?php if($success_message): ?>
			<div class="callout callout-success">
				<p><?php echo $success_message; ?></p>
			</div>
			<?php endif; ?>
			
			<form class="form-horizontal" action="" method="post">
				<div class="box box-info">
					<div class="box-body">						
						<!-- <p style="padding-bottom: 20px;">If you do not want to show a social media in your front end page, just leave the input field blank.</p> -->

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Facebook </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="facebook" value="<?php echo $facebook; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Twitter </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="twitter" value="<?php echo $twitter; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">LinkedIn </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="linkedin" value="<?php echo $linkedin; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Instagram</label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="instagram" value="<?php echo $instagram; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Phone No. </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="phone" maxlength="10" minlength="10" value="<?php echo $phone; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">You Tube </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="youtube" value="<?php echo $youtube; ?>">
							</div>
						</div>
						<!-- <div class="form-group">
							<label for="" class="col-sm-2 control-label">Instagram </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="instagram" value="<?php //echo $instagram; ?>">
							</div>
						</div> -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Address </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Email </label>
							<div class="col-sm-4">
								<input type="email" class="form-control" name="email" value="<?php echo $email; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Map Url </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="maps_url" value="<?php echo $map_url; ?>">
							</div>
						</div>
						<!-- <div class="form-group">
							<label for="" class="col-sm-2 control-label">Snapchat </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="snapchat" value="<?php //echo $snapchat; ?>">
							</div>
						</div> -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">WhatsApp </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="whatsapp" value="<?php echo $whatsapp; ?>">
							</div>
						</div>
						<!-- <div class="form-group">
							<label for="" class="col-sm-2 control-label">Quora </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="quora" value="<?php //echo $quora; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">StumbleUpon </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="stumbleupon" value="<?php //echo $stumbleupon; ?>">
							</div>
						</div> -->
						<!-- <div class="form-group">
							<label for="" class="col-sm-2 control-label">Delicious </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="delicious" value="<?php //echo $delicious; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Digg </label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="digg" value="<?php //echo $digg; ?>">
							</div>
						</div> -->
						<div class="form-group">
							<label for="" class="col-sm-2 control-label"></label>
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-left" name="form1">Submit</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>

</section>

<?php require_once('footer.php'); ?>