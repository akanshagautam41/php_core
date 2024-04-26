<?php


class Banker{
    private $customers;

    public function __construct() {
        $this->customers = [];
    }

  
    public function addCustomer($name, $openingBalance) {
        $this->customers[$name] = $openingBalance;
        echo "Customer account added successfully!\n";
    }

    
    public function deposit($name, $amount) {
        if (isset($this->customers[$name])) {
            $this->customers[$name] += $amount;
            echo "$amount deposited successfully into $name's account!\n";
        } else {
            echo "Customer not found!\n";
        }
    }

    
    public function withdraw($name, $amount) {
        if (isset($this->customers[$name])) {
            if ($this->customers[$name] >= $amount) {
                $this->customers[$name] -= $amount;
                echo "$amount withdrawl successfully from $name's account!\n";
            } else {
                echo "Insufficient funds!\n";
            }
        } else {
            echo "Customer not found!\n";
        }
    }

   
    public function checkBalance($name) {
        if (isset($this->customers[$name])) {
            echo "$name's account balance: $" . $this->customers[$name] . "\n";
        } else {
            echo "Customer not found!\n";
        }
    }
}


function displayMenu() {
    echo "PHP Bank Management System\n";
    echo "1. Add Customer\n";
    echo "2. Deposit\n";
    echo "3. Withdraw\n";
    echo "4. Check Balance\n";
    echo "5. Exit\n";
}


$banker = new Banker();

while (true) {
    displayMenu();
    echo "Enter your choice: ";
    $choice = readline();

    switch ($choice) {
        case '1':
            echo "Enter customer name: ";
            $name = readline();
            echo "Enter opening balance: $";
            $balance = readline();
            $banker->addCustomer($name, $balance);
            break;
        case '2':
            echo "Enter customer name: ";
            $name = readline();
            echo "Enter amount to deposit: $";
            $amount = readline();
            $banker->deposit($name, $amount);
            break;
        case '3':
            echo "Enter customer name: ";
            $name = readline();
            echo "Enter amount to withdrawl: $";
            $amount = readline();
            $banker->withdraw($name, $amount);
            break;
        case '4':
            echo "Enter customer name: ";
            $name = readline();
            $banker->checkBalance($name);
            break;
        case '5':
            echo "Exiting...\n";
            exit;
        default:
            echo "Invalid choice! Please try again.\n";
    }
}

?>
