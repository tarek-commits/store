<template>
    <NavBarMain :currentTab="currentTab" :tabs="tabs" @selectTab="(tab) => (currentTab = tab)" />
    <TablesWidget13 :currentTab="tabs[currentTab]" @viewWarehouse="viewWarehouse" @search="search" :tableTitles="tableTitles" :tableOption="tableOption" />
    <ControlPageBar @selectPage="selectPage" @selectItemsPerPage="selectItemsPerPage" />
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import NavBarMain from "@/components/nav-bar/NavBarMain.vue";
import TablesWidget13 from "@/components/widgets/tables/Widget13.vue";
import ControlPageBar from "@/components/nav-bar/ControlPageBar.vue"
import { ref } from 'vue';
import WarehouseFacilitiesEnum from '../../core/enums/WarehouseFacilitiesEnum';
import TableActionIconsEnum from '../../core/enums/TableActionIconsEnum';

export default defineComponent({
    name: 'warehouses-facilities',
    components: {
        NavBarMain,
        TablesWidget13,
        ControlPageBar
    },
    setup() {
        const tabs = ref<object>(WarehouseFacilitiesEnum.TABS);

        const tableTitles = ref<object>(WarehouseFacilitiesEnum);

        function viewWarehouse(id) {
            console.log(id);
        }

        const tableOption = ref<object>({
            actions: [
                {
                    svg: TableActionIconsEnum.VIEW,
                    emit: 'viewWarehouse'
                },
                {
                    svg: TableActionIconsEnum.EDIT,
                    emit: 'editWarehouse'
                },
                {
                    svg: TableActionIconsEnum.DELETE,
                    emit: 'deleteWarehouse'
                }
            ],
            check: {
                show: false,
            }
        });

        const currentTab = ref(tabs.value.ALL.value);

        function search(value: String): void {
            // fiter data and show again
        }

        function selectItemsPerPage(value: number): void {
            console.log(value);
        }

        function selectPage(value: number): void {
            console.log(value);
        }

        return {
            currentTab,
            tabs,
            search,
            tableTitles,
            tableOption,
            viewWarehouse,
            selectItemsPerPage,
            selectPage
        }
    },
})
</script>
