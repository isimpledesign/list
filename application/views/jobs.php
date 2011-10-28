<?php $this->load->view('header'); ?>

<ul>
<li><a href="http://localhost/list/index.php/">Home</a></li>
<li><a href="http://localhost/list/index.php/account">Your Account</a></li>
</ul>
<div class="row">

	<div class="span13">
<h2>Pages</h2>


<?php foreach($records as $v){ ?>
<div class="alert-message warning">
<?php 
echo form_open('jobs/delete_listing'); ?>
<input type="hidden" value="<?php echo $v->id; ?>" name="id"/>
<button type="submit" class="close">x</button>
<?php echo form_close(); ?>
	<p><strong><?php echo $v->title; ?></strong><?php echo substr($v->body,0,100); ?></p>
</div>	
<?php } ?>


<?php 
$attributes = array('class' => 'form-stacked', 'id' => 'form-stacked');
echo form_open('jobs/add_listing',$attributes); ?>
        
        <fieldset>
          <legend>Add List</legend>
          <div class="clearfix">
            <label for="xlInput3">Title</label>
            <div class="input">
              <input class="xlarge" id="title" name="title" size="30" type="text">
            </div>
          </div><!-- /clearfix -->
         <div class="clearfix">
            <label for="textarea">Body</label>
            <div class="input">
              <textarea class="xxlarge" id="body" name="body" rows="3"></textarea>
              <span class="help-block">
                Block of help text to describe the field above if need be.
              </span>
            </div>
          </div>
          <div class="clearfix">
            <label for="normalSelect">Select</label>
            <div class="input">
              <select name="normalSelect" id="normalSelect">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>5</option>
              </select>
            </div>
          </div>
        </fieldset>
        <div class="actions">
          <button type="submit" class="btn primary">Add</button>
        </div>
<?php echo form_close(); ?>
      

</div>

<div class="span3">

<h2>Sidebar</h2>
<?php $this->load->view('sidebar'); ?>

</div>

</div><!-- end row -->


<?php $this->load->view('footer'); ?>