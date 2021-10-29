$('.calendar').click(function(){
    $('.menu ul .subcalendar').toggleClass('show');
    $('.menu ul .button-calendar').toggleClass('spin');
});

$('.patient').click(function(){
    $('.menu ul .subpatient').toggleClass('show');
    $('.menu ul .button-patient').toggleClass('spin');
});

$('.treatment').click(function(){
    $('.menu ul .subtreatment').toggleClass('show');
    $('.menu ul .button-treatment').toggleClass('spin');
});

$('.doctor').click(function(){
    $('.menu ul .subdoctor').toggleClass('show');
    $('.menu ul .button-doctor').toggleClass('spin');
});

$('.specialty').click(function(){
    $('.menu ul .subspecialty').toggleClass('show');
    $('.menu ul .button-specialty').toggleClass('spin');
});
