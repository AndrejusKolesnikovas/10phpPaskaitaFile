<?php

declare(strict_types=1);

function getJsonDataFromFile(string $filePath): array
{
    $fileData = file_get_contents($filePath);

    return json_decode($fileData, true);
}

function writeJsonDataToFile(string $filePath, array $vehicles): void
{
    file_put_contents($filePath, json_encode($vehicles, JSON_PRETTY_PRINT | JSON_FORCE_OBJECT));
}

function showDataList(array $array): void
{
    foreach ($array as $key => $item) {
        echo 'id: ' . $key . PHP_EOL .
            'type: ' . $item['type'] . PHP_EOL .
            'name: ' . $item['name'] . PHP_EOL .
            'weight: ' . $item['weight'] . PHP_EOL .
            '--------' . PHP_EOL;
    };

}