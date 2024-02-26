<template>
  <header class="header-container">
    <div class="header-content">
      <h1 class="header-text">ESTABLISHMENT</h1>
    </div>
  </header>
</template>

<script>
export default {
  name: 'hh'
};
</script>

<style scoped>
.header-container {
  background-image: url('/images/bg1.png');
  background-size: cover; 
  background-position: center;
  width: 100%;
  height: 309px;
  display: flex;
  justify-content: flex-start; 
}

.header-content {
  display: flex;
  align-items: center; 
}

.header-text {
  font: normal normal 800 71px/96px Poppins;
  letter-spacing: 3.55px;
  color: #FFFFFF;
  text-shadow: 0px 5px 35px #00000029;
  text-transform: uppercase;
  opacity: 1;
  margin-left: 175px; 
  margin-right: 20px; 
}

/* Media query for smaller screens */
@media (max-width: 768px) {
  .header-text {
    font-size: 40px; 
    letter-spacing: 2px; 
  }
}
</style>
