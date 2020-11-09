const API_KEY = "oGRYZVAzQWKEgyBitw1xZk_t3fazqJqqdj5sLr9KdY4"

function randomImage() {
    const bodyElement = document.getElementById("body");
    const loadingElement = document.getElementById("h2");
    loadingElement.innerText = "Loading...";

    fetch(`https://api.unsplash.com/photos/random?query=abstract,architecture&orientation=landscape&client_id=${API_KEY}`).then(async (response) => {
        const imageData = await response.json();
        bodyElement.style.backgroundImage = `url("${imageData.urls.full}"`;

        loadingElement.innerText = "";
    }).catch((error) => {
        handleError(error);
    });
}

function handleError(error) {
    const errorElement = document.getElementById("h2");

    console.error(error);
    errorElement.innerText = error;
}

randomImage();
