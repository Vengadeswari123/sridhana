<template>
    <div class="row">
        <div class="col-12 col-md-6 mt-2">
            <vue-inputvselect @changedatax="(val)=>{category=val}" label="Category" name="catid" :options="options['category']" :value="categoryid" placeholder="Category"></vue-inputvselect>
        </div>
        <div class="col-12 col-md-6 mt-2" v-if="category">
            <vue-inputvselect @changedatax="(val)=>{subcategory=val}" label="Sub Category" name="subcatid" :options="category.categorybehasmany" :value="subcategoryid" placeholder="Sub Category"></vue-inputvselect>
        </div>

    </div>
</template>

<script>
export default {
    props: [
        'options',
        'catid',
        'subcatid',
    ],
    data() {
        return {
            categoryid:this.catid,
            category:null,
            subcategoryid:this.subcatid,
            subcategory:null,
        };
    },

    mounted() {},
    methods: {
        datax(datax){
        }
    },
};
</script>
