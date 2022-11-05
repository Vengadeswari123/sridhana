<template>
    <div>
        <div class="mb-3">
            <label :for="id" class="form-label">{{ label }} <span v-if="required" class="text-danger">*</span></label>
            <input class="form-control" type="file" :name="name" :id="id" />
            <span v-if="error" class="text-danger text-small h6">
                {{ error }}
            </span>
        </div>
    </div>
</template>

<script>
export default {
    props: ["name", "id", "label", "error", "placeholder",'required'],
    data() {
        return {
            content: this.value || "",
        };
    },

    mounted() {},
};
</script>
