<template>
    <footer class="footer2-container">
      <!-- <div class="yellow-stripe"></div> -->
  
      <div class="footer2-content">
        <div class="left-section">
          <p class="copyright-text">© 2023 ISLAMIC FINANCIAL SERVICES BOARD . All Rights Reserved</p>
        </div>
  
        <div class="right-section">
          <ul class="footer-links">
            <li><a href="#" class="footer-link">Terms Of Service</a></li>
            <li><a href="#" class="footer-link">Service Policy</a></li>
            <li><a href="#" class="footer-link">Cookie Policy</a></li>
            <li><a href="#" class="footer-link">Partners</a></li>
          </ul>
        </div>
      </div>
    </footer>
  </template>
  
  <script>
  export default {
    name: 'Footer2'
  };
  </script>
  
  <style scoped>
  .footer2-container {
    background-color: #ffffff;
    padding: 20px;
  }
  
  /* .yellow-stripe {
    background-color: #FFD700;
    height: 5px;
  } */
  
  .footer2-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 0;
  }
  
  .left-section {
    flex: 1;
  }
  
  .right-section {
    flex: 1;
    text-align: right;
  }
  
  .footer-links {
    list-style: none;
    padding: 0;
  }
  
  .footer-links li {
    display: inline-block;
    margin-right: 20px;
  }
  
  .footer-links li:last-child {
    margin-right: 0;
  }
  
  .footer-links a {
    text-decoration: none;
    text-align: left;
    font: normal normal normal 16px/24px Poppins;
    letter-spacing: 0px;
    color: #4E4E50;
    opacity: 1;
  }
  
  .footer-links a:hover {
    text-decoration: underline;
  }
  
  .copyright-text {
    margin: 0;
    text-align: left;
    font: normal normal normal 16px/24px Poppins;
    letter-spacing: 0px;
    color: #4E4E50;
    opacity: 1;
  }
  </style>
  