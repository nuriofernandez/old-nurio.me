/**
 * Update history relative to a fetched document.
 *
 * @param {HTMLDocument} doc New document to update.
 */
function updateHistory(doc, url) {
    window.history.pushState(doc.innerHTML, doc.title, url);
    document.title = doc.title;
}

/**
 * Change current active tab element to a new one based on his name.
 *
 * @param {String} tabName Tab's name at which we want to update. 
 */
function changeActiveTab(tabName) {
    // Clear all current
    Array.from(document.getElementsByClassName("nav-link")).filter(e => e.classList.contains("active")).forEach(e => e.classList.remove("active"));
    // Active new one
    Array.from(document.getElementsByClassName("nav-link")).filter(e => e.innerText == tabName).forEach(e => e.classList.add("active"));
}

/**
 * Switch active tab element relatively to the active tab element at the provided document.
 *
 * @param {HTMLDocument} doc Fetchd document to obtain active tab element.
 */
function switchActiveTab(doc) {
    let activeTab = Array.from(doc.getElementsByClassName("nav-link")).filter(e => e.classList.contains("active"))[0];
    changeActiveTab(activeTab.innerText);
}

/**
 * Switch active content element relatively to the active content element at the provided document.
 *
 * @param {HTMLDocument} doc Fetchd document to obtain active content element.
 */
function switchContent(doc) {
    let content = doc.getElementById("content");
    $("#content").slideUp(150, () => {
        document.getElementById("content").innerHTML = content.innerHTML;
        upgradeImages();
        $("#content").slideDown(150);
    });
}

/**
 * Apply click interceptor listeners to every '<a>' element.
 */
function applyListeners() {
    document.querySelectorAll("a").forEach((element) => {
        element.addEventListener('click', applyListenerToElement);
    });
}

/**
 * Apply click interceptor listener to provided element.
 *
 * @param {HTMLElement} element Element to add interceptor listener.
 */
function applyListenerToElement(element) {
    let url = element.target.href;
    if (!url.startsWith("https://nurio.me/")) return;
    element.preventDefault();

    // Switch content to new page url.
    switchToUrl(url, true);
}

/**
 * Switches the page contents to the providen url.
 *
 * @param {String} url Page url to load.
 * @param {Boolean} pushHistory Should push new page to the browser history?
 */
function switchToUrl(url, pushHistory) {
    window.fetch(url).then((response) => response.text()).then((html) => {
        // Obtain new site content
        let doc = new DOMParser().parseFromString(html, "text/html");

        // Change web content
        switchActiveTab(doc);
        switchContent(doc);

        // Push history if required
        if (pushHistory) updateHistory(doc, url);
    }).catch((message) => {
        // On error display message on console.
        console.log("[API] Error on fetch. " + message);
    });
}

// Start this script at the end of load
window.addEventListener("load", applyListeners);

// Register manual navigation listeners.
window.addEventListener('popstate', () => {
    let newUrl = window.location.href;
    switchToUrl(newUrl, false);
});