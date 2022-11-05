<template>
  <div class="row">
    <div class="col-12 col-md-6 mt-2">
      <vue-inputtext
        type="number"
        :min="-1"
        class="col-12 mt-2"
        key="cpi"
        @changedata="(val) => managedata(val, 0)"
        name="cpi"
        id="cpi"
        :error="errors['cpi'] || null"
        :value="cpi"
        label="CPI"
        placeholder="Enter Cost Per Item"
      >
      </vue-inputtext>
    </div>
    <div class="col-12 col-md-6 mt-2">
      <!-- <vue-inputtext
        type="text"
        class="col-12 mt-2"
        key="baseprice"
        @changedata="(val) => managedata(val, 1)"
        name="baseprice"
        id="baseprice"
        :error="errors['baseprice'] || null"
        :value="baseprice"
        label="Base Price"
        placeholder="Enter Base Price"
      >
      </vue-inputtext> -->
      <label for="baseprice" class="mt-2">Base Price</label> <br />
      <i class="fa-solid fa-indian-rupee-sign fa-fw"></i> {{ baseprice }}
    </div>
    <div class="col-12 col-md-6 mt-2">
      <br />
      <div class="form-check form-switch mt-2">
        <input
          class="form-check-input"
          type="checkbox"
          value="1"
          v-model="distype"
          @change="calculatetotal()"
          id="calcbypercent"
        />
        <label class="form-check-label" for="calcbypercent"
          >Calculate by Discount Percent</label
        >
      </div>
    </div>
    <div class="col-12 col-md-6 mt-2">
      <vue-inputtext
        v-if="distype == 1"
        type="number"
        :min="-1"
        class="col-12 mt-2"
        key="disp"
        @changedata="(val) => managedata(val, 2)"
        name="disp"
        id="disp"
        :error="errors['disp'] || null"
        :value="disp"
        label="Discount Percent"
        placeholder="Enter Discount Percent"
      >
      </vue-inputtext>
      <div v-if="distype == 0">
        <label for="disp" class="mt-2">Discount Percent</label> <br />
        <i class="fa-solid fa-indian-rupee-sign fa-fw"></i> {{ disp }}
      </div>
    </div>
    <div class="col-12 col-md-6 mt-2">
      <vue-inputtext
        v-if="distype == 0"
        type="number"
        :min="-1"
        class="col-12 mt-2"
        key="disa"
        @changedata="(val) => managedata(val, 3)"
        name="disa"
        id="disa"
        :error="errors['disa'] || null"
        :value="disa"
        label="Discount Amount"
        placeholder="Enter Discount Amount"
      >
      </vue-inputtext>
      <div v-if="distype == 1">
        <label for="disa" class="mt-2">Discount Amount</label> <br />
        <i class="fa-solid fa-indian-rupee-sign fa-fw"></i> {{ disa }}
      </div>
    </div>
    <div class="col-12 col-md-6 mt-2">
      <vue-inputtext
        type="number"
        :min="-1"
        class="col-12 mt-2"
        key="taxp"
        @changedata="(val) => managedata(val, 5)"
        name="taxp"
        id="taxp"
        :error="errors['taxp'] || null"
        :value="taxp"
        label="Tax Percent"
        placeholder="Enter Tax Percent"
      >
      </vue-inputtext>
    </div>
    <div class="col-12 col-md-6 mt-2">
      <label for="taxa" class="mt-2">Tax Amount</label> <br />
      <i class="fa-solid fa-indian-rupee-sign fa-fw"></i> {{ taxa }}
    </div>
    <div class="col-12 col-md-6 mt-2">
      <vue-inputtext
        type="number"
        :min="-1"
        class="col-12 mt-2"
        key="nettotal"
        @changedata="(val) => managedata(val, 6)"
        name="nettotal"
        id="nettotal"
        :error="errors['nettotal'] || null"
        :value="nettotal"
        label="Net Total"
        placeholder="Enter Net Total"
      >
      </vue-inputtext>
    </div>
    <input type="hidden" name="cpi" :value="cpi">
    <input type="hidden" name="disa" :value="disa">
    <input type="hidden" name="disp" :value="disp">
    <input type="hidden" name="baseprice" :value="baseprice">
    <input type="hidden" name="distype" :value="distype">
    <input type="hidden" name="taxp" :value="taxp">
    <input type="hidden" name="taxa" :value="taxa">
    <input type="hidden" name="nettotal" :value="nettotal">


  </div>
</template>

<script>
export default {
  props: [
    "cpix",
    "basepricex",
    "dispx",
    "disax",
    "distypex",
    "taxpx",
    "nettotalx",
    "errors",
  ],
  data() {
    return {
      cpi: this.cpix || 0,
      disa: this.disax || 0,
      baseprice: this.basepricex || 0,
      distype: this.distypex?1: 0,
      disp: this.dispx || 0,
      taxp: this.taxpx || 0,
      nettotal: this.nettotalx || 0,
      taxa: 0,
    };
  },

  mounted() {
    this.calculatetotal();
  },
  methods: {
    calculatetotal() {

        if(this.distype){
            this.baseprice=Math.round((this.nettotal*10000)/((100-this.disp)*(100+this.taxp))*100)/100
            this.disa=Math.round(this.baseprice*this.disp)/100
            this.taxa=Math.round((this.baseprice-this.disa)*this.taxp)/100
        }
        else{
            this.baseprice=Math.round(((this.nettotal*100)/((100+this.taxp))-this.disa)*100)/100
            this.disp=(Math.round(((this.disa*100)/this.baseprice)*100)/100||0)
            this.taxa=Math.round((this.baseprice-this.disa)*this.taxp)/100
        }

    },
    managedata(val, type) {
      val = parseFloat(val) || 0;
      if (type == 0) {
        this.cpi = val;
      } else if (type == 1) {
        this.baseprice = val;
      } else if (type == 2) {
        this.disp = val;
      } else if (type == 3) {
        this.disa = val;
      } else if (type == 4) {
        this.distype = val;
      } else if (type == 5) {
        this.taxp = val;
      } else if (type == 6) {
        this.nettotal = val;
      }

      else if (type == 7) {
        this.name = val;
      } else if (type == 8) {
        this.shortdesc = val;
      } else if (type == 9) {
        this.desc = val;
      } else if (type == 10) {
        this.sku = val;
      } else if (type == 11) {
        this.barcode = val;
      } else if (type == 12) {
        this.stock = val;
      } else if (type == 13) {
        this.minstock = val;
      } else if (type == 14) {
        this.weight = val;
      } else if (type == 15) {
        this.wgunit = val;
      } else if (type == 16) {
        this.length = val;
      } else if (type == 17) {
        this.width = val;
      }else if (type == 18) {
        this.height = val;
      }else if (type == 19) {
        this.mntunit = val;
      }else if (type == 20) {
        this.seotitle = val;
      }else if (type == 21) {
        this.seodesc = val;
      }else if (type == 22) {
        this.colour = val;
      }else if (type == 23) {
        this.emblishment = val;
      }else if (type == 24) {
        this.fabric = val;
      }else if (type == 25) {
        this.technique = val;
      }
      else if (type == 26) {
        this.collection = val;
      }
      else if (type == 27) {
        this.occasion = val;
      }

     this.calculatetotal();
    },
  },
};
</script>
