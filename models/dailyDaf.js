/*global console, $*/
(function () {
    "use strict";
    
    function getContent(url) {
        $('#mainDiv').empty();
        $.get(url, function (data) {
            var mainDiv = $(data).find('#mainDiv').html();
            $('#mainDiv').append(mainDiv);
        });
    }
    
    function getMesechtos(url, callback) {
        $.getJSON(url, function (mesechtos) {
            $.each(mesechtos, function (key, val) {
                $('<li><a href="">' + val.name + '</a></li>').appendTo('#shiurim').click(function (e) {
                    e.preventDefault();
                    $('#it').attr('src', 'https://app.box.com/embed_widget/s/' + val.link + '?view=list&sort=name&direction=ASC&theme=blue');
                });
            });
        });
        callback();
    }
    getMesechtos('utils/getMesechtos.php', getContent('dailyDaf.php'));
    
    //getContent('dailyDaf.php');
    
}());