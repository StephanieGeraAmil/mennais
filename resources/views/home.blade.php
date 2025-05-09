@extends('layouts.hometemplate')
@section('headers')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Cosmos, Read what our customers say, ​View our work, discover more about us, read more of our stories, explore our archive or get in touch., How We Work, ​Uncover and meet customer needs., ​Want your brand to stand above the rest?, Get in touch">
    <meta name="description" content={{env('EVENT_NAME')}}>
    <title>Inicio</title>
    <link rel="stylesheet" href="/css/nicepage.css" media="screen">
    <link rel="stylesheet" href="/css/inicio.css" media="screen">
    <script class="u-script" type="text/javascript" src="/js/jquery.js" defer=""></script>
    <meta name="generator" content="isf.uy">
    <link rel="icon" href="images/favicon1.png">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    
<script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "AUDEC_PE_feb_24"
}</script>
    <meta name="theme-color" content="#ddd6f3">
    <meta property="og:title" content="Inicio">
    <meta property="og:description" content={{env('EVENT_NAME')}}>
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/">
@endsection

@section('alert_message')
@if (session('success_contact'))  
<div style="background-color: #adf6f2;padding: 5px;border: 1px solid #1e403e;color: #1e403e;">El mensaje se envió correctamente.</div>     
@endif
@endsection

@section('contact_form')
<form action="/contact" method="POST" class="u-clearfix u-form-custom-backend u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;" redirect="true">
  @csrf
  <div class="u-form-group u-form-name">
    <label for="name-fbd3" class="u-form-control-hidden u-label"></label>
    <input type="text" placeholder="Nombre y Apellido" id="name-fbd3" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-14 u-white" value="{{old('name')}}" required="">
  </div>
  <div class="u-form-email u-form-group">
    <label for="email-fbd3" class="u-form-control-hidden u-label"></label>
    <input type="email" placeholder="email" id="email-fbd3" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-14 u-white" required=""  value="{{old('email')}}">
  </div>
  <div class="u-form-group u-form-group-3">
    <label for="phone-1e30" class="u-form-control-hidden u-label"></label>
    <input type="text" placeholder="Teléfono" id="phone-1e30" name="phone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-14 u-white" required="required"  value="{{old('phone')}}">
  </div>
  <div class="u-form-group u-form-message">
    <label for="message-fbd3" class="u-form-control-hidden u-label"></label>
    <textarea placeholder="Mensaje" rows="4" cols="50" id="message-fbd3" name="message" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-14 u-white" required="">{{old('message')}}</textarea>
  </div>
  {{-- <div class="u-align-right u-form-group u-form-submit">    
    <a onclick="$(this).closest('form').submit();" class="custom-page-typo-item u-active-custom-color-22 u-border-2 u-border-active-palette-1-light-2 u-border-hover-palette-1-dark-1 u-border-palette-1-dark-1 u-btn u-btn-submit u-button-style u-hover-palette-1-dark-1 u-palette-1-light-3 u-btn-3">ENVIAR</a>
    <input type="submit" value="submit" class="u-form-control-hidden">
  </div> --}}
  <div class="u-align-right u-form-group u-form-submit">
    <button type="submit" class="custom-page-typo-item u-active-custom-color-22 u-border-2 u-border-active-palette-1-light-2 u-border-hover-palette-1-dark-1 u-border-palette-1-dark-1 u-btn u-btn-submit u-button-style u-hover-palette-1-dark-1 u-palette-1-light-3 u-btn-3">
      ENVIAR
    </button>
  </div>
  <input type="hidden" value="" name="recaptchaResponse">
</form>
@endsection

@section('inscription_buttons')
 @if (Carbon\Carbon::now()->lt(Carbon\Carbon::parse(env('FINISHINSCRIPTIONDATE','21-02-2025')))) 
<div align="center">
  <a href="/simple_inscription" class="custom-page-typo-item u-active-custom-color-22 u-border-2 u-border-active-palette-1-light-2 u-border-hover-palette-1-dark-1 u-border-palette-1-dark-1 u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-light-3 u-btn-1">Inscripción</a>
  {{-- <a href="/group_inscription" class="custom-page-typo-item u-active-custom-color-22 u-border-2 u-border-active-palette-1-light-2 u-border-hover-palette-1-dark-1 u-border-palette-1-dark-1 u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-light-3 u-btn-2">Invitación Grupal</a> --}}
</div> 
 @else
<p align="center">Inscripciones finalizadas.</p>
@endif 
<!--<p class="">Se han agotado los cupos de la Jornada Presencial. 
Si aún no lo ha hecho, lo invitamos a inscribirse para las instancias virtuales a partir del 9 de febrero.</p> -->
{{-- <p class="">INSCRIPCIONES CERRADAS. 
Se han agotado los cupos para la inscripción virtual. Muchas gracias por el interés, nos encontramos en la próxima actividad.</p> --}}
@endsection

@section('certificate_button')
  @if (Carbon\Carbon::now()->gt(env('CERTIFICATEDATE','24-02-2025'))) 
     <div align="center">
      <a href="/inscription/certificateRecoveryMail" class="custom-page-typo-item u-active-custom-color-22 u-border-2 u-border-active-palette-1-light-2 u-border-hover-palette-1-dark-1 u-border-palette-1-dark-1 u-btn u-button-style u-hover-palette-1-dark-1 u-palette-1-light-3 u-btn-3">Descargar certificado</a>
    </div> 
  @endif
@endsection
