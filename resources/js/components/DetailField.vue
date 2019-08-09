<template>
    <panel-item :field="field">
        <p slot="value" class="text-90">
            <span
            class="inline-block rounded-full w-4 h-4 align-middle"
            :style="{backgroundColor: toggleColor}" />
            <span class="align-middle" v-if="label != null">{{ label }}</span>
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

        trueColor(){
            return (this.field.true_color != undefined) ? this.field.true_color : 'var(--success)'
        },

        falseColor(){
            return (this.field.false_color != undefined) ? this.field.false_color : 'var(--60)'
        },

        toggleColor() {
            return this.field.value == true ? this.trueColor : this.falseColor
        },
    },
}
</script>
