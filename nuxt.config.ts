// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  devtools: { enabled: true },
  modules: ["@nuxtjs/tailwindcss"]
})
export default {
  // Otras configuraciones de Nuxt.js
  router: {
    // Configuración de las rutas
    extendRoutes(routes, resolve) {
      routes.push({
        name: 'index',
        path: '/',
        component: resolve(__dirname, 'pages/index.vue')
      })
    }
  }
}