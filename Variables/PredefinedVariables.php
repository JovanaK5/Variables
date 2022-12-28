<?php

   @$val = 1/0;
   echo $php_errormsg;

   $name="Jovana";
   echo 'Hello ' . htmlspecialchars($_COOKIE["$name"]) . '!';