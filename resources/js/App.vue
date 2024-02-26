<template>
  <div>
    <div v-if="currentPage !== 'contact-us'">
      <test></test>
    </div>
    <div v-if="currentPage !== 'contact-us'">
      <hhh></hhh>
    </div>
    <div v-if="currentPage !== 'contact-us'">
      <hh></hh>
    </div>
    <div v-if="currentPage === 'contact-us'">
      <ContactUs></ContactUs>
    </div>
    <div v-else>
      <ContentPage></ContentPage>
    </div>
    <div v-if="currentPage !== 'contact-us'">
      <News></News>
    </div>
    <div v-if="currentPage !== 'contact-us'">
      <Footer></Footer>
    </div>
    <div v-if="currentPage !== 'contact-us'">
      <Footer2></Footer2>
    </div>
    <arrow></arrow> 
  </div>
</template>

<script>
import test from './component/Header.vue'
import hhh from './component/Header2.vue'
import hh from './component/Header3.vue'
import ContentPage from './component/content1.vue'
import ContactUs from './component/contact-us.vue' 
import Footer from './component/footer.vue'
import Footer2 from './component/footer2.vue'
import News from './component/newsletter.vue'
import arrow from './component/arrow.vue'

export default {
  components: {
    test,
    hhh,
    hh,
    ContentPage,
    ContactUs, 
    Footer,
    Footer2,
    News,
    arrow,
  },
  data() {
    return {
      currentPage: '' 
    }
  },
  mounted() {
    const path = window.location.pathname;
    if (path === '/contact') {
      this.currentPage = 'contact-us';
    } else {
      this.currentPage = 'content';
    }
  }
}
</script>
