// Get click and show likes

var $container = $('.js-like-deslike');
$container.find('a').on('click', function(e){
    console.log('Click detectado');

    
    var $likeType = $(this).data('like');


    $.ajax({
        url: '/mensagens/1/like/'+$likeType,
        method: 'POST'
    }).then(function(response) {
        console.log(response.likes);
        document.getElementById('js-total-likes').innerHTML = response.likes;
    });
});