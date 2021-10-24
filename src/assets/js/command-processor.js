/**
 * Detect's when someone types something anywhere in the website. 💻
 * Then, starts the desired effect for that keyword!
 */
let input = "";
document.addEventListener('keypress',function(e){
    input += String.fromCharCode(e.keyCode).toLowerCase();
    if(input.endsWith("dango")) {
        const eventstop = new Event('command-effect-should-stop');
        document.dispatchEvent(eventstop);

        const event = new Event('dango-effect-should-start');
        document.dispatchEvent(event);
    }
});
