<?php

echo 'sdds';

if (file_exists('probes.json')) {
    $probes = @json_decode(file_get_contents('probes.json'));
} else {
    $probes = [];
}

$contents = file_get_contents($_FILES['image']['tmp_name']);

preg_match_all("/Probe Request \(([A-Za-z0-9\-\.]+)\)/", $contents, $extraProbes);

$probes = array_merge($probes, $extraProbes[1]);

$probes = array_unique($probes);

shuffle($probes);

file_put_contents('probes.json', json_encode($probes));


