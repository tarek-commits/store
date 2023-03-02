<template>
    <!--begin::Navs-->
    <div class="d-flex mt-6 mb-6 overflow-auto h-55px">
        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold flex-nowrap">
            <!--begin::Nav item-->
            <li class="nav-item" @click="selectTab(tab.title)" v-for="tab in tabs">
                <a class="nav-link text-active-primary me-6" :class="tab.title == currentTab ? 'active' : ''" active-class="active">
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

export default defineComponent({
    name: 'page-nabar-main',
    props: {
        tabs: Array,
        currentTab: String
    },
    setup(props, {emit}) {
        const tabs = toRef(props, 'tabs');
        const currentTab = toRef(props, 'currentTab');
        function selectTab(tab) {
            emit('selectTab', tab);
        }
        return {
            tabs,
            currentTab,
            selectTab
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

