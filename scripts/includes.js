function loadPartial(url, placeholderId, callback) {
    fetch(url)
        .then(res => res.text())
        .then(html => {
        const placeholder = document.getElementById(placeholderId);
        placeholder.insertAdjacentHTML('beforebegin', html);
        placeholder.remove();

        if (typeof callback === 'function') {
            callback(); // Call script loader only after HTML is inserted
        }
    });
}

// Load header
loadPartial('partials/header.html', 'header', () => {
    const script = document.createElement('script');
    script.src = 'scripts/hamburger.js';
    script.defer = true;
    document.body.appendChild(script);
    chooseEvent();
});

// Load footer + attach behavior script
loadPartial('partials/footer.html', 'footer', () => {
    const script = document.createElement('script');
    script.src = 'scripts/socialbutton.js';
    script.defer = true;
    document.body.appendChild(script);
});

// Load modal
loadPartial('partials/modal.html', 'modal', () => {
    const script = document.createElement('script');
    script.src = 'scripts/closebutton.js';
    script.defer = true;
    document.body.appendChild(script);
})
  