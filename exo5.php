<?php
$francs = rand(0, 1000);
$euros = round($francs / 6.55957, 2);

echo $francs. " francs valent " . $euros . " euros.";