<template>
  <PanelItem :index="index" :field="field">
    <template #value>
      <Icon
        viewBox="0 0 24 24"
        width="24"
        height="24"
        :type="type"
        :class="color"
      />
    </template>
  </PanelItem>
</template>

<script>
export default {
  props: ['index', 'resource', 'resourceName', 'resourceId', 'field'],

  computed: {
    label() {
      return this.field.value == true ? this.__('Yes') : this.__('No')
    },

    type() {
      return this.field.value == true ? 'check-circle' : 'x-circle'
    },

    color() {
      return this.field.value == true ? 'text-green-500' : 'text-red-500'
    },
  },
}
</script>
