<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Обучение");
?>
<div class="learningForm">
	<p>
		 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum, accusamus. Deserunt, dignissimos, esse. Possimus, saepe quisquam eum veniam nostrum veritatis mollitia minus qui. Laboriosam nostrum ipsam magni alias, rerum doloremque praesentium quasi magnam voluptates odit error modi accusantium qui fuga aut perspiciatis voluptas voluptatem tenetur quidem sapiente. Id ex ab vitae soluta cumque minus magni eum praesentium, nihil blanditiis. Reiciendis quo eligendi nam illum iste fugit labore similique, voluptatum, in nisi laborum sit dolore voluptates. Consectetur quidem nostrum, quis sunt necessitatibus debitis, aliquid aliquam amet temporibus unde, maiores atque illum molestiae distinctio deleniti recusandae totam quam ea doloremque soluta quos.
	</p>
	 <?$APPLICATION->IncludeComponent(
    	"bitrix:main.feedback",
    	"learning_form",
    	Array(
    		"EMAIL_TO" => "sadovi@rarus.ru",
    		"EVENT_MESSAGE_ID" => array(),
    		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
    		"REQUIRED_FIELDS" => array(),
    		"USE_CAPTCHA" => "N"
    	)
    );?>
    </div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
