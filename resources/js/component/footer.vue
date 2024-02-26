<template>
  <div class="footer-container">
    <div class="left-section">
      <div class="logo-address">
        <img :src="logoPath" alt="Logo" class="footer-logo">
        <p class="address-text">Level 5, Sasana Kijang, Bank Negara Malaysia, 2, Jalan Dato’ Onn, 50480 Kuala Lumpur, Malaysia</p>
      </div>
      <router-link to="/" class="flex items-center space-x-2">
      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 24 24"
          style="fill:#FFFFFF;">
          <path
            d="M12,2C6.477,2,2,6.477,2,12c0,5.013,3.693,9.153,8.505,9.876V14.65H8.031v-2.629h2.474v-1.749 c0-2.896,1.411-4.167,3.818-4.167c1.153,0,1.762,0.085,2.051,0.124v2.294h-1.642c-1.022,0-1.379,0.969-1.379,2.061v1.437h2.995 l-0.406,2.629h-2.588v7.247C18.235,21.236,22,17.062,22,12C22,6.477,17.523,2,12,2z">
          </path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 24 24"
          style="fill:#FFFFFF;">
          <path
            d="M 8 3 C 5.239 3 3 5.239 3 8 L 3 16 C 3 18.761 5.239 21 8 21 L 16 21 C 18.761 21 21 18.761 21 16 L 21 8 C 21 5.239 18.761 3 16 3 L 8 3 z M 18 5 C 18.552 5 19 5.448 19 6 C 19 6.552 18.552 7 18 7 C 17.448 7 17 6.552 17 6 C 17 5.448 17.448 5 18 5 z M 12 7 C 14.761 7 17 9.239 17 12 C 17 14.761 14.761 17 12 17 C 9.239 17 7 14.761 7 12 C 7 9.239 9.239 7 12 7 z M 12 9 A 3 3 0 0 0 9 12 A 3 3 0 0 0 12 15 A 3 3 0 0 0 15 12 A 3 3 0 0 0 12 9 z">
          </path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0,0,256,256"
          style="fill:#FFFFFF;">
          <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
            stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none"
            font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
            <g transform="scale(10.66667,10.66667)">
              <path
                d="M22,3.999c-0.78,0.463 -2.345,1.094 -3.265,1.276c-0.027,0.007 -0.049,0.016 -0.075,0.023c-0.813,-0.802 -1.927,-1.299 -3.16,-1.299c-2.485,0 -4.5,2.015 -4.5,4.5c0,0.131 -0.011,0.372 0,0.5c-3.353,0 -5.905,-1.756 -7.735,-4c-0.199,0.5 -0.286,1.29 -0.286,2.032c0,1.401 1.095,2.777 2.8,3.63c-0.314,0.081 -0.66,0.139 -1.02,0.139c-0.581,0 -1.196,-0.153 -1.759,-0.617c0,0.017 0,0.033 0,0.051c0,1.958 2.078,3.291 3.926,3.662c-0.375,0.221 -1.131,0.243 -1.5,0.243c-0.26,0 -1.18,-0.119 -1.426,-0.165c0.514,1.605 2.368,2.507 4.135,2.539c-1.382,1.084 -2.341,1.486 -5.171,1.486h-0.964c1.788,1.146 4.065,2.001 6.347,2.001c7.43,0 11.653,-5.663 11.653,-11.001c0,-0.086 -0.002,-0.266 -0.005,-0.447c0,-0.018 0.005,-0.035 0.005,-0.053c0,-0.027 -0.008,-0.053 -0.008,-0.08c-0.003,-0.136 -0.006,-0.263 -0.009,-0.329c0.79,-0.57 1.475,-1.281 2.017,-2.091c-0.725,0.322 -1.503,0.538 -2.32,0.636c0.834,-0.5 2.019,-1.692 2.32,-2.636z">
              </path>
            </g>
          </g>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 24 24"
          style="fill:#FFFFFF;">
          <path
            d="M19,3H5C3.895,3,3,3.895,3,5v14c0,1.105,0.895,2,2,2h14c1.105,0,2-0.895,2-2V5C21,3.895,20.105,3,19,3z M9,17H6.477v-7H9 V17z M7.694,8.717c-0.771,0-1.286-0.514-1.286-1.2s0.514-1.2,1.371-1.2c0.771,0,1.286,0.514,1.286,1.2S8.551,8.717,7.694,8.717z M18,17h-2.442v-3.826c0-1.058-0.651-1.302-0.895-1.302s-1.058,0.163-1.058,1.302c0,0.163,0,3.826,0,3.826h-2.523v-7h2.523v0.977 C13.93,10.407,14.581,10,15.802,10C17.023,10,18,10.977,18,13.174V17z">
          </path>
        </svg>
        </router-link>
        <div class="separator-line"></div>
      </div>
    
    
    <div class="right-section">
      <div class="footer-links">
        <div class="footer-section">
          <h3 class="footer-section-title">About IFSB</h3>
          <ul>
            <li>Establishment</li>
            <li>Organisational Structure</li>
            <li>IFSB Membership</li>
            <li>Council</li>
            <li>Committee</li>
            <li>Working Groups</li>
            <li>Task Forces</li>
            <li>Secretariat</li>
          </ul>
        </div>
        <div class="footer-section">
          <h3 class="footer-section-title">Resource Center</h3>
          <ul>
            <li>PSIFIs</li>
            <li>Governing Document</li>
            <li>IFSB Bulletin</li>
            <li>Corporate Publications</li>
            <li>Research / Reports / Proceedings</li>
            <li>Public Lecture Series</li>
            <li>Islamic Financial Stability Forums</li>
          </ul>
        </div>
        <div class="footer-section">
          <h3 class="footer-section-title">IFSB Membership</h3>
          <ul>
            <li>List of Members</li>
            <li>Requirements & Benefits</li>
            <li>Application Procedure</li>
          </ul>
        </div>

        <div class="footer-section">
          <h3 class="footer-section-title">Events & Activities</h3>
          <ul>
            <li>PSIFIs</li>
            <li>Governing Document</li>
            <li>IFSB Bulletin</li>
            <li>Corporate Publications</li>
            <li>Research / Reports / Proceedings</li>
            <li>Public Lecture Series</li>
            <li>Islamic Financial Stability Forums</li>
          </ul>
        </div>
        <div class="footer-section">
          <h3 class="footer-section-title">Implementation</h3>
          <ul>
            <li>FIS Workshop</li>
            <li>Technical Assistance / Policy Advice / Self Assessment</li>
            <li>E-Learning</li>
            <li>Train of Trainers (ToT) Program</li>
            <li>Impact and Consistency Assessment Program ( ICAP)</li>
            <!-- <li>Public Lecture Series</li>
            <li>Islamic Financial Stability Forums</li> -->
          </ul>
        </div>
        <div class="footer-section">
          <h3 class="footer-section-title">Media</h3>
          <ul>
            <li>Press Release</li>
            <li>Speeches</li>
            <li>Gallery</li>
            <!-- <li>Corporate Publications</li>
            <li>Research / Reports / Proceedings</li>
            <li>Public Lecture Series</li>
            <li>Islamic Financial Stability Forums</li> -->
          </ul>
        </div>

        <div class="footer-section">
          <h3 class="footer-section-title">PSIFIs</h3>
          <ul>
            <li>About PSIFIs</li>
            <li>Key Exhibits</li>
            <li>Data & Metadata</li>
            <li>Selected Aggregated Indicators</li>
            <!-- <li>Research / Reports / Proceedings</li>
            <li>Public Lecture Series</li>
            <li>Islamic Financial Stability Forums</li> -->
          </ul>
        </div>
      </div>
      <!-- <div class="social-media-icons">
      </div> -->
    </div>
  </div>
  <div class="yellow-stripe"></div>
</template>

<script>
export default {
  data() {
    return {
      logoPath: "/images/logo2.svg"
    }
  },
  name: 'FooterPage'
};
</script>

<style scoped>
.footer-container {
  background-image: url('/images/footer.png');
  background-size: cover;
  background-position: top left;
  padding: 50px; 
  color: #ffffff;
  display: flex;
  align-items: flex-start; 
  flex-wrap: wrap; 
}
.yellow-stripe {
    background-color: #FFD700;
    height: 5px;
  }

.left-section {
  flex: 1;
  padding-right: 20px; 
}

.separator-line {
  border-right: 1px solid #ffffff; 
  height: 100%; 
  margin: 0 20px; 
}

.right-section {
  flex: 1; 
  padding-left: 20px;
}

.footer-links {
  display: flex;
  flex-wrap: wrap; 
  justify-content: space-between;
}

.footer-section {
  flex: 1;
  margin-bottom: 20px; 
}

.footer-section-title {
  font-size: 16px;
  margin-bottom: 10px;
}

.footer-section ul {
  list-style: none;
  padding: 0;
}

.social-media-icons {
  text-align: right;
}

/* Responsive Adjustments */
@media screen and (max-width: 768px) {
  .footer-container {
    flex-direction: column; 
    align-items: stretch; 
  }
  
  .left-section,
  .separator-line,
  .right-section {
    flex: auto; 
    width: 100%; 
    padding: 0; 
  }

  .separator-line {
    border-right: none; 
    border-bottom: 1px solid #ffffff; 
    height: auto; 
    width: 100%; 
    margin: 20px 0; 
  }

  .footer-section {
    margin-bottom: 30px; 
  }

  .address-text {
    font-size: 14px; 
  }
}
</style>
