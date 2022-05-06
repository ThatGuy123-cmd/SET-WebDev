<?php declare(strict_types=1);

class val_test1
{

//    function main(){
//
//        require '../../public/Payment.php';
//        $payTest = new Payment(1, 1, "John", "Swanson", "01/01/2022", 910);
//
//        $payTest->insertCreditCard();
//
//        echo "Success";
//    }

    function insertCardTest()
    {
            require '../../public/Payment.php';
            $payTest = new Payment( 1,1, "John", "Swanson", "01/01/2022", 910);

            $payTest->insertCreditCard();





    }


}



//echo "Success";
?>