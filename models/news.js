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
    
    function getPosts(url) {
        $.getJSON(url, function (posts) {
            $.each(posts, function (key, val) {
                $('#postsDiv').append(val.timeStamp + '<h3><strong>' + val.title + '</strong></h3>' + '<h5>' + val.content + '</h5><hr>');
            });
        });
    }
    
    getContent('news.php');
    getPosts('utils/getPosts.php');
}());