// Exercise 1
// $(document).on("mouseover", function(){
//     $('h1').css('background-color', 'yellow');
// });

// $(document).on("mouseout", function(){
//     $('#h1').css('background-color', 'red');
// });


// Exercise 2
$(document).on("mouseover", function(event){
    $('#container').text("X:" + event.pageX + ", Y:" + event.pageY);
});
