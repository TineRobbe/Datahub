<?php

namespace DataHub\ResourceBundle\DataType;

/**
 * DataType interface
 *
 * @author Matthias Vandermaesen <matthias.vandermaesen@vlaamsekunstcollectie.be>
 * @package DataHub\ResourceBundle
 */
interface DataTypeInterface {
    public function getNamespaceMap();
    public function getRootElement();
    public function getCatalog();
    public function getSchema();
    public function getObjectId($record);
    public function getRecordId($record);
}
