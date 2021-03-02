function initMap() {
    let map;
    let map2;
    let map3;

    map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: 49.3090287,
            lng: 13.0042755
        },
        zoom: 3,
        disableDefaultUI: true
    });

    map2 = new google.maps.Map(document.getElementById('map2'), {
        center: {
            lat: 49.3090287,
            lng: 13.0042755
        },
        zoom: 2,
        disableDefaultUI: true
    });

    map3 = new google.maps.Map(document.getElementById('map3'), {
        center: {
            lat: 49.3090287,
            lng: 13.0042755
        },
        zoom: 1,
        disableDefaultUI: true
    });

    $.getJSON('assets/js/coverage.json', function (zoneObject) {
        console.log(typeof zoneObject);
    })
}