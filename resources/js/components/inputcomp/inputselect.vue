<template>
    <div>
        <input type="hidden" :name='name' :value='content.id||null' >
        <label for="inputname" class="form-label w-100">
            {{ label }}
            <select
                :name="name"
                :disabled="disabled==1"
                class="bg-white form-select"
                :class="[error ? 'is-invalid' : '']"
                :id="name"
                v-model="content"
                v-on:change="changevalue"
            >
                <option v-for="item,index in options" :key="'option'+index">{{item}}</option>
            </select>
        </label>
        <span v-if="error" class="text-danger text-small h6">
            {{ error }}
        </span>
    </div>
</template>

<script>
export default {
    props: ["name", "id", "label", "value", "error","placeholder","options",'disabled'],
    data() {
        return {
            content: this.value || "",
        };
    },
    mounted() {
    },
    methods:{
        getvalue(val,list){
            for(var i=0;i<list;i++){
                if(list[i].id==val){
                    return list[i]
                }
            }
            return null;
        },
        changevalue(val){
             this.$emit('changedata',val.target.value);
        }
    }
};
</script>
