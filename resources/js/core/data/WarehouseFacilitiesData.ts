import tableActions from './tableActions';
interface IWarehouseFacilitiesData {
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
}

interface Label {
    title: string;
    show: boolean;
    minWidth: string
}
const labels = {
    ALL: [
        {
            title: 'Location Name',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Size',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Height (cm)',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Width (cm)',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Length (cm)',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Actions',
            show: true,
            minWidth: '100'
        },
    ],
    AREAS: [
        {
            title: 'Area Name',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Category',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Area Priority',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Total Locations',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Height (cm)',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Width (cm)',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Length (cm)',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Actions',
            show: true,
            minWidth: '100'
        },
    ],
    RACKS: [
        {
            title: 'Rack Code',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Rack Name',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Area',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Category',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Rack Priority',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Total Locations',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Size',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Height (cm)',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Width (cm)',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Length (cm)',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Actions',
            show: true,
            minWidth: '100'
        },
    ],
    LOCATIONS: [
        {
            title: 'Location Name',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Location Type',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Shelf/Pallet',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Area',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Category',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Size',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Height (cm)	',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Width (cm)',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Length (cm)',
            show: true,
            minWidth: '100'
        },
        {
            title: 'Status',
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



const all = {
    title: 'All',
    value: 'ALL',
    head: 'All Locations',
    check: true
}
const areas = {
    title: 'Areas',
    value: 'AREAS',
    head: 'Areas',
    check: true
}

const racks = {
    title: 'Racks',
    value: 'RACKS',
    head: 'Racks',
    check: true
}

const locations = {
    title: 'Locations',
    value: 'LOCATIONS',
    head: 'Locations',
    check: true
}

const tabs = [
    all,
    areas,
    racks,
    locations
]

const actions = {
    ALL: [
        {
            svg: tableActions.VIEW,
            emit: 'viewWarehouse'
        },
        {
            svg: tableActions.EDIT,
            emit: 'editWarehouse'
        },
        {
            svg: tableActions.DELETE,
            emit: 'deleteWarehouse'
        }
    ],
    AREAS: [
        {
            svg: tableActions.VIEW,
            emit: 'viewWarehouse'
        },
        {
            svg: tableActions.EDIT,
            emit: 'editWarehouse'
        },
        {
            svg: tableActions.DELETE,
            emit: 'deleteWarehouse'
        }
    ],
    RACKS: [
        {
            svg: tableActions.VIEW,
            emit: 'viewWarehouse'
        },
        {
            svg: tableActions.EDIT,
            emit: 'editWarehouse'
        },
        {
            svg: tableActions.DELETE,
            emit: 'deleteWarehouse'
        }
    ],
    LOCATIONS: [
        {
            svg: tableActions.VIEW,
            emit: 'viewWarehouse'
        },
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

const WarehouseFacilitiesData: IWarehouseFacilitiesData = {
    labels: labels,
    title: "Warehouses Facilities",
    tabs: {
        tabs: tabs,
        ALL: all,
        AREAS: areas,
        RACKS: racks,
        LOCATIONS: locations
    },
    actions: actions,
    currentTab: all
}

export type { IWarehouseFacilitiesData };
export default WarehouseFacilitiesData;
