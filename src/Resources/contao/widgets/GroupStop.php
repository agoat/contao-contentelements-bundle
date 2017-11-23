<?php

/*
 * Custom content elements extension for Contao Open Source CMS.
 *
 * @copyright  Arne Stappen (alias aGoat) 2017
 * @package    contao-customcontentelements
 * @author     Arne Stappen <mehh@agoat.xyz>
 * @link       https://agoat.xyz
 * @license    LGPL-3.0
 */

namespace Agoat\CustomContentElementsBundle\Contao;


/**
 * Provide methods to handle the input field "groupstop"
 */
class GroupStop extends \Widget
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'be_widget_rdo';


	/**
	 * Generate the widget and return it as string
	 *
	 * @return string
	 */
	public function generate()
	{
		return '</div></div>';
	}
}
