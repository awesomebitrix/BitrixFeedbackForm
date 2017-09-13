<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

use Bitrix\Main\Page\Asset;
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/components/bitrix/main.feedback/learning_form/js/script.js");

?>
<div class="feedbackform">
    <div class="modal-top w-clearfix">
        <h4 class="modal-title_new">Оставить заявку на обучение</h4>
    </div>
    <div class="modal-body form-horizontal">
        <div class="modal-rep-section">
        </div>
        <hr>
        <div class="formWrapper">
            <?if(!empty($arResult["ERROR_MESSAGE"]))
            {
            	foreach($arResult["ERROR_MESSAGE"] as $v)
            		ShowError($v);
            }
            if(strlen($arResult["OK_MESSAGE"]) > 0)
            {
            	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
            }
            ?>
            <form action="<?=POST_FORM_ACTION_URI?>" method="POST" id="learning-hunter-form">
            <?=bitrix_sessid_post()?>

                <div class="form-group has-feedback required-form-section w-row">
                    <label for="globalcontactform-name" class="control-label">ФИО:*</label>
                    <div class="contact-form-input">
                    <input type="text" class="form-control" id="globalcontactform-name" name="globalcontactform-name" required="">
                    </div>
                    <div class="form-control-feedback" aria-hidden="true">
                    </div>
                </div>
                <div class="form-group has-feedback required-form-section w-row">
                    <label for="globalcontactform-phone" class="control-label">Телефон:*</label>
                    <div class="contact-form-input">
                    <input type="tel" class="form-control" id="globalcontactform-phone" name="globalcontactform-phone" required="">
                    </div>
                    <div class="form-control-feedback" aria-hidden="true">
                    </div>
                </div>
                <div class="form-group has-feedback required-form-section w-row">
                    <label for="globalcontactform-email" class=" control-label">Email:</label>
                    <div class="contact-form-input">
                    <input type="email" class="form-control" id="globalcontactform-email" name="globalcontactform-email">
                    </div>
                    <div class="form-control-feedback" aria-hidden="true">
                    </div>
                </div>
                <hr>
                <div class="form-group w-row">
                     <label for="globalcontactform-comment" class="control-label">Комментарий:</label>
                    <div class="contact-form-input">
                    <textarea style="max-width: 878px;" class="form-control" id="globalcontactform-comment" name="globalcontactform-comment"></textarea>
                    </div>
                </div>

            	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
            	<div class="mf-captcha">
            		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA")?></div>
            		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
            		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
            		<div class="mf-text"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
            		<input type="text" name="captcha_word" size="30" maxlength="50" value="">
            	</div>
            	<?endif;?>

                <div class="modal-footer">
                    <input id="feedback-submit" value="<?=GetMessage("MFT_SUBMIT")?>" type="submit">
                    <input type="hidden" name="PARAMS_HASH" value="<?=$arResult["PARAMS_HASH"]?>">
                </div>
            </form>
        </div>
    </div>
</div>
