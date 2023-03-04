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
    head: 'All Locations'
}
const areas = {
    title: 'Areas',
    value: 'AREAS',
    head: 'Areas'
}

const racks = {
    title: 'Racks',
    value: 'RACKS',
    head: 'Racks'
}

const locations = {
    title: 'Locations',
    value: 'LOCATIONS',
    head: 'Locations'
}

const tabs = [
    all,
    areas,
    racks,
    locations
]





const WarehouseFacilitiesEnum = Object.freeze({
    LABELS: labels,
    TITLE: "Warehouses Facilities",
    TABS: {
        TABS: tabs,
        ALL: all,
        AREAS: areas,
        RACKS: racks,
        LOCATIONS: locations
    }
});

export default WarehouseFacilitiesEnum;
