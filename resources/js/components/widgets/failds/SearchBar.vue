<template>
    <div class="search-bar d-flex align-items-center">
        <span class="svg svg-icon"></span>
        <input @keyup="$emit('search', searchText)" v-model="searchText" type="text" name="search">
    </div>
</template>

<script lang="ts">
import { defineComponent, ref } from 'vue';
export default defineComponent({
    name: 'failds-search-bar',
    setup() {
        const searchText = ref<String>('');
        return {
            searchText
        }
    }
})
</script>

<style lang="scss">
.search-bar {
    input {
        display: block;
        width: 100%;
        height: calc(1.9rem + 2px);
        font-size: 13px;
        line-height: 1.5;
        background-color: #fff;
        background-clip: padding-box;
        border: 0.8px solid #bdc0e5;
        transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        border-radius: 0;
        min-height: 32px;
        outline: none;
        &:hover{
            border-color:#333cad;
        }
    }
}
</style>
