<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function sendOrder(Request $request){
        $fio = $request['fio'];
        $phone = $request['phone'];
        $email = $request['email'];
        $message = "Пользователь: $fio <br> номер телефона: $phone <br> Email: $email";
        $success = mail('b.filonenko@gmail.com', 'PR-webkey заявка', $message);
        if($success) {
            return view('actions.success');
        } else return view('actions.work');
    }

    public function sendAsideOrder(Request $request){
        $fio = $request['fio'];
        $phone = $request['phone'];
        $email = $request['email'];
        $site = $request['site'];
        $service = $request['service'];
        $message = "Пользователь: $fio <br> номер телефона: $phone <br> Email: $email";
        if($site){$message .= "<br> Сайт: $site";}
        if($service){$message .= "<br> Заказал услугу: $service";}
        $success = mail('b.filonenko@gmail.com', 'PR-webkey заявка', $message);
        if($success) {
            return view('actions.success');
        } else return view('actions.work');
    }
    public function order(Request $request){
        $fio = $request['fio'];
        $phone = $request['phone'];
        $email = $request['email'];
        $service = $request['service'];
        $user_message = $request['message'];
        $message = "Пользователь: $fio <br> номер телефона: $phone <br> Email: $email";
        if($service){$message .= "<br> Заказал услугу: $service";}
        if($user_message) {
            $message .= "<br> Так же он оставил сообщение: $user_message";
        }
        $success = mail('b.filonenko@gmail.com', 'PR-webkey заявка', $message);
        if($success) {
            return view('actions.success');
        } else return view('actions.work');
    }

    public function publicSmi(Request $request){
        $fio = $request['fio'];
        $phone = $request['phone'];
        $email = $request['email'];
        $site = $request['site'];
        $user_message = $request['message'];
        $message = "Пользователь: $fio <br> номер телефона: $phone <br> Email: $email <br>
                    хочет разместить информацию на сайте $site ";

        if($user_message) {$message .= "<br> Так же он оставил сообщение: $user_message";}
        if ($request->hasFile('ofile')){
            $file = $request->file('ofile');
        } else {$file = false;}

        $mailTo = "b.filonenko@gmail.com"; // кому
        $from = $email; // от кого
        $subject = "PR webkey Публикация в сми"; // тема письма
        $success = self::sendMailAttachment($mailTo, $from, $subject, $message, $file); // отправка письма c вложением

//$r = sendMailAttachment($mailTo, $from, $subject, $message); // отправка письма без вложения
//echo ($r)?'Письмо отправлено':'Ошибка. Письмо не отправлено!';

        /**
         * Отправка письма с вложением
         * @param string $mailTo
         * @param string $from
         * @param string $subject
         * @param string $message
         * @param string|bool $file - не обязательный параметр, путь до файла
         *
         * @return bool - результат отправки
         */


       // $success = mail('b.filonenko@gmail.com', 'PR-webkey заявка', $message);
        if($success) {
            return view('actions.success');
        } else return view('actions.work');
    }
   private function sendMailAttachment($mailTo, $from, $subject, $message, $file = false){
        $separator = "---"; // разделитель в письме
        // Заголовки для письма
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "From: $from\nReply-To: $from\n"; // задаем от кого письмо
        $headers .= "Content-Type: multipart/mixed; boundary=\"$separator\""; // в заголовке указываем разделитель
        // если письмо с вложением
        if($file){
            $bodyMail = "--$separator\n"; // начало тела письма, выводим разделитель
            $bodyMail .= "Content-type: text/html; charset='utf-8'\n"; // кодировка письма
            $bodyMail .= "Content-Transfer-Encoding: quoted-printable"; // задаем конвертацию письма
            $bodyMail .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode(basename($file))."?=\n\n"; // задаем название файла
            $bodyMail .= $message."\n"; // добавляем текст письма
            $bodyMail .= "--$separator\n";
            $fileRead = fopen($file, "r"); // открываем файл
            $contentFile = fread($fileRead, filesize($file)); // считываем его до конца
            fclose($fileRead); // закрываем файл
            $bodyMail .= "Content-Type: application/octet-stream; name==?utf-8?B?".base64_encode(basename($file))."?=\n";
            $bodyMail .= "Content-Transfer-Encoding: base64\n"; // кодировка файла
            $bodyMail .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode(basename($file))."?=\n\n";
            $bodyMail .= chunk_split(base64_encode($contentFile))."\n"; // кодируем и прикрепляем файл
            $bodyMail .= "--".$separator ."--\n";
            // письмо без вложения
        }else{
            $bodyMail = $message;
        }
        $result = mail($mailTo, $subject, $bodyMail, $headers); // отправка письма
        return $result;
    }
}
