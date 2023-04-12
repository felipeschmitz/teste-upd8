<div class="mb-4">
    <h3 class="font-semibold text-2xl text-gray-800 dark:text-gray-200 leading-tight">Consultar Cliente</h3>
    <form action="#" method="post" @submit.prevent="applyFilters()">
        <div class="mt-4">
            <div class="grid sm:grid-cols-1 lg:grid-cols-4 gap-6">
                <div class="flex items-center space-x-2">
                    <label for="document" class="font-semibold">CPF</label>
                    <input x-mask="999.999.999-99" type="text" name="document" id="document" class="w-full rounded-full text-gray-900" x-model="filter.document" />
                </div>
                <div class="flex items-center space-x-2">
                    <label for="name" class="font-semibold">Nome</label>
                    <input type="text" name="name" id="name" class="w-full rounded-full text-gray-900" x-model="filter.name" />
                </div>
                <div class="flex items-center space-x-2">
                    <label for="birthdate" class="font-semibold">Data de Nascimento</label>
                    <input type="date" name="birthdate" id="birthdate" class="w-full rounded-full text-gray-900" x-model="filter.birthdate" />
                </div>
                <div class="flex items-center space-x-2">
                    <span class="font-semibold">Sexo</span>
                    <div class="flex items-center space-x-2">
                        <label for="gender-m" class="flex items-center space-x-2">
                            <input type="radio" name="gender" id="gender-m" value="m" x-model="filter.gender">
                            <span>Masculino</span>
                        </label>
                        <label for="gender-f" class="flex items-center space-x-2">
                            <input type="radio" name="gender" id="gender-f" value="f" x-model="filter.gender">
                            <span>Feminino</span>
                        </label>
                    </div>
                </div>
                <div class="col-span-full">
                    <div class="grid sm:grid-cols-1 lg:grid-cols-3 gap-6">
                        <div class="flex items-center space-x-2">
                            <label for="state" class="font-semibold">Estado</label>
                            <select name="state" id="state" class="w-full rounded-full text-gray-900" x-model="filter.state">
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
                        </div>
                        <div class="flex items-center space-x-2">
                            <label for="city" class="font-semibold">Cidade</label>
                            <input type="text" name="city" id="city" class="w-full rounded-full text-gray-900" x-model="filter.city" />
                        </div>
                        <div class="flex items-center lg:justify-end space-x-2">
                            <div class="flex space-x-4">
                                <button type="submit" class="px-5 py-3 bg-green-500 hover:bg-green-800 rounded-full disabled:opacity-75" :disabled="!applyFilter">Pesquisar</button>
                                <button type="button" class="px-5 py-3 bg-pink-500 hover:bg-pink-800 rounded-full" @click="resetFilter()">Limpar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
