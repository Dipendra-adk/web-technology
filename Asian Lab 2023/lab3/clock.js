// document.getElementById("display_clock").innerHTML= "06:37";

function showDateAndTime(){
    document.getElementById("display_date_and_time").innerHTML= Date();
}
showDateAndTime();
setInterval(showDateAndTime,1000);
// setTimeout(showDate,1000);      // display only once 

// var i = setInterval(showDateAndTime,1000);

// function clearDateMove(){
//     clearTimeout(i) ;  
// }

function showClock(){
    var todayDate = new Date();
    var hour = todayDate.getHours();
    var minute = todayDate.getMinutes();
    var second = todayDate.getSeconds();
    document.getElementById("display_clock").innerHTML= hour+":"+minute+":"+second;
}
setInterval(showClock,1000); 