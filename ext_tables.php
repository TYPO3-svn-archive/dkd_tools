<?php
/** $Id$ */
if (!defined ("TYPO3_MODE")) 	die ("Access denied.");

if (TYPO3_MODE=="BE")	{

	t3lib_extMgm::addModule("txdkdtoolsM1","","top",t3lib_extMgm::extPath($_EXTKEY)."mod1/");
}
?>