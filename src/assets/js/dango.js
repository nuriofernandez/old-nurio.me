(() => {
    const domain = `${window.location.protocol}//${window.location.hostname}`;
    const dangoFallingElementId = "dango-effect";

    /**
     * Loads the dango song! 🍡🎶
     */
    let _audio;
    const getAudio = () => {
        if (!_audio) {
            _audio = new Audio(`${domain}/assets/audio/dango.mov`);
            _audio.loop = true;
        }
        return _audio;
    }

    /**
     * Starts the dango falling and plays the dango song! 🍡🎶
     */
    document.addEventListener('dango-effect-should-start', () => {
        // Add css style to make dangos fall. 🍃
        const style = document.createElement("link");
        style.setAttribute("rel", "stylesheet");
        style.setAttribute("type", "text/css");
        style.setAttribute("href", `${domain}/assets/css/dango.css`);
        document.getElementsByTagName("head")[0].appendChild(style);

        // Create the area where the dangos will fall, and spawn some dangos. 📦
        const loader = document.createElement("div");
        loader.setAttribute("class", "loader");
        loader.setAttribute("id", dangoFallingElementId);
        for (let i = 0; i <= 9; i++) {
            // Each span element will represent a dango
            loader.appendChild(document.createElement("span"));
        }
        document.getElementsByTagName("body")[0].appendChild(loader);

        // Play the dango song!! 💞
        const audio = getAudio();
        audio.currentTime = 0;
        audio.play();
    });

    /**
     * Stops the dango falling and pauses the dango song! 🍡🎶
     */
    document.addEventListener('command-effect-should-stop', () => {
        const audio = getAudio();
        audio.pause();
        document.querySelector(`#${dangoFallingElementId}`)?.remove();
    });
})();