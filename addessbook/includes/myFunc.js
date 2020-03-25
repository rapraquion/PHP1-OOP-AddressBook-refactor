// $(document).ready(function() {
//   const email_regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//   const phone_regex = /^(\d+-?)+\d+$/;
//   const Toast = Swal.mixin({
//     toast: true,
//     position: "top-end",
//     showConfirmButton: false,
//     timer: 3000,
//     onOpen: toast => {
//       toast.addEventListener("mouseenter", Swal.stopTimer);
//       toast.addEventListener("mouseleave", Swal.resumeTimer);
//     }
//   });
//   $("#newContact").on("click", function(e) {
//     var name = $("#name").val();
//     var contact = $("#contact").val();
//     var email = $("#email").val();
//     var email_result = email_regex.test(email);
//     var phone_result = phone_regex.test(contact);
//     let data = [name, contact, email];
//     e.preventDefault();
//     if (!name && !contact && !email) {
//       Toast.fire({
//         icon: "error",
//         title: "Please fill up the form!"
//       });
//     } else if (!contact) {
//       Toast.fire({
//         icon: "error",
//         title: "Contact is required!"
//       });
//     } else if (!name) {
//       Toast.fire({
//         icon: "error",
//         title: "Fullname is required!"
//       });
//     } else if (!email) {
//       Toast.fire({
//         icon: "error",
//         title: "Email address is required!"
//       });
//     } else if (!email_result) {
//       Toast.fire({
//         icon: "error",
//         title: "Invalid email address!"
//       });
//     } else if (!phone_result) {
//       Toast.fire({
//         icon: "error",
//         title: "Invalid phone syntax!"
//       });
//     }
//     $.ajax({
//       url: "./controllers/CrudController.php",
//       method: "POST",
//       data: data,
//       success: function(data) {
//         console.log(data);
//         Toast.fire({
//           icon: "success",
//           title: "New contact has been added!"
//         });
//       },
//       error: function(data) {
//         Toast.fire({
//           icon: "error",
//           title: "Database Error!"
//         });
//       }
//     });
//   }); // end of newContact
// $(".editContact").on("click", function(e) {
//   var valid = this.form.checkValidity();
//   if (valid) {
//     var editName = $(".editname").val();
//     var editContact = $(".editcontact").val();
//     var editEmail = $(".editemail").val();
//     e.preventDefault();
//     $.ajax({
//       type: "POST",
//       url: "./controllers/CrudController.php",
//       data: {
//         name: editName,
//         contact: editContact,
//         email: editEmail
//       },
//       success: function(data) {
//         console.log(data);
//         Swal.fire({
//           position: "top-end",
//           icon: "success",
//           title: "New contact has been saved",
//           showConfirmButton: false,
//           timer: 2000
//         });
//       },
//       error: function(data) {
//         Swal.fire({
//           icon: "error",
//           title: "Oops...",
//           text: "Please fill up the form"
//         });
//       }
//     });
//   } else {
//     Swal.fire({
//       icon: "error",
//       title: "Oops...",
//       text: "Error"
//     });
//   }
// }); // end of editContact
// $("#deleteContact").on("click", function(e) {
//   var id = $("#id").val();
//   $.ajax({
//     type: "POST",
//     url: "./controllers/CrudController.php",
//     data: {
//       id: id
//     },
//     success: function(data) {
//       console.log(data);
//       Swal.fire({
//         position: "top-end",
//         icon: "success",
//         title: "Contact is deleted",
//         showConfirmButton: false,
//         timer: 2000
//       });
//       $("#addForm").modal("hide");
//     },
//     error: function(data) {
//       Swal.fire({
//         icon: "error",
//         title: "Oops...",
//         text: "Database Error"
//       });
//     }
//   });
// }); // end of deleteContact
// }); // end of document
