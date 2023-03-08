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
        async getWarehouses(limit: number, page: number) {
            const res = await ApiService.get(`/warehouses?limit=${limit}&page=${page}`);
            if (res.status == 200) {
                this._warehouses = res.data;
            } else {
                console.log('some thing went wrong');
            }
        },
        async addWarehouse(warehouse: object) {
            var data = '';
            let vm = this;
            await ApiService.post("/warehouses", warehouse).then((res) => {
                data = res;
                vm.getWarehouses(10, 1);
            })
                .catch((err) => {
                    data = err.response;
                });
            return data
        },
        async deleteWarehouse(id: number, index: number) {
            var data = '';
            let vm = this;
            await ApiService.delete(`/warehouses/${id}`,).then((res) => {
                data = res;
                vm.deleteItem(id);
            })
                .catch((err) => {
                    console.log(err);
                })
            return data;
        },
        deleteItem(id: number) {
            this._warehouses.count = this._warehouses.count-1;
           return this._warehouses.warehouse = this._warehouses.warehouse.filter((item) => {
            return item.id !== id;
           })
        }
    }
});
