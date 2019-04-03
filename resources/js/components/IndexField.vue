<template>
    <div class="text-center">
        <span
            class="inline-block rounded-full w-24 h-24"
            :class="{'bg-success': field.value, 'bg-danger': !field.value}" />
        <span class="pl-2" v-if="label != null">{{ label }}</span>
    </div>
</template>

<script>
export default {
    props: ['resourceName', 'field'],

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
