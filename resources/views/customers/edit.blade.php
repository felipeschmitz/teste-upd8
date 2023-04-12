<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            Editar Cliente
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div x-data="app()" class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="#" method="post" @submit.prevent="update()">
                        <div class="px-4 py-2 text-green-600 bg-green-100 rounded mb-6" x-show="success">
                            <p>Cliente salvo com sucesso</p>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
                            <div>
                                <div class="flex flex-col space-y-2">
                                    <label for="name" class="font-semibold">Nome</label>
                                    <input type="text" name="name" id="name" class="w-full rounded-md text-gray-900" x-model="form.name" />
                                    <span class="text-red-500 font-bold text-sm" x-text="error.name"></span>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col space-y-2">
                                    <label for="document" class="font-semibold">CPF</label>
                                    <input x-mask="999.999.999-99" type="text" name="document" id="document" class="w-full rounded-md text-gray-900" x-model="form.document" />
                                    <span class="text-red-500 font-bold text-sm" x-text="error.document"></span>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col space-y-2">
                                    <label for="birthdate" class="font-semibold">Data de Nascimento</label>
                                    <input type="date" name="birthdate" id="birthdate" class="w-full rounded-md text-gray-900" x-model="form.birthdate" />
                                    <span class="text-red-500 font-bold text-sm" x-text="error.birthdate"></span>
                                </div>
                            </div>
                            <div>
                                <div class="flex flex-col space-y-4">
                                    <label class="font-semibold">Sexo</label>
                                    <div class="flex items-center space-x-6">
                                        <label for="gender-m" class="flex items-center space-x-2">
                                            <input type="radio" name="gender" id="gender-m" value="m" x-model="form.gender">
                                            <span>Masculino</span>
                                        </label>
                                        <label for="gender-f" class="flex items-center space-x-2">
                                            <input type="radio" name="gender" id="gender-f" value="f" x-model="form.gender">
                                            <span>Feminino</span>
                                        </label>
                                    </div>
                                    <span class="text-red-500 font-bold text-sm" x-text="error.gender"></span>
                                </div>
                            </div>
                            <div class="col-span-full">
                                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                                    <div class="col-span-full">
                                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                            <div>
                                                <div class="flex flex-col space-y-2">
                                                    <label for="postcode" class="font-semibold">CEP</label>
                                                    <input x-mask="99999-999" type="text" name="postcode" id="postcode" class="w-full rounded-md text-gray-900" x-model="form.postcode" />
                                                    <span class="text-red-500 font-bold text-sm" x-text="error.postcode"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="flex flex-col space-y-2">
                                                    <label for="address" class="font-semibold">Endereço</label>
                                                    <input type="text" name="address" id="address" class="w-full rounded-md text-gray-900" x-model="form.address" />
                                                    <span class="text-red-500 font-bold text-sm" x-text="error.address"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex flex-col space-y-2">
                                            <label for="number" class="font-semibold">Número</label>
                                            <input type="text" name="number" id="number" class="w-full rounded-md text-gray-900" x-model="form.number" />
                                            <span class="text-red-500 font-bold text-sm" x-text="error.number"></span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex flex-col space-y-2">
                                            <label for="complement" class="font-semibold">Complemento</label>
                                            <input type="text" name="complement" id="complement" class="w-full rounded-md text-gray-900" x-model="form.complement" />
                                            <span class="text-red-500 font-bold text-sm" x-text="error.complement"></span>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="flex flex-col space-y-2">
                                            <label for="district" class="font-semibold">Bairro</label>
                                            <input type="text" name="district" id="district" class="w-full rounded-md text-gray-900" x-model="form.district" />
                                            <span class="text-red-500 font-bold text-sm" x-text="error.district"></span>
                                        </div>
                                    </div>
                                    <div class="col-span-full">
                                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                                            <div>
                                                <div class="flex flex-col space-y-2">
                                                    <label for="state" class="font-semibold">Estado</label>
                                                    <select name="state" id="state" class="w-full rounded-md text-gray-900" x-model="form.state">
                                                        <option value="">Selecione</option>
                                                        <option value="AC">Acre</option>
                                                        <option value="AL">Alagoas</option>
                                                        <option value="AP">Amapá</option>
                                                        <option value="AM">Amazonas</option>
                                                        <option value="BA">Bahia</option>
                                                        <option value="CE">Ceará</option>
                                                        <option value="DF">Distrito Federal</option>
                                                        <option value="ES">Espírito Santo</option>
                                                        <option value="GO">Goiás</option>
                                                        <option value="MA">Maranhão</option>
                                                        <option value="MT">Mato Grosso</option>
                                                        <option value="MS">Mato Grosso do Sul</option>
                                                        <option value="MG">Minas Gerais</option>
                                                        <option value="PA">Pará</option>
                                                        <option value="PB">Paraíba</option>
                                                        <option value="PR">Paraná</option>
                                                        <option value="PE">Pernambuco</option>
                                                        <option value="PI">Piauí</option>
                                                        <option value="RJ">Rio de Janeiro</option>
                                                        <option value="RN">Rio Grande do Norte</option>
                                                        <option value="RS">Rio Grande do Sul</option>
                                                        <option value="RO">Rondônia</option>
                                                        <option value="RR">Roraima</option>
                                                        <option value="SC">Santa Catarina</option>
                                                        <option value="SP">São Paulo</option>
                                                        <option value="SE">Sergipe</option>
                                                        <option value="TO">Tocantins</option>
                                                    </select>
                                                    <span class="text-red-500 font-bold text-sm" x-text="error.state"></span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="flex flex-col space-y-2">
                                                    <label for="city" class="font-semibold">Cidade</label>
                                                    <input type="text" name="city" id="city" class="w-full rounded-md text-gray-900" x-model="form.city" />
                                                    <span class="text-red-500 font-bold text-sm" x-text="error.city"></span>
                                                </div>
                                            </div>
                                            <div class="col-span-full">
                                                <div class="flex items-center lg:justify-end space-x-2">
                                                    <div class="flex space-x-4">
                                                        <button type="submit" class="px-5 py-3 bg-green-500 hover:bg-green-800 rounded-md disabled:opacity-75">Salvar</button>
                                                        <button type="button" class="px-5 py-3 bg-pink-500 hover:bg-pink-800 rounded-md" @click="reset()">Limpar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('app', () => ({
                form: {
                    name: '',
                    document: '',
                    birthdate: '',
                    gender: '',
                    postcode: '',
                    address: '',
                    number: '',
                    complement: '',
                    district: '',
                    state: '',
                    city: ''
                },
                error: {
                    name: '',
                    document: '',
                    birthdate: '',
                    gender: '',
                    postcode: '',
                    address: '',
                    number: '',
                    complement: '',
                    district: '',
                    state: '',
                    city: ''
                },
                success: false,
                async init() {
                    try {
                        const { data } = await axios.get('{{ route("api.customers.show", request()->segment(2))}}')

                        this.form = data.data
                    } catch (error) {
                        window.location = '{{ route("customers.index") }}'
                    }
                },
                async update() {
                    try {
                        const { data } = await axios.put('{{ route("api.customers.update", request()->segment(2)) }}', this.form)

                        this.success = false
                        if (data.status = 201) {
                            this.success = true

                            this.reset()

                            setTimeout(() => {
                                this.success = false
                            }, 3000)
                        }
                    } catch (error) {
                        const { errors } = error.response.data

                        this.error = {
                            name: errors?.name,
                            document: errors?.document,
                            birthdate: errors?.birthdate,
                            gender: errors?.gender,
                            postcode: errors?.postcode,
                            address: errors?.address,
                            number: errors?.number,
                            complement: errors?.complement,
                            district: errors?.district,
                            state: errors?.state,
                            city: errors?.city
                        }
                    }
                },
                reset() {
                    this.error = {
                        name: '',
                        document: '',
                        birthdate: '',
                        gender: '',
                        postcode: '',
                        address: '',
                        number: '',
                        complement: '',
                        district: '',
                        state: '',
                        city: '',
                    }
                }
            }))
        })
    </script>
</x-app-layout>
