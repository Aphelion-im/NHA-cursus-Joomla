<?php
/**
 * @package         Regular Labs Library
 * @version         19.4.18605
 * 
 * @author          Peter van Westen <info@regularlabs.com>
 * @link            http://www.regularlabs.com
 * @copyright       Copyright © 2019 Regular Labs All Rights Reserved
 * @license         http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
 */

namespace RegularLabs\Library\Condition;

defined('_JEXEC') or die;

/**
 * Class EasyblogKeyword
 * @package RegularLabs\Library\Condition
 */
class EasyblogKeyword
	extends Easyblog
{
	public function pass()
	{
		parent::passContentKeyword();
	}
}
