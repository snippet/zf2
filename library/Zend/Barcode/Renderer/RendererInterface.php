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
 * @package    Zend_Barcode
 * @subpackage Renderer
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 * @version    $Id$
 */

/**
 * @namespace
 */
namespace Zend\Barcode\Renderer;
use Zend\Config;
use Zend\Barcode;
use Zend\Barcode\Object;

/**
 * Class for rendering the barcode
 *
 * @category   Zend
 * @package    Zend_Barcode
 * @copyright  Copyright (c) 2005-2010 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */
interface RendererInterface
{
    /**
     * Constructor
     * @param array|\Zend\Config\Config $options
     * @return void
     */
    public function __construct($options = null);

    /**
     * Set renderer state from options array
     * @param  array $options
     * @return \Zend\Barcode\Renderer\RendererInterface
     */
    public function setOptions($options);

    /**
     * Set renderer state from config object
     * @param \Zend\Config\Config $config
     * @return \Zend\Barcode\Renderer\RendererInterface
     */
    public function setConfig(Config\Config $config);

    /**
     * Set renderer namespace for autoloading
     *
     * @param string $namespace
     * @return \Zend\Barcode\Renderer\RendererInterface
     */
    public function setRendererNamespace($namespace);

    /**
     * Retrieve renderer namespace
     *
     * @return string
     */
    public function getRendererNamespace();

    /**
     * Retrieve renderer type
     * @return string
     */
    public function getType();

    /**
     * Manually adjust top position
     * @param integer $value
     * @return \Zend\Barcode\Renderer\RendererInterface
     */
    public function setTopOffset($value);

    /**
     * Retrieve vertical adjustment
     * @return integer
     */
    public function getTopOffset();

    /**
     * Manually adjust left position
     * @param integer $value
     * @return \Zend\Barcode\Renderer\RendererInterface
     */
    public function setLeftOffset($value);

    /**
     * Retrieve vertical adjustment
     * @return integer
     */
    public function getLeftOffset();

    /**
     * Activate/Deactivate the automatic rendering of exception
     * @param boolean $value
     */
    public function setAutomaticRenderError($value);

    /**
     * Horizontal position of the barcode in the rendering resource
     * @param string $value
     * @return \Zend\Barcode\Renderer\RendererInterface
     */
    public function setHorizontalPosition($value);

    /**
     * Horizontal position of the barcode in the rendering resource
     * @return string
     */
    public function getHorizontalPosition();

    /**
     * Vertical position of the barcode in the rendering resource
     * @param string $value
     * @return \Zend\Barcode\Renderer\RendererInterface
     */
    public function setVerticalPosition($value);

    /**
     * Vertical position of the barcode in the rendering resource
     * @return string
     */
    public function getVerticalPosition();

    /**
     * Set the size of a module
     * @param float $value
     * @return \Zend\Barcode\Renderer\RendererInterface
     */
    public function setModuleSize($value);

    /**
     * Set the size of a module
     * @return float
     */
    public function getModuleSize();

    /**
     * Retrieve the automatic rendering of exception
     * @return boolean
     */
    public function getAutomaticRenderError();

    /**
     * Set the barcode object
     * @param \Zend\Barcode\Object\ObjectInterface $barcode
     * @return \Zend\Barcode\Renderer\RendererInterface
     */
    public function setBarcode($barcode);

    /**
     * Retrieve the barcode object
     * @return \Zend\Barcode\Object\ObjectInterface
     */
    public function getBarcode();

    /**
     * Checking of parameters after all settings
     * @return boolean
     */
    public function checkParams();

    /**
     * Draw the barcode in the rendering resource
     * @return mixed
     */
    public function draw();

    /**
     * Render the resource by sending headers and drawed resource
     * @return mixed
     */
    public function render();
}
