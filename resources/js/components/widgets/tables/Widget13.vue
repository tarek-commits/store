<template>
    <!--begin::Tables Widget 13-->
    <div :class="widgetClasses" class="card">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <div class="d-flex align-items-center search-card">
                <SearchBar @search="(value) => $emit('search', value)" />
                <span> <span>1</span> / 1 {{ getCurrentTab(enumName).head }} </span>
                <div class="footer">
                    <ControlPageBar />
                </div>
            </div>
            <div class="card-toolbar">
                <!--begin::Menu-->
                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                    <span class="svg-icon svg-icon-2">
                        <inline-svg :src="getAssetPath('media/icons/duotune/general/gen024.svg')" />
                    </span>
                </button>
                <CheckItems :enumName="enumName" />
                <!--end::Menu-->
            </div>
        </div>
        <!--end::Header-->

        <!--begin::Body-->
        <div class="card-body py-3">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table table-row-bordered table-row-gray-100 align-middle gs-0 gy-3">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fw-bold text-muted">
                            <th v-if="tableData?.tabs[currentTab.value]?.check" class="w-25px">
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" @change="
                                        checkedRows.length === 6
                                            ? (checkedRows.length = 0)
                                            : (checkedRows = [0, 1, 2, 3, 4, 5])
                                    " />
                                </div>
                            </th>
                            <template v-for="(title, index) in getLables(enumName)" :key="index">
                                <th v-show="title.show" :class="`min-w-${title.minWidth}px`">{{ title.title }}</th>
                            </template>
                        </tr>
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->
                    <tbody>
                        <template v-for="(item, index) in list" :key="index">
                            <tr>
                                <td v-if="getCurrentTab(enumName).check">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input widget-13-check" type="checkbox" :value="index"
                                            v-model="checkedRows" />
                                    </div>
                                </td>

                                <td>
                                    {{ item.name }}
                                </td>

                                <td>
                                    {{ item.code }}
                                </td>

                                <td>
                                    {{ item.address }}
                                </td>

                                <td>
                                    {{ item.no_of_sections }}
                                </td>

                                <td class="text-dark fw-bold text-hover-primary fs-6">
                                    {{ item.no_of_locations }}
                                </td>

                                <td>
                                    {{ item.warehouse_admin }}

                                </td>

                                <td>
                                    {{ item.contact_no }}

                                </td>
                                <td class="text-end">
                                    <a @click="$emit(action.emit, item.id)"
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                        v-for="action in getActions(enumName)">
                                        <span class="svg-icon svg-icon-3">
                                            <inline-svg :src="
                                                getAssetPath(
                                                    action.svg
                                                )
                                            " />
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        </template>
                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>
    <!--end::Tables Widget 13-->
</template>

<script lang="ts">
import { getAssetPath } from "@/core/helpers/assets";
import { defineComponent, ref, toRef } from "vue";
import CheckItems from "@/components/dropdown/CheckItems.vue";
import SearchBar from "@/components/widgets/failds/SearchBar.vue";

import { storeToRefs } from 'pinia';
import { useTablesData } from "../../../stores/tablesData";

export default defineComponent({
    name: "kt-widget-12",
    components: {
        CheckItems,
        SearchBar
    },
    props: {
        widgetClasses: String,
        enumName: String
    },
    setup(props) {
        const tablesData = useTablesData();
        const { getLables, getCurrentTab, getActions } = storeToRefs(tablesData)
        const checkedRows = ref<Array<number>>([]);
        const enumName = toRef(props, 'enumName');
        const list = [];
        return {
            list,
            checkedRows,
            getAssetPath,
            getLables,
            tablesData,
            getCurrentTab,
            getActions,
            enumName
        };
    },
});
</script>

<style lang="scss">
.search-card {
    span {
        color: #b8b8b8ee;

        span {
            color: #fff;
        }
    }
}
</style>
