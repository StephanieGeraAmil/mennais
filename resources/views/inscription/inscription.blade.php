@extends('layouts.formtemplate')
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

@section('form')
    <form action="/store_inscription" method="POST" class=""
        source="custom" name="Inscripción Individual" style="padding: 18px auto;" enctype="multipart/form-data">
        @csrf
     

<input type="hidden" name="type" value="hibrido">
{{-- <select id="type" name="type" class="u-border-2 u-border-grey-5 u-grey-5 u-input u-input-rectangle u-radius-10" onchange="togglePaymentDiv()"> --}}
        <div class="u-form-group u-form-name">
            <label for="name-05a8" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Nombre Completo" id="name-05a8" name="name"
                class="u-input u-input-rectangle u-radius-14 u-input-1" required="">
        </div>
    
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
     
        <div class="u-form-group u-form-group-6">
            <label for="text-59c6" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Institución" id="text-59c6" name="institution_name"
                class="u-input u-input-rectangle u-radius-14 u-input-6">
        </div>
                
        <div class="u-form-group u-form-select u-form-group-7">
            <div class="u-form-select-wrapper">
                <select id="select-c14a" name="institution_type" class="u-input u-input-rectangle u-radius-14">
                      <option value="">Nivel</option>
                    <option value="Educación Inicial" data-calc="">Educación Inicial</option>
                    <option value="Primaria" data-calc="">Primaria</option>
                    <option value="Secundaria" data-calc="">Secundaria</option>
                    <option value="Equipo Directivo" data-calc="">Equipo Directivo</option>
                    <option value="Otro" data-calc="">Otro</option>
                </select>
                <svg class="u-caret u-caret-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="16px" height="16px"
                    viewBox="0 0 16 16" style="fill:currentColor;" xml:space="preserve">
                    <polygon class="st0" points="8,12 2,4 14,4 "></polygon>
                </svg>
            </div>
        </div>
       
        <div id="payment_div" class="full_width">

        
            <div class="u-form-group u-form-group-11 space_above">
                <label for="text-c55e" class="u-form-control-hidden u-label"></label>
                <input type="file" placeholder="Adjunte un comprobante de pago" id="payment_file-4c18"
                name="payment_file" class="u-border-2 u-border-grey-5 u-grey-5 u-input u-input-rectangle u-radius-10"
                >
                <div style="width: 100%;text-align: center;">                                                  </div>
            </div>
        </div>
        <div style="margin-top:20px;">
         {{-- <div class="u-align-right u-form-group u-form-submit"> --}}
                <a href="https://lamennais.edu.uy/cp25" 
                class="button-save">Volver</a>
        {{-- </div> --}}
            {{-- <div class="u-align-right u-form-group u-form-submit button-save"> --}}
    <button type="submit" class="button-save">Enviar</button>
                
        {{-- </div> --}}
        </div>
    </form>
    @endsection