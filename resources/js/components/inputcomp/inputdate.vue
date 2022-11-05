<template>
    <div>
        <label for="inputname" class="form-label w-100">
            {{ label }}
            <input
                type="date"
                v-model="content"
                :name="name"
                :min="min"
                :max="max"
                v-on:keyup="changevalue"
                class="bg-white form-control"
                :class="[error ? 'is-invalid' : '']"
                :id="name"
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
    props: ["name", "id","type", "label", "value", "error","placeholder",'min','max'],
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
    watch:{
        content(oldval,newval){
            this.changevalue()
        }
    },
    methods:{
        changevalue(){
             this.$emit('changedata',this.content);
        }
    }
};
</script>
