<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Clientes
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div x-data="getCustomers()" class="p-6 text-gray-900 dark:text-gray-100">
                    @include('customers._filters')
                    <div class="overflow-x-auto flex mt-8 rounded-md">
                        <table class="min-w-full">
                            <thead class="bg-gray-200 border-b">
                                <tr>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-5 py-4 text-left"></th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-5 py-4 text-left"></th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-5 py-4 text-left">Cliente</th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-5 py-4 text-left">CPF</th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-5 py-4 text-left">Data de Nascimento</th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-5 py-4 text-left">Estado</th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-5 py-4 text-left">Cidade</th>
                                    <th scope="col" class="text-sm font-medium text-gray-900 px-5 py-4 text-left">Sexo</th>
                                </tr>
                            </thead>
                            <body>
                                <template x-for="item in customers.data" :key="item.id">
                                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                        <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            <a x-bind:href="'/customers/' + item.id + '/edit'" class="flex bg-blue-500 hover:bg-blue-800 rounded text-white px-3 py-2 text-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                                </svg>
                                            </a>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900" >
                                            <button class="flex bg-red-500 hover:bg-red-800 rounded text-white px-3 py-2 text-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>

                                            </button>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap" x-text="item.name"></td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap" x-text="item.document"></td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap" x-text="new Date(item.birthdate).toLocaleDateString()"></td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap" x-text="item.state"></td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap" x-text="item.city"></td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap uppercase" x-text="item.gender"></td>
                                    </tr>
                                </template>
                            </body>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('alpine:init', () => {
            console.log('load alpine');
            Alpine.data('getCustomers', () => ({
                customers: [],
                filter: {
                    document: '',
                    name: '',
                    birthdate: '',
                    gender: '',
                    state: '',
                    city: '',
                },
                async init() {
                    this.customers = await (await fetch('/api/customers')).json()
                },
                async applyFilters() {
                    let url = '/api/customers';
                    url += '?';
                    for (let k in this.filter) { url += k + "=" + this.filter[k] + "&"; }
                    url = encodeURI(url.slice(0, -1));
                    this.customers = await (await fetch(url)).json()
                },
                async resetFilter() {
                    this.filter = {
                        document: '',
                        name: '',
                        birthdate: '',
                        gender: '',
                        state: '',
                        city: '',
                    };
                    this.customers = await (await fetch('/api/customers')).json()
                }
            }))
        })
    </script>
</x-app-layout>
