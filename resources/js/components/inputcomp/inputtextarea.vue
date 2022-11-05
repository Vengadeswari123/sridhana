<template>
    <div>
        <label for="inputname" class="form-label mb-0 w-100">
            {{ label }} <span class="text-danger h5" v-if="required">*</span>
        </label>
        <textarea :class="[error ? 'is-invalid' : '']"  :name="name" v-on:change="changevalue"  v-model="content" class="form-control bg-light w-100 mt-0" id="" rows="3"></textarea>
        <span v-if="error" class="text-danger text-small h6">
            {{ error }}
        </span>
    </div>
</template>

<script>
export default {
    props: ["name","type", "id", "label", "value", "error","placeholder","disabled",'required'],
    data() {
        return {
            content: this.value || "",
        };
    },
    mounted() {
        this.$watch('$props', ()=>{
            this.content=this.value
        }, { deep: true })
        this.changevalue()
    },
    methods:{
        changevalue(){
             this.$emit('changedata',this.content);
        }
    }
};
</script>
