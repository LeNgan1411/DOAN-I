$(document).ready(function () {
    $(".user i").click(function () { 
        // console.log("đã click")
        $(".user-info").toggleClass("nn");
    });   
});
$(document).ready(function () {
    $(".list-active button").click(function () { 
        // console.log("đã click")
        $(".tb").addClass("d-none");
        $(".list-active button").addClass("d-none");
        $(".list-active .update-tb").removeClass("d-none");
        $(".list-active .x").removeClass("d-none");
    });
});
$(document).ready(function () {
    $(".list-active .x").click(function () { 
        // console.log("đã click")
        $(".list-active button").removeClass("d-none");
        $(".list-active .tb").removeClass("d-none");
        $(".list-active .x").addClass("d-none");
        $(".list-active .update-tb").addClass("d-none");
    });
});