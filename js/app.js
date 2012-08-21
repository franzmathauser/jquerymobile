/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
  $('#blog').click(function(){
     // alert('test');
  });
  
  $('div#blog').live('pagebeforecreate',loadBlogMessages);
  
  $('div#places').live('pagebeforeshow',loadPlacesList);
  
  $('div#places_detail').live('pageshow',loadPlacesDetail);
  
  
  
  $('#blog form').live('submit', function (e) {

    //cache the form element for use in this function
    var $this = $(this);

    //prevent the default submission of the form
    e.preventDefault();

    //run an AJAX post request to your server-side script, $this.serialize() is the data from your form being added to the request
    $.post($this.attr('action'), $this.serialize(), function (responseData) {

        //in here you can analyze the output from your server-side script (responseData) and validate the user's login without leaving the page
    });
});
  
});

function sortByNameAsc(dataA, dataB)
{
        if ( dataA.name.toUpperCase() < dataB.name.toUpperCase() ) 
                return -1;
        if ( dataA.name.toUpperCase() > dataB.name.toUpperCase() ) 
                return 1;
        return 0; 
}



var loadBlogMessages = function(event, ui){
  
    $.ajax({
        type : 'GET',
        url : 'http://backend.masterthesis.fm/index.php/rest/messages',
        dataType : "json",
        success : function(data) {
            var bloglist = $('#bloglist');
            bloglist.empty();
                $.each(data.messages, function(key, value){
                    bloglist.append('<li><a href="#">'+value.name+'</a>');
                });
                bloglist.listview('refresh');
        }
    });

  };
  
var loadPlacesList = function(event, ui){
      
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition( function(position){
            
            var lat = position.coords.latitude;
            var lon = position.coords.longitude;
            
            sessionStorage.lat = lat;
            sessionStorage.lon = lon;
            
            $.ajax({
                type : 'GET',
                url : ' http://backend.masterthesis.fm/index.php/rest/places?location='+lat+','+lon,
                dataType : "json",
                success : function(data) {
                    var letter; 
                    var placeslist = $('#placeslist');
                    
                        placeslist.empty();
                        
                        var test = data.results.sort(sortByNameAsc)
                        

                        $.each(test, function(key, value){
                            var currentLetter = value.name.substr(0,1).toUpperCase();
                            if(currentLetter != letter){
                                letter = currentLetter;
                                $('<li data-role="list-divider">'+letter+'</li>').appendTo(placeslist);
                            }
                            
                            placeslist.append('<li><a href="places_detail.php" onClick="javascript:sessionStorage.place=\''+value.id+'\';" data-transition="slide">'+value.name+'</a>');
                            
                        });
                        placeslist.listview('refresh');
                }
            });
        });
        
      } else {
        alert("GEOlocation not supported!");
      }
  };
  
var loadPlacesDetail = function(event, ui){
  
    var detailEntry = $('#detail-entry');
    detailEntry.empty();
    
    var place = sessionStorage.place;
    var lat = sessionStorage.lat;
    var lon = sessionStorage.lon;
    
    
    
    $.ajax({
        type : 'GET',
        url : ' http://backend.masterthesis.fm/index.php/rest/places?location='+lat+','+lon,
        dataType : "json",
        success : function(data) {
                $.each(data.results, function(key, value){
                    
                    if(value.id == place){
                        
                        $('<img src="'+value.icon+'" /><h1>'+value.name+'</h1><h3>'+value.vicinity+'</h3>').appendTo(detailEntry);
                    }
                    
                });
               // placeslist.listview('refresh');
        }
    });

  };