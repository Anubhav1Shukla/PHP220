<?php

/*
$amount=readline("Enter amount: \n");
$reg=readline("Enter customer is regular or not:  ");
if($reg=="regular" && $amount>500){
    $disc=$amount-(20/100*$amount);
}else if($reg=="regular" && $amount<=500){
    $disc=$amount-(10/100*$amount);
}else if($reg!="regular" && $amount>500){
    $disc=$amount-(5/100*$amount);
}else if($reg=="regular" && $amount<=500){
    $disc=$amount;
}
echo "Final Amount is: ",$disc;


$day=readline("Enter day: \n");
$month=readline("Enter month: \n");
$year=readline("Enter year: \n");

if($month>=1 &&  $month<=12 && $year>1000){
        if($month==2 && day==28){
            echo "valid month"; 
        }else if(($month==1  || $month==3 || $month==5 || $month==7 || $month==8 ||  $month==10 || $month==12) && $day>=1 && $day<=31){
            echo "valid month";
        }
        else if(($month==4 || $month==6 || $month==9 || $month=11) && $day>=1 && $day<=30){
            echo "valid month";
        }else{
            echo "invalid day for the given month";
        }
}
else{
    echo "Invalid month";
}




$income=readline("Enter income: \n");
$age=readline("Enter age: \n");

if($income <10000){
    echo "no tax applied";
}else if($income>=10000 && $income<=20000){
    if($age<65){
        echo "10% tax: ",10/100*$income;
    }else if($age>=65){
        echo "5% tax: ",5/100*$income;
    }
}else if($income>20000){
    if($age<65){
        echo "20% tax: ",20/100*$income;
    }else if($age>=65){
        echo "15% tax: ",15/100*$income;
    }
}
*/

$menu=readline ("Enter your choice for Breakfast 1 Lunch 2 snacks 3 Dinner 4: ");
switch($menu)
{
    case 1:
    echo "1 for paratha\n";
    echo "2 for chai bread\n";
    $breakfast=readline("please select your choice for breakfast :");
    
    switch($breakfast){
        case 1:
            echo "Good Morinig Your are choosing paratha wait a minute thank you..";
            break;
        case 2:
            echo "Good Morinig Your are choosing chai bread wait a minute thank you..";
            break;
    }
    case 2:
        echo "1 for dal rice vegetable\n";
        echo "2 for puri sabji\n";
        $breakfast=readline("please select your choice for Lunch :");
        
        switch($breakfast){
            case 1:
                echo "Good Morinig Your are choosing dal rice vegetable wait a minute thank you..";
                break;
            case 2:
                echo "Good Morinig Your are choosing puri sabji wait a minute thank you..";
                break;
        }

        case 3:
            echo "1 for samosha chai\n";
            echo "2 for only coffe \n";
            $breakfast=readline("please select your choice for snacks :");
            
            switch($breakfast){
                case 1:
                    echo "Good Morinig Your are choosing samosha chai wait a minute thank you..";
                    break;
                case 2:
                    echo "Good Morinig Your are choosing only coffe wait a minute thank you..";
                    break;
            }    
            case 4:
                echo "1 for roti sabji\n";
                echo "2 for roti sabji raita rice dal \n";
                $breakfast=readline("please select your choice for dinner:");
                
                switch($breakfast){
                    case 1:
                        echo "Good Morinig Your are choosing roti sabji wait a minute thank you..";
                        break;
                    case 2:
                        echo "Good Morinig Your are choosing roti sabji raita rice dal
                         wait a minute thank you..";
                        break;
                }    
}

 








                  

?>