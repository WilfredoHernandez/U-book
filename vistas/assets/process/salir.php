
<?php
session_start();

session_destroy();

header("location:../../../index.php")


?>

<script>
  function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
  }
</script>





