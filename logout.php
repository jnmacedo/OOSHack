<?php
session_start();
session_destroy();
Header("Location: http://localhost/OOSHack/index.php");

