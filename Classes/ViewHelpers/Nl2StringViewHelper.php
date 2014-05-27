<?php
namespace VMeC\VmecEvents\ViewHelpers;

/**
 *
 * Example
 * {namespace s=VMeC\VmecEvents\ViewHelpers}
 * <s:nl2String character=",">{content}</s:nl2String>
 *
 * @package VMeC
 * @subpackage vmec_events
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 * @author Christoph Fischer <christoph.fischer@volksmission.de>
 */
class Nl2StringViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper {

    /**
     * Replace newline by a definable string
     *
     * @param string $string The newline character
     * @return string 
     * @author Christoph Fischer <christoph.fischer@volksmission.de>
     */
    public function render($string=",") {
    	$html = $this->renderChildren();
    	$html = str_replace("\r\n", $string, $html);
    	$html = str_replace("\n", $string, $html);
    	return $html;
    }
}

?>
