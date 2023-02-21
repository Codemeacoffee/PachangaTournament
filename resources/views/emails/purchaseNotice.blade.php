@extends('emails.layout')
@section('header')
@section('content')
    <tr>
        <td style="padding: 40px 30px 40px 30px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                <tr>
                    <td align="center" style="color: #000; font-family: Arial, sans-serif; font-size: 18px;">
                        <p><b>{{$payer}}</b> ha hecho una compra.</p>
                    </td>
                </tr>
                <tr>
                    <td align="center" style="padding: 20px 0 30px 0;color: #000; font-family: Arial, sans-serif; font-size: 16px;line-height: 20px;">
                        <p>Puede encontrar la factura adjunta a este correo.</p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
@stop
@section('footer')
