# Haversine Formula PHP

This PHP project calculates the distance between two locations using the Haversine formula based on their latitude and longitude.

## Usage

You can use the `haversine.php` file to calculate the distance between two points on the Earth.

```php
<?php
$pickupLat = 40.748817;
$pickupLng = -73.985428; // Example: Latitude and Longitude for Pickup (e.g., NYC)
$dropLat = 34.052235;
$dropLng = -118.243683; // Example: Latitude and Longitude for Drop (e.g., LA)

$distance = haversineDistance($pickupLat, $pickupLng, $dropLat, $dropLng);
echo "The distance is " . round($distance, 2) . " miles.";
?>
