<template>
    <div>
        <label for="inputname" class="form-label w-100">
            {{ label }} <span class="text-danger h5" v-if="required">*</span>
            <input
                :disabled="disabled == 1"
                :type="type"
                v-model="content"
                :name="name"
                v-on:keyup="changevalue"
                class="bg-white form-control"
                :class="[error ? 'is-invalid' : '']"
                :id="name"
                :min="min"
                :max="max"
                :placeholder="placeholder"
            />
        </label>
        <span v-if="error" class="text-danger text-small h6">
            {{ error }}
        </span>
    </div>
</template>

<script>
export default {
    props: ["name","type", "id", "label", "value", "error","placeholder","disabled",'required','min','max'],
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
