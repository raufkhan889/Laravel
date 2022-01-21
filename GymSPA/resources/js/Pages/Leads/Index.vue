<template>
  <layout>
    <div class="container">
      <Link class="btn btn-dark float-end" :href="$route('leads.add')"
        >Add Lead</Link
      >
      <h1>All Leads</h1>

      <div class="row">
        <div class="col-lg-12">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Age</th>
                <th>Phone</th>
                <th>DOB</th>
                <th>Package</th>
                <th>Added On</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="lead in leads" :key="lead.id">
                <td scope="row">{{ lead.id }}</td>
                <td>{{ lead.name }}</td>
                <td>{{ lead.email }}</td>
                <td>{{ lead.age }}</td>
                <td>{{ lead.phone }}</td>
                <td>{{ lead.dob }}</td>
                <td>{{ lead.package }}</td>
                <td>{{ lead.created_at }}</td>
                <td>
                  <Link
                    class="text-decoration-none"
                    :href="$route('leads.view', { lead: lead.id })"
                  >
                    &rarr;
                  </Link>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
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

  props: ["leads"],
};
</script>