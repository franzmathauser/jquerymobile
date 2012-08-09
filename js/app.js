/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function() {
  $('#blog').click(function(){
     // alert('test');
  });
  
  $('div#blog').live('pagebeforeshow',function(event, ui){
  
  $.ajax({
            type : 'GET',
            url : 'http://backend.masterthesis.fm/index.php/rest/messages',
            dataType : "json",
            success : function(data) {
                var bloglist = $('#bloglist');
                    $.each(data.messages, function(key, value){
                        bloglist.append('<li><a href="#">'+value.name+'</a>');
                    });
                    bloglist.listview('refresh');
            }
	});

    });
});
