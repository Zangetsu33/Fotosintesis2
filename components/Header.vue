<template>
  <header class="bg-white shadow">
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 flex justify-between items-center">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">Pagina Principal</h1>
      <div class="hidden md:block">
        <div class="ml-4 flex items-center md:ml-6">
          <button @click="toggleNotifications" type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
            </svg>
          </button>

          <!-- Profile dropdown -->
          <div class="relative ml-3 group">
            <div>
              <button @click="toggleProfileMenu" type="button" class="relative flex max-w-xs items-center rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-black focus:ring-offset-2 focus:ring-offset-white" :class="{ 'bg-white': profileMenuOpen }">
                <span class="absolute -inset-1.5"></span>
                <span class="sr-only">Pefil</span>
                <img class="h-8 w-8 rounded-full group-hover:bg-white" src="~/assets/images/user.png" alt="">
              </button>
            </div>

            <!-- Dropdown menu -->
            <div v-show="profileMenuOpen" class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
              <!-- Active: "bg-gray-100", Not Active: "" -->
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
              <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</template>

<script>
export default {
  data() {
    return {
      profileMenuOpen: false
    };
  },
  methods: {
    toggleNotifications() {
      // Implement logic to toggle notifications
    },
    toggleProfileMenu() {
      this.profileMenuOpen = !this.profileMenuOpen;
    }
  }
}
</script>


