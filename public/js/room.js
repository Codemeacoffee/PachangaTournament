class Room {
    constructor(name, description, type, guests, entry, departure, price) {
        this.name = name;
        this.description = description;
        this.type = type;
        this.guests = guests;
        this.entry = entry;
        this.departure = departure;
        this.price = price;
    }
}

let seaViewRoom = {
    name: "Habitación vista al mar",
    description: "Habitación para 1 o 2 personas con unas impresionantes vistas al Océano Atlántico desde un hermoso balcón privado a 190º Sur desde el bloque principal y 120º Sureste desde el bloque sur.",
    services: {
        stay:{
            name: "Solo estancia",
            pricesByAmountOfGuests: {
                1: 50,
                2: 50
            }
        },
        stayAndBreakfast: {
            name: "Estancia y desayuno",
            pricesByAmountOfGuests: {
                1: 57,
                2: 64
            }
        },
        halfBoard: {
            name: "Media pensión",
            pricesByAmountOfGuests: {
                1: 76,
                2: 88
            }
        },
    }
};

let groundFloorRoom = {
    name: "Habitación planta baja",
    description: "Amplio apartamento para 3 o 4 personas con una superficie de 42,00 m². Diseñado para aquellos que viajan en grupo o con amigos con la posibilidad de reservar varios juntos.",
    services: {
        stay: {
            name: "Solo estancia",
            pricesByAmountOfGuests: {
                3: 70,
                4: 70
            }
        },
        stayAndBreakfast: {
            name: "Estancia y desayuno",
            pricesByAmountOfGuests: {
                3: 91,
                4: 98
            }
        },
        halfBoard: {
            name: "Media pensión",
            pricesByAmountOfGuests: {
                3: 127,
                4: 147
            }
        },
    }
};
