var Contact = function () {
    return {        
        //Map
        initMap: function () {
            var map;            
            $(document).ready(function(){
                map = new GMaps({ 
                    div: '#map',
                    lat: 51.509878,
                    lng: -0.144584
                });
                var marker = map.addMarker({
                    lat: 51.509878,
                    lng: -0.144584,
                    title: 'Atlas Hostels'
                });
            });
        }
    };
}();