<template>
  <h2>Total Miles between pick/drop lat&lon</h2>
  <h3>Miles: {{ totalMiles(40.748817, -73.985428, 34.052235, -118.243683) }}</h3>
  <h3>Duration: {{ totalMiles(40.748817, -73.985428, 34.052235, -118.243683) * milePerMinute }}</h3>
</template>


<script>
export default {
  name: 'App',
  data() {
    return {
      milePerMinute: 3,
    }
  },
  methods: {
    totalMiles(lat1, lon1, lat2, lon2)
    {
      // Radius of the Earth in miles
      const R = 3959; // Use 6371 for kilometers

      // Convert degrees to radians
      const lat1Rad = this.degreesToRadians(lat1);
      const lon1Rad = this.degreesToRadians(lon1);
      const lat2Rad = this.degreesToRadians(lat2);
      const lon2Rad = this.degreesToRadians(lon2);

      // Difference in coordinates
      const deltaLat = lat2Rad - lat1Rad;
      const deltaLon = lon2Rad - lon1Rad;

      // Haversine formula
      const a = Math.sin(deltaLat / 2) * Math.sin(deltaLat / 2) +
                Math.cos(lat1Rad) * Math.cos(lat2Rad) *
                Math.sin(deltaLon / 2) * Math.sin(deltaLon / 2);
      const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));

      // Calculate the distance
      const distance = R * c;

      return distance; 
    },
    // Function to convert degrees to radians
    degreesToRadians(degrees) {
        return degrees * (Math.PI / 180);
    },
  },
}
</script>

<style scoped>
h1
{
  color: red;
}
</style>