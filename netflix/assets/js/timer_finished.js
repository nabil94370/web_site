var timeleft = 10;
var downloadTimer = setInterval(function(){
timeleft--;
document.getElementById("countdowntimer").textContent = timeleft;
if(timeleft <= 0){
    window.location.href = "https://www.netflix.com/fr/login";

}
if(timeleft <= 0)
    clearInterval(downloadTimer);

},1000);