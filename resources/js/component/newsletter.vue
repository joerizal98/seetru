<template>
    <div class="newsletter-page bg-cover bg-center relative py-12 px-8 text-white">
      <div class="newsletter-heading">
        <h1 class="text-4xl font-bold mb-4">NEWSLETTER</h1>
      </div>
      <div class="newsletter-content flex items-center">
        <div class="newsletter-text mr-8">
          <p class="text-lg font-normal leading-loose text-white-700">
            Subscribe to Our Newsletter
            Get Our Latest Updates Delivered Straight To Your Inbox.
          </p>
        </div>
        <div class="newsletter-form flex rounded-full overflow-hidden">
          <input type="email" placeholder="Your Email"
            class="px-4 py-2 flex-1 bg-white rounded-l-full border-none focus:outline-none">
          <button class="px-6 py-2 bg-blue-700 text-white font-semibold rounded-r-full">
            Subscribe Now
          </button>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: 'News'
  }
  </script>
  
  <style scoped>
  .newsletter-page {
    position: relative;
    padding: 50px; 
    color: white; 
    background-image: url('/images/bg2.png');
    background-size: cover;
    background-position: center;
  }
  
  .newsletter-page::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.7); 
    z-index: -1;
  }
  
  .newsletter-heading h1 {
    font-size: 36px;
    margin-bottom: 20px;
  }
  
  .newsletter-content {
    display: flex;
    align-items: center;
  }
  
  .newsletter-text {
    flex: 1;
    margin-right: 20px; 
  }
  
  .newsletter-form {
    display: flex;
    border-radius: 20px; 
    overflow: hidden; 
  }
  
  .newsletter-form input {
    flex: 1;
    padding: 10px;
    border: none;
    background-color: rgba(255, 255, 255, 0.9); 
    border-top-left-radius: 20px; 
    border-bottom-left-radius: 20px; 
  }
  
  .newsletter-form button {
    padding: 10px 20px;
    background-color: #007bff; 
    color: white;
    border: none;
    cursor: pointer;
    border-top-right-radius: 20px; 
    border-bottom-right-radius: 20px; 
  }
  </style>
  