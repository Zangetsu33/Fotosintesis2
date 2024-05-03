<template>
  <main class="w-screen h-80">
    <div class="flex flex-col justify-center items-center w-full h-full my-48">
      <div class="relative flex max-w-[1300px] h-[400px] w-full flex-col rounded-[10px] border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
        <div class="flex h-fit w-full items-center justify-between rounded-t-2xl bg-white px-4 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none mb-4">
          <h4 class="text-lg font-bold text-navy-700 dark:text-white">Principales colaboradores</h4>
          <button class="linear rounded-[20px] bg-lightPrimary px-4 py-2 text-base font-medium text-brand-500 transition duration-200 hover:bg-gray-100 active:bg-gray-200 dark:bg-white/5 dark:text-white dark:hover:bg-white/10 dark:active:bg-white/20">Ver todos</button>
        </div>
        <div class="w-full overflow-x-scroll px-4 md:overflow-x-hidden">
          <table role="table" class="w-full min-w-[500px] overflow-y-hidden">
            <thead>
              <tr role="row">
                <th>ID</th>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Cargo</th>
                <th>Fecha y hora de entrada</th>
                <th>Fecha y hora de salida</th>
              </tr>
            </thead>
            <tbody role="rowgroup" class="px-4">
              <tr v-for="item in items" :key="item.ID">
                <td>{{ item.ID }}</td>
                <td>{{ item.Cedula }}</td>
                <td>{{ item.Nombre }}</td>
                <td>{{ item.Apellido }}</td>
                <td>{{ item.Cargo }}</td>
                <td>{{ item['Fecha y hora de Entrada'] }}</td>
                <td>{{ item['Fecha y hora de Salida'] }}</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
export default {
  data() {
    return {
      items: []
    };
  },
  mounted() {
    this.fetchData();
  },
  methods: {
    fetchData() {
      fetch("http://localhost/backend/api/index.php?action=getAllTasks")
        .then(response => response.json())
        .then(data => {
          this.items = data;
        })
        .catch(error => {
          console.error('Error al obtener los datos:', error);
        });
    }
  }
};
</script>
