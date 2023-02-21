<?php

namespace App\Http\Controllers;
use App\Jobs\SendEmail;
use App\Models\Order;
use App\Models\OrderTicketRelation;
use App\Models\Room;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Mpdf\Mpdf;

class PayPalPaymentController extends Controller
{

    function handlePayment(Request $request){
        try{
            $orderInfo = $request['orderInfo'];
            $ticketInfo = $orderInfo['ticketInfo'];
            $roomInfo = $orderInfo['roomInfo'];
            $tax = $orderInfo['tax'];
            $items = [];

            if($roomInfo){
                $room = Room::create([
                    'name' => $roomInfo['name'],
                    'description' => $roomInfo['description'],
                    'type' => $roomInfo['type'],
                    'guests' => $roomInfo['guests'],
                    'entry' => $roomInfo['entry'],
                    'departure' => $roomInfo['departure'],
                    'price' => $roomInfo['price']
                ]);

                $items[] = [
                    'name' => $room->description,
                    'amount' => 1,
                    'price' => $room->price,
                ];

                $roomId = $room->id;
            }else $roomId = null;

            $order = Order::create([
                'product' => $orderInfo['product'],
                'payerName' => $orderInfo['payerName'],
                'payerSurname' => $orderInfo['payerSurname'],
                'price' => $orderInfo['totalPrice'],
                'roomId' => $roomId,
                'paypalId' => $orderInfo['paypalId']
            ]);

            if(isset($ticketInfo['regularTickets'])) $items = $this->generateTickets($ticketInfo['regularTickets'], $order, $items);
            if(isset($ticketInfo['vipTickets']))$items = $this->generateTickets($ticketInfo['vipTickets'], $order, $items);

            $invoiceName = 'Factura-'.$order->id.'.pdf';
            $invoicePath = public_path('invoices/'.$invoiceName);

            $this->generateInvoice($order, $items, $tax, public_path('images/logo.png'), $invoicePath);
            $this->notify($order, $invoiceName, $invoicePath);

            if($roomInfo) $this->notifyHotel($order, $room, $invoiceName, $invoicePath);

            return asset('invoices/'.$invoiceName);
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }

    function notify($order, $invoiceName, $invoicePath){
        $data = [
            "receiverEmail" => "pachangatournament@gmail.com",
            "receiverName" => "Pachanga Tournament",
            "senderEmail" => "noreply@pachangatournament.com",
            "senderName" => "No Reply",
            "subject" => "Factura Nº".$order['id'],
            "payer" => $order['payerName']." ".$order['payerSurname'],
            "file" => $invoicePath,
            "fileName" => $invoiceName
        ];

        $notification = new SendEmail('emails.purchaseNotice', $data);
        $this->dispatch($notification);
    }

    function notifyHotel($order, $room, $invoiceName, $invoicePath){
        $data = [
            "receiverEmail" => "info@hotelnewfolias.com",
            "receiverName" => "Hotel New Folias",
            "senderEmail" => "noreply@pachangatournament.com",
            "senderName" => "No Reply",
            "subject" => "Factura Nº".$order['id'],
            "payer" => $order['payerName']." ".$order['payerSurname'],
            "name" => $room['name'],
            "type" => $room['type'],
            "guests" => $room['guests'],
            "entry" => $room['entry'],
            "departure" => $room['departure'],
            "file" => $invoicePath,
            "fileName" => $invoiceName
        ];

        $notification = new SendEmail('emails.hotelPurchaseNotice', $data);
        $this->dispatch($notification);
    }

    function generateTickets($tickets, $order, $items){
        foreach ($tickets as $ticket){
            $name = $ticket['name'];
            $surnames = $ticket['surnames'];
            $dni = $ticket['dni'];
            $phone = $ticket['phone'];
            $type = $ticket['type'];
            $price = $ticket['price'];

            $ticket = Ticket::create([
                'name' => $name,
                'surnames' => $surnames,
                'dni' => $dni,
                'phone' => $phone,
                'type' => $type,
                'price' => $price
            ]);

            OrderTicketRelation::create([
                'orderId' => $order->id,
                'ticketId' => $ticket->id
            ]);

            $items[] = [
                'name' => 'Entrada '.$ticket->type.' a Pachanga Tournament ('.$ticket->dni.')',
                'price' => $ticket->price,
            ];
        }
        return $items;
    }

    function generateInvoice($order, $items, $tax, $logo, $destination){
        $invoice =
            '<html lang="es_ES">
                <head>
                    <meta charset="utf-8"/>
                    <title>Factura número '.$order->id.'</title>
                    <style>
                        .invoice-box {
                            max-width: 800px;
                            margin: auto;
                            padding: 30px;
                            font-size: 16px;
                            line-height: 24px;
                            color: #555;
                        }

                        .invoice-box table {
                            width: 100%;
                            line-height: inherit;
                            text-align: left;
                        }

                        .invoice-box table td {
                            padding: 5px;
                            vertical-align: top;
                        }

                        .invoice-box table tr td:nth-child(2) {
                            text-align: right;
                        }

                        .invoice-box table tr.top table td {
                            padding-bottom: 20px;
                        }

                        .invoice-box table tr.top table td.title {
                            font-size: 45px;
                            line-height: 45px;
                            color: #333;
                        }

                        .invoice-box table tr.information table td {
                            padding-bottom: 40px;
                        }

                        .invoice-box table tr.heading td {
                            background: #eee;
                            border-bottom: 1px solid #ddd;
                            font-weight: bold;
                        }

                        .invoice-box table tr.details td {
                            padding-bottom: 20px;
                        }

                        .invoice-box table tr.item td {
                            border-bottom: 1px solid #eee;
                        }

                        .invoice-box table tr.item.last td {
                            border-bottom: none;
                        }

                        .invoice-box table tr.total td:nth-child(2) {
                            border-top: 2px solid #eee;
                            font-weight: bold;
                        }
                    </style>
                </head>
                <body>
                    <div class="invoice-box">
                        <table>
                            <tr class="top">
                                <td colspan="2">
                                    <table>
                                        <tr>
                                            <td class="title">
                                                <img src="'.$logo.'" style="width: 100%; max-width: 200px" />
                                            </td>
                                            <td>
                                                Factura Nº: '.$order->id.'<br/>
                                                Cliente: '.$order->payerName.' '.$order->payerSurname.'<br/>
                                                PayPal ID: '.$order->paypalId.'<br/>
                                                Fecha: '.$order->created_at.'<br/>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr class="information">
                                <td colspan="2">
                                    <table>
                                        <tr>
                                            <td>
                                                C/ Picachos, 37<br/>
                                                35200 Telde<br/>
                                                Las Palmas de G.C, España
                                            </td>
                                            <td>
                                                Asociación Cultural R’Lyeh<br />
                                                CIF: G76288620<br />
                                                pachangatournament@gmail.com
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr class="heading">
                                <td>Producto</td>
                                <td>Precio</td>
                            </tr>';

            foreach ($items as $item) {
                $invoice.= '<tr class="item">
                                <td>'.$item['name'].'</td>
                                <td>'.$item['price'].'€</td>
                            </tr>';
            }

            $invoice.='<tr class="item">
                            <td>Tarifa de PayPal</td>
                            <td>'.$tax.'€</td>
                        </tr>
                        <tr class="total">
                            <td></td>
                            <td>Total: '.$order->price.'€</td>
                            </tr>
                        </table>
                    </div>
                </body>
            </html>';

            $mpdf = new Mpdf();
            $mpdf->WriteHTML($invoice);
            $mpdf->Output($destination, 'F');
    }
}
