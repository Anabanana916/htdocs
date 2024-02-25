<?php
  switch ($_POST["radcourse"])
  {
    case "HNC" : echo "You have selected an HNC course";
    case "HND" : echo "You have selected an HND course";
    case "BSC" : echo "You have selected a BSC course";
    case "PrtBSC" : echo "You have selecter a Part Time BSC course";
    default    : echo "No course selected";
  }

