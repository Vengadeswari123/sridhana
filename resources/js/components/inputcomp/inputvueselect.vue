<template>
    <div class="w-100">
        <input type="hidden" :name="name" :value="content ? content.id : null" />
        <label v-if="label" :for="id" class="w-100">
          {{ label }}
        </label>
        <v-select label="name" :disabled="disabled == 1" :options="options" :id="name" :name="name" class="bg-white" :class="[error ? 'is-invalid' : '']" v-model="content" @input="changevalue" />
        <span v-if="error" class="text-danger text-small h6">
          {{ error }}
        </span>
    </div>
</template>

<script>
    export default {
        props: ["name", "id", "label", "disabled", "value", "error", "placeholder", "options"],
        data() {
            return {
                content: "",
            };
        },
        mounted() {
            this.$watch(
                "$props",
                () => {
                    this.content = this.getvalue(this.value, this.options);
                    this.changevalue(this.content);
                }, {
                    deep: true
                }
            );
            this.content = this.getvalue(this.value, this.options);
            this.changevalue(this.content);

        },
        methods: {
            getvalue(val, list) {
                var temp = list || []
                for (var i = 0; i < temp.length; i++) {
                    if (temp[i].id == val) {
                        return temp[i];
                    }
                }
                return "";
            },
            changevalue(content) {
                if (content != null) {
                    this.$emit("changedata", content.id);
                    this.$emit("changedatax", content);
                } else {
                    this.$emit("changedata", null);
                }
            },
        },
    };
</script>
