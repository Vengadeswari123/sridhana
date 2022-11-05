<template>
  <div class="container-fluid px-4 mt-4 mb-3 px-lg-5 prod_list">
    <a :href="link" class="float-end">View More</a>
    <h4 class="mb-2">{{ title }}</h4>
    <carousel
      :perPageCustom="[
        [768, 5],
        [1024, 4.5],
      ]"
      :navigationEnabled="true"
      :paginationEnabled="false"
    >
      <slide
        v-for="(item, index) in data"
        :key="title + index"
        style="margin-right: 10px"
      >
        <productcard :data="item"></productcard>
      </slide>
    </carousel>
  </div>
</template>

<script>
import { Carousel, Slide } from "vue-carousel";
export default {
  components: {
    Carousel,
    Slide,
  },
  props: ["link", "title", "data"],
  data() {
    return {
      responsive: {
        0: { items: 1, nav: false },
        600: { items: 4, nav: true },
      },
    };
  },
  watch: {},
  mounted() {},
  methods: {},
};
</script>

<style scoped>
.owl-nav {
  display: none;
}
</style>
