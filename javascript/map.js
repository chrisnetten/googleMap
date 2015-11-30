 

        function initializeMap() {
   


        
          var mapOptions = {
            zoom: 8,
            center: new google.maps.LatLng(44.394086, -79.692675),
            mapTypeId: google.maps.MapTypeId.ROADMAP
          };
       var  map = new google.maps.Map(document.getElementById('map'),mapOptions);
       
       
          
            for(var i = 0; user.length; i++) {
                    var myLatlng = new google.maps.LatLng( user[i].lat, user[i].lng);
                         var marker = new google.maps.Marker({
                         position: myLatlng,
                         title: user[i].name
                          });
                           marker.setMap(map);
            
          
        
            }
      
        }
         
    
         
        google.maps.event.addDomListener(window, 'load', initializeMap);
        
