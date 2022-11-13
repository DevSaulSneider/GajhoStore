<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;

class MailController extends Controller
{
    public function sendEmail()
	{
		$details=[
			'title' => 'Correo de gajhostore enviado',
			'body' => 'Este es un ejemplo para correos'
			];

			Mail::to("gaelinho76@gmail.com")->send(new TestMail($details));
			return "Correo Electronico Enviado";
		}
}
