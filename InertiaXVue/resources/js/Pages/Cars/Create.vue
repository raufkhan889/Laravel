<template>
  <layout>
    <div class="container">
      <h1 class="text-center">Add New Car</h1>

      <form
        @submit.prevent="handleCarForm"
        enctype="multipart/form-data"
        class="w-50 mx-auto my-5 p-4 bg-white"
      >
        <div class="mb-4">
          <input
            type="text"
            name="name"
            id=""
            class="form-control"
            placeholder="Enter Brand Name ..."
            aria-describedby="helpId"
            v-model="car.name"
            required
          />
        </div>

        <div class="mb-4">
          <input
            type="date"
            name="founded"
            id=""
            class="form-control"
            placeholder="founded year ..."
            aria-describedby="helpId"
            v-model="car.founded"
            required
          />
        </div>

        <div class="mb-4">
          <input
            type="text"
            name="description"
            id=""
            class="form-control"
            placeholder="Enter Description Name ..."
            aria-describedby="helpId"
            v-model="car.description"
            required
          />
        </div>

        <div class="mb-4">
          <input
            type="submit"
            class="form-control bg-primary w-50 text-white mx-auto"
            aria-describedby="helpId"
          />
        </div>
      </form>
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

  data() {
    return {
      car: {
        name: "",
        description: "",
        founded: "",
      },
    };
  },

  methods: {
    async handleCarForm() {
      let response = this.$inertia.post("/cars/store", this.car);
      //   window.location.href = "/cars";
    },
  },
};
</script>

<style>
</style>