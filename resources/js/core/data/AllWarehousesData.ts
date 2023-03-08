import tableActions from '../enums/TableActionIconsEnum';
interface AllWarehousesData {
    labels: Object;
    title: string;
    tabs: Object;
    actions: Object;
    currentTab: Tab
  }

  interface Tab {
    title: string,
    value: string,
    head: string,
    check: boolean,
    add: Actions
  }

  interface Actions {
    show: boolean,
    emit: string,
    label: string
  }

  interface Label  {
    title: string;
    show: boolean;
    minWidth: string
  }
const labels = {
    WAREHOUSE_DETAILS: [
        {
            title: 'Name',
            show: true,
            minWidth: '100',
            name: 'name'
        },
        {
            title: 'Code',
            show: true,
            minWidth: '100',
            name: 'code'
        },
        {
            title: 'Address',
            show: true,
            minWidth: '100',
            name: 'address'
        },
        // {
        //     title: 'No. of Sections',
        //     show: true,
        //     minWidth: '100'
        // },
        // {
        //     title: 'No. of Locations',
        //     show: true,
        //     minWidth: '100'
        // },
        // {
        //     title: 'Warehouse Admin',
        //     show: true,
        //     minWidth: '100'
        // },
        {
            title: 'Contact No.',
            show: true,
            minWidth: '100',
            name: 'contact_num'
        }
    ]
};

const actions = {
    WAREHOUSE_DETAILS: [
        {
            svg: tableActions.EDIT,
            emit: 'editWarehouse'
        },
        {
            svg: tableActions.DELETE,
            emit: 'deleteWarehouse'
        }
    ],
}

const WarehouseDetailsTabs =
{
    title: 'Warehouse Details',
    value: 'WAREHOUSE_DETAILS',
    head: 'Warehouses',
    check: true,
    add: {
        show: true,
        emit: 'addWarehouse',
        label: 'Add'
    }
}

const tabs = [
    WarehouseDetailsTabs
]

const AllWarehousesData: AllWarehousesData = {
    labels: labels,
    title: "Warehouses",
    tabs: {
        tabs: tabs,
        WAREHOUSE_DETAILS: WarehouseDetailsTabs
    },
    actions: actions,
    currentTab: WarehouseDetailsTabs
}

export type { AllWarehousesData };
export default AllWarehousesData;
