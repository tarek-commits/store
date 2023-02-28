import { getAssetPath } from "@/core/helpers/assets";

export interface MenuItem {
  heading?: string;
  sectionTitle?: string;
  route?: string;
  pages?: Array<MenuItem>;
  svgIcon?: string;
  fontIcon?: string;
  sub?: Array<MenuItem>;
}

const MainMenuConfig: Array<MenuItem> = [
  {
    pages: [
        {
            heading: "Account Settings",
            route: "/1",
            svgIcon: getAssetPath("media/icons/svg/sliders-solid.svg"),
            fontIcon: "bi-app-indicator"
        },
      {
        heading: "dashboard",
        route: "/dashboard",
        svgIcon: getAssetPath("media/icons/duotune/art/art002.svg"),
        fontIcon: "bi-app-indicator",
      },
      // {
      //   heading: "layoutBuilder",
      //   route: "/builder",
      //   svgIcon: getAssetPath("media/icons/duotune/general/gen019.svg"),
      //   fontIcon: "bi-layers",
      // },
    ],
  },
  {
    pages: [
      {
        sectionTitle: "Warehouse",
        route: "/warhouse",
        svgIcon: getAssetPath("media/icons/svg/warehouse-solid.svg"),
        fontIcon: "bi-archive",
        sub: [
          {
            heading: "Overview",
            route: "/warhouse/overview",
          },
          {
            heading: "UDM",
            route: "/warhouse/udm",
          },
          {
            heading: "Order Bins",
            route: "/warhouse/order-bins",
          },
          {
            heading: "Packing Material",
            route: "/warhouse/carriers",
          },
          {
            heading: "Carriers",
            route: "/warhouse/carriers",
          },
          {
            heading: "Seller Logistic Partners",
            route: "/warhouse/seller-logistic-partners",
          },
          {
            heading: "Timeslots",
            route: "/warhouse/timeslots",
          },
          {
            heading: "Email Event",
            route: "/warhouse/email-event",
          },
          {
            heading: "Bulk Activities",
            route: "/warhouse/bulk-activities",
          }
        ]
      },
      {
      sectionTitle: "Customers",
        route: "/customers",
        svgIcon: getAssetPath("media/icons/svg/users-solid.svg"),
        fontIcon: "bi-archive",
        sub: [
          {
            heading: "Customers List",
            svgIcon: getAssetPath("media/icons/svg/users-solid.svg"),
            route: "/customers/list",
          },
          {
            heading: "Communications",
            route: "/customers/communications",
          },
          {
            heading: "Retail Store",
            route: "/customers/retail-store",
          },
          {
            heading: "Accounting Tools",
            route: "/customers/accounting-tools",
          },
          {
            heading: "Bulk Activities",
            route: "/customers/bulk-activities",
          },
        ]
      },
      {
        sectionTitle: "Inventory",
        route: "/inventory",
        svgIcon: getAssetPath("media/icons/svg/boxes-stacked-solid.svg"),
        fontIcon: "bi-archive",
        sub: [
          {
            heading: "Product",
            route: "/inventory/product",
          },
          {
            heading: "Kit Product",
            route: "/inventory/kit-product",
          },
          {
            heading: "Top Selling",
            route: "/inventory/top-selling",
          },
          {
            heading: "Stock Take",
            route: "/inventory/stock-take",
          },
          {
            heading: "Stock Take Approval",
            route: "/inventory/stock-take-approval",
          },
          {
            heading: "Stock Adjustment",
            route: "/inventory/stock-adjustment",
          },
          {
            heading: "Stock Transfer",
            route: "/inventory/stock-transfer",
          },
          {
            heading: "Pick Face Replenishment",
            route: "/inventory/pick-face-replenishment",
          },
          {
            heading: "Batch Management",
            route: "/inventory/batch-management",
          },
          {
            heading: "Bulk Activities",
            route: "/inventory/bulk-activities",
          },

          {
            heading: "Category Management",
            route: "/inventory/category-management",
          },
          {
            heading: "Brand Management",
            route: "/inventory/brand-management",
          },
        ]
      },
      {
        sectionTitle: "Inbound",
        route: "/inbound",
        svgIcon: getAssetPath("media/icons/svg/file-import-solid.svg"),
        fontIcon: "bi-archive",
        sub: [
          {
            heading: "Purches Order",
            route: "/inbound/purches-order",
          },
          {
            heading: "Goods Received",
            route: "/inbound/goods-received",
          },
          {
            heading: "Count & QC",
            route: "/inbound/count-qc",
          },
          {
            heading: "Put Away",
            route: "/inbound/put-away",
          },
          {
            heading: "Bulk Activities",
            route: "/inbound/bulk-activities",
          },
        ]
      },
      {
        sectionTitle: "Reports",
        route: "/reports",
        svgIcon: getAssetPath("media/icons/svg/chart-pie-solid.svg"),
        fontIcon: "bi-archive",
        sub: [
          {
            heading: "Reports Management",
            route: "/reports/reports-management",
          },
        ]
      },
      {
        sectionTitle: "Suppliers",
        route: "/suppliers",
        svgIcon: getAssetPath("media/icons/svg/truck-fast-solid.svg"),
        fontIcon: "bi-archive",
        sub: [
          {
            heading: "All",
            route: "/suppliers/all",
          },
          {
            heading: "Bulk Activities",
            route: "/suppliers/bulk-activities",
          }
        ]
      },
      {
        sectionTitle: "Orders",
        route: "/orders",
        svgIcon: getAssetPath("media/icons/svg/layer-group-solid.svg"),
        fontIcon: "bi-archive",
        sub: [
          {
            heading: "All",
            route: "/1",
          },
          {
            heading: "New",
            route: "/1",
          },
          {
            heading: "Pick",
            route: "/1",
          },
          {
            heading: "Pack",
            route: "/2",
          },
          {
            heading: "Dispatch",
            route: "/2",
          },
          {
            heading: "Self Collection",
            route: "/2",
          },
          {
            heading: "Compeleted",
            route: "/2",
          },
          {
            heading: "Return",
            route: "/2",
          },
          {
            heading: "Problem",
            route: "/2",
          },
          {
            heading: "On-Hold",
            route: "/2",
          },
          {
            heading: "Cancelled",
            route: "/2",
          },
          {
            heading: "Bulk Activities",
            route: "/2",
          },
        ]
      },
      {
        sectionTitle: "Dispatch",
        route: "/dispatch",
        svgIcon: getAssetPath("media/icons/svg/file-export-solid.svg"),
        fontIcon: "bi-archive",
        sub: [
          {
            heading: "Dispatch Order",
            route: "/1",
          },
          {
            heading: "Manifest",
            route: "/1",
          },
          {
            heading: "Unsuccessful Delivery",
            route: "/1",
          },
          {
            heading: "Bulk Activities",
            route: "/1",
          },
        ]
      },
      {
        sectionTitle: "Actions",
        route: "/actions",
        svgIcon: getAssetPath("media/icons/svg/ellipsis-solid.svg"),
        fontIcon: "bi-archive",
        sub: [
          {
            heading: "Modify Batch & Expiry Date",
            route: "/1",
          },
        ]
      }
    ]
  },
  // {
  //   heading: "craft",
  //   route: "/crafted",
  //   pages: [
  //     {
  //       sectionTitle: "pages",
  //       route: "/pages",
  //       svgIcon: getAssetPath("media/icons/duotune/general/gen022.svg"),
  //       fontIcon: "bi-archive",
  //       sub: [
  //         {
  //           sectionTitle: "profile",
  //           route: "/profile",
  //           sub: [
  //             {
  //               heading: "profileOverview",
  //               route: "/crafted/pages/profile/overview",
  //             },
  //             {
  //               heading: "projects",
  //               route: "/crafted/pages/profile/projects",
  //             },
  //             {
  //               heading: "campaigns",
  //               route: "/crafted/pages/profile/campaigns",
  //             },
  //             {
  //               heading: "documents",
  //               route: "/crafted/pages/profile/documents",
  //             },
  //             {
  //               heading: "connections",
  //               route: "/crafted/pages/profile/connections",
  //             },
  //             {
  //               heading: "activity",
  //               route: "/crafted/pages/profile/activity",
  //             },
  //           ],
  //         },
  //         {
  //           sectionTitle: "wizards",
  //           route: "/wizard",
  //           sub: [
  //             {
  //               heading: "horizontal",
  //               route: "/crafted/pages/wizards/horizontal",
  //             },
  //             {
  //               heading: "vertical",
  //               route: "/crafted/pages/wizards/vertical",
  //             },
  //           ],
  //         },
  //       ],
  //     },
  //     {
  //       sectionTitle: "account",
  //       route: "/account",
  //       svgIcon: getAssetPath("media/icons/duotune/communication/com006.svg"),
  //       fontIcon: "bi-person",
  //       sub: [
  //         {
  //           heading: "accountOverview",
  //           route: "/crafted/account/overview",
  //         },
  //         {
  //           heading: "settings",
  //           route: "/crafted/account/settings",
  //         },
  //       ],
  //     },
  //     {
  //       sectionTitle: "authentication",
  //       svgIcon: getAssetPath("media/icons/duotune/technology/teh004.svg"),
  //       fontIcon: "bi-sticky",
  //       sub: [
  //         {
  //           sectionTitle: "basicFlow",
  //           sub: [
  //             {
  //               heading: "signIn",
  //               route: "/sign-in",
  //             },
  //             {
  //               heading: "signUp",
  //               route: "/sign-up",
  //             },
  //             {
  //               heading: "passwordReset",
  //               route: "/password-reset",
  //             },
  //           ],
  //         },
  //         {
  //           heading: "multiStepSignUp",
  //           route: "/multi-step-sign-up",
  //         },
  //         {
  //           heading: "error404",
  //           route: "/404",
  //         },
  //         {
  //           heading: "error500",
  //           route: "/500",
  //         },
  //       ],
  //     },
  //     {
  //       sectionTitle: "modals",
  //       route: "/modals",
  //       svgIcon: getAssetPath("media/icons/duotune/art/art009.svg"),
  //       fontIcon: "bi-shield-check",
  //       sub: [
  //         {
  //           sectionTitle: "general",
  //           route: "/general",
  //           sub: [
  //             {
  //               heading: "inviteFriends",
  //               route: "/crafted/modals/general/invite-friends",
  //             },
  //             {
  //               heading: "viewUsers",
  //               route: "/crafted/modals/general/view-user",
  //             },
  //             {
  //               heading: "upgradePlan",
  //               route: "/crafted/modals/general/upgrade-plan",
  //             },
  //             {
  //               heading: "shareAndEarn",
  //               route: "/crafted/modals/general/share-and-earn",
  //             },
  //           ],
  //         },
  //         {
  //           sectionTitle: "forms",
  //           route: "/forms",
  //           sub: [
  //             {
  //               heading: "newTarget",
  //               route: "/crafted/modals/forms/new-target",
  //             },
  //             {
  //               heading: "newCard",
  //               route: "/crafted/modals/forms/new-card",
  //             },
  //             {
  //               heading: "newAddress",
  //               route: "/crafted/modals/forms/new-address",
  //             },
  //             {
  //               heading: "createAPIKey",
  //               route: "/crafted/modals/forms/create-api-key",
  //             },
  //           ],
  //         },
  //         {
  //           sectionTitle: "wizards",
  //           route: "/wizards",
  //           sub: [
  //             {
  //               heading: "twoFactorAuth",
  //               route: "/crafted/modals/wizards/two-factor-auth",
  //             },
  //             {
  //               heading: "createApp",
  //               route: "/crafted/modals/wizards/create-app",
  //             },
  //             {
  //               heading: "createAccount",
  //               route: "/crafted/modals/wizards/create-account",
  //             },
  //           ],
  //         },
  //       ],
  //     },
  //     {
  //       sectionTitle: "widgets",
  //       route: "/widgets",
  //       svgIcon: getAssetPath("media/icons/duotune/general/gen025.svg"),
  //       fontIcon: "bi-layers",
  //       sub: [
  //         {
  //           heading: "widgetsLists",
  //           route: "/crafted/widgets/lists",
  //         },
  //         {
  //           heading: "widgetsStatistics",
  //           route: "/crafted/widgets/statistics",
  //         },
  //         {
  //           heading: "widgetsCharts",
  //           route: "/crafted/widgets/charts",
  //         },
  //         {
  //           heading: "widgetsMixed",
  //           route: "/crafted/widgets/mixed",
  //         },
  //         {
  //           heading: "widgetsTables",
  //           route: "/crafted/widgets/tables",
  //         },
  //         {
  //           heading: "widgetsFeeds",
  //           route: "/crafted/widgets/feeds",
  //         },
  //       ],
  //     },
  //   ],
  // },
  // {
  //   heading: "apps",
  //   route: "/apps",
  //   pages: [
  //     {
  //       sectionTitle: "customers",
  //       route: "/customers",
  //       svgIcon: getAssetPath("media/icons/duotune/finance/fin006.svg"),
  //       fontIcon: "bi-printer",
  //       sub: [
  //         {
  //           heading: "gettingStarted",
  //           route: "/apps/customers/getting-started",
  //         },
  //         {
  //           heading: "customersListing",
  //           route: "/apps/customers/customers-listing",
  //         },
  //         {
  //           heading: "customerDetails",
  //           route: "/apps/customers/customer-details",
  //         },
  //       ],
  //     },
  //     {
  //       sectionTitle: "subscriptions",
  //       route: "/subscriptions",
  //       svgIcon: getAssetPath("media/icons/duotune/ecommerce/ecm002.svg"),
  //       fontIcon: "bi-cart",
  //       sub: [
  //         {
  //           heading: "getStarted",
  //           route: "/apps/subscriptions/getting-started",
  //         },
  //         {
  //           heading: "subscriptionList",
  //           route: "/apps/subscriptions/subscription-list",
  //         },
  //         {
  //           heading: "addSubscription",
  //           route: "/apps/subscriptions/add-subscription",
  //         },
  //         {
  //           heading: "viewSubscription",
  //           route: "/apps/subscriptions/view-subscription",
  //         },
  //       ],
  //     },
  //     {
  //       heading: "calendarApp",
  //       route: "/apps/calendar",
  //       svgIcon: getAssetPath("media/icons/duotune/general/gen014.svg"),
  //       fontIcon: "bi-calendar3-event",
  //     },
  //     {
  //       sectionTitle: "chat",
  //       route: "/chat",
  //       svgIcon: getAssetPath("media/icons/duotune/communication/com012.svg"),
  //       fontIcon: "bi-chat-left",
  //       sub: [
  //         {
  //           heading: "privateChat",
  //           route: "/apps/chat/private-chat",
  //         },
  //         {
  //           heading: "groupChat",
  //           route: "/apps/chat/group-chat",
  //         },
  //         {
  //           heading: "drawerChat",
  //           route: "/apps/chat/drawer-chat",
  //         },
  //       ],
  //     },
  //   ],
  // },

];

export default MainMenuConfig;
