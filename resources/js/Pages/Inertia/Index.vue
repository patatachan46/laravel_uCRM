<script setup>
  import { Link } from '@inertiajs/inertia-vue3';

  defineProps({
    blogs: Array
  })

</script>

<template>
  <!-- flash message -->
  <div v-if="$page.props.flash.message" class="bg-blue-300">
    {{ $page.props.flash.message }}
  </div>

  <ul>
    <li v-for="blog in blogs" :key="blog.id">
      商品名：<Link class="text-blue-400" :href="route('inertia.show', { id: blog.id })">{{ blog.title }}</Link><br>
      商品詳細：{{ blog.content }}<br><br>
    </li>
  </ul>

  indexページ
</template>
