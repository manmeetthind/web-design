// Exercise 2
$(document).on("mouseover", function(event){
    $('#container').text("X:" + event.pageX + ", Y:" + event.pageY);
});
