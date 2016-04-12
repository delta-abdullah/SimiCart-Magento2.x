<?php

namespace MobileApp\Connector\Model\ResourceModel;

/**
 * Connector Resource Model
 */
class Design extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('connector_design', 'design_id');
    }
}
