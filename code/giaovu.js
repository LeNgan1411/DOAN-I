$(document).ready(function () {
    $(".user i").click(function () { 
        // console.log("đã click")
        $(".user-info").toggleClass("nn");
    });   
});
$(document).ready(function () {
    $("li.time-table .list-active button").click(function () { 
        // console.log("đã click")
        $("li.time-table .tb").addClass("d-none");
        $("li.time-table .list-active button").addClass("d-none");
        $("li.time-table .list-active .update-tb").removeClass("d-none");
        $("li.time-table .list-active .x").removeClass("d-none");
    });
});
$(document).ready(function () {
    $("li.time-table .list-active .x").click(function () { 
        // console.log("đã click")
        $("li.time-table .list-active button").removeClass("d-none");
        $("li.time-table .list-active .tb").removeClass("d-none");
        $("li.time-table .list-active .x").addClass("d-none");
        $("li.time-table .list-active .update-tb").addClass("d-none");
    });
});
$(document).ready(function () {
    $(" li.teacher .list-active .on").click(function () { 
        // console.log("đã click")
        $("li.teacher .tb").addClass("d-none");
        $("li.teacher .list-active .btu").addClass("d-none");
        $("li.teacher .list-active .add").removeClass("d-none");
        $("li.teacher .list-active .x").removeClass("d-none");
    });
});
$(document).ready(function () {
    $("li.teacher .list-active .x").click(function () { 
        // console.log("đã click")
        $("li.teacher .list-active .btu").removeClass("d-none");
        $("li.teacher .list-active .tb").removeClass("d-none");
        $("li.teacher .list-active .x").addClass("d-none");
        $(" li.teacher .list-active .add").addClass("d-none");
    });
});
$(document).ready(function () {
    $(" li.teacher .list-active .tw").click(function () { 
        // console.log("đã click")
        $("li.teacher .tb").addClass("d-none");
        $("li.teacher .list-active .btu").addClass("d-none");
        $("li.teacher .list-active .up").removeClass("d-none");
        $("li.teacher .list-active .x").removeClass("d-none");
    });
});
$(document).ready(function () {
    $("li.teacher .list-active .x").click(function () { 
        // console.log("đã click")
        $("li.teacher .list-active .btu").removeClass("d-none");
        $("li.teacher .list-active .tb").removeClass("d-none");
        $("li.teacher .list-active .x").addClass("d-none");
        $(" li.teacher .list-active .up").addClass("d-none");
    });
});
$(document).ready(function () {
    $(" li.teacher .list-active .thir").click(function () { 
        // console.log("đã click")
        $("li.teacher .tb").addClass("d-none");
        $("li.teacher .list-active .btu").addClass("d-none");
        $("li.teacher .list-active .del").removeClass("d-none");
        $("li.teacher .list-active .x").removeClass("d-none");
    });
});
$(document).ready(function () {
    $("li.teacher .list-active .x").click(function () { 
        // console.log("đã click")
        $("li.teacher .list-active .btu").removeClass("d-none");
        $("li.teacher .list-active .tb").removeClass("d-none");
        $("li.teacher .list-active .x").addClass("d-none");
        $(" li.teacher .list-active .del").addClass("d-none");
    });
});