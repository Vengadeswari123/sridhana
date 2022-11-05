<template>
  <div>
    <h5 style="font-weight: 900" class="mt-4">Language Information</h5>
    <div class="lang-menu row">
      <div class="col-xl-2 col-md-4 mt-3">
        <div
          class="nav flex-column nav-pills me-3"
          role="tablist"
          aria-orientation="vertical"
        >
          <button
            v-for="item in languages"
            v-on:click="changelanguage(item.code)"
            class="btn m-1"
            :class="[content == item.code ? 'btn-ecustom' : 'btn-outline-ecustom']"
            type="button"
            :key="'sellan' + item.code"
          >
            {{ item.name }}
          </button>
        </div>
      </div>
      <div class="col-xl-10 col-md-8 mt-3">
        <div class="row" v-if="contentx && content">
          <div v-for="(item, index) in options" class="col-12 col-sm-12 mt-2 col-md-6">
            <vue-inputtext
              type="text"
              id="name"
              :name="'dynamic' + item.name"
              :value="contentx[content][item.name]"
              @changedata="(val) => updatelanguage(item.name, val)"
              :label="item.title"
              :placeholder="'Enter ' + item.title"
            >
            </vue-inputtext>
          </div>
        </div>
      </div>
    </div>
    <input
      type="hidden"
      name="languages"
      :key="'inputzxc' + key"
      :value="JSON.stringify(contentx)"
    />
  </div>
</template>

<script>
export default {
  props: ["type", "languages", "data", "options"],
  data() {
    return {
      content: "",
      key: "",
      contentx: this.data ?? {},
    };
  },
  mounted() {

    this.content = this.languages[0].code;
    for (var i = 0; i < this.languages.length; i++) {
        if (!this.contentx.hasOwnProperty(this.languages[i].code)) {
            var tempx = {
                language: this.languages[i].name,
        };
        for (var j = 0; j < this.options.length; j++) {
            tempx[this.options[j].name] = "";
        }
        this.contentx[this.languages[i].code] = tempx;
      }
    }
  },
  methods: {
    changelanguage(item) {
      this.content = item;
    },
    updatelanguage(item, val) {
      this.$set(this.contentx[this.content], item, val);
      this.$emit("changedata", this.contentx);
      this.key = Math.random();
    },
  },
};
</script>
