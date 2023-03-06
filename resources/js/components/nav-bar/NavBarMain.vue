<template>
    <!--begin::Navs-->
    <div class="d-flex mt-6 mb-6 overflow-auto h-55px">
        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold flex-nowrap">
            <!--begin::Nav item-->
            <li class="nav-item" @click="selectTab(tab.value)" v-for="tab in getTabs(enumName)">
                <a class="nav-link text-active-primary me-6" :class="tab.value == getCurrentTab(enumName).value ? 'active' : ''" active-class="active">
                    {{ tab.title }}
                </a>
            </li>
            <!--end::Nav item-->
        </ul>
    </div>
    <!--begin::Navs-->
</template>

<script lang="ts">
import { defineComponent } from 'vue';
import { toRef } from 'vue';
import { storeToRefs } from 'pinia';
import { useTablesData } from "../../stores/tablesData";

export default defineComponent({
    name: 'page-nabar-main',
    props: {
        tabs: Object,
        currentTab: String,
        enumName: String
    },
    setup(props) {
        const enumName = toRef(props, 'enumName');
        const tablesData = useTablesData();
        const { getTabs, getCurrentTab } = storeToRefs(tablesData)
        function selectTab(tab) {
           tablesData.selectTab(enumName.value, tab);
        }
        return {
            enumName,
            selectTab,
            getCurrentTab,
            getTabs
        }
    }
});
</script>

<style lang="scss">
.nav {
    .nav-item {
        a {
            cursor: pointer;
        }
    }
}
</style>

