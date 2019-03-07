<?php

if($_POST["comment"])
  error_log($_POST["comment"]);
else
  error_log("There is nothing to log at the moment");
  
