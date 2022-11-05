<template>
  <div class="mt-4 prod_item position-relative">
    <a @click="savetocart" class="btn heart btn-danger"><i class="fas fa-heart"></i></a>
    <a :href="'/products/' + data.slugurl" class="d-block">
      <img v-if="data.image" :src="'/' + data.image.loc" alt="" class="w-100" />
      <h6 class="mt-3 text-truncate">{{ data.name }}</h6>
      <h6 class="fw-bold">
        <span
          style="text-decoration: line-through"
          v-if="data.disa > 0"
          class="text-muted"
        >
          Rs. {{ data.baseprice }}</span
        >
        <span class="text-success"> Rs.{{ data.nettotal }} </span>
      </h6>
    </a>
    <ul class="navbar-nav flex-row align-items-center justify-content-between">
      <li v-if="parseInt(data.stock) > 0 || parseInt(data.selloutofstock)">
        <a @click="savetocart" style="border-radius: 5px" class="btn btn-sri"
          ><span class="small"> Add to Cart </span
          ><i class="ms-2 pt-1 fas fa-shopping-cart"></i
        ></a>
      </li>
      <li v-else class="w-100">
        <button type="button" class="btn btn-outline-danger w-100">Out of Stock</button>
      </li>
      <!-- <li class="rating">
        <i class="fas fa-star full"></i>
        <i class="fas fa-star full"></i>
        <i class="fas fa-star full"></i>
        <i class="fas fa-star"></i>
        <i class="fas fa-star"></i>
      </li> -->
    </ul>
  </div>
</template>

<script>
import { Datetime } from "vue-datetime";
import "vue-datetime/dist/vue-datetime.css";

export default {
  components: {
    datetime: Datetime,
  },
  props: ["data", "uid"],
  data() {
    return {
      content: this.value || "",
    };
  },
  watch: {
    content(oldval, newval) {
      this.changevalue();
    },
  },
  mounted() {},
  methods: {
    calcnet() {
      return (
        Math.round((parseFloat(this.data.disa) + parseFloat(this.data.nettotal)) * 100) /
        100
      );
    },

    savetocart() {
      axios
        .post("/cart/save", {
          id: this.data.id,
          uid: this.data.id,
        })
        .then((res) => {
          if (res.data.success) {
            this.$toast.success(res.data.title, res.data.message);
          } else {
            this.$toast.warning(res.data.title, res.data.message);
          }
        })
        .catch((err) => {
          console.error(err);
        });
    },
  },
};
</script>
