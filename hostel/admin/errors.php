<?php  if (count($errors) > 0) : ?>
  <div style="color: red;" class="error">
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  	<br>
  </div>
<?php  endif ?>
