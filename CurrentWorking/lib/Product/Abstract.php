<?php
include_once 'lib/Product/Interface.php';
abstract class Product_Abstract implements Product_Interface
{
    /**
     * Product description
     * @var string
     */
    protected $_description = NULL;

    /**
     * Product cost amount
     * @var float
     */
    protected $_cost = NULL;

    /**
     * Product attributes describing the properties of the product
     * @var unknown_type
     */
    protected $_attributes = array();


    /**
     * Set cost
     * @param float $cost
     * @return Product_Abstract provides fluent interface
     */
    public function setCost($cost = NULL)
    {
        if (NULL === $cost OR !is_numeric($cost)) {
            throw new Exception('Cost cannot be null');
        }

        $this->_cost = (float) $cost;

        return $this;
    }

    /**
     * Set product description
     * @param string $description
     * @return Product_Abstract provides fluent interface
     */
    public function setDescription($description = NULL)
    {
        if (NULL === $description) {
            throw new Exception('Description cannot be null');
        }

        $this->_description = $description;

        return $this;
    }

    /**
     * @return float cost of product
     */
    public function getCost()
    {
        return number_format($this->_cost, 2);
    }

    /**
     * @return string product description
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /**
     * Fetch a custom attribute
     * @param string $key attribute key
     * @return mixed attribute value
     */
    public function __get($key)
    {
        if (isset($this->_attributes[$key])) {
            return $this->_attributes[$key];
        } else {
            return NULL;
        }
    }

    /**
     * Set a custom attribute
     * @param string $key
     * @param mixed $value
     */
    public function __set($key = NULL, $value = NULL)
    {
        if (NULL === $key OR NULL === $value) {
            throw new Exception('Key and value for setting an atribute must be set');
        }

        $this->_attributes[$key] = $value;
    }

    /**
     * Check if an attribute with a $key is set
     * @param string $key
     */
    public function __isset($key)
    {
        switch($key) {
            case 'cost':
                return isset($this->_cost);
                break;

            case 'description':
                return isset($this->_description);
                break;

            default:
                return isset($this->_attributes[$key]);
                break;
        }
    }

}