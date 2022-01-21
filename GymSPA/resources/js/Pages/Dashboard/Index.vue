<template>
  <layout>
    <div class="container">
      <h1 class="text-center">Hey from Dashboard, {{ fname }} {{ lname }}</h1>
    </div>
  </layout>
</template>

<script>
import Layout from "./../../Shared/Layout";
import { Link } from "@inertiajs/inertia-vue";

export default {
  components: {
    Layout,
    Link,
  },
  props: ["fname", "lname"],
};
</script>

<style>
</style>