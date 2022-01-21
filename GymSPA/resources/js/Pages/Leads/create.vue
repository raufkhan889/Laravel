<template>
  <layout>
    <div class="container">
      <h1>Add Lead</h1>

      <div class="row">
        <form @submit.prevent="handleSubmit">
          <div class="row">
            <div class="col-md-6">
              <div class="from-group">
                <label class="form-label" for="name">Name</label>
                <input
                  type="text"
                  v-model="lead.name"
                  name="name"
                  placeholder="Enter Name"
                  class="form-control"
                  id="name"
                  tabindex="1"
                  required
                />
              </div>

              <div class="from-group">
                <label class="form-label" for="phone">Phone</label>
                <input
                  type="text"
                  v-model="lead.phone"
                  name="phone"
                  placeholder="Enter Phone"
                  class="form-control"
                  id="phone"
                  tabindex="3"
                  required
                />
              </div>

              <div class="from-group">
                <label class="form-label" for="package">Package Plan</label>
                <input
                  type="text"
                  v-model="lead.package"
                  name="package"
                  placeholder="Daily \ Monthly \ Yearly"
                  class="form-control"
                  id="package"
                  tabindex="5"
                  required
                />
              </div>
            </div>

            <div class="col-md-6">
              <div class="from-group">
                <label class="form-label" for="email">Email Address</label>
                <input
                  type="text"
                  v-model="lead.email"
                  name="email"
                  placeholder="Enter email"
                  class="form-control"
                  id="email"
                  tabindex="2"
                  required
                />
              </div>

              <div class="from-group">
                <label class="form-label" for="age">Age</label>
                <input
                  type="number"
                  v-model="lead.age"
                  name="age"
                  placeholder="Enter Age"
                  class="form-control"
                  id="age"
                  tabindex="4"
                  required
                />
              </div>

              <div class="from-group">
                <label class="form-label" for="dob">Date of Birth</label>
                <input
                  type="date"
                  v-model="lead.dob"
                  name="dob"
                  placeholder="Enter Date of Birth"
                  class="form-control"
                  id="dob"
                  tabindex="6"
                  required
                />
              </div>
            </div>
            <!-- end of row  -->
            <div class="row">
              <div class="col-md-12 my-3">
                <button class="btn btn-dark">Submit</button>
                <Link class="btn btn-warning mx-1" :href="$route('leads')"
                  >Back</Link
                >
              </div>
            </div>
          </div>
        </form>
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

  data() {
    return {
      lead: {
        name: "",
        email: "",
        phone: "",
        age: "",
        dob: "",
        package: "",
      },
    };
  },

  methods: {
    async handleSubmit() {
      let response = await this.$inertia.post("/leads/save", this.lead);
    },
  },
};
</script>