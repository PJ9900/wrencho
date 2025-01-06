<?php require_once('header.php'); ?>

<?php
if (isset($_POST['form1'])) {

    $valid = 1;
    $title = $_POST['title_name'];
    $slug = $_POST['slug'];
    $content_primary = $_POST['description_content1'];
    $content_secondary = $_POST['description_content2'];
    $banner_image = $_FILES['banner_image']['name'];
    $banner_image_tmpname = $_FILES['banner_image']['tmp_name'];
    $side_image = $_FILES['side_image']['name'];
    $side_image_tmpname = $_FILES['side_image']['tmp_name'];


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

    if ($side_image != '') {
        $ext = pathinfo($side_image, PATHINFO_EXTENSION);
        $file_name = basename($side_image, '.' . $ext);
        if ($ext != 'jpg' && $ext != 'png' && $ext != 'jpeg' && $ext != 'gif' && $ext != 'webp') {
            $valid = 0;
            $error_message .= 'You must have to upload jpg, jpeg, gif or png file<br>';
        }
    } else {
        $valid = 0;
        $error_message .= 'You must have to select Side Banner Image<br>';
    }

    if ($valid == 1) {

        $statement = $pdo->prepare("INSERT into locations (title,slug,banner_img,text_editor_1,text_editor_2,text_img) VALUES(?,?,?,?,?,?)");
        if ($statement->execute(array($title, $slug, $banner_image, $content_primary, $content_secondary, $side_image))) {
            move_uploaded_file($banner_image_tmpname, 'assets/images/location/' . $banner_image);
            move_uploaded_file($side_image_tmpname, 'assets/images/location/' . $side_image);
            $success_message = 'Banner is added successfully.';
        } else {
            $error_message = 'Banner Added Failed!';
        }
    }
}
?>
<section class="content-header">
    <div class="content-header-left">
        <h1>Add Locations</h1>
    </div>
    <div class="content-header-right">
        <a href="locations.php" class="btn btn-primary btn-sm">View All</a>
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
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Title <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="title_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Slug <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="slug">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Select Banner Image <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="banner_image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Select Side Image <span>*</span></label>
                            <div class="col-sm-4">
                                <input type="file" class="form-control" name="side_image">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Content Primary</label>
                            <div class="col-sm-8">
                                <textarea name="description_content1" id="editor1" class="form-control" cols="30" rows="4"
                                    id=""></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-sm-2 control-label">Content Secondary</label>
                            <div class="col-sm-8">
                                <textarea name="description_content2" id="editor2" class="form-control" cols="30" rows="4"
                                    id=""></textarea>
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