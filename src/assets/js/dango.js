let input = "";
document.addEventListener('keypress',function(e){
    input += String.fromCharCode(e.keyCode);
    if(!input.endsWith("dango")) return;

    const audio = new Audio(`https://${window.location.hostname}/assets/audio/dango.mov`);
    audio.play();
});