<template>
    <div>
        <span
            class="inline-block rounded-full w-4 h-4 align-middle"
            :style="{backgroundColor: toggleColor}" v-if="hideDot != true" />
        <span class="pl-2 align-middle" :class="{'px-2 rounded': showBadge, 'text-white': whiteBadgeText}" :style="{backgroundColor: badgeColor}" v-if="label != null">{{ label }}</span>
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

        hideDot() {
            if (this.field.value == true) {
                return (this.field.hide_true_dot != undefined) ? this.field.hide_true_dot : false
            } else {
                return (this.field.hide_false_dot != undefined) ? this.field.hide_false_dot : false
            }

        },

        showBadge() {
            return (this.field.show_badge != undefined) ? this.field.show_badge : false
        },

        whiteBadgeText() {
            if (this.showBadge) {
                return (this.field.white_badge_text != undefined) ? this.field.white_badge_text : false
            } else {
                return null
            }
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

        badgeColor() {
            if (this.showBadge) {
                return this.field.value == true ? this.trueColor : this.falseColor
            } else {
                return null
            }
        }
    },
}
</script>
