<?php

/**
 * leads Extension for Contao Open Source CMS
 *
 * @copyright  Copyright (c) 2011-2015, terminal42 gmbh
 * @author     terminal42 gmbh <info@terminal42.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html LGPL
 * @link       http://github.com/terminal42/contao-leads
 */
namespace Leads\Exporter;


class Xlsx extends AbstractExcelExporter
{
    /**
     * Exports a given set of data row ids using a given configuration.
     *
     * @param \Database_Result $config
     * @param array|null       $ids
     */
    public function export(\Database_Result $config, $ids = null)
    {
        $this->exportWithFormat($config, $ids, 'Excel2007');
    }
}