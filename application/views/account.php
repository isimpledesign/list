<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="http://twitter.github.com/bootstrap/1.3.0/bootstrap.min.css">
</head>

<body>

<div class="container">
<ul>
<li><a href="http://localhost/list/index.php/">Home</a></li>
<li><a href="http://localhost/list/index.php/account">Your Account</a></li>
</ul>
<div class="row">

	<div class="span13">
<h2>Your Account</h2>

<?php 
$attributes = array('class' => 'form-stacked', 'id' => 'form-stacked');
echo form_open('account/add_cat',$attributes); ?>
        <fieldset>
          <legend>Add Category</legend>
          <div class="clearfix">
            <label for="xlInput3">Name</label>
            <div class="input">
              <input class="xlarge" id="cat" name="cat" size="30" type="text">
            </div>
          </div><!-- /clearfix -->
        </fieldset>
        <div class="actions">
          <button type="submit" class="btn primary">Add</button>
        </div>
<?php echo form_close(); ?>
      

</div>

<div class="span3">

<h2>Sidebar</h2>

</div>

</div><!-- end row -->

</div>

</body>
</html>