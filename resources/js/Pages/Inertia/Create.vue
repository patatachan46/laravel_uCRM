<script setup>
  import { reactive } from 'vue'
  import { Inertia } from '@inertiajs/inertia'
  import BreezeValidationErrors from '@/Components/ValidationErrors.vue'

  // Vue側のエラー文表示機能
  defineProps({
    errors: Object
  })

  const form = reactive({
    title: null,
    content: null
  })

  const submitFunction = () => {
    Inertia.post('/inertia', form)
  }

</script>

<template>
  <!-- ↓Form送信はJavaScript側で実施。submitボタンが押下された時に、@submit.preventで全てのページ読み込みを防ぎ処理速度を向上させる。 -->
  <BreezeValidationErrors :errors="errors" />
  <form @submit.prevent="submitFunction">
    <input type="text" name="Title" v-model="form.title">
    <!-- エラー文表示 -->
    <div v-if="errors.title">{{ errors.title }}</div><br>
    <input type="text" name="Content" v-model="form.content">
    <!-- エラー文表示 -->
    <div v-if="errors.content">{{ errors.content }}</div><br>
    <button>送信</button>
  </form>
</template>