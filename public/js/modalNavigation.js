//General navigation
$('#purchaseTicket .forwards').on('click', function (){
    progress(purchaseTicket);
});

$('#purchaseTicket .backwards').on('click', function (){
    regress(purchaseTicket);
});

$('#purchaseTicketAndStay .forwards').on('click', function (){
    progress(purchaseTicketAndStay);
});

$('#purchaseTicketAndStay .backwards').on('click', function (){
    regress(purchaseTicketAndStay);
});

//Room navigation
$('#showSeaViewRoomTickets').on('click', function (){
    groundFloorRoomTickets.addClass('d-none');
    seaViewRoomTickets.removeClass('d-none');
});

$('#showGroundFloorRoomTickets').on('click', function (){
    seaViewRoomTickets.addClass('d-none');
    groundFloorRoomTickets.removeClass('d-none');
});

//Room modal navigation
$('#selectSeaViewRoom').on('click', function (){
    selectRoomContainer.addClass('d-none');
    seaViewRoomContainer.removeClass('d-none');
});

$('#selectGroundFloorRoom').on('click', function (){
    selectRoomContainer.addClass('d-none');
    groundFloorRoomContainer.removeClass('d-none');
});

$('#closeSeaViewRoom').on('click', function (){
    seaViewRoomContainer.addClass('d-none');
    selectRoomContainer.removeClass('d-none');
});

$('#closeGroundFloorRoom').on('click', function (){
    groundFloorRoomContainer.addClass('d-none');
    selectRoomContainer.removeClass('d-none');
});

//Progress to the next step
function progress(element){
    let currentStepper = element.find('.stepper-wrapper .active');
    let currentStep = currentStepper.attr('data-step');
    let nextStep = parseInt(currentStep) + 1;
    let nextStepper = element.find('.stepper-wrapper [data-step="'+nextStep+'"]');
    let currentSection = element.find('[data-section="'+currentStep+'"]');
    let nextSection = element.find('[data-section="'+nextStep+'"]');

    currentStepper.addClass('completed').removeClass('active');
    nextStepper.addClass('active');
    currentSection.addClass('d-none');
    nextSection.removeClass('d-none');
}

//Go back to the previous step
function regress(element){
    let currentStepper = element.find('.stepper-wrapper .active');
    let currentStep = currentStepper.attr('data-step');
    let prevStep = parseInt(currentStep) - 1;
    let prevStepper = element.find('.stepper-wrapper [data-step="'+prevStep+'"]');
    let currentSection = element.find('[data-section="'+currentStep+'"]');
    let prevSection = element.find('[data-section="'+prevStep+'"]');

    currentStepper.removeClass('active');
    prevStepper.addClass('active').removeClass('completed');
    currentSection.addClass('d-none');
    prevSection.removeClass('d-none');
}
