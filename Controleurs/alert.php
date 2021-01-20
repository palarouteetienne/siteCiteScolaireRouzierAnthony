<?php

function alert($typeAlert=FALSE, $text)
{
    if($typeAlert == FALSE) echo"<div class='row'><div class='col-lg-6 col-lg-offset-3'><div class='alert alert-success alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>". $text ."</div></div></div>";
    else echo"<div class='col-lg-6 col-lg-offset-3'><div class='alert $typeAlert alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>". $text ."</div></div>";
}

?>