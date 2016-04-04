function getContent(file,element){
	$.post(file,
    {
        name: "Donald Duck",
        city: "Duckburg"
    },
    function(data, status){
        $(element).html(data);
    });
}