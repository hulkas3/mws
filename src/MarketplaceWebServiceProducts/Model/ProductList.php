<?php
/*******************************************************************************
 * Copyright 2009-2014 Amazon Services. All Rights Reserved.
 * Licensed under the Apache License, Version 2.0 (the "License");
 *
 * You may not use this file except in compliance with the License.
 * You may obtain a copy of the License at: http://aws.amazon.com/apache2.0
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 *******************************************************************************
 * PHP Version 5
 * @category Amazon
 * @package  Marketplace Web Service Products
 * @version  2011-10-01
 * Library Version: 2014-10-20
 * Generated: Fri Oct 17 17:59:56 GMT 2014
 */

/**
 * MarketplaceWebServiceProducts_Model_ProductList
 *
 * Properties:
 * <ul>
 *
 * <li>Product: array</li>
 *
 * </ul>
 */
class MarketplaceWebServiceProducts_Model_ProductList extends MarketplaceWebServiceProducts_Model
{

    public function __construct($data = null)
    {
        $this->_fields = array(
            'Product' => array(
                'FieldValue' => array(),
                'FieldType' => array('MarketplaceWebServiceProducts_Model_Product')
            ),
        );
        parent::__construct($data);
    }

    /**
     * Get the value of the Product property.
     *
     * @return MarketplaceWebServiceProducts_Model_Product[] Product.
     */
    public function getProduct()
    {
        if ($this->_fields['Product']['FieldValue'] == null) {
            $this->_fields['Product']['FieldValue'] = array();
        }
        return $this->_fields['Product']['FieldValue'];
    }

    /**
     * Set the value of the Product property.
     *
     * @param array $value product
     * @return $this This instance
     */
    public function setProduct($value)
    {
        if (!$this->_isNumericArray($value)) {
            $value = array($value);
        }
        $this->_fields['Product']['FieldValue'] = $value;
        return $this;
    }

    /**
     * Clear Product.
     */
    public function unsetProduct()
    {
        $this->_fields['Product']['FieldValue'] = array();
    }

    /**
     * Check to see if Product is set.
     *
     * @return true if Product is set.
     */
    public function isSetProduct()
    {
        return !empty($this->_fields['Product']['FieldValue']);
    }

    /**
     * Add values for Product, return this.
     *
     * @param product
     *             New values to add.
     *
     * @return $this This instance.
     */
    public function withProduct()
    {
        foreach (func_get_args() as $Product) {
            $this->_fields['Product']['FieldValue'][] = $Product;
        }
        return $this;
    }

}
