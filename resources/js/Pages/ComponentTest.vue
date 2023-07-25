<script setup>
  import GuestLayout from '@/Layouts/GuestLayout.vue'
  import Label from '@/Components/InputLabel.vue'
  import Input from '@/Components/TextInput.vue'

  const emitTest = e => console.log(e)

</script>


<template>
  <GuestLayout>
    <Label value="件名">商品名</Label>
    <Input 
      modelValue="初期値が入ってます。"
      @update:modelValue = "emitTest"
      ></Input>
  </GuestLayout>
</template>