<?php
namespace Magento\CatalogImportExport\Model\Import\Product;

/**
 * Interceptor class for @see \Magento\CatalogImportExport\Model\Import\Product
 */
class Interceptor extends \Magento\CatalogImportExport\Model\Import\Product implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Json\Helper\Data $jsonHelper, \Magento\ImportExport\Helper\Data $importExportData, \Magento\ImportExport\Model\ResourceModel\Import\Data $importData, \Magento\Eav\Model\Config $config, \Magento\Framework\App\ResourceConnection $resource, \Magento\ImportExport\Model\ResourceModel\Helper $resourceHelper, \Magento\Framework\Stdlib\StringUtils $string, \Magento\ImportExport\Model\Import\ErrorProcessing\ProcessingErrorAggregatorInterface $errorAggregator, \Magento\Framework\Event\ManagerInterface $eventManager, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\CatalogInventory\Api\StockConfigurationInterface $stockConfiguration, \Magento\CatalogInventory\Model\Spi\StockStateProviderInterface $stockStateProvider, \Magento\Catalog\Helper\Data $catalogData, \Magento\ImportExport\Model\Import\Config $importConfig, \Magento\CatalogImportExport\Model\Import\Proxy\Product\ResourceModelFactory $resourceFactory, \Magento\CatalogImportExport\Model\Import\Product\OptionFactory $optionFactory, \Magento\Eav\Model\ResourceModel\Entity\Attribute\Set\CollectionFactory $setColFactory, \Magento\CatalogImportExport\Model\Import\Product\Type\Factory $productTypeFactory, \Magento\Catalog\Model\ResourceModel\Product\LinkFactory $linkFactory, \Magento\CatalogImportExport\Model\Import\Proxy\ProductFactory $proxyProdFactory, \Magento\CatalogImportExport\Model\Import\UploaderFactory $uploaderFactory, \Magento\Framework\Filesystem $filesystem, \Magento\CatalogInventory\Model\ResourceModel\Stock\ItemFactory $stockResItemFac, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate, \Magento\Framework\Stdlib\DateTime $dateTime, \Psr\Log\LoggerInterface $logger, \Magento\Framework\Indexer\IndexerRegistry $indexerRegistry, \Magento\CatalogImportExport\Model\Import\Product\StoreResolver $storeResolver, \Magento\CatalogImportExport\Model\Import\Product\SkuProcessor $skuProcessor, \Magento\CatalogImportExport\Model\Import\Product\CategoryProcessor $categoryProcessor, \Magento\CatalogImportExport\Model\Import\Product\Validator $validator, \Magento\Framework\Model\ResourceModel\Db\ObjectRelationProcessor $objectRelationProcessor, \Magento\Framework\Model\ResourceModel\Db\TransactionManagerInterface $transactionManager, \Magento\CatalogImportExport\Model\Import\Product\TaxClassProcessor $taxClassProcessor, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Catalog\Model\Product\Url $productUrl, array $data = [], array $dateAttrCodes = [], ?\Magento\Catalog\Model\Config $catalogConfig = null, ?\Magento\CatalogImportExport\Model\Import\Product\ImageTypeProcessor $imageTypeProcessor = null, ?\Magento\CatalogImportExport\Model\Import\Product\MediaGalleryProcessor $mediaProcessor = null, ?\Magento\CatalogImportExport\Model\StockItemImporterInterface $stockItemImporter = null, ?\Magento\Framework\Intl\DateTimeFactory $dateTimeFactory = null, ?\Magento\Catalog\Api\ProductRepositoryInterface $productRepository = null, ?\Magento\CatalogImportExport\Model\Import\Product\StatusProcessor $statusProcessor = null, ?\Magento\CatalogImportExport\Model\Import\Product\StockProcessor $stockProcessor = null, ?\Magento\CatalogImportExport\Model\Import\Product\LinkProcessor $linkProcessor = null, ?\Magento\Framework\Filesystem\Driver\File $fileDriver = null, ?\Magento\CatalogImportExport\Model\StockItemProcessorInterface $stockItemProcessor = null, ?\Magento\CatalogImportExport\Model\Import\Product\SkuStorage $skuStorage = null)
    {
        $this->___init();
        parent::__construct($jsonHelper, $importExportData, $importData, $config, $resource, $resourceHelper, $string, $errorAggregator, $eventManager, $stockRegistry, $stockConfiguration, $stockStateProvider, $catalogData, $importConfig, $resourceFactory, $optionFactory, $setColFactory, $productTypeFactory, $linkFactory, $proxyProdFactory, $uploaderFactory, $filesystem, $stockResItemFac, $localeDate, $dateTime, $logger, $indexerRegistry, $storeResolver, $skuProcessor, $categoryProcessor, $validator, $objectRelationProcessor, $transactionManager, $taxClassProcessor, $scopeConfig, $productUrl, $data, $dateAttrCodes, $catalogConfig, $imageTypeProcessor, $mediaProcessor, $stockItemImporter, $dateTimeFactory, $productRepository, $statusProcessor, $stockProcessor, $linkProcessor, $fileDriver, $stockItemProcessor, $skuStorage);
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
    public function getMultipleValueSeparator()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMultipleValueSeparator');
        return $pluginInfo ? $this->___callPlugins('getMultipleValueSeparator', func_get_args(), $pluginInfo) : parent::getMultipleValueSeparator();
    }

    /**
     * {@inheritdoc}
     */
    public function getEmptyAttributeValueConstant()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getEmptyAttributeValueConstant');
        return $pluginInfo ? $this->___callPlugins('getEmptyAttributeValueConstant', func_get_args(), $pluginInfo) : parent::getEmptyAttributeValueConstant();
    }

    /**
     * {@inheritdoc}
     */
    public function getOptionEntity()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOptionEntity');
        return $pluginInfo ? $this->___callPlugins('getOptionEntity', func_get_args(), $pluginInfo) : parent::getOptionEntity();
    }

    /**
     * {@inheritdoc}
     */
    public function getMediaGalleryAttributeId()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getMediaGalleryAttributeId');
        return $pluginInfo ? $this->___callPlugins('getMediaGalleryAttributeId', func_get_args(), $pluginInfo) : parent::getMediaGalleryAttributeId();
    }

    /**
     * {@inheritdoc}
     */
    public function retrieveProductTypeByName($name)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'retrieveProductTypeByName');
        return $pluginInfo ? $this->___callPlugins('retrieveProductTypeByName', func_get_args(), $pluginInfo) : parent::retrieveProductTypeByName($name);
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
    public function deleteProductsForReplacement()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'deleteProductsForReplacement');
        return $pluginInfo ? $this->___callPlugins('deleteProductsForReplacement', func_get_args(), $pluginInfo) : parent::deleteProductsForReplacement();
    }

    /**
     * {@inheritdoc}
     */
    public function saveProductEntity(array $entityRowsIn, array $entityRowsUp)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'saveProductEntity');
        return $pluginInfo ? $this->___callPlugins('saveProductEntity', func_get_args(), $pluginInfo) : parent::saveProductEntity($entityRowsIn, $entityRowsUp);
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesFromRow(array $rowData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getImagesFromRow');
        return $pluginInfo ? $this->___callPlugins('getImagesFromRow', func_get_args(), $pluginInfo) : parent::getImagesFromRow($rowData);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductWebsites($productSku)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductWebsites');
        return $pluginInfo ? $this->___callPlugins('getProductWebsites', func_get_args(), $pluginInfo) : parent::getProductWebsites($productSku);
    }

    /**
     * {@inheritdoc}
     */
    public function getProductCategories($productSku)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getProductCategories');
        return $pluginInfo ? $this->___callPlugins('getProductCategories', func_get_args(), $pluginInfo) : parent::getProductCategories($productSku);
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreIdByCode($storeCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreIdByCode');
        return $pluginInfo ? $this->___callPlugins('getStoreIdByCode', func_get_args(), $pluginInfo) : parent::getStoreIdByCode($storeCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getUploader()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getUploader');
        return $pluginInfo ? $this->___callPlugins('getUploader', func_get_args(), $pluginInfo) : parent::getUploader();
    }

    /**
     * {@inheritdoc}
     */
    public function retrieveAttributeByCode($attrCode)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'retrieveAttributeByCode');
        return $pluginInfo ? $this->___callPlugins('retrieveAttributeByCode', func_get_args(), $pluginInfo) : parent::retrieveAttributeByCode($attrCode);
    }

    /**
     * {@inheritdoc}
     */
    public function getAttrSetIdToName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getAttrSetIdToName');
        return $pluginInfo ? $this->___callPlugins('getAttrSetIdToName', func_get_args(), $pluginInfo) : parent::getAttrSetIdToName();
    }

    /**
     * {@inheritdoc}
     */
    public function getConnection()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getConnection');
        return $pluginInfo ? $this->___callPlugins('getConnection', func_get_args(), $pluginInfo) : parent::getConnection();
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
    public function getNewSku($sku = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNewSku');
        return $pluginInfo ? $this->___callPlugins('getNewSku', func_get_args(), $pluginInfo) : parent::getNewSku($sku);
    }

    /**
     * {@inheritdoc}
     */
    public function getNextBunch()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getNextBunch');
        return $pluginInfo ? $this->___callPlugins('getNextBunch', func_get_args(), $pluginInfo) : parent::getNextBunch();
    }

    /**
     * {@inheritdoc}
     */
    public function getOldSku()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getOldSku');
        return $pluginInfo ? $this->___callPlugins('getOldSku', func_get_args(), $pluginInfo) : parent::getOldSku();
    }

    /**
     * {@inheritdoc}
     */
    public function getCategoryProcessor()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getCategoryProcessor');
        return $pluginInfo ? $this->___callPlugins('getCategoryProcessor', func_get_args(), $pluginInfo) : parent::getCategoryProcessor();
    }

    /**
     * {@inheritdoc}
     */
    public function getRowScope(array $rowData)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getRowScope');
        return $pluginInfo ? $this->___callPlugins('getRowScope', func_get_args(), $pluginInfo) : parent::getRowScope($rowData);
    }

    /**
     * {@inheritdoc}
     */
    public function validateRow(array $rowData, $rowNum)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'validateRow');
        return $pluginInfo ? $this->___callPlugins('validateRow', func_get_args(), $pluginInfo) : parent::validateRow($rowData, $rowNum);
    }

    /**
     * {@inheritdoc}
     */
    public function parseMultiselectValues($values, $delimiter = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'parseMultiselectValues');
        return $pluginInfo ? $this->___callPlugins('parseMultiselectValues', func_get_args(), $pluginInfo) : parent::parseMultiselectValues($values, $delimiter);
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
