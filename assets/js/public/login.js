// $(document).ready(function() {
//     $("#btn-login").click( function() {
//         var username = $("#inputUsername").val();

//         alert(username);
//     });
// });

$(document).ready(function() {

    $("#btn-login").click( function() {

        var _0xbe0a = "users/login";
        var username = $("#inputUsername").val();
        var password = $("#inputPassword").val();

        // alert(_0xbe0a);

        $.ajax({

            url: _0xbe0a,
            type: "POST",
            data: {
                "username": username,
                "password": password
            },

            success:function(response){

                dataRespon = $.parseJSON(response);

                Swal.fire({
                    type: dataRespon.msgType,
                    title: dataRespon.msgValue,
                    text: dataRespon.msgText
                })

                if (dataRespon.msgType == "success") {

                    Swal.fire({
                        type: dataRespon.msgType,
                        title: dataRespon.msgValue,
                        text: dataRespon.msgText,
                        timer: 3000,
                        showCancelButton: false,
                        showConfirmButton: false
                    })
                    .then (function() {
                        window.location.href = "home";
                    });

                } else {

                    Swal.fire({
                        type: dataRespon.msgType,
                        title: dataRespon.msgValue,
                        text: dataRespon.msgText
                    });

                }

            },

            error:function(response){

                Swal.fire({
                  type: 'error',
                  title: 'Opps!',
                  text: 'server error!'
                });

                console.log(response);

            }

          });


    });

});



// var _0xbe0a = document.getElementById('btn-login');

// // var fruits = ["Banana", "Orange", "Apple", "Mango"];

// _0xbe0a.addEventListener('click', function handleClick() {

//         Swal.fire({
//             title: 'Are you sure?',
//             text: "It will permanently deleted !",
//             type: 'warning',
//             showCancelButton: true,
//             confirmButtonColor: '#3085d6',
//             cancelButtonColor: '#d33',
//             confirmButtonText: 'Yes, delete it!'
//         }).then(function() {
//             swal(
//               'Deleted!',
//               'Your file has been deleted.',
//               'success'
//             );
//         });

// });
