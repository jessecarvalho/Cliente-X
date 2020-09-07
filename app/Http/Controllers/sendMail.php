<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use stdClass;

class sendMail extends Controller
{
    public function send (Request $request){
        try {
            //Caso o usuário tenha tentado burlar o site e modificou o html para mandar mensagem com campo vazio ou
            //para mandar caracteres acima do permitido, enviar para uma tela de erro
            if ($request->name == null || $request->email == null || $request->tel == null || $request->subject == null ||
                $request->message == null || strlen($request->message) > 500){
                return view('display', [
                    "infos" => ["Erro!", "Campos não foram preenchidos corretamente, por favor, tente novamente!", "icofont-error"]
                ]);
            }
            //Iniciar uma stdClass de nome user
            $user = new stdClass();
            //Atribuir valores das requests para os indices do usuário
            $user->name = $request->name;
            $user->email = $request->email;
            $user->tel = $request->tel;
            $user->subject = $request->subject;
            $user->message = $request->message;
            //Enviar email passando os dados do usuário como parâmetro
            Mail::send(new \App\Mail\newSendMail($user));
            //Exibir a view display com uma mensagem de sucesso
            return view('display', [
                "infos" => ["Email enviado com sucesso!", "Muito obrigado pelo contato, e caso seja necessário te responderemos em breve, fique atento!", "icofont-email"]
            ]);
        } catch (\Exception $exception){
            return view('display', [
                "infos" => ["Tivemos algum problema com o envio!", "Sentimos muito! Tente novamente mais tarde!", "icofont-error"]
            ]);
        }
        }

}
