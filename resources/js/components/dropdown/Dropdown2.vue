<template>
    <!--begin::Menu 2-->
    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semobold w-200px"
        data-kt-menu="true">
        <!--begin::Menu item-->
        <div class="menu-item px-3">
            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                Quick Actions
            </div>
        </div>
        <!--end::Menu item-->

        <!--begin::Menu separator-->
        <div class="separator mb-3 opacity-75"></div>
        <!--end::Menu separator-->

        <!--begin::Menu item-->
        <div class="menu-item px-3" v-for="(title, index) in labels">
            <div class="form-check form-check-sm form-check-custom form-check-solid">
                <a class="menu-link px-3"> <input class="form-check-input" @change="toggleLabel(index)" :checked="title.show" type="checkbox" /> <label for="">{{ title.title }}</label> </a>
            </div>
        </div>
        <!--end::Menu item-->


        <!--begin::Menu separator-->
        <div class="separator mt-3 opacity-75"></div>
        <!--end::Menu separator-->

    </div>
    <!--end::Menu 2-->
</template>

<script lang="ts">
import { defineComponent, toRef, computed } from "vue";
import { storeToRefs } from 'pinia'
import { useTablesData } from "../../stores/tablesData";

export default defineComponent({
    name: "check-items",
    components: {},
    props: {
        enumName: String
    },

    setup(props) {
        const tablesData = useTablesData();
        const { getLables } = storeToRefs(tablesData);
        const labels = computed(() => tablesData.getLables(enumName.value));
        const enumName = toRef(props, 'enumName');
        function toggleLabel(index) {
            tablesData.toggleLabel(enumName.value, index);
        }
        return {
            tablesData,
            getLables,
            enumName,
            toggleLabel,
            labels
        }
    }
});
</script>

<style lang="scss">
    .menu {
        .menu-item {
            label {
                margin-left: 10px;
            }
        }
    }
</style>
