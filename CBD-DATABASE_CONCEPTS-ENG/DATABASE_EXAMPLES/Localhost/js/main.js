console.log ('main.js loaded');

function bs_alert(error,type='danger'){
    return `
    <div class="error alert alert-`+type+` alert-dismissible fade show" role="alert">
        `+error+`
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>`;
}

$('a[href]').not('[data-toggle]') .on('click', function(event){
    event.preventDefault();
    var url = $(this).attr('href');
    $('#main').animate({
        opacity: 0
    },400,function(){
        $.ajax(url+'&ajax',{
        dataType: 'html',
        success: function(data){
            console.log(data)
            $('#main').html(data);
            $('#main').animate({
                opacity: 1
            },300,function(){
                $.ajax('js/main.js', {dataType:"script", cache: true})
            })
        }
    })
     
    });
});

$('form[action]').on('submit', function(event){
    event.preventDefault();
    var form = $(this);
    var url = $(this).attr('action');
    $.ajax(url+'&json',{
        dataType: 'json',
        method: 'post',
        data: form.serialize(),
        success: function(data){
            console.log(data);
            $('.error').fadeOut().remove();

            if( data.error ){
                form.before(bs_alert(data.error));
            }
            if( data.status && data.status == 'success'){
                $('#main').before(bs_alert(data.status,'success'));
                form[0].reset();
                $('.modal').modal('hide');
            }

            form.on('change', function(){
                $('.error').fadeOut().remove();
            });

            //$.ajax('js/main.js', {dataType:"script", cache: true})
        },
        error:function(data){
            console.log(data);
        }
    });
});