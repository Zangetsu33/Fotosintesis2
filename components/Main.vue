<template>
    <main class="w-screen h-screen">
      <div class="flex flex-col justify-center items-center w-screen h-full">
        <div class="relative flex max-w-[1300px] h-[430px] w-full flex-col rounded-[10px] border-[1px] border-gray-200 bg-white bg-clip-border shadow-md shadow-[#F3F3F3] dark:border-[#ffffff33] dark:!bg-navy-800 dark:text-white dark:shadow-none">
          <div class="flex h-fit w-full items-center justify-between rounded-t-2xl bg-white px-4 pb-[20px] pt-4 shadow-2xl shadow-gray-100 dark:!bg-navy-700 dark:shadow-none">
            <h4 class="text-lg font-bold text-navy-700 dark:text-white">Principales colaboradores</h4>
            <button class="linear rounded-[20px] bg-lightPrimary px-4 py-2 text-base font-medium text-brand-500 transition duration-200 hover:bg-gray-100 active:bg-gray-200 dark:bg-white/5 dark:text-white dark:hover:bg-white/10 dark:active:bg-white/20">Ver todos</button>
          </div>
          <div class="w-full overflow-x-scroll px-4 md:overflow-x-hidden">
            <table role="table" class="w-full min-w-[500px] overflow-x-scroll">
              <thead>
                <tr role="row">
                  <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">ID</div>
                  </th>
                  <th colspan="2" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">Cedula</div>
                  </th>
                  <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">Nombre</div>
                  </th>
                  <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">Apellido</div>
                  </th>
                  <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">Cargo</div>
                  </th>
                  <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">Fecha y hora de ingreso</div>
                  </th>
                  <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">Fechas y hora de salida</div>
                  </th>
                  <th colspan="1" role="columnheader" title="Toggle SortBy" style="cursor: pointer">
                    <div class="flex items-center justify-between pb-2 pt-4 text-start uppercase tracking-wide text-gray-600 sm:text-xs lg:text-xs">Reporte</div>
                  </th>
                </tr>
              </thead>
              <tbody role="rowgroup" class="px-4">
                <tr role="row">
                  <td class="py-3 text-sm" role="cell">
                    <div class="flex items-center gap-2">
                      <div class="h-[30px] w-[30px] rounded-full">
                        <img src="https://images.unsplash.com/photo-1506863530036-1efeddceb993?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2244&amp;q=80" class="h-full w-full rounded-full" alt="" />
                      </div>
                      <p class="text-sm font-medium text-navy-700 dark:text-white">@maddison_c21</p>
                    </div>
                  </td>
                  <td class="py-3 text-sm" role="cell">
                    <p class="text-md font-medium text-gray-600 dark:text-white">9821</p>
                  </td>
                  <td class="py-3 text-sm" role="cell">
                    <div class="mx-2 flex font-bold">
                      <div class="h-2 w-16 rounded-full bg-gray-200 dark:bg-navy-700">
                        <div class="flex h-full items-center justify-center rounded-md bg-brand-500 dark:bg-brand-400" style="width: 30%"></div>
                      </div>
                    </div>
                  </td>
                </tr>
                <!-- Resto de las filas -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </main>
  </template>