<template>
  <div :class="`text-${field.textAlign}`">
    <IconBoolean :value="field.value" />
  </div>
</template>

<script>
export default {
  props: ['resourceName', 'field'],
}
</script>
