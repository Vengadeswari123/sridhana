<template>
  <div class="row">
    <vue-inputvselect
      label="Category"
      class="mt-1"
      name="category"
      @changedatax="
        (val) => {
          updatecat(val);
        }
      "
      :value="catdata"
      :options="options"
    ></vue-inputvselect>
    <vue-inputvselect
      v-if="subopt.length > 0"
      label="Sub Category"
      class="mt-1"
      name="subcategory"
      @changedatax="
        (val) => {
          updatesubcat(val);
        }
      "
      :value="subcatdata"
      :options="subopt"
    ></vue-inputvselect>
    <vue-inputvselect
      v-if="teropt.length > 0"
      label="Teritary Category"
      class="mt-1"
      name="tercategory"
      @changedatax="
        (val) => {
          updatetercat(val);
        }
      "
      :value="tercatdata"
      :options="teropt"
    ></vue-inputvselect>
  </div>
</template>

<script>
export default {
  props: ["options", "cat", "subcat", "tercat"],
  data() {
    return {
      catdata: this.cat,
      subcatdata: this.subcat,
      tercatdata: this.tercat,
      subopt: [],
      teropt: [],
    };
  },
  mounted() {},
  methods: {
    updatecat(val) {
      this.catdata = val.id;
      this.subopt = val.categorybehasmany ?? [];
    },
    updatesubcat(val) {
      this.subcatdata = val.id;
      this.teropt = val.tercategorybehasmany ?? [];
    },
    updatetercat(val) {
      this.tercatdata = val.id;
    },
  },
};
</script>
