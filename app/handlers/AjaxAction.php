<?php

namespace lazy_coder\handlers;


class AjaxAction
{

	public static function init()
	{
		if (wp_doing_ajax()) {//Если ajax используются то и будет подключаться функция
			add_action('wp_ajax_contact_form', [self::class, 'ajax_contact_form']);//подключаем функцию 
			add_action('wp_ajax_nopriv_contact_form', [self::class, 'ajax_contact_form']);
		}
	}

	public static function ajax_contact_form()
	{
		$data = $_POST['data'];//принимаем то что будем передавать с помощью данного скрипта data это data:data_form из нашего форм.джс

		$name = $data[0]['value'];
		$email = $data[1]['value'];
		$phone = $data[2]['value'];
		$msg = $data[3]['value'];

		$date = date("d.m.y");
		$time = date("H:i");

		$subject = "Обратная связь";

		$msg = "
			<p> $name </p>
			<p> $email </p>
			<p> $phone </p>
			<p> $msg </p>
		";

		$admin_email = get_option('admin_email');

		$headers  = "Content-type: text/html; charset=utf-8 \r\n";
		$headers .= "From: От кого письмо <". $admin_email .">\r\n";
		$headers .= "Reply-To: ". $admin_email ."\r\n";

		mail("$admin_email", "$date | $time | $subject", "$msg", $headers);

		wp_die();
	}
}