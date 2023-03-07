<template>
    <NavBarMain :enumName="enumName" />
    <TablesWidget13 :data="warehouses" :enumName="enumName" />
    <ControlPageBar :enumName="enumName" />
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import NavBarMain from "@/components/nav-bar/NavBarMain.vue";
import TablesWidget13 from "@/components/widgets/tables/Widget13.vue";
import ControlPageBar from "@/components/nav-bar/ControlPageBar.vue";
import { ref, computed, onMounted } from 'vue';

import { storeToRefs } from 'pinia'
import { useWarehouses } from "../../stores/warehouses";

export default defineComponent({
    name: 'all-warehouses',
    components: {
        NavBarMain,
        TablesWidget13,
        ControlPageBar
    },
    setup() {
        const enumName = ref('AllWarehousesData');
        const warehousesstore = useWarehouses();
        const { _warehouses } = storeToRefs(warehousesstore);
        const warehouses = computed(() => warehousesstore._warehouses);
        onMounted( () => {
            warehousesstore.getWarehouses();
        });
        return {
            enumName,
            warehouses,
        }
    },
})
</script>
