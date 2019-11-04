




$(document).ready(function () {
    $("#icon-responsive i").click(function () {
        $(".navi-menus >ul").slideToggle();
    });
    
    $(".icon-search").click(function () {
        $(".search-panel ").toggleClass("show-search-panel");
    });
}); 