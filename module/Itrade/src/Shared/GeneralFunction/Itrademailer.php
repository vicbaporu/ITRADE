<?php

namespace Shared\GeneralFunction;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Itrademailer
 *
 * @author Castanedo
 */
use PHPMailer;

class Itrademailer {
    
    public $host = 'smtp.gmail.com';
    public $port = 587;
    public $username = 'dcastanedob@gmail.com';
    public $password = 'm4kam4ka1490';
    
    public function welcomeEmail($cliente,$password){

        $mail = new \PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug  = 0;  
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = $this->host;
        $mail->Port = $this->port; 
	$mail->Username = $this->username;   
	$mail->Password = $this->password;
        $mail->CharSet = 'UTF-8';
        $mail->SetFrom('system@itrademexico.com.mx', 'ITRADE');
        $mail->Subject = 'Bienvenido a ITRADE';
        //EL CONTENIDO
        $body = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/files/email/welcome_email.html');
        $body = str_replace('@@cliente_email', $cliente->getClienteEmail(), $body);
        $body = str_replace('@@cliente_password', $password, $body);
        $mail->Body = $body;
        $mail->IsHTML(true);
        $mail->AddAddress($cliente->getClienteEmail());
        //$mail->AddAddress('dcastanedob@gmail.com');
        if(!$mail->Send()) {
            $error = 'Mail error: '.$mail->ErrorInfo;   
            return false;
	} else {
            $error = 'Message sent!';
            return true;
	}

    }
    
    public function changeStatusEmail($cliente,$expediente_folio,$new_status){
        
        $mail = new \PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug  = 0;  
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = $this->host;
        $mail->Port = $this->port; 
	$mail->Username = $this->username;   
	$mail->Password = $this->password;
        $mail->CharSet = 'UTF-8';
        $mail->SetFrom('system@itrademexico.com.mx', 'ITRADE');
        $mail->Subject = 'NOTIFICACIÓN CAMBIO DE ESTATUS';
        //EL CONTENIDO
        $body = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/files/email/change_status.html');
        $body = str_replace('@@expediente_folio', $expediente_folio, $body);
        $body = str_replace('@@new_status', $new_status, $body);
        $mail->Body = $body;
        $mail->IsHTML(true);
        $mail->AddAddress($cliente->getClienteEmail());
        //$mail->AddAddress('dcastanedob@gmail.com');
        if(!$mail->Send()) {
            $error = 'Mail error: '.$mail->ErrorInfo;   
            return false;
	} else {
            $error = 'Message sent!';
            return true;
	}
    }
    
    public function newExpedienteEmail($cliente,$expediente_folio){
        
        $mail = new \PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPDebug  = 0;  
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = $this->host;
        $mail->Port = $this->port; 
	$mail->Username = $this->username;   
	$mail->Password = $this->password;
        $mail->CharSet = 'UTF-8';
        $mail->SetFrom('system@itrademexico.com.mx', 'ITRADE');
        $mail->Subject = 'APERTURA DE EXPEDIENTE';
        //EL CONTENIDO
        $body = file_get_contents($_SERVER['DOCUMENT_ROOT'].'/files/email/new_expediente.html');
        $body = str_replace('@@expediente_folio', $expediente_folio, $body);
        $mail->Body = $body;
        $mail->IsHTML(true);
        $mail->AddAddress($cliente->getClienteEmail());
        //$mail->AddAddress('dcastanedob@gmail.com');
        if(!$mail->Send()) {
            $error = 'Mail error: '.$mail->ErrorInfo;   
            return false;
	} else {
            $error = 'Message sent!';
            return true;
	}
    }
    
    
    
    
}
