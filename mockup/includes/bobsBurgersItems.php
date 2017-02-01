<?php
//BobsBurgersItems
$myItem=new Item(1, "Fig-eta bout it Burger", "Don't be a clown. You like figs.", 7.95);
$config->items[]=$myItem;
$myItem=new Item(2, "New Bacon-ings Burger", "Start fresh, with bacon.", 8.95);
$config->items[]=$myItem;
$myItem=new Item(1, "Tuna-mi Burger", "It's a burger with tuna, like a tidal wave in your mouth.", 9.95);
$config->items[]=$myItem;
$myItem=new Item(1, "Hit me with your best shallot Burger", "Come on and hit me with your best shallot.", 7.95);
$config->items[]=$myItem;
$myItem=new Item(1, "The Sound and the Curry Burger", "This should be a very long and complex sentence with too many clauses.", 7.95);
$config->items[]=$myItem;

/*
$myItem->addExtra("");
$myItem->addExtra("");
$myItem->addExtra("");
*/


/*
echo '<pre>';
var_dump($items);
echo '</pre>';
die;
    */

class Item
{
    public $ID = 0;
    public $Name = '';
    public $Description = '';
    public $Price = 0;
    public $Extras = array();
    
   // $count=1;//counter to load id's
    
    
    
   
    public function __construct($ID, $Name, $Description, $Price)
    {
        $this->ID=$ID;
        $this->Name=$Name;
        $this->Description=$Description;
        $this->Price=$Price;
       // $this->Extras=$Extras;
    }//end constructor Item
    
    
    public function addExtra($extra)
    {
        $this->Extras[] =$extra;
    }//end method addExtra()
    
    
}//end class Item