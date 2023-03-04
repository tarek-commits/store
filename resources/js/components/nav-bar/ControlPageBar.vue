<template>
    <div class="control-page-bar d-flex align-items-center">
        <div class="item">
            <label>Item Per Page</label>
            <select @change="selectItemsPerPage($event)">
                <option :value="item" v-for="item in itemPerPage">{{ item }}
                </option>
            </select>
        </div>
        <div class="item">
            <label>Go To Page No.</label>
            <input v-model="pageNumber" type="number">
            <button @click="$emit('selectPage', pageNumber)"><span class="svg svg-icon"><inline-svg
                        :src="getAssetPath('media/icons/svg/arrow-right-solid.svg')" /></span></button>
        </div>
    </div>
</template>

<script lang="ts">
import { defineComponent, ref } from 'vue';
import { getAssetPath } from '@/core/helpers/assets'
import ItemPerPageEnum from '@/core/enums/ItemPerPageEnum.ts'
export default defineComponent({
    name: 'ControlPageBar ',
    setup(props, { emit }) {
        const itemPerPage = ref<any>(ItemPerPageEnum);
        const currentItemsPerPage = ref<number>(ItemPerPageEnum[0]);
        const pageNumber = ref<number>()
        function selectItemsPerPage(event) {
            currentItemsPerPage.value = event.target.value;
            emit('selectItemsPerPage', event.target.value);
        }
        return {
            getAssetPath,
            itemPerPage,
            currentItemsPerPage,
            selectItemsPerPage,
            pageNumber
        }
    }
})
</script>

<style lang="scss">
.control-page-bar {
    margin: 18px 0px;

    .item {
        display: flex;
        align-items: center;

        &:first-of-type {
            margin: 0px;
        }

        margin-left: 30px;

        input {
            margin-left: 10px;
            outline: none;
            user-select: none;
            border: 0.8px solid #bdc0e5;
            height: 24px;
            width: 56px;
            border-radius: 2px 0 0 2px;
            outline: none;
            padding-left: 5px;
            padding-right: 5px;

            &::-webkit-outer-spin-button,
            &::-webkit-inner-spin-button {
                /* display: none; <- Crashes Chrome on hover */
                -webkit-appearance: none;
                margin: 0;
                /* <-- Apparently some margin are still there even though it's hidden */
            }
        }

        button {
            height: 24px;
            border: 0.8px solid #bdc0e5;
            border-left-width: 0;
            border-radius: 0 2px 2px 0;
            padding: 2px 6px;
        }

        select {
            background-color: #fff;
            min-height: 24px;
            align-items: center;
            border: 0.8px solid #bdc0e5;
            height: 24px;
            width: 74px;
            border-radius: 2px 0 0 2px;
            outline: none;
            line-height: 3;
            min-width: 75px;
            margin-left: 10px;

            option {
                &.active {
                    background-color: var(--bs-text-primary) !important;
                    color: #fff;
                }

                &:hover {
                    background-color: var(--bs-text-primary) !important;
                }
            }
        }
    }
}
</style>
