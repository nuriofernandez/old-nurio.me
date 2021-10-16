/**
 * Detect's when someone types `dango` anywhere in the website. 💻
 */
let input = "";
document.addEventListener('keypress',function(e){
    input += String.fromCharCode(e.keyCode).toLowerCase();
    if(!input.endsWith("dango")) return;
    playEffect();
});

/**
 * Starts the dango falling and plays the dango song! 🍡🎶
 */
function playEffect() {
    // Add css style to make dangos fall. 🍃
    const style = document.createElement("link");
    style.setAttribute("rel", "stylesheet");
    style.setAttribute("type", "text/css");
    style.setAttribute("href", `https://${window.location.hostname}/assets/css/dango.css`);
    document.getElementsByTagName("head")[0].appendChild(style);

    // Create the area where the dangos will fall, and spawn some dangos. 📦
    const loader = document.createElement("div");
    loader.setAttribute("class", "loader")
    for(let i=0; i<=9; i++) {
        // Each span element will represent a dango
        loader.appendChild(document.createElement("span"));
    }
    document.getElementsByTagName("body")[0].appendChild(loader);

    // Play the dango song!! 💞
    const audio = new Audio(`https://${window.location.hostname}/assets/audio/dango.mov`);
    audio.loop = true;
    audio.play();
}