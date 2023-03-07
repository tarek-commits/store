import { ref } from "vue";
import { defineStore } from "pinia";
import AllWarehousesData from "../core/data/AllWarehousesData";
import WarehouseFacilitiesData from "../core/data/WarehouseFacilitiesData";


export const useTablesData = defineStore("tablesData", {
    state: () => ({
        AllWarehousesData: AllWarehousesData,
        WarehouseFacilitiesData: WarehouseFacilitiesData
    }),
    getters: {
        getLables: (state) => {

            return (enumName) => state[enumName]?.labels[state[enumName].currentTab.value];
        },
        getTabs: (state) => {
            return (enumName) => state[enumName]?.tabs.tabs;
        },
        getCurrentTab: (state) => {
            return (enumName) => state[enumName]?.currentTab;
        },
        getActions: (state) => {
            return (enumName) => state[enumName]?.actions[state[enumName].currentTab.value];
        },
    },
    actions: {
        // toggle label of table
        toggleLabel(enumName, index) {
            return this[enumName].labels[this[enumName].currentTab.value][index].show = !this[enumName].labels[this[enumName].currentTab.value][index].show;
        },
        selectTab(enumName, value) {
            console.log(this[enumName].currentTab)
            return this[enumName].currentTab = this[enumName].tabs[value];
        }
    }
});
