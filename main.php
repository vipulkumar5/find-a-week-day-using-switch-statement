<?php 
function myClass($week){
    switch($week){
        case 1:
            echo " Today is Sunday ";
            break;
            case 2:
                echo "Today is Monday ";
                break;
                case 3:
                    echo "Today is Tuesday ";
                    break;
                    case 4:
                        echo "Today is Wesnesday ";
                        break;
                        case 5:
                            echo "Today is Thrusday ";
                            break;
                            case 6:
                                echo "Today is Friday ";
                                break;
                                case 7:
                                    echo "Today is Saturday ";
                                    break;
                                    default:
                                        echo "No value found ";
                                        break;
                                        
                                               
    }
}
//echo "enter a week value ";
myClass("4");
?>