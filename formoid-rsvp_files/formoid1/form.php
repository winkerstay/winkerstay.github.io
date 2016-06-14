<?php

define('EMAIL_FOR_REPORTS', '');
define('RECAPTCHA_PRIVATE_KEY', '@privatekey@');
define('FINISH_URI', 'http://');
define('FINISH_ACTION', 'message');
define('FINISH_MESSAGE', 'Thanks for RSVPing to our wedding!
We are so excited and can't wait to see you all!
Thank you.

Love,
Greg + Erica');
define('UPLOAD_ALLOWED_FILE_TYPES', 'doc, docx, xls, csv, txt, rtf, html, zip, jpg, jpeg, png, gif');

define('_DIR_', str_replace('\\', '/', dirname(__FILE__)) . '/');
require_once _DIR_ . '/handler.php';

?>

<?php if (frmd_message()): ?>
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-metro-cyan.css" type="text/css" />
<span class="alert alert-success"><?php echo FINISH_MESSAGE; ?></span>
<?php else: ?>
<!-- Start Formoid form-->
<link rel="stylesheet" href="<?php echo dirname($form_path); ?>/formoid-metro-cyan.css" type="text/css" />
<script type="text/javascript" src="<?php echo dirname($form_path); ?>/jquery.min.js"></script>
<form class="formoid-metro-cyan" style="background-color:94B2A9;font-size:14px;font-family:'Open Sans','Helvetica Neue','Helvetica',Arial,Verdana,sans-serif;color: 333300;max-width:480px;min-width:150px" method="post"><div class="title"><h2>RSVP</h2></div>
	<div class="element-input<?php frmd_add_class("input"); ?>"><label class="title">Your name<span class="required">*</span></label><input class="large" type="text" name="input" required="required"/></div>
	<div class="element-email<?php frmd_add_class("email"); ?>"><label class="title">Email<span class="required">*</span></label><input class="large" type="email" name="email" value="" required="required"/></div>
	<div class="element-checkbox<?php frmd_add_class("checkbox"); ?>"><label class="title">Can you attend?</label>		<div class="column column1"><label><input type="checkbox" name="checkbox[]" value="Yes, I love the mountains!"/ ><span>Yes, I love the mountains!</span></label><label><input type="checkbox" name="checkbox[]" value="No, I'm allergic to trees."/ ><span>No, I'm allergic to trees.</span></label><label><input type="checkbox" name="checkbox[]" value="Not sure yet!"/ ><span>Not sure yet!</span></label></div><span class="clearfix"></span>
</div>
	<div class="element-multiple<?php frmd_add_class("multiple"); ?>"><label class="title">How many nights will you be staying?<span class="required">*</span></label><div class="large"><select data-no-selected="Nothing selected" name="multiple[]" multiple="multiple" required="required">

		<option value="Friday to Monday (all three nights)">Friday to Monday (all three nights)</option>
		<option value="Friday to Sunday (two nights)">Friday to Sunday (two nights)</option>
		<option value="Saturday to Monday (two nights)">Saturday to Monday (two nights)</option>
		<option value="Friday to Saturday (one night)">Friday to Saturday (one night)</option>
		<option value="Saturday to Sunday (one night)">Saturday to Sunday (one night)</option>
		<option value="Just the Wedding (no lodging)">Just the Wedding (no lodging)</option></select></div></div>
	<div class="element-multiple<?php frmd_add_class("multiple1"); ?>"><label class="title">How many people in your party will be staying?</label><div class="large"><select data-no-selected="Nothing selected" name="multiple1[]" multiple="multiple" >

		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
		<option value="6">6</option>
		<option value="7">7</option>
		<option value="8">8</option>
		<option value="9">9</option>
		<option value="10">10</option></select></div></div>
	<div class="element-textarea<?php frmd_add_class("textarea"); ?>"><label class="title">Please list the full names of the people attending from your party.</label><textarea class="medium" name="textarea" cols="20" rows="5" ></textarea></div>
	<div class="element-input<?php frmd_add_class("input1"); ?>"><label class="title">Questions? Anthing else to add?</label><input class="large" type="text" name="input1" /></div>
<div class="submit"><input type="submit" value="Submit"/></div></form><script type="text/javascript" src="<?php echo dirname($form_path); ?>/formoid-metro-cyan.js"></script>

<!-- Stop Formoid form-->
<?php endif; ?>

<?php frmd_end_form(); ?>