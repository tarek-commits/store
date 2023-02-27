import {
  createRouter,
  createWebHashHistory,
  type RouteRecordRaw,
} from "vue-router";
import { useAuthStore } from "@/stores/auth";
import { useConfigStore } from "@/stores/config";

const routes: Array<RouteRecordRaw> = [
  {
    path: "/",
    redirect: "/dashboard",
    component: () => import("@/layouts/main-layout/MainLayout.vue"),
    meta: {
      middleware: "auth",
    },
    children: [
      {
        path: "/dashboard",
        name: "dashboard",
        component: () => import("@/views/Dashboard.vue"),
        meta: {
          pageTitle: "Dashboard",
          breadcrumbs: ["Dashboards"],
        },
      },
      {
        path: "/warhouse",
        name: "warhouse",
        component: () => import("@/components/page-layouts/Warhouse.vue"),
        meta: {
          breadcrumbs: ["Pages", "Warhouse"],
        },
        children: [
          {
            path: "overview",
            name: "warhouse-overview",
            component: () =>
              import("@/views/warhouse/Overview.vue"),
            meta: {
              pageTitle: "Overview",
            },
          },
          {
            path: "udm",
            name: "warhouse-udm",
            component: () =>
              import("@/views/warhouse/Udm.vue"),
            meta: {
              pageTitle: "UDM",
            },
          },
          {
            path: "order-bins",
            name: "warhouse-orderbins",
            component: () =>
              import("@/views/warhouse/OrderBins.vue"),
            meta: {
              pageTitle: "Order Bins",
            },
          },
          {
            path: "packing-material",
            name: "warhouse-packing-material",
            component: () =>
              import("@/views/warhouse/PackingMaterial.vue"),
            meta: {
              pageTitle: "Packing Material",
            },
          },
          {
            path: "carriers",
            name: "warhouse-carriers",
            component: () =>
              import("@/views/warhouse/Carriers.vue"),
            meta: {
              pageTitle: "Carriers",
            },
          },
          {
            path: "seller-logistic-partners",
            name: "warhouse-seller-logistic-partners",
            component: () =>
              import("@/views/warhouse/SellerLogisticPartners.vue"),
            meta: {
              pageTitle: "Seller Logistic Partners",
            },
          },
          {
            path: "timeslots",
            name: "warhouse-timeslots",
            component: () =>
              import("@/views/warhouse/Timeslots.vue"),
            meta: {
              pageTitle: "Timeslots",
            },
          },
          {
            path: "email-event",
            name: "warhouse-email-event",
            component: () =>
              import("@/views/warhouse/EmailEvent.vue"),
            meta: {
              pageTitle: "Email Event",
            },
          },
          {
            path: "bulk-activities",
            name: "warhouse-bulk-activities",
            component: () =>
              import("@/views/warhouse/BulkActivities.vue"),
            meta: {
              pageTitle: "Bulk Activities",
            },
          }
        ]
      },
      {
        path: "/inventory",
        name: "inventory",
        component: () => import("@/components/page-layouts/Inventory.vue"),
        meta: {
          breadcrumbs: ["Pages", "Inventory"],
        },
        children: [
          {
            path: "product",
            name: "inventory-product",
            component: () =>
              import("@/views/inventory/Product.vue"),
            meta: {
              pageTitle: "Product",
            },
          },
          {
            path: "kit-product",
            name: "inventory-kit-product",
            component: () =>
              import("@/views/inventory/KitProduct.vue"),
            meta: {
              pageTitle: "Kit Product",
            },
          },
          {
            path: "top-selling",
            name: "inventory-top-selling",
            component: () =>
              import("@/views/inventory/TopSelling.vue"),
            meta: {
              pageTitle: "Top Selling",
            },
          },
          {
            path: "stock-take",
            name: "inventory-stock-take",
            component: () =>
              import("@/views/inventory/StockTake.vue"),
            meta: {
              pageTitle: "Stock Take",
            },
          },
          {
            path: "stock-take-approval",
            name: "inventory-stock-take-approval",
            component: () =>
              import("@/views/inventory/StockTakeApproval.vue"),
            meta: {
              pageTitle: "Stock Take Approval",
            },
          },
          {
            path: "stock-adjustment",
            name: "inventory-stock-adjustment",
            component: () =>
              import("@/views/inventory/StockAdjustment.vue"),
            meta: {
              pageTitle: "Stock Adjustment",
            },
          },
          {
            path: "stock-transfer",
            name: "inventory-stock-transfer",
            component: () =>
              import("@/views/inventory/StockTransfer.vue"),
            meta: {
              pageTitle: "Stock Transfer",
            },
          },
          {
            path: "pick-face-replenishment",
            name: "inventory-pick-face-replenishment",
            component: () =>
              import("@/views/inventory/PickFaceReplenishment.vue"),
            meta: {
              pageTitle: "Pick Face Replenishment",
            },
          },
          {
            path: "batch-management",
            name: "inventory-batch-management",
            component: () =>
              import("@/views/inventory/BatchManagement.vue"),
            meta: {
              pageTitle: "Batch Management",
            },
          },
          {
            path: "bulk-activities",
            name: "inventory-bulk-activities",
            component: () =>
              import("@/views/inventory/BulkActivities.vue"),
            meta: {
              pageTitle: "Bulk Activities",
            },
          },
          {
            path: "category-management",
            name: "inventory-category-management",
            component: () =>
              import("@/views/inventory/CategoryManagement.vue"),
            meta: {
              pageTitle: "Category Management",
            },
          },
          {
            path: "brand-management",
            name: "inventory-brand-management",
            component: () =>
              import("@/views/inventory/BrandManagement.vue"),
            meta: {
              pageTitle: "Brand Management",
            },
          },
        ]
      },
      {
        path: "/inbound",
        name: "inbound",
        component: () => import("@/components/page-layouts/Inbound.vue"),
        meta: {
          breadcrumbs: ["Pages", "Inbound"],
        },
        children: [
          {
            path: "purches-order",
            name: "inbound-purches-order",
            component: () =>
              import("@/views/inbound/PurchesOrder.vue"),
            meta: {
              pageTitle: "Purches Order",
            },
          },
          {
            path: "goods-received",
            name: "inbound-goods-received",
            component: () =>
              import("@/views/inbound/GoodsReceived.vue"),
            meta: {
              pageTitle: "Goods Received",
            },
          },
          {
            path: "count-qc",
            name: "inbound-count-qc",
            component: () =>
              import("@/views/inbound/CountQc.vue"),
            meta: {
              pageTitle: "Count & QC",
            },
          },
          {
            path: "put-away",
            name: "inbound-put-away",
            component: () =>
              import("@/views/inbound/PutAway.vue"),
            meta: {
              pageTitle: "Put Away",
            },
          },
          {
            path: "bulk-activities",
            name: "inbound-bulk-activities",
            component: () =>
              import("@/views/inbound/BulkActivities.vue"),
            meta: {
              pageTitle: "Bulk Activities",
            },
          },
        ]
      },
      {
        path: "/reports",
        name: "reports",
        component: () => import("@/components/page-layouts/Master.vue"),
        meta: {
          breadcrumbs: ["Pages", "Reports"],
        },
        children: [
          {
            path: "reports-management",
            name: "reports-management",
            component: () =>
              import("@/views/reports/ReportsManagement.vue"),
            meta: {
              pageTitle: "Reports Management",
            },
          },
        ]
      },
      {
        path: "/suppliers",
        name: "suppliers",
        component: () => import("@/components/page-layouts/Master.vue"),
        meta: {
          breadcrumbs: ["Pages", "Suppliers"],
        },
        children: [
          {
            path: "all",
            name: "suppliers-all",
            component: () =>
              import("@/views/suppliers/All.vue"),
            meta: {
              pageTitle: "All",
            },
          },
          {
            path: "bulk-activities",
            name: "suppliers-bulk-activities",
            component: () =>
              import("@/views/suppliers/BulkActivities.vue"),
            meta: {
              pageTitle: "Bulk Activities",
            },
          }
        ]
      },
      {
        path: "/customers",
        name: "customers",
        component: () => import("@/components/page-layouts/Customers.vue"),
        meta: {
          breadcrumbs: ["Pages", "Customers"],
        },
        children: [
          {
            path: "list",
            name: "customers-list",
            component: () =>
              import("@/views/customers/CustomerList.vue"),
            meta: {
              pageTitle: "Customers List",
            },
          },
          {
            path: "communications",
            name: "communications",
            component: () =>
              import("@/views/customers/Communications.vue"),
            meta: {
              pageTitle: "Communications",
            },
          },
          {
            path: "retail-store",
            name: "retail-store",
            component: () =>
              import("@/views/customers/RetailStore.vue"),
            meta: {
              pageTitle: "Retail Store",
            },
          },
          {
            path: "accounting-tools",
            name: "accounting-tools",
            component: () =>
              import("@/views/customers/AccountingTools.vue"),
            meta: {
              pageTitle: "Accounting Tools",
            },
          },
          {
            path: "bulk-activities",
            name: "bulk-activities",
            component: () =>
              import("@/views/customers/BulkActivities.vue"),
            meta: {
              pageTitle: "Bulk Activities",
            },
          },
        ]
      },
      {
        path: "/builder",
        name: "builder",
        component: () => import("@/views/LayoutBuilder.vue"),
        meta: {
          pageTitle: "Layout Builder",
          breadcrumbs: ["Layout"],
        },
      },
      {
        path: "/crafted/pages/profile",
        name: "profile",
        component: () => import("@/components/page-layouts/Profile.vue"),
        meta: {
          breadcrumbs: ["Pages", "Profile"],
        },
        children: [
          {
            path: "overview",
            name: "profile-overview",
            component: () =>
              import("@/views/crafted/pages/profile/Overview.vue"),
            meta: {
              pageTitle: "Overview",
            },
          },
          {
            path: "projects",
            name: "profile-projects",
            component: () =>
              import("@/views/crafted/pages/profile/Projects.vue"),
            meta: {
              pageTitle: "Projects",
            },
          },
          {
            path: "campaigns",
            name: "profile-campaigns",
            component: () =>
              import("@/views/crafted/pages/profile/Campaigns.vue"),
            meta: {
              pageTitle: "Campaigns",
            },
          },
          {
            path: "documents",
            name: "profile-documents",
            component: () =>
              import("@/views/crafted/pages/profile/Documents.vue"),
            meta: {
              pageTitle: "Documents",
            },
          },
          {
            path: "connections",
            name: "profile-connections",
            component: () =>
              import("@/views/crafted/pages/profile/Connections.vue"),
            meta: {
              pageTitle: "Connections",
            },
          },
          {
            path: "activity",
            name: "profile-activity",
            component: () =>
              import("@/views/crafted/pages/profile/Activity.vue"),
            meta: {
              pageTitle: "Activity",
            },
          },
        ],
      },
      {
        path: "/crafted/pages/wizards/horizontal",
        name: "horizontal-wizard",
        component: () => import("@/views/crafted/pages/wizards/Horizontal.vue"),
        meta: {
          pageTitle: "Horizontal",
          breadcrumbs: ["Pages", "Wizard"],
        },
      },
      {
        path: "/crafted/pages/wizards/vertical",
        name: "vertical-wizard",
        component: () => import("@/views/crafted/pages/wizards/Vertical.vue"),
        meta: {
          pageTitle: "Vertical",
          breadcrumbs: ["Pages", "Wizard"],
        },
      },
      {
        path: "/crafted/account",
        name: "account",
        component: () => import("@/views/crafted/account/Account.vue"),
        meta: {
          breadcrumbs: ["Crafted", "Account"],
        },
        children: [
          {
            path: "overview",
            name: "account-overview",
            component: () => import("@/views/crafted/account/Overview.vue"),
            meta: {
              pageTitle: "Overview",
            },
          },
          {
            path: "settings",
            name: "account-settings",
            component: () => import("@/views/crafted/account/Settings.vue"),
            meta: {
              pageTitle: "Settings",
            },
          },
        ],
      },
      {
        path: "/apps/customers/getting-started",
        name: "apps-customers-getting-started",
        component: () => import("@/views/apps/customers/GettingStarted.vue"),
        meta: {
          pageTitle: "Getting Started",
          breadcrumbs: ["Apps", "Customers"],
        },
      },
      {
        path: "/apps/customers/customers-listing",
        name: "apps-customers-listing",
        component: () => import("@/views/apps/customers/CustomersListing.vue"),
        meta: {
          pageTitle: "Customers Listing",
          breadcrumbs: ["Apps", "Customers"],
        },
      },
      {
        path: "/apps/customers/customer-details",
        name: "apps-customers-details",
        component: () => import("@/views/apps/customers/CustomerDetails.vue"),
        meta: {
          pageTitle: "Customers Details",
          breadcrumbs: ["Apps", "Customers"],
        },
      },
      {
        path: "/apps/subscriptions/getting-started",
        name: "apps-subscriptions-getting-started",
        component: () =>
          import("@/views/apps/subscriptions/GettingStarted.vue"),
        meta: {
          pageTitle: "Getting Started",
          breadcrumbs: ["Apps", "Subscriptions"],
        },
      },
      {
        path: "/apps/subscriptions/subscription-list",
        name: "apps-subscriptions-subscription-list",
        component: () =>
          import("@/views/apps/subscriptions/SubscriptionList.vue"),
        meta: {
          pageTitle: "Getting Started",
          breadcrumbs: ["Apps", "Subscriptions"],
        },
      },
      {
        path: "/apps/subscriptions/add-subscription",
        name: "apps-subscriptions-add-subscription",
        component: () =>
          import("@/views/apps/subscriptions/AddSubscription.vue"),
        meta: {
          pageTitle: "Add Subscription",
          breadcrumbs: ["Apps", "Subscriptions"],
        },
      },
      {
        path: "/apps/subscriptions/view-subscription",
        name: "apps-subscriptions-view-subscription",
        component: () =>
          import("@/views/apps/subscriptions/ViewSubscription.vue"),
        meta: {
          pageTitle: "View Subscription",
          breadcrumbs: ["Apps", "Subscriptions"],
        },
      },
      {
        path: "/apps/calendar",
        name: "apps-calendar",
        component: () => import("@/views/apps/Calendar.vue"),
        meta: {
          pageTitle: "Calendar",
          breadcrumbs: ["Apps"],
        },
      },
      {
        path: "/apps/chat/private-chat",
        name: "apps-private-chat",
        component: () => import("@/views/apps/chat/Chat.vue"),
        meta: {
          pageTitle: "Private Chat",
          breadcrumbs: ["Apps", "Chat"],
        },
      },
      {
        path: "/apps/chat/group-chat",
        name: "apps-group-chat",
        component: () => import("@/views/apps/chat/Chat.vue"),
        meta: {
          pageTitle: "Group Chat",
          breadcrumbs: ["Apps", "Chat"],
        },
      },
      {
        path: "/apps/chat/drawer-chat",
        name: "apps-drawer-chat",
        component: () => import("@/views/apps/chat/DrawerChat.vue"),
        meta: {
          pageTitle: "Drawer Chat",
          breadcrumbs: ["Apps", "Chat"],
        },
      },
      {
        path: "/crafted/modals/general/invite-friends",
        name: "modals-general-invite-friends",
        component: () =>
          import("@/views/crafted/modals/general/InviteFriends.vue"),
        meta: {
          pageTitle: "Invite Friends",
          breadcrumbs: ["Crafted", "Modals", "General"],
        },
      },
      {
        path: "/crafted/modals/general/view-user",
        name: "modals-general-view-user",
        component: () => import("@/views/crafted/modals/general/ViewUsers.vue"),
        meta: {
          pageTitle: "View User",
          breadcrumbs: ["Crafted", "Modals", "General"],
        },
      },
      {
        path: "/crafted/modals/general/upgrade-plan",
        name: "modals-general-upgrade-plan",
        component: () =>
          import("@/views/crafted/modals/general/UpgradePlan.vue"),
        meta: {
          pageTitle: "Upgrade Plan",
          breadcrumbs: ["Crafted", "Modals", "General"],
        },
      },
      {
        path: "/crafted/modals/general/share-and-earn",
        name: "modals-general-share-and-earn",
        component: () =>
          import("@/views/crafted/modals/general/ShareAndEarn.vue"),
        meta: {
          pageTitle: "Share And Earn",
          breadcrumbs: ["Crafted", "Modals", "General"],
        },
      },
      {
        path: "/crafted/modals/forms/new-target",
        name: "modals-forms-new-target",
        component: () => import("@/views/crafted/modals/forms/NewTarget.vue"),
        meta: {
          pageTitle: "New Target",
          breadcrumbs: ["Crafted", "Modals", "Forms"],
        },
      },
      {
        path: "/crafted/modals/forms/new-card",
        name: "modals-forms-new-card",
        component: () => import("@/views/crafted/modals/forms/NewCard.vue"),
        meta: {
          pageTitle: "New Card",
          breadcrumbs: ["Crafted", "Modals", "Forms"],
        },
      },
      {
        path: "/crafted/modals/forms/new-address",
        name: "modals-forms-new-address",
        component: () => import("@/views/crafted/modals/forms/NewAddress.vue"),
        meta: {
          pageTitle: "New Address",
          breadcrumbs: ["Crafted", "Modals", "Forms"],
        },
      },
      {
        path: "/crafted/modals/forms/create-api-key",
        name: "modals-forms-create-api-key",
        component: () =>
          import("@/views/crafted/modals/forms/CreateApiKey.vue"),
        meta: {
          pageTitle: "Create Api Key",
          breadcrumbs: ["Crafted", "Modals", "Forms"],
        },
      },
      {
        path: "/crafted/modals/wizards/two-factor-auth",
        name: "modals-wizards-two-factor-auth",
        component: () =>
          import("@/views/crafted/modals/wizards/TwoFactorAuth.vue"),
        meta: {
          pageTitle: "Two Factory Auth",
          breadcrumbs: ["Crafted", "Modals", "Wizards"],
        },
      },
      {
        path: "/crafted/modals/wizards/create-app",
        name: "modals-wizards-create-app",
        component: () => import("@/views/crafted/modals/wizards/CreateApp.vue"),
        meta: {
          pageTitle: "Create App",
          breadcrumbs: ["Crafted", "Modals", "Wizards"],
        },
      },
      {
        path: "/crafted/modals/wizards/create-account",
        name: "modals-wizards-create-account",
        component: () =>
          import("@/views/crafted/modals/wizards/CreateAccount.vue"),
        meta: {
          pageTitle: "Create Account",
          breadcrumbs: ["Crafted", "Modals", "Wizards"],
        },
      },
      {
        path: "/crafted/widgets/lists",
        name: "widgets-list",
        component: () => import("@/views/crafted/widgets/Lists.vue"),
        meta: {
          pageTitle: "Lists",
          breadcrumbs: ["Crafted", "Widgets"],
        },
      },
      {
        path: "/crafted/widgets/statistics",
        name: "widgets-statistics",
        component: () => import("@/views/crafted/widgets/Statistics.vue"),
        meta: {
          pageTitle: "Statistics",
          breadcrumbs: ["Crafted", "Widgets"],
        },
      },
      {
        path: "/crafted/widgets/charts",
        name: "widgets-charts",
        component: () => import("@/views/crafted/widgets/Charts.vue"),
        meta: {
          pageTitle: "Charts",
          breadcrumbs: ["Crafted", "Widgets"],
        },
      },
      {
        path: "/crafted/widgets/mixed",
        name: "widgets-mixed",
        component: () => import("@/views/crafted/widgets/Mixed.vue"),
        meta: {
          pageTitle: "Mixed",
          breadcrumbs: ["Crafted", "Widgets"],
        },
      },
      {
        path: "/crafted/widgets/tables",
        name: "widgets-tables",
        component: () => import("@/views/crafted/widgets/Tables.vue"),
        meta: {
          pageTitle: "Tables",
          breadcrumbs: ["Crafted", "Widgets"],
        },
      },
      {
        path: "/crafted/widgets/feeds",
        name: "widgets-feeds",
        component: () => import("@/views/crafted/widgets/Feeds.vue"),
        meta: {
          pageTitle: "Feeds",
          breadcrumbs: ["Crafted", "Widgets"],
        },
      },
    ],
  },
  {
    path: "/",
    component: () => import("@/layouts/AuthLayout.vue"),
    children: [
      {
        path: "/sign-in",
        name: "sign-in",
        component: () =>
          import("@/views/crafted/authentication/basic-flow/SignIn.vue"),
        meta: {
          pageTitle: "Sign In",
        },
      },
      {
        path: "/sign-up",
        name: "sign-up",
        component: () =>
          import("@/views/crafted/authentication/basic-flow/SignUp.vue"),
        meta: {
          pageTitle: "Sign Up",
        },
      },
      {
        path: "/password-reset",
        name: "password-reset",
        component: () =>
          import("@/views/crafted/authentication/basic-flow/PasswordReset.vue"),
        meta: {
          pageTitle: "Password reset",
        },
      },
    ],
  },
  {
    path: "/multi-step-sign-up",
    name: "multi-step-sign-up",
    component: () =>
      import("@/views/crafted/authentication/MultiStepSignUp.vue"),
    meta: {
      pageTitle: "Multi-step Sign up",
    },
  },
  {
    path: "/",
    component: () => import("@/layouts/SystemLayout.vue"),
    children: [
      {
        // the 404 route, when none of the above matches
        path: "/404",
        name: "404",
        component: () => import("@/views/crafted/authentication/Error404.vue"),
        meta: {
          pageTitle: "Error 404",
        },
      },
      {
        path: "/500",
        name: "500",
        component: () => import("@/views/crafted/authentication/Error500.vue"),
        meta: {
          pageTitle: "Error 500",
        },
      },
    ],
  },
  {
    path: "/:pathMatch(.*)*",
    redirect: "/404",
  },
];

const router = createRouter({
  history: createWebHashHistory(),
  routes,
});

router.beforeEach((to, from, next) => {
  const authStore = useAuthStore();
  const configStore = useConfigStore();

  // current page view title
  document.title = `${to.meta.pageTitle} - ${import.meta.env.VITE_APP_NAME}`;

  // reset config to initial state
  configStore.resetLayoutConfig();

  // verify auth token before each page change
  authStore.verifyAuth();

  // before page access check if page requires authentication
  if (to.meta.middleware == "auth") {
    if (authStore.isAuthenticated) {
      next();
    } else {
      next({ name: "sign-in" });
    }
  } else {
    next();
  }

  // Scroll page to top on every route change
  window.scrollTo({
    top: 0,
    left: 0,
    behavior: "smooth",
  });
});

export default router;
