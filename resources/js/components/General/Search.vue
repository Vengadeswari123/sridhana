<template>
  <div class="container-fluid">
    <div class="sm-search d-md-none">
      <div class="btn-group w-100">
        <a href="#" class="btn btn-outline-sri"
          ><i class="fas fa-filter me-2"></i> Filter</a
        >
        <a href="#" class="btn btn-sri"><i class="fas fa-sort me-2"></i> Sort</a>
      </div>
    </div>
    <div class="row mt-4">
      <div class="col-lg-3 col-md-4 sri-search d-none d-md-block">
        <h6 class="mb-4">Filter By</h6>
        {{typedata}}
        <div class="px-4 my-2" v-if="options.maxprice != options.minprice">
          Price <br />
          <vue-slider
            :min="parseInt(options.minprice)"
            :max="parseInt(options.maxprice)"
            @change="manageslider"
            :lazy="true"
            :enableCross="false"
            v-model="filter.price"
          ></vue-slider>
          <div class="row">
            <div class="col-6 text-start">
              <i class="fa-solid fa-indian-rupee-sign"></i>
              {{ options.minprice }}
            </div>
            <div class="col-6 text-end">
              <i class="fa-solid fa-indian-rupee-sign"></i>
              {{ options.maxprice }}
            </div>
          </div>
        </div>
        <div class="accordion" id="accordionPanelsStayOpenExample">
          <div class="accordion-item" v-if="options.category.length > 0">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button
                class="accordion-button btn collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-category"
                aria-expanded="true"
                aria-controls="panelsStayOpen-category"
              >
                Category <span class="mx-2" v-if="typedata.name=='category'"> - <span class="ms-2">{{typedata.name}}</span></span>
              </button>
            </h2>
            <div
              id="panelsStayOpen-category"
              class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-headingOne"
            >
              <div class="accordion-body">
                <div
                  class="form-check"
                  v-for="(item, index) in options.category"
                  :key="'category' + index"
                  v-on:click="addfilter(item.id, 'category')"
                >
                  <label class="form-check-label">
                    <input
                      class="form-check-input"
                      :checked="filter.category.includes(item.id) ? 'checked' : ''"
                      type="checkbox"
                      value="1"
                      v-on:click="addfilter(item.id, 'category')"
                    />
                    {{ item.name }}
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item" v-if="options.fabric.length > 0">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button
                class="accordion-button btn collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-fabric"
                aria-expanded="true"
                aria-controls="panelsStayOpen-fabric"
              >
                Fabric
              </button>
            </h2>
            <div
              id="panelsStayOpen-fabric"
              class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-headingOne"
            >
              <div class="accordion-body">
                <div
                  class="form-check"
                  v-for="(item, index) in options.fabric"
                  :key="'fabric' + index"
                  v-on:click="addfilter(item.id, 'fabric')"
                >
                  <label class="form-check-label">
                    <input
                      class="form-check-input"
                      :checked="filter.fabric.includes(item.id) ? 'checked' : ''"
                      type="checkbox"
                      value="1"
                      v-on:click="addfilter(item.id, 'fabric')"
                    />
                    {{ item.name }}
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item" v-if="options.pattern.length > 0">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button
                class="accordion-button btn collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-pattern"
                aria-expanded="true"
                aria-controls="panelsStayOpen-pattern"
              >
                Pattern
              </button>
            </h2>
            <div
              id="panelsStayOpen-pattern"
              class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-headingOne"
            >
              <div class="accordion-body">
                <div
                  class="form-check"
                  v-for="(item, index) in options.pattern"
                  :key="'pattern' + index"
                  v-on:click="addfilter(item.id, 'pattern')"
                >
                  <label class="form-check-label">
                    <input
                      class="form-check-input"
                      :checked="filter.pattern.includes(item.id) ? 'checked' : ''"
                      type="checkbox"
                      value="1"
                      v-on:click="addfilter(item.id, 'pattern')"
                    />
                    {{ item.name }}
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item" v-if="options.colour.length > 0">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button
                class="accordion-button btn collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-colour"
                aria-expanded="true"
                aria-controls="panelsStayOpen-colour"
              >
                Colour
              </button>
            </h2>
            <div
              id="panelsStayOpen-colour"
              class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-headingOne"
            >
              <div class="accordion-body">
                <div
                  class="form-check"
                  v-for="(item, index) in options.colour"
                  :key="'colour' + index"
                  v-on:click="addfilter(item.id, 'colour')"
                >
                  <label class="form-check-label">
                    <input
                      class="form-check-input"
                      :checked="filter.colour.includes(item.id) ? 'checked' : ''"
                      type="checkbox"
                      value="1"
                      v-on:click="addfilter(item.id, 'colour')"
                    />
                    {{ item.name }}
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item" v-if="options.technique.length > 0">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button
                class="accordion-button btn collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-technique"
                aria-expanded="true"
                aria-controls="panelsStayOpen-technique"
              >
                Technique
              </button>
            </h2>
            <div
              id="panelsStayOpen-technique"
              class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-headingOne"
            >
              <div class="accordion-body">
                <div
                  class="form-check"
                  v-for="(item, index) in options.technique"
                  :key="'technique' + index"
                  v-on:click="addfilter(item.id, 'technique')"
                >
                  <label class="form-check-label">
                    <input
                      class="form-check-input"
                      :checked="filter.technique.includes(item.id) ? 'checked' : ''"
                      type="checkbox"
                      value="1"
                      v-on:click="addfilter(item.id, 'technique')"
                    />
                    {{ item.name }}
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item" v-if="options.tags.length > 0">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button
                class="accordion-button btn collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-tags"
                aria-expanded="true"
                aria-controls="panelsStayOpen-tags"
              >
                Tags
              </button>
            </h2>
            <div
              id="panelsStayOpen-tags"
              class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-headingOne"
            >
              <div class="accordion-body">
                <div
                  class="form-check"
                  v-for="(item, index) in options.tags"
                  :key="'tags' + index"
                  v-on:click="addfilter(item.id, 'tags')"
                >
                  <label class="form-check-label">
                    <input
                      class="form-check-input"
                      :checked="filter.tags.includes(item.id) ? 'checked' : ''"
                      type="checkbox"
                      value="1"
                      v-on:click="addfilter(item.id, 'tags')"
                    />
                    {{ item.name }}
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="accordion-item" v-if="options.emblishment.length > 0">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
              <button
                class="accordion-button btn collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#panelsStayOpen-emblishment"
                aria-expanded="true"
                aria-controls="panelsStayOpen-emblishment"
              >
                Emblishment
              </button>
            </h2>
            <div
              id="panelsStayOpen-emblishment"
              class="accordion-collapse collapse"
              aria-labelledby="panelsStayOpen-headingOne"
            >
              <div class="accordion-body">
                <div
                  class="form-check"
                  v-for="(item, index) in options.emblishment"
                  :key="'emblishment' + index"
                  v-on:click="addfilter(item.id, 'emblishment')"
                >
                  <label class="form-check-label">
                    <input
                      class="form-check-input"
                      :checked="filter.emblishment.includes(item.id) ? 'checked' : ''"
                      type="checkbox"
                      value="1"
                      v-on:click="addfilter(item.id, 'emblishment')"
                    />
                    {{ item.name }}
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-9 col-md-8 prod_list" style="min-height: 100vh">
        <div class="sort">
          <div v-if="options.name.length > 0">
            <span class="fw-bold">{{ datax.total }}</span> results found on
            <span class="text-sri">{{ options.name }}</span>
          </div>
          <div class="btn-group dropstart">
            <button
              type="button"
              class="d-none d-md-block btn btn-sm px-4 btn-sri dropdown-toggle"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              Sort By
            </button>
            <ul class="dropdown-menu">
              <li>
                <a
                  v-on:click="updateorderby(0)"
                  class="dropdown-item"
                  :class="[filter.orderby == 0 ? 'active' : '']"
                  >Price - High to Low</a
                >
              </li>
              <li>
                <a
                  v-on:click="updateorderby(1)"
                  class="dropdown-item"
                  :class="[filter.orderby == 1 ? 'active' : '']"
                  >Price - Low to High</a
                >
              </li>
              <li>
                <a
                  v-on:click="updateorderby(2)"
                  class="dropdown-item"
                  :class="[filter.orderby == 2 ? 'active' : '']"
                  >Name - Ascending</a
                >
              </li>
              <li>
                <a
                  v-on:click="updateorderby(3)"
                  class="dropdown-item"
                  :class="[filter.orderby == 3 ? 'active' : '']"
                  >Name - Descending</a
                >
              </li>
            </ul>
          </div>
        </div>
        <div class="row" v-if="datax.data.length > 0">
          <div
            class="col-lg-3 col-md-6"
            v-for="(item, index) in datax.data"
            :key="'productcard' + index"
          >
            <productcard :data="item"></productcard>
          </div>
        </div>
        <div v-else>
          <div class="card">
            <div class="card-body text-center">
              <p>No Products Found</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { Datetime } from "vue-datetime";
import "vue-datetime/dist/vue-datetime.css";

import VueSlider from "vue-slider-component";
import "vue-slider-component/theme/default.css";
export default {
  components: {
    datetime: Datetime,
    VueSlider,
  },
  props: ["data", "options",'typedata'],
  data() {
    return {
      filter: {
        price: [this.options.minprice, this.options.maxprice],
        collection: [],
        category: [],
        tags: [],
        fabric: [],
        pattern: [],
        technique: [],
        colour: [],
        emblishment: [],
        orderby: 0,
      },
      datax: this.data,
      details: {
        name: this.options.name,
        page: 1,
        fp: 0,
        lp: 0,
      },
    };
  },
  watch: {},
  mounted() {},
  methods: {
    manageslider(val) {
      this.getsearch(1);
    },
    addfilter(id, name) {
      if (this.filter[name].includes(id)) {
        this.filter[name].splice(this.filter[name].indexOf(id, 0), 1);
      } else {
        this.filter[name].push(id);
      }
      this.getsearch(1);
    },
    updateorderby(val) {
      this.filter.orderby = val;
      this.getsearch(1);
    },
    getsearch(page) {
      axios
        .post(this.typedata.url+ "?page=" + page, {
          name: this.details.name,
          price: this.filter.price,
          collection: this.filter.collection,
          category: this.filter.category,
          tags: this.filter.tags,
          fabric: this.filter.fabric,
          pattern: this.filter.pattern,
          technique: this.filter.technique,
          colour: this.filter.colour,
          emblishment: this.filter.emblishment,
          orderby: this.filter.orderby,
        })
        .then((res) => {
          this.datax = res.data;
        })
        .catch((err) => {
          console.error(err);
        });
    },
  },
};
</script>
