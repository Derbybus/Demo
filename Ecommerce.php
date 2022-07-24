<?php

class UserAccount{
    //class proerties for customer details 
    public $User_Name ="Derby";
    public $User_ID ="GA1234";
    private $Password ="jkfbfd213";
    private $Email ="busumbrudeborah@gmail.com";
    private $Number ='0273342009';
    private $Adress = "Dansoman";

    public function showCustomerDetails(){
        $name = $this->User_Name;
        $ID = $this->User_ID;
        return 'Welcome '.$name. $ID;

    }

    
}

$newUserAccount = new UserAccount();
//var_dump($newUserAccount);
echo $newUserAccount->showCustomerDetails();
//echo $newUserAccount->Password;


class ProductCategories{
    public $Product_type = "mobile phones";
    public $Brand = "Samsung";
    public $Product_No = "001";
    public $Model = "S22+";
    

    public function showProductInfo(){
        return $this->Brand. $this->Model;
    }
    
}

echo '<br/>';
$newProductCategories = new ProductCategories();
echo $newProductCategories->showProductInfo();



class Shipping extends ProductCategories{
    public $Order_Status ="Pending";
    public $Purchase_No ="24";
    public $Date0fArrival ='25/11/2022';

    public function showProductInfo()
    {
        $Status = $this->Order_Status;
        $ProductC = new ProductCategories();
        return $Status. $ProductC->Model;
    }

}
echo '<br/>';
$newShipping = new Shipping();
//var_dump($newShipping); 
echo $newShipping->showProductInfo();

?>
 




    