<?php
setcookie(
    name: "USERNAME",
    value: "",
    expires_or_options: time()-3600,
    path:"/"
);
setcookie(
    name: "NAMEUSER",
    value: "",
    expires_or_options: time()-3600,
    path:"/"
);
header("Location: ./");
?>