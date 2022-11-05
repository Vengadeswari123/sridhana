<template>
  <div class="card mt-2">
    <div class="card-body">
      <div class="float-end">
        <button class="btn btn-outline-primary" v-on:click="addrow" type="button">
          <i class="fa fa-add" aria-hidden="true"></i>
        </button>
      </div>
      <h5 class="mt-2 fw-bold text-eblue py-2 px-3 mb-3">Attributes</h5>
      <div
        class="row"
        v-for="(item, index) in datax"
        :key="'attribute' + index"
        :id="'attribute' + index"
      >
        <div class="mt-2 col-12 col-sm-12 col-md-12" :id="'x' + index">
          <div class="row">
            <div class="col-10">
              <vue-inputvselect
                label="Attribute"
                placeholder="Attribute"
                @changedatax="
                  (val) => {
                    updatedatax(index, val);
                  }
                "
                :value="datax[index].id"
                :options="options"
              ></vue-inputvselect>
            </div>
            <div class="col-2">
                  <button
                class="btn mt-4 py-1 btn-outline-danger"
                v-on:click="deleterow(index)"
                type="button"
              >
                <i class="fa fa-trash" aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="mt-1 form-control" v-model="datax[index].value" placeholder="Enter information">
        </div>
      </div>
    </div>
    <input type="hidden" name="attribute" :value="JSON.stringify(datax)" id="attribute" />
  </div>
</template>

<script>
export default {
  props: ["options", "data", "errors"],
  data() {
    return {
      datax: this.data || [],
    };
  },

  mounted() {},
  methods: {
    updatedatax(index, val) {
      this.datax[index].id = val ? val.id : null;
      this.datax[index].name = val ? val.name : null;
    },
    updatedatadx(index, val) {
      this.datax[index].value = val;
    },
    addrow() {
      this.datax.push({
        id: null,
        name: null,
        value: null,
      });
    },
    deleterow(index) {
      if (confirm("do you want to delete?")) {
      }
    },
  },
};
</script>
