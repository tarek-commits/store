import TableActionIconsEnum from './TableActionIconsEnum';
const labels = {
    WAREHOUSE_DETAILS: [
        {
            title: 'Name',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Code',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Address',
            show: true,
            minWidth: '100'
        },
        {
            title: 'No. of Sections',
            show: true,
            minWidth: '100'
        },
        {
            title: 'No. of Locations',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Warehouse Admin',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Contact No.',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Actions',
            show: true,
            minWidth: '100'
        }
    ]
};
import { ref } from 'vue';
const actions = {
    WAREHOUSE_DETAILS: [
        {
            svg: TableActionIconsEnum.VIEW,
            emit: 'viewWarehouse'
        },
        {
            svg: TableActionIconsEnum.EDIT,
            emit: 'editWarehouse'
        },
        {
            svg: TableActionIconsEnum.DELETE,
            emit: 'deleteWarehouse'
        }
    ],
}

const WarehouseDetailsTabs =
{
    title: 'Warehouse Details',
    value: 'WAREHOUSE_DETAILS',
    head: 'Warehouses',
    check: true
}

const tabs = [
    WarehouseDetailsTabs
]

const AllWarehousesEnum = Object.freeze({
    labels: labels,
    titles: "Warehouses",
    tabs: {
        tabs: tabs,
        WAREHOUSE_DETAILS: WarehouseDetailsTabs
    },
    actions: actions,
    currentTab: WarehouseDetailsTabs
});

export default AllWarehousesEnum;
