<?php
/**
 *
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magentocommerce.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magentocommerce.com for more information.
 *
 * @copyright   Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Magento\CatalogSearch\Model\Layer\Search;


class StateKey extends \Magento\Catalog\Model\Layer\Category\StateKey
{
    /**
     * @var \Magento\Search\Model\QueryFactory
     */
    protected $queryFactory;

    /**
     * @param \Magento\Framework\StoreManagerInterface $storeManager
     * @param \Magento\Customer\Model\Session $customerSession
     * @param \Magento\Search\Model\QueryFactory $queryFactory
     */
    public function __construct(
        \Magento\Framework\StoreManagerInterface $storeManager,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Search\Model\QueryFactory $queryFactory
    ) {
        $this->queryFactory = $queryFactory;
        parent::__construct($storeManager, $customerSession);
    }

    /**
     * @param \Magento\Catalog\Model\Category $category
     * @return string|void
     */
    public function toString($category)
    {
        return 'Q_' . $this->queryFactory->get()->getId() . '_' . \Magento\Catalog\Model\Layer\Category\StateKey::toString($category);
    }
}