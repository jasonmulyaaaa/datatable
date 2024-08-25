<script setup>
import { Head, Link } from '@inertiajs/vue3';

import DataTable from 'datatables.net-vue3';
import DataTablesCore from 'datatables.net-bs5';
import 'datatables.net-buttons-bs5';
import 'datatables.net-buttons/js/buttons.colVis.mjs';
import 'datatables.net-buttons/js/buttons.html5.mjs';
import 'datatables.net-buttons/js/buttons.print.mjs';
import {onBeforeMount, reactive} from "vue";

DataTable.use(DataTablesCore);

const TableOptions = reactive({});

onBeforeMount(async () => {
    try {
        const response = await axios.get('?dt_options');
        TableOptions.value = response.data;
        if (toolbar.value) {
            TableOptions.value.layout.top = toolbar;
        }
    } catch (error) {
        console.log(error);
    }
});
</script>

<template>
    <div class="card card-custom">
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title">
                <h3 class="card-label">Client Table</h3>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12" v-if="TableOptions.value">
                    <DataTable class="display table table-bordered table-hover table-checkable table-striped" id="TableIndexSalesOrder" :options="TableOptions.value">
                        <template #column-client_name="props">
                            <Link :href="`/client/${ props.rowData.id }`">
                                {{ props.cellData }}
                            </Link>
                        </template>
                    </DataTable>
                </div>
            </div>
        </div>
        <div class="card-footer d-flex">
            <Link  :href="`/client/create`">
                <button class="btn btn-light-primary font-weight-bold mr-2">New</button>
            </Link>
        </div>
    </div>

</template>

<style scoped>

</style>
