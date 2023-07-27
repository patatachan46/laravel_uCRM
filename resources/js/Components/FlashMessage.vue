<script setup>

</script>

<template>

  <!-- 処理成功時 flash message -->
  <div v-if="$page.props.flash.status === 'success'" class="bg-blue-300 text-white p-4">
    {{ $page.props.flash.message }}
  </div>

    <!-- 処理失敗時 success flash message -->
  <div v-if="$page.props.flash.status === 'danger'" class="bg-red-300 text-white p-4">
    {{ $page.props.flash.message }}
  </div>

</template>