<?php require_once('header.php'); ?>

<?php
if (isset($_POST['form1'])) {
	$valid = 1;
	$heading = $_POST['b_heading_name'];
	$page_name = $_POST['page_name'];
	$Description = $_POST['description_content'];
	$banner_image = $_FILES['banner_image']['name'];
	$mbanner_image = $_FILES['mbanner_image']['name'];
	$banner_image_tmpname = $_FILES['banner_image']['tmp_name'];
	$mbanner_image_tmpname = $_FILES['mbanner_image']['tmp_name'];
	$path = $_FILES['image']['name'];
	$path_tmp = $_FILES['image']['tmp_name'];

	if ($banner_image != '') {
		$ext = pathinfo($banner_image, PATHINFO_EXTENSION);
		$file_name = basename($banner_image, '.' . $ext);
		if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'webp') {
			$valid = 0;
			$error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
		}
	} else {
		$valid = 0;
		$error_message .= 'You must have to select Banner Image<br>';
	}

	if ($mbanner_image != '') {
		$ext = pathinfo($mbanner_image, PATHINFO_EXTENSION);
		$file_name = basename($mbanner_image, '.' . $ext);
		if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'webp') {
			$valid = 0;
			$error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
		}
	} else {
		$valid = 0;
		$error_message .= 'You must have to select Mobile Banner Image<br>';
	}

	$statement = $pdo->prepare("INSERT into banners (title,banners,mbanner,description,page_name) VALUES(?,?,?,?,?)");
	if ($statement->execute(array($heading, $banner_image, $mbanner_image, $Description, $page_name))) {
		move_uploaded_file($banner_image_tmpname, 'assets/images/banner-image/' . $banner_image);
		move_uploaded_file($mbanner_image_tmpname, 'assets/images/banner-image/' . $mbanner_image);
		$success_message = 'Banner is added successfully.';
	} else {
		$error_message = 'Banner Added Failed!';
	}
}
?>
<section class="content-header">
	<div class="content-header-left">
		<h1>Add Banners</h1>
	</div>
	<div class="content-header-right">
		<a href="banners.php" class="btn btn-primary btn-sm">View All</a>
	</div>
</section>
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<?php if ($error_message): ?>
				<div class="callout callout-danger">
					<p>
						<?php echo $error_message; ?>
					</p>
				</div>
			<?php endif; ?>
			<?php if ($success_message): ?>
				<div class="callout callout-success">
					<p><?php echo $success_message; ?></p>
				</div>
			<?php endif; ?>
			<form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
				<div class="box box-info">
					<div class="box-body">
						<!-- <div class="form-group">
							<label for="" class="col-sm-2 control-label">Select Page <span>*</span></label>
							<div class="col-sm-4">
								<select class="form-control" name="page_name">
									<option value="home">Home</option>
									<option value="about">About Us</option>
									<option value="blog">News & Blogs</option>
									<option value="contact">Contact Us</option>
								</select>
							</div>
						</div> -->
						<input type="hidden" name="page_name" value="home">

						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Banner Heading <span>*</span></label>
							<div class="col-sm-4">
								<input type="text" class="form-control" name="b_heading_name"
									value="<?php echo $tcat_name; ?>">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Description Content</label>
							<div class="col-sm-8">
								<textarea name="description_content" id="editor1" class="form-control" cols="30" rows="4"
									id=""><?php echo $row['meta_description']; ?></textarea>
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Select Banner Image <span>*</span></label>
							<div class="col-sm-4">
								<input type="file" class="form-control" name="banner_image">
							</div>
						</div>
						<div class="form-group">
							<label for="" class="col-sm-2 control-label">Select Mobile Banner Image <span>*</span></label>
							<div class="col-sm-4">
								<input type="file" class="form-control" name="mbanner_image">
							</div>
						</div>


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