<template>
    <div class="text-center">
        <span
            class="inline-block rounded-full w-4 h-4"
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
            if(! this.field.hide_label_on_index) {
                return this.field.value == true ? this.trueLabel : this.falseLabel
            }else {
                return null;
            }
        },
    },
}
</script>
