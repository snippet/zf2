<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_PDF
 * @package    Zend_PDF_Internal
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

/**
 * @namespace
 */
namespace Zend\PDF\Trailer;
use Zend\PDF;
use Zend\PDF\InternalType;

/**
 * PDF file trailer generator (used for just created PDF)
 *
 * @uses       \Zend\PDF\PDFDocument
 * @uses       \Zend\PDF\Trailer\AbstractTrailer
 * @uses       \Zend\PDF\InternalType\DirctionaryObject
 * @package    Zend_PDF
 * @package    Zend_PDF_Internal
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
class Generated extends AbstractTrailer
{
    /**
     * Object constructor
     *
     * @param \Zend\PDF\InternalType\DictionaryObject $dict
     */
    public function __construct(InternalType\DictionaryObject $dict)
    {
        parent::__construct($dict);
    }

    /**
     * Get length of source PDF
     *
     * @return string
     */
    public function getPDFLength()
    {
        return strlen(PDF\PDFDocument::PDF_HEADER);
    }

    /**
     * Get PDF String
     *
     * @return string
     */
    public function getPDFString()
    {
        return PDF\PDFDocument::PDF_HEADER;
    }

    /**
     * Get header of free objects list
     * Returns object number of last free object
     *
     * @return integer
     */
    public function getLastFreeObject()
    {
        return 0;
    }
}
