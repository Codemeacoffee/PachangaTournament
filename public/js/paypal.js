function paypalPayment(items, totalPrice, orderInfo, next, container){
    paypal.Buttons({
            createOrder: (data, actions) => {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            currency_code: "EUR",
                            value: totalPrice,
                            breakdown: {
                                item_total: {
                                    currency_code: "EUR",
                                    value: totalPrice
                                }
                            }
                        },
                        items: items,
                    }]
                });
            },
        onApprove: (data, actions) => {
             return actions.order.capture().then(function(orderData) {
                 orderInfo["payerName"] = orderData.payer.name.given_name;
                 orderInfo["payerSurname"] = orderData.payer.name.surname;
                 orderInfo["paypalId"] = orderData.id;

                 sendData(orderInfo, next);
            });
        }
    }).render(container);
}

function sendData(orderInfo, next){
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url:'/handlePayment',
        data:{'orderInfo': orderInfo},
        type:'post',
        success: function (response) {
            $('.invoiceLink').attr('href', response);
            return progress(next);
        },
        error:function(x){
            window.open(JSON.stringify(x));
        }
    });
}
