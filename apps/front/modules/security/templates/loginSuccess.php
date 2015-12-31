<?php use_helper('Bootflat'); ?>


<div class="row">
          <div class="col-md-12">
            
<form class="xform-horizontal form-signin" action="<?php echo url_for('security/login') ?>"  method="POST">
  			
<div style="margin-bottom:15px;">
<?php

if( $form->hasGlobalErrors() ):
		?>
		
		<div class="alert alert-danger">
<button class="close" aria-hidden="true" data-dismiss="alert" type="button">×</button>
<strong>Oh snap!</strong>
<?php echo $form->renderGlobalErrors(); ?>
</div>
			
		
			
		<?php 
 
	endif; ?>





				<?php foreach(array($form['username'], $form['passwd']) as $sfFormFieldObj): ?>
					<?php printAsBootstrapForm($form, $sfFormFieldObj); ?>
				<?php endforeach; ?>


</div>
<div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
</div>

</form>

</div>

</div>









