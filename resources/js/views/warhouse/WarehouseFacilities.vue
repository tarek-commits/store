<template>
    <NavBarMain :enumName="enumName"></NavBarMain>
    <TablesWidget13 :enumName="enumName"></TablesWidget13>
    <ControlPageBar :enumName="enumName"></ControlPageBar>
    <AddModal></AddModal>
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import NavBarMain from "@/components/nav-bar/NavBarMain.vue";
import TablesWidget13 from "@/components/widgets/tables/Widget13.vue";
import ControlPageBar from "@/components/nav-bar/ControlPageBar.vue";
import AddModal from '../../components/modals/forms/AddModal.vue';
import { ref } from 'vue';

export default defineComponent({
    name: 'warehouses-facilities',
    components: {
        NavBarMain,
        TablesWidget13,
        ControlPageBar,
        AddModal
    },
    setup() {
        const enumName = ref('WarehouseFacilitiesData');
        return {
            enumName
        }
    },
})
</script>
