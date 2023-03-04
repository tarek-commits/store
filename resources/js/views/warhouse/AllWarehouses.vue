<template>
    <NavBarMain :currentTab="currentTab" :tabs="tabs" @selectTab="(tab) => (currentTab = tab)" />
    <TablesWidget13 :currentTab="tabs[currentTab]" @viewWarehouse="viewWarehouse" @search="search" :tableTitles="tableTitles" :tableOption="tableOption" />
    <ControlPageBar @selectPage="selectPage" @selectItemsPerPage="selectItemsPerPage" />
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import NavBarMain from "@/components/nav-bar/NavBarMain.vue";
import TablesWidget13 from "@/components/widgets/tables/Widget13.vue";
import ControlPageBar from "@/components/nav-bar/ControlPageBar.vue";
import { ref } from 'vue';
import AllWarehousesEnum from '../../core/enums/AllWarehousesEnum';
import TableActionIconsEnum from '../../core/enums/TableActionIconsEnum';

export default defineComponent({
    name: 'all-warehouses',
    components: {
        NavBarMain,
        TablesWidget13,
        ControlPageBar
    },
    setup() {
        const tabs = ref<object>(AllWarehousesEnum.TABS);

        const tableTitles = ref<object>(AllWarehousesEnum);

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

        const currentTab = ref(tabs.value.WAREHOUSE_DETAILS.value);

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
