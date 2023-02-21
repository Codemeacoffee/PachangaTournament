//Ticket Modals
let purchaseTicket = $('#purchaseTicket');
let purchaseTicketAndStay = $('#purchaseTicketAndStay');
//Tickets
let ticketContainer = $('.ticketContainer');
//Room Containers
let selectRoomContainer = $('#selectRoom');
let groundFloorRoomContainer = $('#groundFloorRoom');
let seaViewRoomContainer = $('#seaViewRoom');
//Room Tickets
let seaViewRoomTickets = $('#seaViewRoomTickets');
let groundFloorRoomTickets = $('#groundFloorRoomTickets');
//Room Forms
let seaViewRoomInputs = $('#seaViewRoom .form-check-input');
let groundFloorRoomInputs = $('#groundFloorRoom .form-check-input');
let seaViewRoomDatePicker = $('#seaViewRoomStayTime');
let groundFloorRoomDatePicker = $('#groundFloorRoomStayTime');
//Room Info
let groundFloorRoomInfo;
let seaViewRoomInfo;

//Initialize ticket container
addTicket(ticketContainer);

//Set room prices
setSeaViewRoomPrice();
setGroundFloorRoomPrice();

//Initialize date pickers
seaViewRoomDatePicker.daterangepicker(datePickerConfig);
groundFloorRoomDatePicker.daterangepicker(datePickerConfig);

//On change recalculate room price
seaViewRoomInputs.on('change', setSeaViewRoomPrice);
groundFloorRoomInputs.on('change', setGroundFloorRoomPrice);
seaViewRoomDatePicker.on('change', setSeaViewRoomPrice);
groundFloorRoomDatePicker.on('change', setGroundFloorRoomPrice);

//Exchange a regular ticket for a VIP ticket
ticketContainer.on('click', '.vipBtn', function (){
    let ticket = $(this).closest('.regularTicket');

    ticket.removeClass('regularTicket').addClass('vipTicket');
    ticket.find('.title').text(vipTicket.name);
    ticket.find('.description').text(vipTicket.long_description);
    ticket.find('.ticketPrice').text("Precio: "+vipTicket.price+"€");

    $(this).removeClass('vipBtn').addClass('regularBtn').text(regularTicketBtnText);
});

//Exchange a VIP ticket for regular ticket
ticketContainer.on('click', '.regularBtn', function (){
    let ticket = $(this).closest('.vipTicket');

    ticket.addClass('regularTicket').removeClass('vipTicket');
    ticket.find('.title').text(regularTicket.name);
    ticket.find('.description').text(regularTicket.long_description);
    ticket.find('.ticketPrice').text("Precio: "+regularTicket.price+"€");

    $(this).addClass('vipBtn').removeClass('regularBtn').text(vipTicketBtnText);
});

//Add extra ticket to SeaView Room
$('#seaViewRoomTickets .addTicket').on('click', function (){
    if($('#seaViewRoomTickets .ticketTemplate').length < 2) addTicket($('#seaViewRoomTickets .ticketContainer'));
});

//Add extra ticket to GroundFloor Room
$('#groundFloorRoomTickets .addTicket').on('click', function (){
    if($('#groundFloorRoomTickets .ticketTemplate').length < 4) addTicket($('#groundFloorRoomTickets .ticketContainer'));
});

//Remove a ticket
ticketContainer.on('click', '.removeTicket', function (){
    $(this).closest('.ticketTemplate').remove();
});

//On modal open update room image gallery
$('#ticketAndStayModal').on('show.bs.modal', function(){
    setTimeout(function (){
        seaViewRoomSwiper.update();
        groundFloorRoomSwiper.update();
    }, 200);
});

//Validate single ticket purchase
$('#purchaseTicket .validate').on('click', function (event){
    if(!validate(purchaseTicket)) event.stopImmediatePropagation();
    else{
        let product = "Pachanga Tournament - Solo Eventos";
        let purchaseBreakoutContainer = $('#purchaseTicket .purchaseBreakout');
        let paypalContainer = $('#purchaseTicket .paypal');

        checkout(product, purchaseTicket, purchaseBreakoutContainer, paypalContainer, purchaseTicket, null);
    }
});

//Validate ticket plus SeaView Room purchase
seaViewRoomTickets.find('.validate').on('click', function (event){
    if(!validate(seaViewRoomTickets)) event.stopImmediatePropagation();
    else{
        let product = "Pachanga Tournament - Eventos y Estancia";
        let purchaseBreakoutContainer = $('#purchaseTicketAndStay .purchaseBreakout');
        let paypalContainer = $('#purchaseTicketAndStay .paypal');

        checkout(product, seaViewRoomTickets, purchaseBreakoutContainer, paypalContainer, purchaseTicketAndStay, seaViewRoomInfo);
    }
});

//Validate ticket plus GroundFloor Room purchase
groundFloorRoomTickets.find('.validate').on('click', function (event){
    if(!validate(groundFloorRoomTickets)) event.stopImmediatePropagation();
    else{
        let product = "Pachanga Tournament - Eventos y Estancia";
        let purchaseBreakoutContainer = $('#purchaseTicketAndStay .purchaseBreakout');
        let paypalContainer = $('#purchaseTicketAndStay .paypal');

        checkout(product, groundFloorRoomTickets, purchaseBreakoutContainer, paypalContainer, purchaseTicketAndStay, groundFloorRoomInfo);
    }
});


//Add ticket to target container
function addTicket(ticketContainer){
    let ticket = $(ticketTemplate).appendTo(ticketContainer);

    ticket.find('.title').text(regularTicket.name);
    ticket.find('.description').text(regularTicket.long_description);
    ticket.find('.ticketPrice').text("Precio: "+regularTicket.price+"€");
    ticket.find('.vipBtn').text(vipTicketBtnText);
}

//Generate ticket objects
function generateTicket(element, type, price){
    let name = element.find('input[name="name"]').val();
    let surnames = element.find('input[name="surnames"]').val();
    let dni = element.find('input[name="dni"]').val();
    let phone = element.find('input[name="phone"]').val();

    return new Ticket(name, surnames, dni, phone, type, price);
}

//Returns a ticket array with regular and VIP tickets
function getTickets(ticketContainer){
    let tickets = {regularTickets : [], vipTickets: []};

    ticketContainer.find('.regularTicket').each(function (index, value){
        tickets.regularTickets.push(generateTicket($(value), "Normal", regularTicket.price));
    });

    ticketContainer.find('.vipTicket').each(function (index, value){
        tickets.vipTickets.push(generateTicket($(value), "VIP", vipTicket.price));
    });

    return tickets;
}

//Calculate the total price for any given combination of regular and VIP tickets
function calculateTicketsTotalPrice(tickets){
    return tickets.regularTickets.length * regularTicket.price + tickets.vipTickets.length * vipTicket.price;
}

//Calculate the SeaView Room price and put it into the price container
function setSeaViewRoomPrice(){
    let accommodation = seaViewRoomContainer.find('input[name=seaViewRoomAccommodation]:checked').val();
    let guests = seaViewRoomContainer.find('input[name=seaViewRoomGuests]:checked').val();
    let stayTime = seaViewRoomContainer.find('#seaViewRoomStayTime').val();

    seaViewRoomInfo = generateRoom(accommodation, guests, stayTime, seaViewRoom);

    if(seaViewRoomInfo) seaViewRoomContainer.find('.price').html('Precio: ' + seaViewRoomInfo.price + '€');
}

//Calculate the GroundFloor Room price and put it into the price container
function setGroundFloorRoomPrice(){
    let accommodation = groundFloorRoomContainer.find('input[name=groundFloorRoomAccommodation]:checked').val();
    let guests = groundFloorRoomContainer.find('input[name=groundFloorRoomGuests]:checked').val();
    let stayTime = groundFloorRoomContainer.find('#groundFloorRoomStayTime').val();

    groundFloorRoomInfo = generateRoom(accommodation, guests, stayTime, groundFloorRoom);

    if(groundFloorRoomInfo) groundFloorRoomContainer.find('.price').html('Precio: ' + groundFloorRoomInfo.price + '€');
}

//Generate room objects
function generateRoom(accommodation, guests, stayTime, roomTemplate){
    if(roomTemplate.services[accommodation]){
        accommodation = roomTemplate.services[accommodation];
        stayTime = stayTime.split(' - ');

        if(stayTime.length > 1){
            let entry = stayTime[0];
            let departure = stayTime[1];

            if(accommodation.pricesByAmountOfGuests[guests]){
                let price = accommodation.pricesByAmountOfGuests[guests];
                let start = moment(entry, "DD/MM/YYYY");
                let end = moment(departure, "DD/MM/YYYY");
                let days = (end.diff(start, 'days'));

                price*=days;

                let guestName = ' huésped';
                if(guests > 1) guestName = ' huéspedes';

                let nightName = ' noche';
                if(days > 1) nightName = ' noches';

                let description = roomTemplate.name + ' (' + accommodation.name + ', '  + guests + guestName + ', '+ days + nightName +')';

                return new Room(roomTemplate.name, description, accommodation.name, guests, entry, departure, price);
            }
        }
    }
    return false;
}

//Render the payment checkout
function checkout(product, ticketContainer, purchaseBreakoutContainer, paypalContainer, checkoutContainer, roomInfo = null){
    let tickets = getTickets(ticketContainer);
    let totalPrice = calculateTicketsTotalPrice(tickets);

    if(roomInfo) totalPrice += roomInfo.price;

    let tax = parseFloat((totalPrice * 0.0356 + 0.35).toFixed(2));
    let taxedPrice = parseFloat(totalPrice + tax).toFixed(2);
    let orderInfo = {product: product, totalPrice: taxedPrice, ticketInfo: tickets, tax, roomInfo: roomInfo};
    let items = [];

    if(roomInfo){
        items.push({
            name: roomInfo.description,
            amount: 1,
            price: roomInfo.price,
        });
    }
    if(tickets.regularTickets.length > 0){
        items.push({
            name: regularTicket.name,
            amount: tickets.regularTickets.length,
            price: regularTicket.price
        });
    }
    if(tickets.vipTickets.length > 0){
        items.push({
            name: vipTicket.name,
            amount: tickets.vipTickets.length,
            price: vipTicket.price
        });
    }

    items.push({
        name: 'Tarifa de PayPal',
        amount: 1,
        price: tax
    });

    purchaseBreakout(items, purchaseBreakoutContainer);
    checkoutContainer.find('.totalPrice').text("Total: "+taxedPrice+"€")
    paypalContainer.empty();

    paypalPayment(generatePayPalItems(tickets, tax, roomInfo), taxedPrice, orderInfo, checkoutContainer, paypalContainer[0]);
}

//Render the purchase breakout in the provided container
function purchaseBreakout(items, container){
    container.empty();

    $(items).each(function (index, value){
        container.append("<tr>" +
            "<th>"+value.name+"</th>"+
            "<th>"+value.amount+"</th>" +
            "<th>"+value.price+"</th>" +
            "</tr>"
        );
    });
}

//Generate items in the format required by PayPal standards
function generatePayPalItems(tickets, tax, room = null){
    let items = [];

    if(tickets.regularTickets.length > 0){
        items.push(
            {
                name: regularTicket.name,
                description: regularTicket.description,
                unit_amount: {
                    currency_code: "EUR",
                    value: regularTicket.price
                },
                quantity: tickets.regularTickets.length
            }
        );
    }
    if(tickets.vipTickets.length > 0){
        items.push(
            {
                name: vipTicket.name,
                description: vipTicket.description,
                unit_amount: {
                    currency_code: "EUR",
                    value: vipTicket.price
                },
                quantity: tickets.vipTickets.length
            }
        );
    }if(room){
        items.push(
            {
                name: room.name,
                description: room.description,
                unit_amount: {
                    currency_code: "EUR",
                    value: room.price
                },
                quantity: 1
            }
        );
    }
    items.push(
        {
            name: 'Tarifa de PayPal',
            description: 'Tarifa de Paypal',
            unit_amount: {
                currency_code: "EUR",
                value: tax
            },
            quantity: 1
        }
    );

    return items;
}
