<?php

class Indies_Partialpayment_Model_Sales_Order_Capture_Payment_Transaction
    extends Mage_Sales_Model_Order_Payment_Transaction
{
    protected function _construct()
    {
        $this->_init('partialpayment/sales_order_capture_payment_transaction');
        return Mage_Core_Model_Abstract::_construct();
    }

}