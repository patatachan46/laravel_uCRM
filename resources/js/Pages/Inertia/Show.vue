<script setup>
  import { Link } from '@inertiajs/inertia-vue3';
  import { Inertia } from '@inertiajs/inertia'
  
defineProps({
    id: {
        type: String,
    },
    blog: {
        blog: Object
    }
});

const deleteConfirm = id => {
  // console.log(id)
  Inertia.delete(`/inertia/${id}`, {
    onBefore: () => confirm('本当に削除しますか？')
  })
}

</script>

<template>

  商品番号：{{ id }}<br>
  商品詳細：{{ blog.title }}<br>
  <button @click="deleteConfirm(blog.id)">削除</button>

</template>