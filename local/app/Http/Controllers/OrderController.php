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
        $message = "Пользователь: $fio <br> номер телефона: $phone <br> Email: $email";
        if($service){$message .= "<br> Заказал услугу: $service";}
        $success = mail('b.filonenko@gmail.com', 'PR-webkey заявка', $message);
        if($success) {
            return view('actions.success');
        } else return view('actions.work');
    }
}
