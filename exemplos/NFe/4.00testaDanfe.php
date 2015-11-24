<?php
/**
 * ATENÇÃO : Esse exemplo usa classe PROVISÓRIA que será removida assim que
 * a nova classe DANFE estiver refatorada e a pasta EXTRAS será removida.
 */

error_reporting(E_ALL);
ini_set('display_errors', 'On');
include_once '../../bootstrap.php';

use NFePHP\Extras\Danfe;
use NFePHP\Common\Files\FilesFolders;

$xml = '../xml/43151112134405000100550010000063741949560670_procNFe.xml';

$docxml = FilesFolders::readFile($xml);
$danfe = new Danfe($docxml, 'P', 'A4', '../../images/logo.jpg', 'I', '');
$id = $danfe->montaDANFE();
$teste = $danfe->printDANFE($id.'.pdf', 'I');
