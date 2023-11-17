<!--LOGOUT FOR RGO-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.2/dist/sweetalert2.min.css">
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.3.2/dist/sweetalert2.all.min.js"></script>
<script>
document.getElementById("btn").addEventListener("click", function() {
    Swal.fire({
        title: 'Logout Confirmation',
        text: 'Are you sure you want to log out?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
    }).then((result) => {
        if (result.isConfirmed) {
            // User clicked "Yes"
            Swal.fire('Logged out successfully!', '', 'success');
            window.location.href = 'loginRGOstaff.php';
        } else if (result.dismiss === Swal.DismissReason.cancel) {
            // User clicked "No"
            Swal.fire('Logout canceled', '', 'info');
           
        }
    });
});
</script>
    
</body>
</html>