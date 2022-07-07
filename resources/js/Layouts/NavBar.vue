<script setup>
  import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
  <nav class="navbar-content">
    <ul class="flex space-x-3">
      <li>
        <Link :class="`navbar-item ${ $page.component === 'TheRanking' && 'item-active'}`" href="/">
          Ranking
        </Link>
      </li>
      <li>
        <Link :class="`navbar-item ${ $page.url.startsWith('/students') && 'item-active'}`" href="/students">
          Estudiantes
        </Link>
      </li>
      <li>
        <Link :class="`navbar-item ${ $page.url.startsWith('/courses') && 'item-active'}`" href="/courses">
          Cursos
        </Link>
      </li>
    </ul>
  </nav>
</template>