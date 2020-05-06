import ScrollReveal from 'scrollreveal'

$( document ).ready(function() {
    //Klok die aftelt naar datum
    const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;
    let countDown = new Date('Feb 10, 2020 00:00:00').getTime(),
        x = setInterval(function() {

            let now = new Date().getTime(),
                distance = countDown - now;
            document.getElementById('days').innerText = Math.floor(distance / (day)),
                document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
                document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
                document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);


            //do something later when date is reached
            ///if (distance < 0) {
            // }

        }, second);
    //typ effect initialiseren
    var speed = 75;
    var h1 = document.getElementById('headeranimatie');
    var delay = h1 * speed + speed;
    typeEffect(h1, speed);

    //Verschijnen van secties
    ScrollReveal().reveal('#bestsellers',{duration:2000});
    ScrollReveal().reveal('#promoties',{duration:2000});
    ScrollReveal().reveal('#instagram',{duration:2000});
    ScrollReveal().reveal('.newsletter',{duration:2000});
    ScrollReveal().reveal('#related',{duration:2000});

});
//filter
document.getElementById("filterbutton").addEventListener("click", function(){
    document.getElementById("mySidenav").style.width = "250px";
});

document.getElementById("closebtn").addEventListener("click", function(){
    document.getElementById("mySidenav").style.width = "0";
});

var DOMhours = document.getElementById("hours");
if (DOMhours) DOMhours.innerHTML = todaysHours;

//effects
function typeEffect(element, speed) {

    var text = element.innerHTML;
    element.innerHTML = "";

    var i = 0;
    var timer = setInterval(function() {
        if (i < text.length) {
            element.append(text.charAt(i));
            i++;
        } else {
            clearInterval(timer);
        }
    }, speed)
}

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
});
function filter(id)
{
    action('Controller@filter')  + '/' + id;
}
