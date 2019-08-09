<template>
    <div class="text-center">
        <div v-if="editableIndex">
            <toggle-button
                    :id="sanitizedName"
                    :name="sanitizedName"
                    :value="value"
                    @change="toggle"
                    :labels="labelConfig"
                    :width="width"
                    :height="height"
                    :sync="true"
                    :color="colors"
                    :speed="speed"
                />
        </div>
        <span v-else
            class="inline-block rounded-full w-4 h-4"
            :style="bgColor" 
            />
        <span class="pl-2" v-if="label != null" >{{ label }}</span>
    </div>
</template>

<script>
export default {
    props: ['resourceName', 'field'],

    data: () => ({
        value: false,
    }),

    mounted() {
        this.value = this.field.value || false

        this.field.fill = formData => {
            formData.append(this.field.attribute, this.trueValue)
        }
    },

    methods: {
        toggle() {
            this.value = !this.value
        },
    },

    computed: {
        editableIndex(){
            return this.field.editable_index != undefined
        },
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

        trueColor(){
            return (this.field.true_color != undefined) ? this.field.true_color : 'var(--success)'
        },

        falseColor(){
            return (this.field.false_color != undefined) ? this.field.false_color : 'var(--danger)'
        },

        bgColor(){
            return  'background-color:' + (this.field.value == true ? this.trueColor : this.falseColor) + ';'
        },

        colors(){
            return {
                checked: this.trueColor,
                unchecked: this.falseColor,
                disabled: '#CCCCCC'
            }
        },
    },
}
</script>
