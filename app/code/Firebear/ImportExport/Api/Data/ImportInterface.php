<?php
/**
 * @copyright: Copyright © 2017 Firebear Studio GmbH. All rights reserved.
 * @author   : Firebear Studio <fbeardev@gmail.com>
 */

namespace Firebear\ImportExport\Api\Data;

/**
 * Interface ImportInterface
 *
 * @package Firebear\ImportExport\Api\Data
 */
interface ImportInterface extends AbstractInterface
{
    const IMPORT_SOURCE = 'import_source';

    const MAP = 'map';

    const XSLT = 'xslt';

    /**
     * Get Import Source
     *
     * @return mixed
     */
    public function getImportSource();

    /**
     * @return string
     */
    public function getMapping();

    /**
     * @return string
     */
    public function getPriceRules();

    /**
     * @return string
     */
    public function getXslt();

    /**
     * @param string $source
     *
     * @return ImportInterface
     */
    public function setImportSource($source);

    /**
     * @param $mapping
     *
     * @return ImportInterface
     */
    public function setMapping($mapping);

    /**
     * @param $priceRules
     *
     * @return ImportInterface
     */
    public function setPriceRules($priceRules);

    /**
     * @param $xslt
     *
     * @return ImportInterface
     */
    public function setXslt($xslt);
}
