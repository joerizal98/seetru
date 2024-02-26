<template>
  <header class="bg-white text-gray-700 py-4">
    <div class="container mx-auto">
      <nav class="flex items-center justify-between">
        <img :src="logoPath" alt="Logo" class="h-15 w-auto">
        <div class="md:hidden">
          <button @click="toggleMenu" class="text-xl">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
          </button>
        </div>

        <nav class="hidden md:block">
          <ul class="flex space-x-6 items-center">
            <li><router-link to="/" class="hover:text-gray-900">Home</router-link></li>
            <li><router-link to="/about" class="selected-link">About IFSB</router-link></li>
            <li><router-link to="/standards" class="hover:text-gray-900">Standards Development</router-link></li>
            <li><router-link to="/publications" class="hover:text-gray-900">Publications</router-link></li>
            <li><router-link to="/psifis" class="hover:text-gray-900">PSIFIs</router-link></li>
            <li><router-link to="/consultation" class="hover:text-gray-900">Consultation</router-link></li>
            <li><router-link to="/implementation" class="hover:text-gray-900">Implementation</router-link></li>
            <li><router-link to="/events" class="hover:text-gray-900">Event & Activities</router-link></li>
            <li>
              <router-link to="/members-zone" class="hover:text-gray-900">
                <div class="flex items-center space-x-2 bg-gray-200 p-2 rounded-md">
                  <svg width="20" height="50" viewBox="0 0 24 24" version="1.1"
                      xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                      xml:space="preserve" xmlns:serif="http://www.serif.com/"
                      style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                    <g id="Icon">
                      <circle cx="12" cy="7" r="5.75"></circle>
                      <path
                        d="M21.25,21c-0,0.966 -0.783,1.75 -1.75,1.75l-15,-0c-0.967,-0 -1.75,-0.784 -1.75,-1.75c-0,-4.28 3.47,-7.75 7.75,-7.75l3,0c4.28,0 7.75,3.47 7.75,7.75Zm-0.729,0.729c-0.013,0.005 -0.021,0.011 -0.021,0.021l0.021,-0.021Z">
                      </path>
                    </g>
                  </svg>
                  <span>IFSB Member’s Zone</span>
                </div>
              </router-link>
            </li>
          </ul>
        </nav>
      </nav>

      <div 
        v-show="isMobileMenuOpen" 
        class="md:hidden transition-transform duration-300 ease-in-out"
        :class="{ 'transform translate-y-0': isMobileMenuOpen, 'translate-y-full': !isMobileMenuOpen }"
      >
        <ul class="flex flex-col space-y-4 items-center mt-4">
          <li><router-link to="/" class="hover:text-gray-900">Home</router-link></li>
          <li><router-link to="/about" class="selected-link">About IFSB</router-link></li>
          <li><router-link to="/standards" class="hover:text-gray-900">Standards Development</router-link></li>
          <li><router-link to="/publications" class="hover:text-gray-900">Publications</router-link></li>
          <li><router-link to="/psifis" class="hover:text-gray-900">PSIFIs</router-link></li>
          <li><router-link to="/consultation" class="hover:text-gray-900">Consultation</router-link></li>
          <li><router-link to="/implementation" class="hover:text-gray-900">Implementation</router-link></li>
          <li><router-link to="/events" class="hover:text-gray-900">Event & Activities</router-link></li>
          <li>
            <router-link to="/members-zone" class="hover:text-gray-900">
              <div class="flex items-center space-x-2 bg-gray-200 p-2 rounded-md">
                <svg width="20" height="50" viewBox="0 0 24 24" version="1.1"
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    xml:space="preserve" xmlns:serif="http://www.serif.com/"
                    style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;">
                  <g id="Icon">
                    <circle cx="12" cy="7" r="5.75"></circle>
                    <path
                      d="M21.25,21c-0,0.966 -0.783,1.75 -1.75,1.75l-15,-0c-0.967,-0 -1.75,-0.784 -1.75,-1.75c-0,-4.28 3.47,-7.75 7.75,-7.75l3,0c4.28,0 7.75,3.47 7.75,7.75Zm-0.729,0.729c-0.013,0.005 -0.021,0.011 -0.021,0.021l0.021,-0.021Z">
                    </path>
                  </g>
                </svg>
                <span>IFSB Member’s Zone</span>
              </div>
            </router-link>
          </li>
        </ul>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  name: "Header2",
  props: {
    msg: String,
  },
  data() {
    return {
      isMobileMenuOpen: false,
      logoPath: "/images/logo.svg",
    };
  },
  methods: {
    toggleMenu() {
      this.isMobileMenuOpen = !this.isMobileMenuOpen;
    },
  },
};
</script>
  
  <style scoped>
  header {
    background-color: white;
    text-align: left;
    font: normal normal normal 13px/30px Poppins; 
    letter-spacing: 0px;
    color: #475A76;
    opacity: 1;
  }
.selected-link {
  position: relative;
}

.selected-link::after {
  content: "";
  position: absolute;
  left: 0;
  bottom: -3px; 
  width: 100%;
  height: 2px;
  background-color: rgb(204, 204, 16);
}
  </style>
  