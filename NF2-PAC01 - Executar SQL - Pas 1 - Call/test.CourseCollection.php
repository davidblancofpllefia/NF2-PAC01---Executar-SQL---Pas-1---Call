<?php

require_once('class.customer.php');

$c1 = new Customer();
$c1 -> setCUST_CODE(4);
$c1 -> setCUST_NAME("Mario");
$c1 -> setCUST_CITY("Madrid");
$c1 -> setWORKING_AREA("Sector 2");
$c1 -> setCUST_COUNTRY("España");
$c1 -> setGRADE(7);
$c1 -> setOPENING_AMT(15,7);
$c1 -> setRECEIVE_AMT(12,8);
$c1 -> setPAYMENT_AMT(9,5);
$c1 ->  setOUTSTANDING_AMT(11,3);
$c1 ->setPHONE_NO('12345');
$c1 -> setAGENT_CODE(11,3);

$c2 = new Customer();
$c2->setCUST_CODE(5);
$c2->setCUST_NAME("Luigi");
$c2->setCUST_CITY("Barcelona");
$c2->setWORKING_AREA("Sector 3");
$c2->setCUST_COUNTRY("España");
$c2->setGRADE(8);
$c2->setOPENING_AMT(20.5);
$c2->setRECEIVE_AMT(18.2);
$c2->setPAYMENT_AMT(15.3);
$c2->setOUTSTANDING_AMT(17.1);
$c2->setPHONE_NO('67890');
$c2->setAGENT_CODE(12.5);




$tempCustomer = new Customer();
$tempCustomer->setCUST_CODE($c1->getCUST_CODE());
$tempCustomer->setCUST_NAME($c1->getCUST_NAME());
$tempCustomer->setCUST_CITY($c1->getCUST_CITY());
$tempCustomer->setWORKING_AREA($c1->getWORKING_AREA());
$tempCustomer->setCUST_COUNTRY($c1->getCUST_COUNTRY());
$tempCustomer->setGRADE($c1->getGRADE());
$tempCustomer->setOPENING_AMT($c1->getOPENING_AMT());
$tempCustomer->setRECEIVE_AMT($c1->getRECEIVE_AMT());
$tempCustomer->setPAYMENT_AMT($c1->getPAYMENT_AMT());
$tempCustomer->setOUTSTANDING_AMT($c1->getOUTSTANDING_AMT());
$tempCustomer->setPHONE_NO($c1->getPHONE_NO());
$tempCustomer->setAGENT_CODE($c1->getAGENT_CODE());


$c1->setCUST_CODE($c2->getCUST_CODE());
$c1->setCUST_NAME($c2->getCUST_NAME());
$c1->setCUST_CITY($c2->getCUST_CITY());
$c1->setWORKING_AREA($c2->getWORKING_AREA());
$c1->setCUST_COUNTRY($c2->getCUST_COUNTRY());
$c1->setGRADE($c2->getGRADE());
$c1->setOPENING_AMT($c2->getOPENING_AMT());
$c1->setRECEIVE_AMT($c2->getRECEIVE_AMT());
$c1->setPAYMENT_AMT($c2->getPAYMENT_AMT());
$c1->setOUTSTANDING_AMT($c2->getOUTSTANDING_AMT());
$c1->setPHONE_NO($c2->getPHONE_NO());
$c1->setAGENT_CODE($c2->getAGENT_CODE());


$c2->setCUST_CODE($tempCustomer->getCUST_CODE());
$c2->setCUST_NAME($tempCustomer->getCUST_NAME());
$c2->setCUST_CITY($tempCustomer->getCUST_CITY());
$c2->setWORKING_AREA($tempCustomer->getWORKING_AREA());
$c2->setCUST_COUNTRY($tempCustomer->getCUST_COUNTRY());
$c2->setGRADE($tempCustomer->getGRADE());
$c2->setOPENING_AMT($tempCustomer->getOPENING_AMT());
$c2->setRECEIVE_AMT($tempCustomer->getRECEIVE_AMT());
$c2->setPAYMENT_AMT($tempCustomer->getPAYMENT_AMT());
$c2->setOUTSTANDING_AMT($tempCustomer->getOUTSTANDING_AMT());
$c2->setPHONE_NO($tempCustomer->getPHONE_NO());
$c2->setAGENT_CODE($tempCustomer->getAGENT_CODE());



echo "Customer 1:</br>";
echo "CUST_CODE: " . $c1->getCUST_CODE() . "</br>";
echo "CUST_NAME: " . $c1->getCUST_NAME() . "</br>";
echo "CUST_CITY: " . $c1->getCUST_CITY() . "</br>";
echo "WORKING_AREA: " . $c1->getWORKING_AREA() . "</br>";
echo "CUST_COUNTRY: " . $c1->getCUST_COUNTRY() . "</br>";
echo "GRADE: " . $c1->getGRADE() . "</br>";
echo "OPENING_AMT: " . $c1->getOPENING_AMT() . "</br>";
echo "RECEIVE_AMT: " . $c1->getRECEIVE_AMT() . "</br>";
echo "PAYMENT_AMT: " . $c1->getPAYMENT_AMT() . "</br>";
echo "OUTSTANDING_AMT: " . $c1->getOUTSTANDING_AMT() . "</br>";
echo "PHONE_NO: " . $c1->getPHONE_NO() . "</br>";
echo "AGENT_CODE: " . $c1->getAGENT_CODE() . "</br>";


echo "Customer 2:</br>";
echo "CUST_CODE: " . $c2->getCUST_CODE() . "</br>";
echo "CUST_NAME: " . $c2->getCUST_NAME() . "</br>";
echo "CUST_CITY: " . $c2->getCUST_CITY() . "</br>";
echo "WORKING_AREA: " . $c2->getWORKING_AREA() . "</br>";
echo "CUST_COUNTRY: " . $c2->getCUST_COUNTRY() . "</br>";
echo "GRADE: " . $c2->getGRADE() . "</br>";
echo "OPENING_AMT: " . $c2->getOPENING_AMT() . "</br>";
echo "RECEIVE_AMT: " . $c2->getRECEIVE_AMT() . "</br>";
echo "PAYMENT_AMT: " . $c2->getPAYMENT_AMT() . "</br>";
echo "OUTSTANDING_AMT: " . $c2->getOUTSTANDING_AMT() . "</br>";
echo "PHONE_NO: " . $c2->getPHONE_NO() . "</br>";
echo "AGENT_CODE: " . $c2->getAGENT_CODE() . "</br>";

