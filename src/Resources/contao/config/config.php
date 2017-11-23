<?php

/*
 * Custom content elements extension for Contao Open Source CMS.
 *
 * @copyright  Arne Stappen (alias aGoat) 2017
 * @package    contao-contentelements
 * @author     Arne Stappen <mehh@agoat.xyz>
 * @link       https://agoat.xyz
 * @license    LGPL-3.0
 */

 
/**
 * Register back end module (tables, css, overwritten classes)
 */
array_push($GLOBALS['BE_MOD']['design']['themes']['tables'], 'tl_elements', 'tl_pattern');


/**
 * Style sheet
 */
if (TL_MODE == 'BE')
{
	$GLOBALS['TL_CSS'][] = 'bundles/agoatcontentelements/style.css|static';
	$GLOBALS['TL_JAVASCRIPT'][] = 'bundles/agoatcontentelements/core.js';
}


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['getPageLayout'][] = array('Agoat\\ContentElements\\Controller','registerBlockElements');
$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('Agoat\\ContentElements\\Controller','registerBlockElements');

$GLOBALS['TL_HOOKS']['loadDataContainer'][] = array('Agoat\\ContentElements\\Config','setNewsArticleCallbacks');

$GLOBALS['TL_HOOKS']['parseTemplate'][] = array('Agoat\\ContentElements\\Controller','addPageLayoutToBE');

$GLOBALS['TL_HOOKS']['outputFrontendTemplate'][] = array('Agoat\\ContentElements\\Controller','addContentElementsCSS');
$GLOBALS['TL_HOOKS']['outputFrontendTemplate'][] = array('Agoat\\ContentElements\\Controller','addContentElementsJS');
$GLOBALS['TL_HOOKS']['generatePage'][] = array('Agoat\\ContentElements\\Controller','addLayoutJS');

$GLOBALS['TL_HOOKS']['parseTemplate'][] = array('Agoat\\ContentElements\\Versions','hideDataTableVersions');


$GLOBALS['TL_HOOKS']['compareThemeFiles'][] = array('Agoat\\ContentElements\\Theme','compareTables');
$GLOBALS['TL_HOOKS']['extractThemeFiles'][] = array('Agoat\\ContentElements\\Theme','importTables');
$GLOBALS['TL_HOOKS']['exportTheme'][] = array('Agoat\\ContentElements\\Theme','exportTables');

$GLOBALS['TL_HOOKS']['initializeSystem'][] = array('Agoat\\ContentElements\\Config','loadParameters');
 

/**
 * Pattern elements
 */
$GLOBALS['TL_CTP'] = array
(
	'input' => array
	(
		'textfield'		=> array
		(
			'class'			=> 'Agoat\ContentElements\PatternTextField',
			'data'			=> true,
			'output'		=> true,
		),
		'textarea'		=> array
		(
			'class'			=> 'Agoat\ContentElements\PatternTextArea',
			'data'			=> true,
			'output'		=> true,
		),
		'selectfield'	=> array
		(
			'class'			=> 'Agoat\ContentElements\PatternSelectField',
			'data'			=> true,
			'output'		=> true,
		),
		'checkbox'		=> array
		(
			'class'			=> 'Agoat\ContentElements\PatternCheckBox',
			'data'			=> true,
			'output'		=> true,
		),
		'filetree'		=> array
		(
			'class'			=> 'Agoat\ContentElements\PatternFileTree',
			'data'			=> true,
			'output'		=> true,
		),
		'pagetree'		=> array
		(
			'class'			=> 'Agoat\ContentElements\PatternPageTree',
			'data'			=> true,
			'output'		=> true,
		),
		'listwizard'	=> array
		(
			'class'			=> 'Agoat\ContentElements\PatternListWizard',
			'data'			=> true,
			'output'		=> true,
		),
		'tablewizard'	=> array
		(
			'class'			=> 'Agoat\ContentElements\PatternTableWizard',
			'data'			=> true,
			'output'		=> true,
		),
		'code'			=> array
		(
			'class'			=> 'Agoat\ContentElements\PatternCode',
			'data'			=> true,
			'output'		=> true,
		)
	),
	'layout' => array
	(
		'section' => array
		(
			'class'			=> 'Agoat\ContentElements\PatternSection',
		),
		'explanation' => array
		(
			'class'			=> 'Agoat\ContentElements\PatternExplanation',
		)
	),
	'element' => array
	(
		'visibility' => array
		(
			'class'			=> 'Agoat\ContentElements\PatternVisibility',
			'unique'		=> true,
			'output'		=> true,
		),
		'protection' => array
		(
			'class'			=> 'Agoat\ContentElements\PatternProtection',
			'unique'		=> true,
			'output'		=> true,
		),
	),
	'system' => array
	(
		'imagesize' => array
		(
			'class'			=> 'Agoat\ContentElements\PatternImageSize',
			'output'		=> true,
		),
		'form' => array
		(
			'class'			=> 'Agoat\ContentElements\PatternForm',
			'unique'		=> true,
			'output'		=> true,
		),
		'module' => array
		(
			'class'			=> 'Agoat\ContentElements\PatternModule',
			'unique'		=> true,
			'output'			=> true,
		)
	)
);


/**
 * Back end form fields (widgets)
 */
$GLOBALS['BE_FFL']['explanation'] 	= '\Agoat\ContentElements\Explanation';
$GLOBALS['BE_FFL']['visualselect'] 	= '\Agoat\ContentElements\VisualSelectMenu';
$GLOBALS['BE_FFL']['fileTree'] 		= '\Agoat\ContentElements\FileTree';
$GLOBALS['BE_FFL']['pageTree'] 		= '\Agoat\ContentElements\PageTree';
$GLOBALS['BE_FFL']['articleTree'] 	= '\Agoat\ContentElements\ArticleTree';


