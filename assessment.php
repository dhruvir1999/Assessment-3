<?php

echo "\nWELCOME TO PHP BANK MANAGEMENT SYSTEM\n";
echo "\nSelect Your role\n";
echo "\t\t1)Banker\n";
echo "\t\t2)Customer\n";
echo "\t\t3)Exit\n";
$role = readline("Choose your role:\n");

if($role==1)
{
    echo "\nWelcome to Banker's App\n";
    echo "\n\t\tOperations Menu\n";
    echo "\n\t\t1)Add Customer\n";
    echo "\t\t2)View Customer\n";
    echo "\t\t3)Search Customer\n";
    echo "\t\t4)View all Customer\n";
    echo "\t\t5)Total Amounts in bank\n";
    $operation = readline("Enter operation which you want to perform: \n");
    if($operation==1)
    {
        $accno = readline("Enter account no:");
        $name = readline("Enter customer name:");
        $balance = readline("Enter operning balance:");
        // $ch = readline("Do you want to perform more operations press 'y' for yes and press 'n' for no:");
    }
    elseif($operation==2)
    {
        
    }

}


?>