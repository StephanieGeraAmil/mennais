<p>
Se ha realizado una nueva Invitación grupal:
</p>
<p>
<table>
    <tr>
        <td>Institucion</td>
        <td>{{$group_inscription->institution}}</td>
    </tr>
    <tr>
        <td>Inscribe</td>
        <td>{{$group_inscription->name}}</td>
    </tr>
    <tr>
        <td>Teléfono</td>
        <td>{{$group_inscription->phone}}</td>
    </tr>
    <tr>
        <td>E-Mail</td>
        <td>{{$group_inscription->email}}</td>
    </tr>
    <tr>
        <td>Cantidad de Cupos {{App\Enums\InscriptionTypeEnum::REMOTO->text()}}</td>
        <td>{{$group_inscription->quantity_remote}}</td>
    </tr>
    <tr>
        <td>Cantidad de Cupos {{App\Enums\InscriptionTypeEnum::HIBRIDO->text()}}</td>
        <td>{{$group_inscription->quantity_hybrid}}</td>
    </tr>    
    <tr>
        <td>Monto depositado</td>
        <td>{{$group_inscription->payment->amount_deposited}}</td>
    </tr>
    <tr>
        <td>Número de comprobante:</td>
        <td>{{$group_inscription->payment->reference}}</td>
    </tr>
    <tr>
        <td>Imagen del comprobante</td>
        <td><a href="{{env('APP_URL').$group_inscription->payment->url_payment}}">{{env('APP_URL').$group_inscription->payment->url_payment}}</a></td>
    </tr>
</table>
</p>
<p>
    <img src="{{env('APP_URL').$group_inscription->payment->url_payment}}" />
</p>