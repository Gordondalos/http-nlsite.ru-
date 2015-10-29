<?php

$errors = array();
$form_data = array();

if ($_POST['client_name'] == "")
    {
        $errors['name'] = 'Введите Ваше имя';
    }

if ($_POST['client_phone'] == "")
{
    $errors['name'] = 'Введите Ваш телефон';
}

if (!empty($errors))
    {
        $form_data['success'] = false;
        $form_data['errors']  = $errors;
    }
else
    {
		$to = 'info@brand-maker.ru';
		$from = 'info@brand-maker.ru';
		$subject = "=?utf-8?B?" . base64_encode("Новая заявка на сотрудничество с сайта {$_SERVER['HTTP_HOST']}") . "?=";
        $message = "<h1>Заявка с сайта ".$_SERVER['HTTP_HOST']."</h1>
		<h2>Данные заказчика:</h2>	
		<ul style=\"margin:0; padding:0;\">
			<li style=\"list-style:none;\"><b>Имя: </b>".$_POST['client_name']."</li>
			<li style=\"list-style:none;\"><b>Телефон: </b>".$_POST['client_phone']."</li>
		</ul>";

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=utf8' . "\r\n";
		$headers .= "From:"."=?utf-8?B?" . base64_encode("Brand-Maker") . "?=". "<$from>\r\n";

        if (mail($to, $subject, $message, $headers))
        {
			$form_data['success'] = true;
			$form_data['posted'] = 'Мы свяжемся с Вами в течение 10 минут.';
        }
        else
        {
			$errors['name'] = 'Ошибка отправки письма';
		}
    }


echo json_encode($form_data);

?>