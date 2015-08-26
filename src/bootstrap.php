<?php
/**
 * Magento Version Identification
 *
 * PHP version 5
 *
 * @author    Steve Robbins <steve@steverobbins.com>
 * @copyright 2015 Steve Robbins
 * @license   http://creativecommons.org/licenses/by/4.0/ CC BY 4.0
 * @link      https://github.com/steverobbins/magento-version-identification-php
 */

ini_set('display_errors', 1);

define('DS', DIRECTORY_SEPARATOR);

require_once __DIR__ . '/../vendor/autoload.php';

use Mvi\Command\GenerateCommand;
use Mvi\Command\UniqueCommand;
use Symfony\Component\Console\Application;

$app = new Application('Magento Version Identification', '1.0.0');

$app->add(new GenerateCommand);
$app->add(new UniqueCommand);

$app->run();