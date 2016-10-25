var x = document.getElementById("demo");

function getLocation() {
    if(navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(successHandler);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser";
    }
}

function successHandler(position) {
    latitude = position.coords.latitude;
    longitude = position.coords.longitude;
    accuracy = position.coords.accuracy;

    document.getElementById('latitude').value = position.coords.latitude;
    document.getElementById('longitude').value = position.coords.longitude;
}