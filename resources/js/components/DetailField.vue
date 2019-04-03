<template>
    <panel-item :field="field">
        <p slot="value" class="text-90">
            <span
                class="inline-block rounded-full w-4 h-4 mr-1"
                :class="{'bg-success': field.value, 'bg-danger': !field.value}"
            />
            <span v-if="label != null">{{ label }}</span>
        </p>
    </panel-item>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],

    computed: {
        trueLabel(){
            return (this.field.true_label != undefined) ? this.field.true_label : null
        },

        falseLabel(){
            return (this.field.false_label != undefined) ? this.field.false_label : null
        },

        label() {
            return this.field.value == true ? this.trueLabel : this.falseLabel
        },
    },
}
</script>
