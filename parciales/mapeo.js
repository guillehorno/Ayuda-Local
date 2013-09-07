var ayudalocal = ayudalocal || {};

ayudalocal.mapeo = function () {

    var mostrar;
    var casos;
    var agregarMensaje;
    var generarHtmlMarker;

    mostrar = function (options) {

        casos = options.casos;

        var mapOptions = {
            center: new google.maps.LatLng(-34.397, 150.644),
            zoom: 8,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById(options.selector),
            mapOptions);

        for (var i = 0; i < options.casos.length; i++) {
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(options.casos[i].lat, options.casos[i].long),
                map: map,
                title: options.casos[i].title,
                clickable: true,
                mensaje: i
            });

            agregarMensaje(marker, i);
        }
      


    };

    agregarMensaje = function(marker, i) {

        var infowindow = new google.maps.InfoWindow({ content: generarHtmlMarker(i) });

        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(marker.get('map'), marker);
        });
    };

    generarHtmlMarker = function (i) {
        var html = "<div>";
        html += "<h1>" + casos[i].title + "</h1>";
        html += "<hr/>";
        html += "<h2>Afectados</h2>";
        html += casos[i].afectados;
        html += "<h2>Ayuda Necesitada</h2>";
        html += casos[i].necesitan;
        html += "<h2>Información de Contacto</h2>";
        html += casos[i].contacto;
        html += "<hr/>";
        html += "<a href='#' onclick='"+""+"'>Contribuir</a>";
        html += "</div>";
        return html;
    };

    return {
        mostrar: mostrar
    };
};