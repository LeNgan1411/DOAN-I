var header = document.getElementById("head");

var header_height = header.offsetHeight ;
var footer = document.getElementById("fo");

var footer_height = footer.offsetHeight ;

var x = window.innerHeight - header_height - footer_height;
console.log(x);

var main = document.getElementById("m");

var main_height = main.offsetHeight ;
if (main_height <= x ) {
    document.getElementById("m").style.minHeight = x;
}

$(document).ready(function () {
    $(".login button").click(function () { 
        // console.log("đã click")
        $(".login-menu").removeClass("d-none");
        $(".login").addClass("d-none");
        
    });
});



// const accounts = [
//     {
//         name: "Lê Thị Ngân",
//         userName: "ngan1420",
//         password: "lengan",
//         img: "https://cdn6.f-cdn.com/contestentries/1458359/21383270/5c0fd7001d5ad_thumb900.jpg"
//     },
//     {
//         name: "Lê Thị A",
//         userName: "ngana1420",
//         password: "lengan",
//         img: "https://cdn6.f-cdn.com/contestentries/1458359/21383270/5c0fd7001d5ad_thumb900.jpg"
//     },
//     {
//         name: "Lê Thị B",
//         userName: "nganb1420",
//         password: "lengan",
//         img: "https://cdn6.f-cdn.com/contestentries/1458359/21383270/5c0fd7001d5ad_thumb900.jpg"
//     },
//     {
//         name: "Lê Thị C",
//         userName: "nganc1420",
//         password: "lengan",
//         img: "https://cdn6.f-cdn.com/contestentries/1458359/21383270/5c0fd7001d5ad_thumb900.jpg"
//     },
// ];


// $(document).ready(function () {
//     var user;
//     var pass;
//     // click nút đăng nhập
//     $(".confirm button").click(function () { 
//         // lấy giá trị trong ô nhập 
//         user = $("#user").val();
//         pass = $("#pass").val();
//         if(user != null && pass != null && user.length > 0 && pass.length > 0){
//             console.log("user:" + user + " pass:" + pass ); 
//             console.log(login(user, pass).flag);
//             if(login(user,pass).flag){
//                 // thực hiện các tác vụ khi đn thành công
//                 location= "https://www.google.com.vn/?hl=vi"
//                 console.log("đã đăng nhập đúng")
//             } else{
//                 // thực hiện tác vụ khi đăng nhập ko thành công
//                 $(".login-fail").removeClass("d-none");
//             }
//         }
//     });

//     function login(user, pass){
//         var account;
//         var flag = false;
//         for (let i = 0; i < accounts.length; i++) {
//             if(user == accounts[i].userName && pass == accounts[i].password){
//                 account = accounts[i];
//                 flag = true;
//                 break;
//             }
//         }
//         return {account, flag};
//     }
// });
$(document).ready(function () {
    $(".login-fail .cancel").click(function () { 
        // console.log("đã click")
        $(".login-fail").addClass("d-none");
        $(".login-menu input").val("");
    });d
});






var header = document.getElementById("head");

var header_height = header.offsetHeight ;
var footer = document.getElementById("fo");

var footer_height = footer.offsetHeight ;

var x = window.innerHeight - header_height - footer_height;
console.log(x);

var main = document.getElementById("m");

var main_height = main.offsetHeight ;
if (main_height <= x ) {
    document.getElementById("m").style.minHeight = x;
}