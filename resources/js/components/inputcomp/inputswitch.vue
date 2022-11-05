<template>
    <div>
        <div class="form-check form-switch">
            <input
                class="form-check-input"
                :name="name"
                type="checkbox"
                v-model="content"
                role="switch"
                :id="id"
            />
            <label class="form-check-label" :for="id">{{ label }}</label>
            <br />
            <span v-if="error" class="text-danger text-small h6">
                {{ error }}
            </span>
        </div>
    </div>
</template>

<script>
export default {
    props: ["name", "id", "label",'switchvalue', "value", "error", "placeholder"],
    data() {
        return {
            content: this.value || "",
        };
    },

    mounted() {
        this.$watch('$props', ()=>{
            this.content=this.value
        }, { deep: true })
        this.content= this.value == 'on' ? true : false;
    }
};
</script>
