/*global console, $*/
(function () {
    "use strict";
    
    var links = {};
    
    $.getJSON('utils/getMesechtos.php', function (mesechtos) {
        
        $.each(mesechtos, function (key, val) {
            links[val.name] = val.link;
        });
    });
    $('.mesechta').click(function (e) {
        e.preventDefault();
        var innerText = e.target.innerText;
        
        $('#boxIframe').attr('src', 'https://app.box.com/embed_widget/s/' + links[innerText] + '?view=list&sort=name&direction=ASC&theme=blue');
    });
    
}());