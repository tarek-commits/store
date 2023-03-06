<template>
    <NavBarMain :enumName="enumName" />
    <TablesWidget13 :enumName="enumName" />
    <ControlPageBar :enumName="enumName"   />
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import NavBarMain from "@/components/nav-bar/NavBarMain.vue";
import TablesWidget13 from "@/components/widgets/tables/Widget13.vue";
import ControlPageBar from "@/components/nav-bar/ControlPageBar.vue";
import { ref } from 'vue';


export default defineComponent({
    name: 'all-warehouses',
    components: {
        NavBarMain,
        TablesWidget13,
        ControlPageBar
    },
    setup() {
        const enumName = ref('AllWarehousesData');

        return {
            enumName
        }
    },
})
</script>
