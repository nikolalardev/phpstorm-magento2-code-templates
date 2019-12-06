<?php declare(strict_types=1);

#if (${NAMESPACE})
namespace ${NAMESPACE};
#end

use Magento\Framework\Model\AbstractModel;

class ${NAME} extends AbstractModel
{
    public function _construct()
    {
        ${DS}this->_init("${NAMESPACE}\ResourceModel\\$NAME");
    }
}