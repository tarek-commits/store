<template>
    <NavBarMain :currentTab="currentTab" :tabs="tabs" @selectTab="(tab) => (currentTab = tab)" />
    <TablesWidget13 @search="search" :TableTitles="TableTitles" :TableOption="TableOption" />
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import NavBarMain from "@/components/nav-bar/NavBarMain.vue";
import TablesWidget13 from "@/components/widgets/tables/Widget13.vue";
import { ref } from 'vue';

export default defineComponent({
    name: 'warehouses-facilities',
    components: {
        NavBarMain,
        TablesWidget13
    },
    setup() {
        const tabs = ref([
            {
                title: 'All'
            },
            {
                title: 'Areas'
            },
            {
                title: 'Racks',
            },
            {
                title: 'Locations',
            }
        ]);

        const TableTitles = ref<Array<object>>([
            {
                title: 'Name',
                show: true,
                minWidth: '100'
            },
            {
                title: 'Code',
                show: true,
                minWidth: '100'
            },
            {
                title: 'Address',
                show: true,
                minWidth: '100'
            },
            {
                title: 'No. of Sections',
                show: true,
                minWidth: '100'
            },
            {
                title: 'No. of Locations',
                show: true,
                minWidth: '100'
            },
            {
                title: 'Warehouse Admin',
                show: true,
                minWidth: '100'
            },
            {
                title: 'Contact No.',
                show: true,
                minWidth: '100'
            },
            {
                title: 'Actions',
                show: true,
                minWidth: '100'
            }
        ]);

        const TableOption = ref<object>({
            view: true,
            edit: true,
            delete: true
        });

        const currentTab = ref(tabs.value[0].title);

        function search(value: String): void {
            // fiter data and show again
        }

        return {
            currentTab,
            tabs,
            search,
            TableTitles,
            TableOption
        }
    },
})
</script>
