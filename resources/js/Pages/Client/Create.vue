<script setup>
import { ref } from 'vue';
import { useForm, router, Link } from '@inertiajs/vue3';
import vSelect from 'vue-select';

// Create a reactive form object
const form = useForm({
  clientName: '',
  companyTitle: '',
  phone: '',
  mobile: '',
  fax: '',
  email: '',
  secondaryEmail: '',
  address: '',
  city: '',
  postalCode: '',
  country: '',
  contactPerson: '',
  website: '',
  industry: '',
  registrationNumber: '',
  taxNumber: '',
  legalStatus: '',
  clientType: '',
  preferredContactMethod: '',
  status: 'active',
  notes: '',
  billingAddress: '',
  billingEmail: '',
  createdBy: null,
  updatedBy: null,
});

// Define the submitForm method
const submitForm = () => {
  router.post('/client', form);
};

// Define company title options
const companyTitleOptions = [
  'LTD', 'Limited', 'CO LTD', 'PT', 'CV', 'UD', 'PD', // Indonesia
  'Pte Ltd', 'LLP', 'LLC', 'Inc', 'Corp', 'PLC', 'GmbH', 'S.A.', 'S.A.S.', 'AG', 'BV', 'Oy', 'AB', 'AS', 'A/S', 'S.r.l.', 'K.K.', 'Pty Ltd', 'Sdn Bhd', 'Bhd', 'N.V.', 'Sp. z o.o.', 'OÜ', 'A.G.', 'S.p.A.', 'S.A.U.', 'S.A.R.L.', 'S.A.S.U.', 'S.A.S.L.', 'S.A.S.P.', 'S.A.S.C.', 'S.A.S.D.', 'S.A.S.E.', 'S.A.S.F.', 'S.A.S.G.', 'S.A.S.H.', 'S.A.S.I.', 'S.A.S.J.', 'S.A.S.K.', 'S.A.S.L.', 'S.A.S.M.', 'S.A.S.N.', 'S.A.S.O.', 'S.A.S.P.', 'S.A.S.Q.', 'S.A.S.R.', 'S.A.S.S.', 'S.A.S.T.', 'S.A.S.U.', 'S.A.S.V.', 'S.A.S.W.', 'S.A.S.X.', 'S.A.S.Y.', 'S.A.S.Z.'
];

</script>

<template>
  <div class="card">
    <!--begin::Card header-->
    <div class="card-header border-0 pt-6">
      <!--begin::Card title-->
      <div class="card-title">
        <h3 class="fw-bolder">Create Client</h3>
      </div>
      <!--end::Card title-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
      <!--begin::Form-->
      <form @submit.prevent="submitForm">
        <div class="row">
          <div class="col-md-6 mb-6">
            <label class="form-label required">Client Name</label>
            <input v-model="form.clientName" type="text" class="form-control" placeholder="Enter name" />
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label required">Company Title</label>
            <v-select v-model="form.companyTitle" :options="companyTitleOptions" class="form-select" placeholder="Select Company Title"></v-select>
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label required">Phone</label>
            <input v-model="form.phone" v-mask="'+# (###) ###-####'" type="text" class="form-control" placeholder="Enter phone" />
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label">Mobile</label>
            <input v-model="form.mobile" v-mask="'+# (###) ###-####'" type="text" class="form-control" placeholder="Enter mobile" />
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label">Fax</label>
            <input v-model="form.fax" v-mask="'+# (###) ###-####'" type="text" class="form-control" placeholder="Enter fax" />
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label required">Email</label>
            <input v-model="form.email" type="email" class="form-control" placeholder="Enter email" />
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label">Secondary Email</label>
            <input v-model="form.secondaryEmail" type="email" class="form-control" placeholder="Enter secondary email" />
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label required">Address</label>
            <textarea v-model="form.address" class="form-control" rows="3" placeholder="Enter address"></textarea>
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label required">City</label>
            <input v-model="form.city" type="text" class="form-control" placeholder="Enter city" />
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label">Postal Code</label>
            <input v-model="form.postalCode" v-mask="'#####'" type="text" class="form-control" placeholder="Enter postal code" />
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label">Country</label>
            <input v-model="form.country" type="text" class="form-control" placeholder="Enter country" />
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label">Contact Person</label>
            <input v-model="form.contactPerson" type="text" class="form-control" placeholder="Enter contact person" />
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label">Website</label>
            <input v-model="form.website" type="url" class="form-control" placeholder="Enter website" />
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label">Industry</label>
            <input v-model="form.industry" type="text" class="form-control" placeholder="Enter industry" />
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label">Registration Number</label>
            <input v-model="form.registrationNumber" type="text" class="form-control" placeholder="Enter registration number" />
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label">Tax Number</label>
            <input v-model="form.taxNumber" type="text" class="form-control" placeholder="Enter tax number" />
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label">Legal Status</label>
            <input v-model="form.legalStatus" type="text" class="form-control" placeholder="Enter legal status" />
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label">Client Type</label>
            <v-select v-model="form.clientType" :options="['Individual', 'Company']" class="form-select" placeholder="Select Client Type"></v-select>
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label">Preferred Contact Method</label>
            <v-select v-model="form.preferredContactMethod" :options="['Email', 'Phone', 'Mobile']" class="form-select" placeholder="Select Preferred Contact Method"></v-select>
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label">Status</label>
            <v-select v-model="form.status" :options="['active', 'inactive']" class="form-select" placeholder="Select Status"></v-select>
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label">Notes</label>
            <textarea v-model="form.notes" class="form-control" rows="3" placeholder="Enter notes"></textarea>
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label">Billing Address</label>
            <textarea v-model="form.billingAddress" class="form-control" rows="3" placeholder="Enter billing address"></textarea>
          </div>
          <div class="col-md-6 mb-6">
            <label class="form-label">Billing Email</label>
            <input v-model="form.billingEmail" type="email" class="form-control" placeholder="Enter billing email" />
          </div>
        </div>
      </form>
      <!--end::Form-->
    </div>
    <!--end::Card body-->
    <!--begin::Card footer-->
    <div class="card-footer d-flex justify-content-end py-6">
        <Link :href="`/client`">
            <button class="btn btn-light btn-active-light-primary me-2">Discard</button>
        </Link>
      <button type="submit" class="btn btn-primary" @click="submitForm">Save</button>
    </div>
    <!--end::Card footer-->
  </div>
</template>

<style scoped>
@import 'vue-select/dist/vue-select.css';
</style>
