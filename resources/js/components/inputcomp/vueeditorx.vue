<template>
  <div class="">
    <h6>{{ title }}</h6>
    <wysiwyg v-model="datas" />
    <input type="hidden" :id="names" :name="name" :value="datas" />
  </div>
</template>

<script>
export default {
  props: ["content", "name", "title"],
  components: {},
  mounted() {},
  data() {
    return {
      datas: this.content,
      names: this.name,
      csrf: document.querySelector('meta[name="csrf-token"]').getAttribute("content"),
    };
  },
  methods: {
    changedata(val) {
    },
  },
};
</script>
<style>
.save-button {
  display: none;
}
</style>
