<template>
  <DefaultField
    :field="currentField"
    :errors="errors"
    :show-help-text="showHelpText"
  >
    <template #field>
        <SwitchGroup>
            <div class="tw-flex tw-items-center">
                <Switch
                    v-model="value"
                    :class="checked ? 'tw-bg-green-500' : 'tw-bg-gray-200 tw-dark:tw-bg-gray-900'"
                    class="tw-relative tw-inline-flex tw-h-6 tw-w-12 tw-items-center tw-rounded-full tw-shrink-0 tw-cursor-pointer tw-border-2 tw-border-transparent tw-transition-colors tw-duration-200 tw-ease-in-out tw-focus:tw-outline-none tw-focus-visible:tw-ring-2 tw-focus-visible:tw-ring-white tw-focus-visible:tw-ring-opacity-75"
                >
                    <span
                    aria-hidden="true"
                    :class="checked ? 'tw-translate-x-6' : 'tw-translate-x-0'"
                    class="tw-pointer-events-none tw-inline-block tw-h-5 tw-w-5 tw-bg-white tw-dark:tw-bg-gray-100 tw-transform tw-rounded-full tw-shadow-lg tw-ring-0 tw-transition tw-duration-200 tw-ease-in-out"
                    />
                </Switch>
                <SwitchLabel class="ml-4" v-if="showLabel">{{ currentLabel }}</SwitchLabel>
            </div>
        </SwitchGroup>
    </template>
  </DefaultField>
</template>

<script >
import { HandlesValidationErrors,  DependentFormField } from 'laravel-nova'

export default {
  mixins: [HandlesValidationErrors, DependentFormField],

  data: () => ({
    value: false,
  }),

  methods: {
    setInitialValue() {
      this.value = this.currentField.value || this.value
    },

    fill(formData) {
      this.fillIfVisible(formData, this.field.attribute, this.trueValue)
    },

    toggle() {
      this.value = !this.value

      if (this.field) {
        this.emitFieldValueChange(this.field.attribute, this.value)
      }
    },
  },

  computed: {
    checked() {
      return Boolean(this.value)
    },

    trueValue() {
      return +this.checked
    },

    showLabel(){
        return this.checked ? this.field.show_true_label : this.field.show_false_label
    },

    currentLabel(){
        return this.checked ? this.trueLabelValue : this.falseLabelValue
    },

    trueLabelValue(){
        return (this.field.true_label != undefined) ? this.field.true_label : 'True'
    },

    falseLabelValue(){
        return (this.field.false_label != undefined) ? this.field.false_label : 'False'
    },
  },
}
</script>

<script setup>
import { Switch, SwitchGroup } from '@headlessui/vue'
// import { onMounted, ref } from 'vue'

// const dark = ref(false)

// onMounted(() => {
//     dark.value = document.documentElement.classList.contains('dark')
// })
</script>
