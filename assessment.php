<?php

class BankManagementSystem
{
    private $customers = [];
    private $balance = 0;

    public function displayMenu()
    {
        echo "====== Bank Management System ======\n";
        echo "1. Banker Module\n";
        echo "2. Customer Module\n";
        echo "3. Exit\n";
    }

    public function execute()
    {
        do {
            $this->displayMenu();
            $choice = readline("Enter your choice: ");

            switch ($choice) {
                case 1:
                    $this->bankerModule();
                    break;
                case 2:
                    $this->customerModule();
                    break;
                case 3:
                    echo "Exiting Bank Management System. Goodbye!\n";
                    break;
                default:
                    echo "Invalid choice. Please enter a valid option.\n";
            }
        } while ($choice != 3);
    }

    private function bankerModule()
    {
        echo "====== Banker Module ======\n";
        echo "1. Deposit Money\n";
        echo "2. Withdraw Money\n";
        echo "3. Check Balance\n";
        echo "4. Back to Main Menu\n";

        $choice = readline("Enter your choice: ");

        switch ($choice) {
            case 1:
                $amount = floatval(readline("Enter the deposit amount: "));
                $this->balance += $amount;
                echo "Deposit successful. New balance: {$this->balance}\n";
                break;
            case 2:
                $amount = floatval(readline("Enter the withdrawal amount: "));
                if ($amount <= $this->balance) {
                    $this->balance -= $amount;
                    echo "Withdrawal successful. New balance: {$this->balance}\n";
                } else {
                    echo "Insufficient funds. Withdrawal failed.\n";
                }
                break;
            case 3:
                echo "Current Balance: {$this->balance}\n";
                break;
            case 4:
                echo "Exiting Banker Module.\n";
                break;
            default:
                echo "Invalid choice. Please enter a valid option.\n";
        }
    }

    private function customerModule()
    {
        echo "====== Customer Module ======\n";
        echo "1. Create Customer Account\n";
        echo "2. View Customer List\n";
        echo "3. Back to Main Menu\n";

        $choice = readline("Enter your choice: ");

        switch ($choice) {
            case 1:
                $name = readline("Enter customer name: ");
                $this->customers[] = $name;
                echo "Customer account created for $name.\n";
                break;
            case 2:
                echo "Customer List:\n";
                foreach ($this->customers as $index => $customer) 
                {
                    echo "{$index}.$customer\n";
                }
                break;
            case 3:
                echo "Exiting Customer Module.\n";
                break;
            default:
                echo "Invalid choice. Please enter a valid option.\n";
        }
    }
}

// Instantiate and run the Bank Management System
$bankSystem = new BankManagementSystem();
$bankSystem->execute();
