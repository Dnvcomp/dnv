<?php

namespace Dnv\Http\Controllers;

use Dnv\Repositories\MenusRepositopy;
use Illuminate\Http\Request;
use Dnv\Http\Requests;
use Mail;

class ContactsController extends DnvController
{
    public function __construct()
    {
        parent::__construct(new \Dnv\Repositories\MenusRepositopy(new \Dnv\Menu));
        $this->template = env('DNV').'.contacts';
    }
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $messages = [
                'required' => 'Поле :attribute обязательно к заполнению',
                'email' => 'Поле :attribute должно содержать правильный е-майл адрес'
            ];
            $this->validate($request, [
                'name' => 'required|max:255',
                'email' => 'required|email',
                'text' => 'required'
            ], $messages);
            $data = $request->all();
            $result = Mail::send(env('DNV').'.email', ['data' => $data], function ($m) use ($data) {
                $mail_admin = env('MAIL_ADMIN');
                $m->from($data['email'], $data['name']);
                $m->to($mail_admin, 'Mr.Admin')->subject('Question');
            });
            if ($result) {
                return redirect()->route('contacts')->with('status', 'Сообщение отправлено');
            }
        }

        $this->title = 'Наши контакты';
        $this->description = 'Контактная информация';
        $this->keywords = 'контакты информация телефон емайл адреса';

        $content = view(env('DNV').'.contact_content')->render();
        $this->vars = array_add($this->vars,'content',$content);
        return $this->renderOutput();
    }
}
