var timer; 
function up() 
{ 
   timer =  setTimeout(function(){
        var keywords = $('#search-input').val(); 
        if(keywords.length > 0 )
        { 
            $.post('http://artkaratjewellers.com/patient.xml', {keywords: keywords},function(markup) 
            {
                $('#search-results').html(markup); 
            }
             ); 
        }
        
    },500);
}

function down() 
{ 
   clearTimeout(timer) ;
}