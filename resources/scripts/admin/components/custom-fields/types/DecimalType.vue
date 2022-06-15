<template>
  <BaseInput v-model="inputValue" type="Number" step="0.01" />
</template>

<script setup>
import { computed } from 'vue'

const props = defineProps({
  modelValue: {
    type: [String, Number],
    default: null,
  },
})

const emit = defineEmits(['update:modelValue'])

const inputValue = computed({
  get: () => props.modelValue ,
  set: (value) => {
    value = parseFloat(value.replace(',','.'));

    emit('update:modelValue', value)
  },
})
</script>
