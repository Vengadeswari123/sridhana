<template>
    <div class="w-100">
        <input type="hidden" :name='name' :value='JSON.stringify(dataxx)' >
        <label v-if="label" :for="id" class="w-100">
            {{ label }}
        </label>
        <v-select
            label="name"
            :disabled="disabled==1"
            :options="options"
            :id="name"
            :name="name"
            class="bg-white"
            multiple
            :class="[error ? 'is-invalid' : '']"
            v-model="content"
            @input="(val)=>{changevalue(1,val)}"
        />
        <span v-if="error" class="text-danger text-small h6">
            {{ error }}
        </span>
    </div>
</template>

<script>
export default {
    props: ["name", "id", "label",'disabled', "value", "error","placeholder","options"],
    data() {
        return {
            content: [],
            dataxx:[],
        };
    },
    mounted() {
        this.$watch('$props', ()=>{
        this.changevalue(0,this.options)
        }, { deep: true })
        this.changevalue(0,this.options)

    },
    methods:{
        changevalue(type,content){
            this.dataxx=[]
            this.content=[]
            for(var i=0;i<content.length>0;i++){
                if(type==0){
                    if(this.value.includes(content[i].id)){
                        this.dataxx.push(content[i].id)
                        this.content.push(content[i])
                    }
                }
                else{
                    this.dataxx.push(content[i].id)
                    this.content.push(content[i])

                }
            }
            if(this.content.length>0){
                this.$emit('changedata',this.content);
            }
            else{
             this.$emit('changedata',[]);
            }
        }
    }
};
</script>
