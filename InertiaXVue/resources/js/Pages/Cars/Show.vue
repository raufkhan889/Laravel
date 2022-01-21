<template>
  <layout>
    <div class="container">
      <h1 class="text-center">{{ car.name }}</h1>

      <div class="card text-center">
        <div class="card-header">Founded: {{ car.founded }}</div>
        <div class="card-body">
          <h5 class="card-title text-secondary h3">{{ car.name }}</h5>
          <p class="card-text">
            {{ car.description }}
          </p>
          <a :href="$route('cars')" class="btn btn-primary">Go Back</a>
        </div>
        <div class="card-footer text-muted">2 days ago</div>
      </div>
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

  props: ["car"],
};
</script>

<style>
</style>