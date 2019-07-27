<? 

if (isset($_POST['name'])) {$name = $_POST['name'];}
if (isset($_POST['email'])) {$email = $_POST['email'];}
if (isset($_POST['subject'])) {$subject = $_POST['subject'];}
if (isset($_POST['text_message'])) {$text_message = $_POST['text_message'];}


$to = "rockbattle@mail.ru"; 
// емайл получателя 

$subject = "Проверка отправки писем"; 
// тема письма 

$message = "Здравствуйте
Если вы читаете это письмо значит все ок
Почтовый робот"; 
// текст сообщения 

$mailheaders = "Content-type:text/plain;charset=windows-1251rn"; 
// почтовый заголовок, указывает формат письма - текстовый и кодировку

$mailheaders .= "From: SiteRobot <noreply@siterobot.ru>rn"; 
// почтовый заголовок, указывает емайл отправителя


$mailheaders .= "Reply-To: noreply@siterobot.rurn"; 
// почтовый заголовок, указывает емайл для ответа 
// лучше если емайл для ответа совпадает с емайлом отправителя, иначе некоторые почтовые сервисы могут классифицировать письмо как спам 


mail($email, $subject, $message, $mailheaders);
// отправляем письмо 





$address = "boyrd3@mail.ru";

$message = "".$text_message."\nС уважением, ".$name."\nМой контактный e-mail: ".$email."";

//$verify = mail($address,$subject,$message,"Content-type:text/plain; Charset=utf-8\r\n");


if (/*$verify == */'true')
{
echo "
<link rel='stylesheet' type='text/css' href='style.css'/>
<table width='600' height='300' align='center'>
 <tr>
 <td class='warning_table' width='220' align='center' valign='middle'>
 
 <img align='center' src='images/warning.png'>
 <div align='center' class='warning_font_big'>Поздравляем!</div>
 <div align='center' class='warning_font' align='left'>Ваше письмо доставлено администратору. Через некоторое время Вы получите ответ!</div>
 <p align='center'><a href='../index.html' class='all_links'>Вернуться назад</a></div></p>
 
 </td>
 </tr>
 </table>";
}
else 
{
echo "
<link rel='stylesheet' type='text/css' href='style.css'/>
<table width='600' height='300' align='center'>
 <tr>
 <td class='warning_table' width='220' align='center' valign='middle'>
 
 <img align='center' src='images/warning.png'>
 <div align='center' class='warning_font_big'>ОШИБКА!!!</div>
 <div align='center' class='warning_font' align='left'>Ваше письмо не доставлено. Повторите отправку немного позже!</div>
 <p align='center'><a href='index.html' class='all_links'>Вернуться назад</a></div></p>
 
 </td>
 </tr>
 </table>";
}
?>