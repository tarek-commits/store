<template>
    <NavBarMain :enumName="enumName"></NavBarMain>
    <TablesWidget13 @addWarehouse="showAddModal()" @deleteWarehouse="deleteWarehouse" :data="warehouses" :enumName="enumName"></TablesWidget13>
    <ControlPageBar :enumName="enumName"> </ControlPageBar>
    <AddWarehouseModal ref="modalRefComponent"   :enumName="enumName"></AddWarehouseModal>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import NavBarMain from "@/components/nav-bar/NavBarMain.vue";
import TablesWidget13 from "@/components/widgets/tables/Widget13.vue";
import ControlPageBar from "@/components/nav-bar/ControlPageBar.vue";
import AddWarehouseModal from '../../components/modals/forms/AddWarehouseModal.vue';
import { ref, computed, onMounted } from 'vue';

import { showModal } from "@/core/helpers/dom";

import { storeToRefs } from 'pinia'
import { useWarehouses } from "../../stores/warehouses";
import Swal from "sweetalert2";

export default defineComponent({
    name: 'all-warehouses',
    components: {
        NavBarMain,
        TablesWidget13,
        ControlPageBar,
        AddWarehouseModal
    },
    setup() {
        const enumName = ref('AllWarehousesData');
        const warehousesstore = useWarehouses();
        const { _warehouses } = storeToRefs(warehousesstore);
        const warehouses = computed(() => warehousesstore._warehouses);
        const modalRefComponent = ref(null);
        onMounted( () => {
            warehousesstore.getWarehouses(10,1);
        });
        function showAddModal() {
            showModal(modalRefComponent.value.addModalRef);
        };
        async function deleteWarehouse(data) {
            const res = await warehousesstore.deleteWarehouse(data.id, data.index);
            if(res.status == 200) {
                Swal.fire({
                    text: `${res.data.message}`,
                    icon: "success",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    heightAuto: false,
                    customClass: {
                        confirmButton: "btn btn-primary",
                    }
                })
            } else {
                Swal.fire({
                    text: `some thing went wrong please try again`,
                    icon: "error",
                    buttonsStyling: false,
                    confirmButtonText: "Ok, got it!",
                    heightAuto: false,
                    customClass: {
                    confirmButton: "btn btn-primary",
                    },
                })
            }
        }
        return {
            enumName,
            warehouses,
            showAddModal,
            modalRefComponent,
            deleteWarehouse
        }
    },
})
</script>
