@extends('layouts.formtemplate')
@section('notifications')
   
<div id="success_div" style="display:none; background-color:#2cccc4; padding:20px;">
    <h5>El vínculo se ha enviado correctamente.</h5>
</div>

<div id="fail_div" style="display:none; background-color:#fbabab; padding:20px;">
    <h5>
        Usted no figura acreditado, por favor comuníquese con nosotros al teléfono <a href="tel:26005620">26005620</a>, al mail <a href="mailto:secretaria@lamennais.edu.uyuy?subject=Solicitud%20de%20Certificado"  >secretaria@lamennais.edu.uyuy</a>
               
    </h5>
</div>
{{-- 
<div id="success_div" class="u-size-30" style="display:none;" >
    <div class="u-layout-col">
        <div class="u-align-center u-container-style u-layout-cell u-palette-2-base u-size-60 u-layout-cell-1">
            <div class="u-container-layout u-valign-middle u-container-layout-1" style="background-color:#2cccc4">
                <h5 class="u-text u-text-default u-text-1">El vínculo se ha enviado correctamente.</h5>
          
            </div>
        </div>
    </div>
</div>                        
     
<div id="fail_div" class="u-size-30" style="display:none;">
    <div class="u-layout-col">
        <div class="u-align-center u-container-style u-layout-cell u-palette-2-base u-size-60 u-layout-cell-1">
            <div class="u-container-layout u-valign-middle u-container-layout-1">
                <h5 class="u-text u-text-default u-text-1">
                    Usted no figura acreditado, por favor comuníquese con nosotros al teléfono <a href="tel:26005620">26005620</a>, al mail <a href="mailto:secretaria@lamennais.edu.uyuy?subject=Solicitud%20de%20Certificado"  >secretaria@lamennais.edu.uyuy</a>
                </h5>  
                               
            </div>
        </div>
    </div>
</div>                     --}}



@endsection 
@section('form')
<div style="display:flex; flex-direction: column; align-content:center; height:70%;">
<p class="u-text u-text-3">Ingrese su documento y le enviaremos a su mail un link donde podrá descargar el certificado.</p>
<form class="w-full max-w-sm certificate_form" action="{{Route('inscription.certificateRecoveryMail')}}" id="certificateForm" method="POST">
    @csrf
    <div class="u-form-group u-form-name u-form-group-3">
            <label for="name-b2b6" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Cédula de Identidad (1234567-8)" id="name-b2b6" name="document"
                class="u-input u-input-rectangle u-radius-14 u-input-3" required="">
        </div>									
       <button type="submit" class="button-save" style="margin-top:20px;">Enviar</button>
</form>
</div>
@endsection
@section('custom_script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>  

    function clean_document(element){
        let input = $(element);
        let input_val = input.val();
        new_input_val = input_val.replace(/\D/g, "");
        input.val(new_input_val);
    }

    //   $(document).ready(function () {
    //     console.log("jQuery version:", $.fn.jquery);
    //     $('#certificateForm').on('submit', function (e) {
    $(function () {


  $('#certificateForm').submit(function (e) {
            e.preventDefault(); // Prevent normal form submission
  $('#success_div').hide();
    $('#fail_div').hide();
            const form = $(this);
            const url = form.attr('action');
            const token = $('input[name="_token"]').val();
            const document = $('#name-b2b6').val();

            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _token: token,
                    document: document
                },
        success: function (response) {
            console.log("Success response:", response);
                $('#fail_div').hide();
                $('#success_div').fadeIn().delay(5000).fadeOut();
                $('#certificateForm')[0].reset();
            },
            error: function () {
                console.error("Error response");
                $('#success_div').hide();
                $('#fail_div').fadeIn().delay(5000).fadeOut();
            }
        });
    });
});
</script>    
@endsection 

