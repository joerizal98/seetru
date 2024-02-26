<template>
    <button @click="scrollToTop" class="arrow-button" v-show="isVisible">
      <i class="fas fa-arrow-up"></i> 
    </button>
  </template>
  
  <script>
  export default {
    name: 'arrow',
    data() {
      return {
        isVisible: false
      };
    },
    mounted() {
      window.addEventListener("scroll", this.handleScroll);
    },
    destroyed() {
      window.removeEventListener("scroll", this.handleScroll);
    },
    methods: {
      handleScroll() {
        if (window.scrollY > 20) {
          this.isVisible = true;
        } else {
          this.isVisible = false;
        }
      },
      scrollToTop() {
        window.scrollTo({
          top: 0,
          behavior: "smooth"
        });
      }
    }
  };
  </script>
  
  <style scoped>
  .arrow-button {
    position: fixed;
    bottom: 20px;
    right: 20px;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    font-size: 20px;
    cursor: pointer;
    display: none;
  }
  

  </style>
  