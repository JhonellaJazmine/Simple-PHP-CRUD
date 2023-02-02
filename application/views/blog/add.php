<!-- <!DOCTYPE html>
<html>
<head>
    <title>Blog</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap-theme.min.css') ?>">

</head>
<body>

<div class="navbar navbar-default">
    <div class="container">
    <h2><span class="glyphicon glyphicon-home"></span>&nbsp;Welcome to my blog</h2>
    </div>
</div>
<div class="container"> -->
<h3>Add Blog</h3>
    <a href="<?php echo base_url('blog/index'); ?>" class="btn btn-default">Back</a>
    <form action="<?php echo base_url('blog/submit')?>" method="post", class="form-horizontal">
        <div class="form-group"> 
            <label for="title" class="col-md-2 text-right">Title</label>
            <div class="col-md-10">
                <input type="text" name="txt_title" class="form-control" required>
            </div>
        </div>
        <div class="form-group"> 
            <label for="description" class="col-md-2 text-right">Description</label>
            <div class="col-md-10">
                <textarea name="txt_description" class="form-control"></textarea>
            </div>
        </div>
        <div class="form-group"> 
            <label class="col-md-2 text-right"></label>
            <div class="col-md-10">
                <input type="submit" name="btnSave" class="btn btn-primary" value="Save">
            </div>
        </div>

    </form>
    