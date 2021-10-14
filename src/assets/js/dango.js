let input = "";
document.addEventListener('keypress',function(e){
    input += String.fromCharCode(e.keyCode);
    if(!input.endsWith("dango")) return;
    playEffect();
});

function playEffect() {
    const style = document.createElement("link");
    style.setAttribute("rel", "stylesheet");
    style.setAttribute("type", "text/css");
    style.setAttribute("href", `https://${window.location.hostname}/assets/css/dango.css`);
    document.getElementsByTagName("head")[0].appendChild(style);

    const loader = document.createElement("div");
    loader.setAttribute("class", "loader")
    for(let i=0; i<=9; i++) {
        loader.appendChild(document.createElement("span"));
    }
    document.getElementsByTagName("body")[0].appendChild(loader);


    const audio = new Audio(`https://${window.location.hostname}/assets/audio/dango.mov`);
    audio.play();
}