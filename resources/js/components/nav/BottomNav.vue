<template>
  <VueBottomNavigation :options="options" v-model="selected" />
</template>

<script>
  import VueBottomNavigation from "bottom-navigation-vue";
  export default {
    components: { VueBottomNavigation },
    data: () => ({
      selected: 1,
      options: [
        {
          id: 1,
          icon: "fas fa-home fa-2x",
          title: "Home",
           path: { name: "ScanPage" },
        },
        { id: 2, icon: "fas fa-wallet fa-2x", title: "Wallet" },
        {
          id: 3,
          icon: "fas fa-plus fa-2x",
          title: "Setting",
          childs: [
            { id: 301, icon: "fas fa-bookmark", title: "Bookmarks" },
            { id: 302, icon: "fas fa-tasks", title: "Tasks" },
            { id: 303, icon: "fas fa-tachometer-alt", title: "Dashboard" },
            { id: 304, icon: "fas fa-ticket-alt", title: "Tickets" },
          ],
        },
        { id: 4, icon: "fas fa-bell", title: "Notification", badge: 15 },
        { id: 5, icon: "fas fa-user fa-2x", title: "Account" ,
        childs: [
            { id: 501, icon: "fas fa-bookmark fa-2x", title: "Log out" }
            ],
        },
      ],

color: {
  type: String,
  default: "#60F542",
},
badgeColor: {
  type: String,
  default: "#72FB2D",
},
    }),
  };
</script>