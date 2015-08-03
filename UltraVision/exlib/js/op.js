function view(s){
    //$("#dlg").html("<img src='"+s+"'>");
	$("#dlg").html("");
	$.ajax({
	    url: "./api/chimera_api.php",
	    type: "POST",
	    cache: false,
	    dataType: "html",
	    data: {
	      sw:100,
	      file:s,
	      word:$("#word").val()
	    },
	    success: function(o){
	    	$("#dlg").html(o);
	    }
	  });
    $( "#dialog" ).dialog( "open" );
}