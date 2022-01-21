<template>
  <layout>
    <div class="container">
      <h1 class="my-5 fs-1 fw-bold text-center">All Cars</h1>
      <div class="mb-4 d-flex justify-content-end">
        <Link class="h4 btn btn-primary px-5" :href="$route('cars.create')"
          >Add Cars
        </Link>
      </div>

      <div v-for="car in cars" :key="car.id">
        <div class="card mb-5">
          <div class="card-header d-flex justify-content-lg-between">
            <span class="text-primary"> Founded: {{ car.founded }} </span>
            <div>
              <Link :href="$route('cars.edit', car.id)" class="text-success"
                >Edit
              </Link>
              &nbsp;
              <Link :href="$route('cars.destroy', car.id)" class="text-danger"
                >Delete
              </Link>
            </div>
          </div>
          <div class="card-body">
            <h1 class="card-title text-secondary">{{ car.name }}</h1>
            <p class="card-text w-75">
              {{ car.description }}
            </p>
            <Link :href="$route('cars.show', car.id)" class="btn btn-primary"
              >Checkout</Link
            >
          </div>
        </div>
      </div>
    </div>
  </layout>
</template>

<script setup>
import Layout from "./../../Shared/Layout";
import { Link } from "@inertiajs/inertia-vue";

export default {
  components: {
    Layout,
    Link,
  },

  props: ["cars"],
};
</script>

<style lang="scss" scoped>
</style>