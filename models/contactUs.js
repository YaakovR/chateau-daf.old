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
    
    getContent('contactUs.php');
}());