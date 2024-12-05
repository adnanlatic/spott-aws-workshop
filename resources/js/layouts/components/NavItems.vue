<template>
  <VerticalNavSectionTitle
    :item="{
      heading: 'Home',
    }"
  />

  <VerticalNavLink
      :item="{
      title: 'Home',
      icon: 'bx-home',
      to: '/dashboard',
    }"
  />

  <VerticalNavLink
      :item="{
      title: 'Upload File',
      icon: 'bx-download',
      to: '/upload-file',
    }"
  />

  <VerticalNavLink
    :item="{
      title: 'Add a Post',
      icon: 'bx-table',
      to: '/new-post',
    }"
  />

  <VerticalNavLink
    :item="{
      title: 'Send an email',
      icon: 'bx-envelope',
      to: '/new-email',
    }"
  />
</template>

<script setup>
import VerticalNavSectionTitle from '@/@layouts/components/VerticalNavSectionTitle.vue'
import VerticalNavLink from '@layouts/components/VerticalNavLink.vue'
</script>