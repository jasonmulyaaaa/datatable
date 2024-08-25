<script setup>
import { defineProps } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps({
  client: {
    type: Object,
    required: true
  }
});
</script>

<template>
  <div class="card">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-6">
      <!--begin::Card title-->
      <div class="card-title">
        <h3 class="fw-bolder">Client Details</h3>
      </div>
      <!--end::Card title-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
      <div v-if="props.client">
        <div class="row mb-3">
          <div class="col-md-6">
            <strong>Client Name:</strong> {{ props.client.client_name }}
          </div>
          <div class="col-md-6">
            <strong>Company Title:</strong> {{ props.client.company_title }}
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <strong>Phone:</strong> {{ props.client.phone }}
          </div>
          <div class="col-md-6">
            <strong>Mobile:</strong> {{ props.client.mobile }}
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <strong>Email:</strong> {{ props.client.email }}
          </div>
          <div class="col-md-6">
            <strong>Secondary Email:</strong> {{ props.client.secondary_email }}
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <strong>Address:</strong> {{ props.client.address }}
          </div>
          <div class="col-md-6">
            <strong>City:</strong> {{ props.client.city }}
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <strong>Postal Code:</strong> {{ props.client.postal_code }}
          </div>
          <div class="col-md-6">
            <strong>Country:</strong> {{ props.client.country }}
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <strong>Contact Person:</strong> {{ props.client.contact_person }}
          </div>
          <div class="col-md-6">
            <strong>Website:</strong> {{ props.client.website }}
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <strong>Industry:</strong> {{ props.client.industry }}
          </div>
          <div class="col-md-6">
            <strong>Registration Number:</strong> {{ props.client.registration_number }}
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <strong>Tax Number:</strong> {{ props.client.tax_number }}
          </div>
          <div class="col-md-6">
            <strong>Legal Status:</strong> {{ props.client.legal_status }}
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <strong>Client Type:</strong> {{ props.client.client_type }}
          </div>
          <div class="col-md-6">
            <strong>Preferred Contact Method:</strong> {{ props.client.preferred_contact_method }}
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <strong>Status:</strong> {{ props.client.status }}
          </div>
          <div class="col-md-6">
            <strong>Notes:</strong> {{ props.client.notes }}
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-md-6">
            <strong>Billing Address:</strong> {{ props.client.billing_address }}
          </div>
          <div class="col-md-6">
            <strong>Billing Email:</strong> {{ props.client.billing_email }}
          </div>
        </div>
      </div>
      <div v-else>
        <p>Loading...</p>
      </div>
    </div>
    <!--end::Card body-->
      <div class="card-footer">
        <Link href="/client">
          <button type="button" class="btn btn-primary">Back</button>
        </Link>
      </div>
  </div>
</template>

<style scoped>
@import 'vue-select/dist/vue-select.css';
</style>
