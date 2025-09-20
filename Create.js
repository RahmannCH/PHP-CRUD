document.getElementById("BikinAkun").addEventListener("click", function () {
  Swal.fire({
    title: "Create Account?",
    icon: "info",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, create account!",
  }).then((result) => {
    if (result.isConfirmed) {
      Swal.fire({
        title: ":)",
        text: "Thank you for creating account.",
        icon: "success",
      });
      var confirmation = "Do you want to create new account?";
      if (confirmation) {
        window.location.href = "regis.php";
      }
    }
  });
});
