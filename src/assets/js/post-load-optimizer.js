function upgradeImages(){
    Array.from(document.getElementsByTagName("img"))
    .filter(elem => elem.src.startsWith("https://i.imgur.com/"))
    .forEach(elem => {
        elem.src = elem.src.replace("s.png", "m.png");
        elem.src = elem.src.replace("s.jpg", "m.jpg");
    });
}

window.addEventListener("load", upgradeImages);
