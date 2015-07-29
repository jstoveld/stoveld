<?php 

	$path=$_SERVER['SCRIPT_FILENAME'];

	if(strcmp(basename($path),'index.php')==0) require_once(dirname($path).'/plugin/contact-form/config.php');
	else require_once(dirname($path).'/../plugin/contact-form/config.php');
?>

<div class="layout-50 clear-fix overflow-fix page-4">

    <div class="layout-50-left">

        <h3>On The Map</h3>
        <div id="map"></div>

        <br/>

        <h3>Anna Brown Studio</h3>
        <p>
            1370 Northwood, 15<br/>
            Houston, TX77009, United States Of America
        </p>

        <ul class="no-list contact-list">
            <li class="contact-list-phone"><span>Phone:</span> 1.800.353.252</li>
            <li class="contact-list-fax"><span>Fax:</span> 1.800.353.253</li>
            <li class="contact-list-mail"><span>Mail:</span> anna.brown@mail.com</li>
        </ul>

    </div>

    <div class="layout-50-right">

        <h3>Get In Touch</h3>

        <form name="contact-form" id="contact-form" action="" method="post">

            <div>

                <div class="form-line block">
                    <input type="text" name="contact-form-name" id="contact-form-name" value="<?php echo CONTACT_FORM_LABEL_DATA_NAME; ?>" onfocus="clearInput(this,'focus','<?php echo CONTACT_FORM_LABEL_DATA_NAME; ?>')" onblur="clearInput(this,'blur','<?php echo CONTACT_FORM_LABEL_DATA_NAME; ?>')"/>	
                </div>
                <div class="form-line block">
                    <input type="text" name="contact-form-mail" id="contact-form-mail" value="<?php echo CONTACT_FORM_LABEL_DATA_MAIL; ?>" onfocus="clearInput(this,'focus','<?php echo CONTACT_FORM_LABEL_DATA_MAIL; ?>')" onblur="clearInput(this,'blur','<?php echo CONTACT_FORM_LABEL_DATA_MAIL; ?>')"/>	
                </div>					
                <div class="form-line block">
                    <textarea rows="0" cols="0" name="contact-form-message" id="contact-form-message" onfocus="clearInput(this,'focus','<?php echo CONTACT_FORM_LABEL_DATA_MESSAGE; ?>')" onblur="clearInput(this,'blur','<?php echo CONTACT_FORM_LABEL_DATA_MESSAGE; ?>')"><?php echo CONTACT_FORM_LABEL_DATA_MESSAGE; ?></textarea>	
                </div>

                <div class="form-line">
					<div class="block float-right">
						<input type="submit" class="button" id="contact-form-send" value="Send"/>
					</div>
					<div class="float-right margin-right-10">
						<input type="reset" class="button" id="contact-form-reset" value="Reset"/>
					</div>
                </div>

            </div>	

        </form>

    </div>

</div>
