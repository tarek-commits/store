import { defineStore } from 'pinia';
import { ref } from 'vue';
import ApiService from "@/core/services/ApiService";

export const useWarehouses = defineStore("warehouses", {
    state: () => ({
        _warehouses: {}
    }),
    getters: {
        // getWarehouses(state) {
        //      state._warehouses
        // },
        // getWarehousesCount(state) {
        //      return state._warehouses
        // }
    },
    actions: {
       async getWarehouses(limit?:number, page?: number) {
            limit ? limit : 10;
            page ? page : 1;
            const res = await ApiService.get("/warehouses");
            if(res.status == 200) {
                this._warehouses = res.data;
            } else {
                console.log('some thing went wrong');
            }
        }
    }
});
