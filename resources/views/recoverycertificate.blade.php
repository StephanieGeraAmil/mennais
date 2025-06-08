


<!DOCTYPE html>
<html style="font-size: 16px;" lang="es-UY"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Proeducar
Educación
Uruguay
Congreso
transformación Educativa">
    <meta name="description" content="">
    <title>Inscripcion Indivudual</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen">
<link rel="stylesheet" href="css/inscription.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="isf.uy">
    <link rel="icon" href="images/favicon1.png">
    
    
    
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Proeducar_Modif_LM"
}</script>
    <meta name="theme-color" content="#ddd6f3">
    <meta property="og:title" content="Inscripcion Indivudual">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-overlap u-xl-mode" data-lang="es"><header class="u-clearfix u-container-align-center u-custom-color-26 u-header u-sticky u-sticky-387b u-header" id="sec-055d"><div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-align-center u-image u-image-default u-image-1" src="images/logo.png" alt="" data-image-width="1024" data-image-height="117" data-lang-es="" style="margin:20px 0;">
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-3ffd">
      <div class="u-clearfix u-sheet u-sheet-1 ">
        <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">

@section('notifications')
@isset($errors)                                        
@error('document')                        
<div class="u-size-30">
    <div class="u-layout-col">
        <div class="u-align-center u-container-style u-layout-cell u-palette-2-base u-size-60 u-layout-cell-1">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h5 class="u-text u-text-default u-text-1">
                    El documento ingresado no es correcto.
                </h5>                         
            </div>
        </div>
    </div>
</div>
@enderror                        
@endisset
@isset($wrong_document)
<div class="u-size-30">
    <div class="u-layout-col">
        <div class="u-align-center u-container-style u-layout-cell u-palette-2-base u-size-60 u-layout-cell-1">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h5 class="u-text u-text-default u-text-1">
                    El documento ingresado no es correcto.
                </h5>                         
            </div>
        </div>
    </div>
</div>
@endisset
@isset($success)
<div class="u-size-30">
    <div class="u-layout-col">
        <div class="u-align-center u-container-style u-layout-cell u-palette-2-base u-size-60 u-layout-cell-1">
            <div class="u-container-layout u-valign-middle u-container-layout-1" style="background-color:#2cccc4">
                <h5 class="u-text u-text-default u-text-1">El vínculo se ha enviado correctamente.</h5>
            </div>
        </div>
    </div>
</div>                        
@endisset
@isset($fail)           
<div class="u-size-30">
    <div class="u-layout-col">
        <div class="u-align-center u-container-style u-layout-cell u-palette-2-base u-size-60 u-layout-cell-1">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h5 class="u-text u-text-default u-text-1">
                    Usted no figura acreditado, por favor comuníquese con nosotros al teléfono <a href="tel:26005620">26005620</a>, al mail <a href="mailto:secretaria@lamennais.edu.uyuy?subject=Solicitud%20de%20Certificado"  >secretaria@lamennais.edu.uyuy</a>
                </h5>                         
            </div>
        </div>
    </div>
</div>                    
@endisset
@endsection

  <div class="u-container-style u-layout-cell u-opacity u-opacity-85 u-shape-rectangle u-size-30 u-layout-cell-2" style="margin:30px 0 10px 0; display:flex; flex-direction:row; justify-content:center;">
@section('form')
<div style="display:flex; flex-direction: column; align-content:center;">
<p class="u-text u-text-3">Ingrese su documento y le enviaremos a su mail un link donde podrá descargar el certificado.</p>
<form class="w-full max-w-sm certificate_form" action="{{Route('inscription.certificateRecoveryMail')}}" method="POST">
    @csrf
    <div class="u-form-group u-form-name u-form-group-3">
            <label for="name-b2b6" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Cédula de Identidad (1234567-8)" id="name-b2b6" name="document"
                class="u-input u-input-rectangle u-radius-14 u-input-3" required="">
        </div>									
       <button type="submit" class="button-save">Enviar</button>
</form>
</div>
@endsection
    </div>
                    </div>
                  {{-- </div>
                </div>
              </div> --}}
          
        </div>
      </div>
    </section>
    <style class="u-overlap-style">.u-overlap:not(.u-sticky-scroll) .u-header {
background-color: #0a345e !important
}</style>
    
    
    
    <footer class="u-align-center u-clearfix u-container-align-center u-custom-color-26 u-footer u-footer" id="sec-ca3a"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-text u-text-default u-text-1" data-lang-es="​<span class=&quot;u-icon u-block-control&quot; data-block=&quot;217&quot;><svg xmlns=&quot;http://www.w3.org/2000/svg&quot; xmlns:xlink=&quot;http://www.w3.org/1999/xlink&quot; version=&quot;1.1&quot; xml:space=&quot;preserve&quot; class=&quot;u-svg-content&quot; viewBox=&quot;0 0 511 511&quot; style=&quot;width: 1em; height: 1em;&quot; data-color=&quot;#000000&quot;><path d=&quot;m114.59375 491.140625c-5.609375 0-11.179688-1.75-15.933594-5.1875-8.855468-6.417969-12.992187-17.449219-10.582031-28.09375l32.9375-145.089844-111.703125-97.960937c-8.210938-7.167969-11.347656-18.519532-7.976562-28.90625 3.371093-10.367188 12.542968-17.707032 23.402343-18.710938l147.796875-13.417968 58.433594-136.746094c4.308594-10.046875 14.121094-16.535156 25.023438-16.535156 10.902343 0 20.714843 6.488281 25.023437 16.511718l58.433594 136.769532 147.773437 13.417968c10.882813.980469 20.054688 8.34375 23.425782 18.710938 3.371093 10.367187.253906 21.738281-7.957032 28.90625l-111.703125 97.941406 32.9375 145.085938c2.414063 10.667968-1.726562 21.699218-10.578125 28.097656-8.832031 6.398437-20.609375 6.890625-29.910156 1.300781l-127.445312-76.160156-127.445313 76.203125c-4.308594 2.558594-9.109375 3.863281-13.953125 3.863281zm141.398438-112.875c4.84375 0 9.640624 1.300781 13.953124 3.859375l120.277344 71.9375-31.085937-136.941406c-2.21875-9.746094 1.089843-19.921875 8.621093-26.515625l105.472657-92.5-139.542969-12.671875c-10.046875-.917969-18.6875-7.234375-22.613281-16.492188l-55.082031-129.046875-55.148438 129.066407c-3.882812 9.195312-12.523438 15.511718-22.546875 16.429687l-139.5625 12.671875 105.46875 92.5c7.554687 6.613281 10.859375 16.769531 8.621094 26.539062l-31.0625 136.9375 120.277343-71.914062c4.308594-2.558594 9.109376-3.859375 13.953126-3.859375zm-84.585938-221.847656s0 .023437-.023438.042969zm169.128906-.0625.023438.042969c0-.023438 0-.023438-.023438-.042969zm0 0&quot;></path></svg><img></span>&amp;nbsp;Text with icon">
          <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-white u-btn-1" data-href="https://isf.uy/"><span class="u-file-icon u-icon u-text-white u-icon-1"><img src="images/7199452-c2e758c2.png" alt=""></span>&nbsp;ISF.uy
          </a>
        </p>
      </div></footer>
  
</body></html>
@section('custom_script')
<script>  
    function clean_document(element){
        let input = $(element);
        let input_val = input.val();
        new_input_val = input_val.replace(/\D/g, "");
        input.val(new_input_val);
    }
</script>    
@endsection 