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

const WarehouseDetailsTabs =
{
    title: 'Warehouse Details',
    value: 'WAREHOUSE_DETAILS',
    head: 'Warehouses'
}

const tabs = [
    WarehouseDetailsTabs
]

const AllWarehousesEnum = Object.freeze({
    LABELS: labels,
    TITLE: "Warehouses",
    TABS: {
        TABS: tabs,
        WAREHOUSE_DETAILS: WarehouseDetailsTabs
    }
});

export default AllWarehousesEnum;
