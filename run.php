#!/usr/bin/env php
<?php declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

if ($argc === 1) {
    fprintf(STDERR, 'Usage: %s <url>%s', $argv[0], PHP_EOL);
    exit(1);
}

$url = $argv[1];

$client = new GuzzleHttp\Client();

$result = $client->get($url, ['http_errors' => false]);

preg_match_all('|https?://[^\'" #]+|im', $result->getBody()->__toString(), $matches);

$urls = array_values(array_unique($matches[0]));

$domains = array_map(fn ($url) => parse_url($url, PHP_URL_HOST), $urls);

$return = [
    'urls' => $urls,
    'domains' => array_values(array_unique($domains)),
];

echo json_encode($return, JSON_PRETTY_PRINT);