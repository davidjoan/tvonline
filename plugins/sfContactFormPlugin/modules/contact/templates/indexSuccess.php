<?php use_stylesheet('/sfContactFormPlugin/css/contact') ?>
<fieldset>

  <legend><?php echo $legend = (sfConfig::get('app_contact_form_legend'))?sfConfig::get('app_contact_form_legend'):'Contact Form'; ?></legend>
	<form action="<?php echo url_for('@contact') ?>" method="POST" enctype="multipart/form-data">
	  <?php if($sf_user->hasFlash('error')): ?>
	   <div id='error'>
             <?php echo $sf_user->getFlash('error') ?>
           </div>
	  <?php endif; ?> 

	  <?php if($sf_user->hasFlash('notice')): ?>
	   <div id='notice'><?php echo $sf_user->getFlash('notice') ?></div>
	  <?php endif; ?> 

	  <table cellpadding="3">
	    <tr>
	      <th><?php echo $form['name']->renderLabel(sfConfig::get('app_contact_form_field_name')) ?></th>
	      <td>
		<?php echo $form['name'] ?>
	      </td>
            </tr>
            <tr>
	      <th><?php echo $form['email']->renderLabel(sfConfig::get('app_contact_form_field_email')) ?></th>
	      <td>
		
		<?php echo $form['email'] ?>
	      </td>
	    </tr>
	    <tr>
	      <th><?php echo $form['subject']->renderLabel(sfConfig::get('app_contact_form_field_subject')) ?></th>
	      <td>
		
		<?php echo $form['subject'] ?>
	      </td>
	    </tr>
	    <tr>
	      <th valign="top"><?php echo $form['message']->renderLabel(sfConfig::get('app_contact_form_field_message')) ?></th>
	      <td >
		
		<?php echo $form['message'] ?>
		<?php echo $form['_csrf_token'] ?>
	      </td>
	    </tr>	     
                <td>&nbsp;</td>
		<td>
		  <input type="submit" value="<?php echo sfConfig::get('app_contact_form_button')?>" />
           	</td>
	     </tr>
	  </table>
	</form>
</fieldset>