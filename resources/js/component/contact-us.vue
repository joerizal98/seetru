<template>
    <div>
      <div>
        <test></test>
      </div>
      <div>
        <hhh></hhh>
      </div>
      <div>
        <cc></cc>
      </div>
      <div class="contact-page flex">
        <div class="card w-1/2">
          <!-- Card for Map -->
          <h2 class="text-base text-sky-500 font-Poppins tracking-wider font-bold mb-6">ISLAMIC FINANCIAL SERVICES BOARD</h2>
          <h2 class="text-base text-black font-Poppins tracking-wider font-normal mb-6"> Level 5, Sasana Kijang,<br> Bank Negara Malaysia,<br> 2, Jalan Dato’ Onn, <br>50480 Kuala Lumpur,<br> Malaysia.</h2>
          <div class="card-content">
            <!-- Leaflet Map -->
            <img :src="map" alt="Logo" class="h-500 w-500 mt-2" style="margin-right: 900px;">
          </div>
        </div>
        <div class="form-section w-1/2 p-8">
          <!-- Contact form -->
          <h1 class="text-3xl font-Poppins font-bold mb-6">GET IN TOUCH WITH US</h1>
          <h2 class="text-base font-Poppins tracking-wider font-normal mb-6">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At</h2>
          <form>
            <div class="mb-4">
              <label for="fullname" class="block text-gray-700">Full Name</label>
              <input type="text" id="fullname" name="fullname" placeholder="Enter your full name"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
              <label for="email" class="block text-gray-700">Email</label>
              <input type="email" id="email" name="email" placeholder="Enter your email address"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
              <label for="phone" class="block text-gray-700">Phone</label>
              <input type="tel" id="phone" name="phone" placeholder="Enter your phone number"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
              <label for="subject" class="block text-gray-700">Subject</label>
              <input type="text" id="subject" name="subject" placeholder="Enter your subject"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500">
            </div>
            <!-- <div class="mb-6">
              <textarea id="message" name="message" rows="5" placeholder="Enter your message"
                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500"></textarea>
            </div> -->
            <button type="submit" class="px-10 py-2 bg-blue-700 text-white font-semibold rounded-full mx-auto block">SUBMIT NOW</button>

          </form>
        </div>
      </div>
      <div>
        <News></News>
      </div>
      <div>
        <Footer></Footer>
      </div>
      <div>
        <Footer2></Footer2>
      </div>
      <div>
        <arrow></arrow>
      </div>
    </div>
  </template>
  
  <script>
  import test from './Header.vue'
  import hhh from './Header2.vue'
  import cc from './Header4.vue'
  import Footer from './footer.vue'
  import Footer2 from './footer2.vue'
  import News from './newsletter.vue'
  import arrow from './arrow.vue'
  // import L from 'leaflet';
  
  export default {
    data() {
        return {
            map: "/images/map.png"
        }
    },
    name: 'ContactUs',
    components: {
      test,
      hhh,
      cc,
      Footer,
      Footer2,
      News,
      arrow
    },
    mounted() {
      this.initMap();
    },
    methods: {
      initMap() {
        // Initialize Leaflet Map
        const map = L.map('map').setView([3.1581721763006807, 101.69160825337254], 15);
  
        // Add Tile Layer
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);
  
        // Add Marker
        L.marker([3.1581721763006807, 101.69160825337254]).addTo(map)
          .bindPopup('IFSB - Islamic Financial Services Board')
          .openPopup();
      }
    }
  }
  </script>
  
  <style scoped>
  .contact-page {
    padding: 50px;
  }
  
  .card {
    border: 1px solid #ffffff;
    border-radius: 8px;
    overflow: hidden;
  }
  
  .card-content {
    padding: 16px;
  }
  
  .map-section {
    height: 500px;
  }
  
  .map-placeholder {
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .form-section {
    background-color: #f9f9f9;
  }
  </style>
  