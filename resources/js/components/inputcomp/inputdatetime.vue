<template>
    <div>
        <div class="mb-3">
            <label :for="id" class="form-label">{{ label }} <span v-if="required" class="text-danger">*</span></label>

            <datetime
                :disabled="disabled == 1"
                type="datetime"
                v-model="content"
                class="w-100"
                :id="name"
                :placeholder="placeholder"

                ></datetime>
            <span v-if="error" class="text-danger text-small h6">
                {{ error }}
            </span>
            <input type="hidden" :name="name" :value="content">

        </div>
    </div>
</template>

<script>
import { Datetime } from 'vue-datetime';
import 'vue-datetime/dist/vue-datetime.css'

export default {
      components: {
    datetime: Datetime
  },
    props: ["name", "id", "label", "error", "placeholder", 'required', 'disabled', 'value'],
    data() {
        return {
            content: this.value || "",
        };
    },
    watch:{
        content(oldval,newval){
            this.changevalue()
        }
    },
    mounted() {
        this.$watch('$props', ()=>{
            this.content=this.value
        }, { deep: true })
        },
    methods: {
        changevalue() {
            this.$emit('changedata', this.content);
        }
    }
};
</script>
