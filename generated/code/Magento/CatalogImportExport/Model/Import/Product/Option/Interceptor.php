<?php
namespace Magento\CatalogImportExport\Model\Import\Product\Option;

/**
 * Interceptor class for @see \Magento\CatalogImportExport\Model\Import\Product\Option
 */
class Interceptor extends \Magento\CatalogImportExport\Model\Import\Product\Option implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\ImportExport\Model\ResourceModel\Import\Data $importData, \Magento\Framework\App\ResourceConnection $resource, \Magento\ImportExport\Model\ResourceModel\Helper $resourceHelper, \Magento\Store\Model\StoreManagerInterface $_storeManager, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Catalog\Model\ResourceModel\Product\Option\CollectionFactory $optionColFactory, \Magento\ImportExport\Model\ResourceModel\CollectionByPagesIteratorFactory $colIteratorFactory, \Magento\Catalog\Helper\Data $catalogData, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $dateTime, \Magento\ImportExport\Model\Import\ErrorProcessing\ProcessingErrorAggregatorInterface $errorAggregator, array $data = [], ?\Magento\Catalog\Model\ResourceModel\Product\Option\Value\CollectionFactory $productOptionValueCollectionFactory = null, ?\Magento\Framework\Model\ResourceModel\Db\TransactionManagerInterface $transactionManager = null, ?\Magento\CatalogImportExport\Model\Import\Product\SkuStorage $skuStorage = null)
    {
        $this->___init();
        parent::__construct($importData, $resource, $resourceHelper, $_storeManager, $productFactory, $optionColFactory, $colIteratorFactory, $catalogData, $scopeConfig, $dateTime, $errorAggregator, $data, $productOptionValueCollectionFactory, $transactionManager, $skuStorage);
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityTypeCode()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityTypeCode');
        return $pluginInfo ? $this->___callPlugins('getEntityTypeCode', func_get_args(), $pluginInfo) : parent::getEntityTypeCode();
    }

    /**
     * {@inheritdoc}
     */
    public function validateAmbiguousData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateAmbiguousData');
        return $pluginInfo ? $this->___callPlugins('validateAmbiguousData', func_get_args(), $pluginInfo) : parent::validateAmbiguousData();
    }

    /**
     * {@inheritdoc}
     */
    public function validateRow(array $rowData, $rowNumber)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateRow');
        return $pluginInfo ? $this->___callPlugins('validateRow', func_get_args(), $pluginInfo) : parent::validateRow($rowData, $rowNumber);
    }

    /**
     * {@inheritdoc}
     */
    public function clearProductsSkuToId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'clearProductsSkuToId');
        return $pluginInfo ? $this->___callPlugins('clearProductsSkuToId', func_get_args(), $pluginInfo) : parent::clearProductsSkuToId();
    }

    /**
     * {@inheritdoc}
     */
    public function addRowError($errorCode, $errorRowNum, $colName = null, $errorMessage = null, $errorLevel = 'critical', $errorDescription = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addRowError');
        return $pluginInfo ? $this->___callPlugins('addRowError', func_get_args(), $pluginInfo) : parent::addRowError($errorCode, $errorRowNum, $colName, $errorMessage, $errorLevel, $errorDescription);
    }

    /**
     * {@inheritdoc}
     */
    public function addMessageTemplate($errorCode, $message)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'addMessageTemplate');
        return $pluginInfo ? $this->___callPlugins('addMessageTemplate', func_get_args(), $pluginInfo) : parent::addMessageTemplate($errorCode, $message);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttributeOptions(\Magento\Eav\Model\Entity\Attribute\AbstractAttribute $attribute, $indexValAttrs = [])
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttributeOptions');
        return $pluginInfo ? $this->___callPlugins('getAttributeOptions', func_get_args(), $pluginInfo) : parent::getAttributeOptions($attribute, $indexValAttrs);
    }

    /**
     * {@inheritdoc}
     */
    public function getBehavior()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getBehavior');
        return $pluginInfo ? $this->___callPlugins('getBehavior', func_get_args(), $pluginInfo) : parent::getBehavior();
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityTypeId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEntityTypeId');
        return $pluginInfo ? $this->___callPlugins('getEntityTypeId', func_get_args(), $pluginInfo) : parent::getEntityTypeId();
    }

    /**
     * {@inheritdoc}
     */
    public function getProcessedEntitiesCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProcessedEntitiesCount');
        return $pluginInfo ? $this->___callPlugins('getProcessedEntitiesCount', func_get_args(), $pluginInfo) : parent::getProcessedEntitiesCount();
    }

    /**
     * {@inheritdoc}
     */
    public function getProcessedRowsCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProcessedRowsCount');
        return $pluginInfo ? $this->___callPlugins('getProcessedRowsCount', func_get_args(), $pluginInfo) : parent::getProcessedRowsCount();
    }

    /**
     * {@inheritdoc}
     */
    public function getSource()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getSource');
        return $pluginInfo ? $this->___callPlugins('getSource', func_get_args(), $pluginInfo) : parent::getSource();
    }

    /**
     * {@inheritdoc}
     */
    public function importData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'importData');
        return $pluginInfo ? $this->___callPlugins('importData', func_get_args(), $pluginInfo) : parent::importData();
    }

    /**
     * {@inheritdoc}
     */
    public function isAttributeParticular($attrCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAttributeParticular');
        return $pluginInfo ? $this->___callPlugins('isAttributeParticular', func_get_args(), $pluginInfo) : parent::isAttributeParticular($attrCode);
    }

    /**
     * {@inheritdoc}
     */
    public function isAttributeValid($attrCode, array $attrParams, array $rowData, $rowNum)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isAttributeValid');
        return $pluginInfo ? $this->___callPlugins('isAttributeValid', func_get_args(), $pluginInfo) : parent::isAttributeValid($attrCode, $attrParams, $rowData, $rowNum);
    }

    /**
     * {@inheritdoc}
     */
    public function isImportAllowed()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isImportAllowed');
        return $pluginInfo ? $this->___callPlugins('isImportAllowed', func_get_args(), $pluginInfo) : parent::isImportAllowed();
    }

    /**
     * {@inheritdoc}
     */
    public function isRowAllowedToImport(array $rowData, $rowNum)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isRowAllowedToImport');
        return $pluginInfo ? $this->___callPlugins('isRowAllowedToImport', func_get_args(), $pluginInfo) : parent::isRowAllowedToImport($rowData, $rowNum);
    }

    /**
     * {@inheritdoc}
     */
    public function retrieveMessageTemplate($errorCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'retrieveMessageTemplate');
        return $pluginInfo ? $this->___callPlugins('retrieveMessageTemplate', func_get_args(), $pluginInfo) : parent::retrieveMessageTemplate($errorCode);
    }

    /**
     * {@inheritdoc}
     */
    public function isNeedToLogInHistory()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'isNeedToLogInHistory');
        return $pluginInfo ? $this->___callPlugins('isNeedToLogInHistory', func_get_args(), $pluginInfo) : parent::isNeedToLogInHistory();
    }

    /**
     * {@inheritdoc}
     */
    public function setParameters(array $params)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setParameters');
        return $pluginInfo ? $this->___callPlugins('setParameters', func_get_args(), $pluginInfo) : parent::setParameters($params);
    }

    /**
     * {@inheritdoc}
     */
    public function getParameters()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getParameters');
        return $pluginInfo ? $this->___callPlugins('getParameters', func_get_args(), $pluginInfo) : parent::getParameters();
    }

    /**
     * {@inheritdoc}
     */
    public function setSource(\Magento\ImportExport\Model\Import\AbstractSource $source)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setSource');
        return $pluginInfo ? $this->___callPlugins('setSource', func_get_args(), $pluginInfo) : parent::setSource($source);
    }

    /**
     * {@inheritdoc}
     */
    public function validateData()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateData');
        return $pluginInfo ? $this->___callPlugins('validateData', func_get_args(), $pluginInfo) : parent::validateData();
    }

    /**
     * {@inheritdoc}
     */
    public function getErrorAggregator()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getErrorAggregator');
        return $pluginInfo ? $this->___callPlugins('getErrorAggregator', func_get_args(), $pluginInfo) : parent::getErrorAggregator();
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedItemsCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCreatedItemsCount');
        return $pluginInfo ? $this->___callPlugins('getCreatedItemsCount', func_get_args(), $pluginInfo) : parent::getCreatedItemsCount();
    }

    /**
     * {@inheritdoc}
     */
    public function getUpdatedItemsCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUpdatedItemsCount');
        return $pluginInfo ? $this->___callPlugins('getUpdatedItemsCount', func_get_args(), $pluginInfo) : parent::getUpdatedItemsCount();
    }

    /**
     * {@inheritdoc}
     */
    public function getDeletedItemsCount()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDeletedItemsCount');
        return $pluginInfo ? $this->___callPlugins('getDeletedItemsCount', func_get_args(), $pluginInfo) : parent::getDeletedItemsCount();
    }

    /**
     * {@inheritdoc}
     */
    public function getValidColumnNames()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getValidColumnNames');
        return $pluginInfo ? $this->___callPlugins('getValidColumnNames', func_get_args(), $pluginInfo) : parent::getValidColumnNames();
    }

    /**
     * {@inheritdoc}
     */
    public function getIds() : array
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getIds');
        return $pluginInfo ? $this->___callPlugins('getIds', func_get_args(), $pluginInfo) : parent::getIds();
    }

    /**
     * {@inheritdoc}
     */
    public function setIds(array $ids)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setIds');
        return $pluginInfo ? $this->___callPlugins('setIds', func_get_args(), $pluginInfo) : parent::setIds($ids);
    }

    /**
     * {@inheritdoc}
     */
    public function getDataSourceModel() : \Magento\ImportExport\Model\ResourceModel\Import\Data
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getDataSourceModel');
        return $pluginInfo ? $this->___callPlugins('getDataSourceModel', func_get_args(), $pluginInfo) : parent::getDataSourceModel();
    }
}
