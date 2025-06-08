@extends('layouts.formtemplate')
    {{-- @push('styles')
    <link rel="stylesheet" href="{{ asset('css/inscription.css') }}?v={{ filemtime(public_path('css/inscription.css')) }}">
@endpush --}}
@section('title')
    Inscripción Indivudual
@endsection
@section('notifications')
    @if (Session::has('msg'))
        <div class="u-size-30">
            <div class="u-layout-col">
                <div class="u-align-center u-container-style u-layout-cell u-palette-2-base u-size-60 u-layout-cell-1">
                    <div class="u-container-layout u-valign-middle u-container-layout-1" style="background-color:#2cccc4">
                        <h5 class="u-text u-text-default u-text-1">{!! Session::get('msg') !!}</h5>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if ($errors->any())
        <div class="u-size-30">
            <div class="u-layout-col">
                <div class="u-align-center u-container-style u-layout-cell u-palette-2-base u-size-60 u-layout-cell-1">
                    <div class="u-container-layout u-valign-middle u-container-layout-1">
                        <h5 class="u-text u-text-default u-text-1">
                        
                            @if ($errors->any())
    <div class="u-size-30">
        <div class="u-layout-col">
            <div class="u-align-center u-container-style u-layout-cell u-palette-2-base u-size-60 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                    <h5 class="u-text u-text-default u-text-1">
                        {{-- Display specific error messages --}}
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach
                    </h5>
                </div>
            </div>
        </div>
    </div>
@endif
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection
@section('subtitle')
    INSCRIPCIÓN INDIVIDUAL
@endsection
@section('left-text-box')
    Por favor, complete el formulario con sus datos.
@endsection
@section('form')
    {{-- <input type="hidden" id="old_first_workshop_group_id" value={{ old('first_workshop_group_id') ?? 0 }}>
    <input type="hidden" id="old_second_workshop_group_id" value={{ old('second_workshop_group_id') ?? 0 }}> --}}
    <form action="/store_inscription" method="POST" class=""
        source="custom" name="Inscripción Individual" style="padding: 18px 0px;" enctype="multipart/form-data">
        @csrf
     
  {{-- <div class="u-form-group u-form-group-11">
    <label for="text-c55e" class="u-form-control-hidden u-label"></label>
    <select id="type" name="type" class="u-border-2 u-border-grey-5 u-grey-5 u-input u-input-rectangle u-radius-10">
        <option value="">Modalidad</option>
        <option value="virtual" {{(old('type') =="virtual")?"Selected":""}}>{{App\Enums\InscriptionTypeEnum::REMOTO->text()}}</option>
        <option value="hibrido" {{(old('type') =="hibrido")?"Selected":""}}>{{App\Enums\InscriptionTypeEnum::HIBRIDO->text()}}</option>
    </select>
</div>  --}}
<input type="hidden" name="type" value="hibrido">
{{-- <select id="type" name="type" class="u-border-2 u-border-grey-5 u-grey-5 u-input u-input-rectangle u-radius-10" onchange="togglePaymentDiv()"> --}}
        <div class="u-form-group u-form-name">
            <label for="name-05a8" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Nombre Completo" id="name-05a8" name="name"
                class="u-input u-input-rectangle u-radius-14 u-input-1" required="">
        </div>
        {{-- <div class="u-form-group u-form-group-2">
            <label for="text-8cb6" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Apellido" id="text-8cb6" name="lastname"
                class="u-input u-input-rectangle u-radius-14 u-input-2">
        </div> --}}
        <div class="u-form-group u-form-name u-form-group-3">
            <label for="name-b2b6" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Cédula de Identidad (1234567-8)" id="name-b2b6" name="document"
                class="u-input u-input-rectangle u-radius-14 u-input-3" required="">
        </div>
        <div class="u-form-email u-form-group">
            <label for="email-05a8" class="u-form-control-hidden u-label"></label>
            <input type="email" placeholder="email" id="email-05a8" name="email"
                class="u-input u-input-rectangle u-radius-14 u-input-4" required="">
        </div>
        {{-- <div class="u-form-group u-form-phone u-form-group-5">
            <label for="phone-bfdf" class="u-form-control-hidden u-label"></label>
            <input type="tel" placeholder="Teléfono" id="phone-bfdf" name="phone"
                class="u-input u-input-rectangle u-radius-14 u-input-5" required="">
        </div> --}}
        <div class="u-form-group u-form-group-6">
            <label for="text-59c6" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Institución" id="text-59c6" name="institution_name"
                class="u-input u-input-rectangle u-radius-14 u-input-6">
        </div>
                {{-- <div class="u-form-group u-form-group-6">
            <label for="text-59c6" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Ciudad" id="text-59c6" name="city"
                class="u-input u-input-rectangle u-radius-14 u-input-6">
        </div> --}}
        <div class="u-form-group u-form-select u-form-group-7">
            <div class="u-form-select-wrapper">
                <select id="select-c14a" name="institution_type" class="u-input u-input-rectangle u-radius-14">
                      <option value="">Nivel</option>
                    <option value="Educación Inicial" data-calc="">Educación Inicial</option>
                    <option value="Primaria" data-calc="">Primaria</option>
                    <option value="Secundaria" data-calc="">Secundaria</option>
                    <option value="Dirección General" data-calc="">Dirección General</option>
                    <option value="Otro" data-calc="">Otro</option>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px"
                    viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve">
                    <polygon class="st0" points="8,12 2,4 14,4 "></polygon>
                </svg>
            </div>
        </div>
        {{-- <div class="u-form-group u-form-group-8">
            <label for="text-8b97" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Ciudad" id="text-8b97" name="city"
                class="u-input u-input-rectangle u-radius-14 u-input-8">
        </div> --}}
        <div id="payment_div" class="full_width">

        
            <div class="u-form-group u-form-group-11 space_above">
                <label for="text-c55e" class="u-form-control-hidden u-label"></label>
                <input type="file" placeholder="Adjunte un comprobante de pago" id="payment_file-4c18"
                name="payment_file" class="u-border-2 u-border-grey-5 u-grey-5 u-input u-input-rectangle u-radius-10"
                >
                <div style="width: 100%;text-align: center;"><small>Adjunte el comprobante de pago (pdf o jpg)</small></div>
            </div>
        </div>
        <div class="button-section">
         {{-- <div class="u-align-right u-form-group u-form-submit"> --}}
                <a href="https://lamennais.edu.uy/cp25" 
                class="button-save">Volver</a>
        {{-- </div> --}}
            {{-- <div class="u-align-right u-form-group u-form-submit button-save"> --}}
                <a onclick="$(this).closest('form').submit()"
                class="button-save">Enviar</a>
        {{-- </div> --}}
        </div>
    </form>
@endsection
@section('custom_script')
    <script>
        // jQuery(document).ready(function() {
        //     loadSecondWorkshopGroup();
        //     $('#first_workshop_group_id').change(function(ev) {
        //         loadSecondWorkshopGroup();
        //     });
        //     loadOldWorkShops();
        //      togglePaymentDiv();
        // });

        // function loadSecondWorkshopGroup() {
        //     let first_workshop_group = $('#first_workshop_group_id').val();
        //     let second_workshop_group = $('#second_workshop_group_id');
        //     $.ajax({
        //         url: '/api/second_workshop_group/' + first_workshop_group,
        //         async: false
        //     }).done(function(data) {
        //         second_workshop_group.children().remove();
        //         if ('data' in data) {
        //             if (Array.isArray(data.data)) {
        //                 data.data.forEach(function(valor, indice, array) {
        //                     second_workshop_group.append(new Option(valor.text, valor.id));
        //                 });
        //                 second_workshop_group.append(new Option('No asistiré en este horario.', 0));
        //             }
        //         }
        //     });
        // }

        // function loadOldWorkShops() {
        //     let old_first_workshop_group = $('#old_first_workshop_group_id').val();
        //     let old_second_workshop_group = $('#old_second_workshop_group_id').val();
        //     if (old_first_workshop_group > 0) {
        //         let first_workshop_group = $('#first_workshop_group_id').val(old_first_workshop_group);
        //     }
        //     if (old_second_workshop_group > 0) {
        //         let first_workshop_group = $('#second_workshop_group_id').val(old_second_workshop_group);
        //     }
        // }



        // function clean_document(element) {
        //     let input = $(element);
        //     let input_val = input.val();
        //     new_input_val = input_val.replace(/\D/g, "");
        //     input.val(new_input_val);
        // }

        //  function togglePaymentDiv() {
        //     console.log("in toggle");
        //     const modalidad = document.getElementById('type').value;
        //     const paymentDiv = document.getElementById('payment_div');
        //     console.log(modalidad);
        //     // if (modalidad === 'hibrido') {
        //     //     console.log("in completa")
        //     //     paymentDiv.style.display = 'none';
        //     // } else {
        //         paymentDiv.style.display = 'block';
        //     // }
        // }

       
    </script>
@endsection
