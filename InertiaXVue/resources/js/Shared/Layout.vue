<template>
  <div>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
      <div class="container">
        <a class="navbar-brand" :href="$route('home')"> MyApp </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Left Side Of Navbar -->
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <Link class="nav-link" :href="$route('cars')">Cars</Link>
            </li>
          </ul>

          <!-- Right Side Of Navbar -->
          <ul class="navbar-nav ms-auto">
            <!-- Authentication Links -->

            <li class="nav-item dropdown">
              <a
                id="navbarDropdown"
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                v-pre
              >
                Rauf Khan
              </a>

              <div
                class="dropdown-menu dropdown-menu-right"
                aria-labelledby="navbarDropdown"
              >
                <a class="dropdown-item" href="#" @click="handleLogout">
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <main class="py-4">
      <slot />
    </main>
  </div>
</template>

<script>
import axios from "axios";
import { Link } from "@inertiajs/inertia-vue";

export default {
  components: {
    Link,
  },

  methods: {
    async handleLogout() {
      await axios.post("/logout", {});
      window.location.href = "/";
    },
  },
};
</script>

<style>
</style>