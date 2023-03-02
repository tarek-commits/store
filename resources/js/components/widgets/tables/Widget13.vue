<template>
    <!--begin::Tables Widget 13-->
    <div :class="widgetClasses" class="card">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
            <SearchBar @search="(value) => $emit('search', value)" />
            <div class="card-toolbar">
                <!--begin::Menu-->
                <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary"
                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">
                    <span class="svg-icon svg-icon-2">
                        <inline-svg :src="getAssetPath('media/icons/duotune/general/gen024.svg')" />
                    </span>
                </button>
                <Dropdown2></Dropdown2>
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
                            <th class="w-25px">
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" @change="
                                        checkedRows.length === 6
                                            ? (checkedRows.length = 0)
                                            : (checkedRows = [0, 1, 2, 3, 4, 5])
                                    " />
                                </div>
                            </th>
                            <template v-for="(title, index) in TableTitles">
                                <th v-show="title.show" :class="`min-w-${title.minWidth}px`">{{ title.title }}</th>
                            </template>
                        </tr>
                    </thead>
                    <!--end::Table head-->

                    <!--begin::Table body-->
                    <tbody>
                        <template v-for="(item, index) in list" :key="index">
                            <tr>
                                <td>
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
                                    <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <span class="svg-icon svg-icon-3">
                                            <inline-svg :src="
                                                getAssetPath(
                                                    'media/icons/duotune/general/gen019.svg'
                                                )
                                            " />
                                        </span>
                                    </a>

                                    <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <span class="svg-icon svg-icon-3">
                                            <inline-svg :src="
                                                getAssetPath('media/icons/duotune/art/art005.svg')
                                            " />
                                        </span>
                                    </a>

                                    <a class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                        <span class="svg-icon svg-icon-3">
                                            <inline-svg :src="
                                                getAssetPath(
                                                    'media/icons/duotune/general/gen027.svg'
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
import Dropdown2 from "@/components/dropdown/Dropdown2.vue";
import SearchBar from "@/components/widgets/failds/SearchBar.vue";

export default defineComponent({
    name: "kt-widget-12",
    components: {
        Dropdown2,
        SearchBar
    },
    props: {
        widgetClasses: String,
        TableTitles: Array,
        TableOption: Object,
    },
    setup(props, { emit }) {
        const checkedRows = ref<Array<number>>([]);
        const searchText = ref<String>('');
        const TableTitles = toRef(props, 'TableTitles');
        const TableOption = toRef(props, 'TableOption');
        const list = [
            {
                name: 'Adwait Enterpr',
                code: 'AD123',
                address: 'Adwait Warehouse SG',
                no_of_sections: '2',
                no_of_locations: '72',
                warehouse_admin: 'Adwait Moghe',
                contact_no: '9702004577'
            }
        ];

        return {
            list,
            checkedRows,
            getAssetPath,
            TableTitles
        };
    },
});
</script>
