<?php
function haversineDistance($lat1, $lng1, $lat2, $lng2) {
    // Convert degrees to radians
    $lat1 = deg2rad($lat1);
    $lng1 = deg2rad($lng1);
    $lat2 = deg2rad($lat2);
    $lng2 = deg2rad($lng2);

    // Haversine formula
    $deltaLat = $lat2 - $lat1;
    $deltaLng = $lng2 - $lng1;

    $a = sin($deltaLat / 2) * sin($deltaLat / 2) + cos($lat1) * cos($lat2) * sin($deltaLng / 2) * sin($deltaLng / 2);
    $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
    
    // Radius of Earth in miles (use 6371 for kilometers)
    $radius = 3959;
    
    // Calculate the distance
    $distance = $radius * $c;
    
    return $distance;
}

// Example usage
$pickupLat = 40.748817;
$pickupLng = -73.985428; // Example: Latitude and Longitude for Pickup (e.g., NYC)
$dropLat = 34.052235;
$dropLng = -118.243683; // Example: Latitude and Longitude for Drop (e.g., LA)

$distance = haversineDistance($pickupLat, $pickupLng, $dropLat, $dropLng);
echo "The distance is " . round($distance, 2) . " miles.";
?>
