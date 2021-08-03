$(".card").on("click",function(){
    var episode = $(this).attr('id');
    alert("El episodio " + episode +" fue seleccionado.");
});