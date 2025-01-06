<?php require_once('header.php'); ?>

<?php
if (isset($_POST['form1'])) {
    $valid = 1;

    if (empty($_FILES['image']['name'])) {
        $final_name = $_POST['oimage'];
    } else {
        $path = $_FILES['image']['name'];
        $path_tmp = $_FILES['image']['tmp_name'];
        if ($path != '') {
            $ext = pathinfo($path, PATHINFO_EXTENSION);

            $file_name = basename($path, '.' . $ext);
            if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'webp') {
                $valid = 0;
                $error_message .= 'You must have to upload jpg, jpeg, gif or png file  cc<br>';
            }
        } else {
            $valid = 0;
            $error_message .= 'You must have to select a  Banner<br>';
        }
        $final_name = $path;
        move_uploaded_file($path_tmp, 'assets/images/location/' . $final_name);
    }

    if (empty($_FILES['simage']['name'])) {
        $mfinal_name = $_POST['osimage'];
    } else {
        $mpath = $_FILES['simage']['name'];
        $mpath_tmp = $_FILES['simage']['tmp_name'];
        if ($mpath != '') {
            $mext = pathinfo($mpath, PATHINFO_EXTENSION);

            $mfile_name = basename($mpath, '.' . $mext);
            if ($mext != 'jpg' && $mext != 'png' && $mext != 'jpeg' && $mext != 'gif' && $mext != 'webp') {
                $valid = 0;
                $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
            }
        } else {
            $valid = 0;
            $error_message .= 'You must have to select a mobile Banner<br>';
        }
        $mfinal_name = $mpath;
        move_uploaded_file($mpath_tmp, 'assets/images/location/' . $mfinal_name);
    }
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $description = $_POST['description_content1'];
    $description1 = $_POST['description_content2'];
    if ($valid == 1) {
        // Saving data into the main table tbl_top_category
        $statement = $pdo->prepare("update locations set title=?,slug=?,text_editor_1=?,text_editor_2=?,banner_img=?,text_img=? where id=?");
        if ($statement->execute(array($title, $slug, $description, $description1, $final_name, $mfinal_name, $_REQUEST['id']))) {
            $success_message = 'Banner has been Updated successfully.';
            unlink('assets/images/location/' . $_POST['oimage']);
            unlink('assets/images/location/' . $_POST['osimage']);
        }
    }
}
?>
<section class="content-header">
    <div class="content-header-left">
        <h1>Edit Banners</h1>
    </div>
    <div class="content-header-right">
        <a href="locations.php" class="btn btn-primary btn-sm">View All</a>
    </div>
</section>
<?php
if (!isset($_REQUEST['id'])) {
    header('location: logout.php');
    exit;
} else {
    // Check the id is valid or not
    $statement = $pdo->prepare("SELECT * FROM locations WHERE id=?");
    $statement->execute(array($_REQUEST['id']));
    $total = $statement->rowCount();
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    if ($total == 0) {
        header('location: logout.php');
        exit;
    }
}
foreach ($result as $row) {
    $banner = $row['banner_img'];
    $sbanner = $row['text_img'];
    $title = $row['title'];
    $slug = $row['slug'];
    $description = $row['text_editor_1'];
    $description1 = $row['text_editor_2'];
}
?>

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
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Title <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="title"
                                    value="<?php echo $title; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Slug <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="slug" value="<?php echo $slug; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Content primary</label>
                            <div class="col-sm-8">
                                <textarea name="description_content1" id="editor1" class="form-control" cols="30" rows="4"
                                    id=""><?php echo $description; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Content Secondary</label>
                            <div class="col-sm-8">
                                <textarea name="description_content2" id="editor2" class="form-control" cols="30" rows="4"
                                    id=""><?php echo $description1; ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Existing Banner</label>
                            <div class="col-sm-9" style="padding-top:5px">
                                <img src="assets/images/location/<?php echo $banner; ?>" alt=" banner" style="width:400px;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Select Banner Image <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="image">
                                <input type="hidden" class="form-control" value="<?php echo $banner; ?>" name="oimage">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Existing Side Banner</label>
                            <div class="col-sm-9" style="padding-top:5px">
                                <img src="assets/images/location/<?php echo $sbanner; ?>" alt="Mobile banner" style="width:400px;">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Select Mobile Banner Image <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="simage">
                                <input type="hidden" class="form-control" value="<?php echo $sbanner; ?>" name="osimage">
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