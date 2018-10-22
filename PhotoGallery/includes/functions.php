<?php

function stripZerosFromDate($markedString = "")
{
    $noZero = str_replace("*0", "", $markedStringbject);

    $cleanString = str_replace("*", '', $noZero);

    return $cleanString;
}

// function to output a message
function outputMessage($message="")
{
    if(!empty($message)){
        return "<p class=\"message \"> {$message}</p>";
    }else {
        return "";
    }
}

function redirect_to ($location= null)
{
    if ($location != null){
        header("Location: {$location}");
        exit;
    }
}