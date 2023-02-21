let regularTicketBtnText =  "Quiero una entrada normal";
let vipTicketBtnText = "Quiero una entrada vip";

let regularTicket = {
    name: "Entrada a Pachanga Tournament",
    description: "Entrada al Pachanga Tournament.",
    long_description: "Esta entrada da acceso a los torneos principales de los tres días del evento.",
    price: 50
};

let vipTicket = {
    name: "Entrada VIP a Pachanga Tournament",
    description: "Entrada VIP al Pachanga Tournament.",
    long_description: "Esta entrada da acceso a los torneos principales los tres días del evento, así como una consumición gratuita, una bolsa de bienvenida con diversos productos de merchandising y un vale por una camiseta o taza exclusiva del evento.",
    price: 65
};

let ticketTemplate =
'<div class="container-fluid rounded ticketTemplate regularTicket mb-4">' +
'<div class="row">' +
'<div class="col-12 text-right">' +
'<button type="button" class="btn glyphicon glyphicon-remove removeTicket px-4 pt-3 text-white" aria-label="Eliminar entrada"></button>' +
'</div>' +
'</div>' +
'<div class="row">' +
'<div class="col-12">' +
'<div class="container-fluid p-4">' +
'<div class="row">' +
'<div class="col-lg-8 col-12">' +
'<h3 class="title bigNoodleTitling text-lg-left text-center mb-3"></h3>' +
'</div>' +
'<div class="col-lg-4 col-12 text-lg-right text-center">' +
'<h4 class="bigNoodleTitling vipBtn rounded px-3 py-1"></h4>' +
'</div>' +
'</div>' +
'<div class="row">' +
'<div class="col-12">' +
'<p class="description"></p>' +
'</div>' +
'</div>' +
'<div class="row">' +
'<div class="col-lg-6 col-12">' +
'<div class="form-group">' +
'<label title="Este campo es obligatorio.">Nombre<small class="text-danger">*</small></label>' +
'<input type="text" class="form-control" name="name" autocomplete="off" required>' +
'<small class="text-danger">&nbsp;</small>' +
'</div>' +
'</div>' +
'<div class="col-lg-6 col-12">' +
'<div class="form-group">' +
'<label title="Este campo es obligatorio.">Apellidos<small class="text-danger">*</small></label>' +
'<input type="text" class="form-control" name="surnames" autocomplete="off" required>' +
'<small class="text-danger">&nbsp;</small>' +
'</div>' +
'</div>' +
'</div>' +
'<div class="row">' +
'<div class="col-lg-6 col-12">' +
'<div class="form-group">' +
'<label title="Este campo es obligatorio.">DNI<small class="text-danger">*</small></label>' +
'<input type="text" class="form-control" name="dni" autocomplete="off" required>' +
'<small class="text-danger">&nbsp;</small>' +
'</div>' +
'</div>' +
'<div class="col-lg-6 col-12">' +
'<div class="form-group">' +
'<label title="Este campo es obligatorio.">Teléfono<small class="text-danger">*</small></label>' +
'<input type="number" class="form-control" name="phone" autocomplete="off" required>' +
'<small class="text-danger">&nbsp;</small>' +
'</div>' +
'</div>' +
'</div>' +
'<div class="row">' +
'<div class="col-12">' +
'<h4 class="text-right ticketPrice bigNoodleTitling mb-0"></h4>' +
'</div>' +
'</div>' +
'</div>' +
'</div>' +
'</div>' +
'</div>';

class Ticket {
    constructor(name, surnames, dni, phone, type, price) {
        this.name = name;
        this.surnames = surnames;
        this.dni = dni;
        this.phone = phone;
        this.type = type;
        this.price = price;
    }
}
