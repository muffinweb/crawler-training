<?php 
/**
 * @author Ugur Cengiz <muffinweb>
 * @email ugurcengiz.mail@icloud.com
 * @link github.com/muffinweb
 */

require 'vendor/autoload.php';

#
# -------------------------------------------------
#   Http Request Sample via Symfony HttpClient
# -------------------------------------------------
#

use Symfony\Component\HttpClient\HttpClient;

$client = HttpClient::create();

$response = $client->request(
    'GET',
    'https://api.github.com/repos/symfony/symfony-docs'
);

$jsonResponse = $response->getContent();

header('Content-Type: application/json');
echo $jsonResponse;

?>