<form action="requisicoes.php" method="post">
            <h1 class="text-center">Cadastro de Pacientes - LEAC</h1>

            <div class="card p-4 mt-3">
                <!-- Nome Completo -->
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome completo:</label>
                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite seu nome..." required>
                </div>

                <!-- Período -->
                <div class="mb-3">
                    <label class="form-label">Período:</label><br>
                    <input type="radio" value="Matutino" id="ex7" name="periodo" required>
                    <label for="ex7">Matutino</label><br>
                    <input type="radio" value="Noturno" id="ex8" name="periodo" required>
                    <label for="ex8">Noturno</label>
                </div>

                <!-- Data de Nascimento -->
                <div class="mb-3">
                    <label for="datanascimento" class="form-label">Data de Nascimento:</label>
                    <input type="date" id="datanascimento" name="datanascimento" class="form-control" required>
                </div>

                <!-- Telefone -->
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone para contato:</label>
                    <input type="tel" name="telefone" id="telefone" class="form-control" placeholder="(DDD) 99999-9999" required>
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email para contato:</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Digite o email" required>
                </div>

                <!-- Nome da Mãe -->
                <div class="mb-3">
                    <label for="mae" class="form-label">Nome da mãe:</label>
                    <input type="text" name="mae" id="mae" class="form-control" placeholder="Digite o nome da mãe" required>
                </div>

                <!-- Medicamento Contínuo -->
                <div class="mb-3">
                    <label class="form-label">Toma algum medicamento contínuo? Qual?</label><br>
                    <input type="radio" value="Sim" id="medicamentoSim" name="medicamento" required>
                    <label for="medicamentoSim">Sim</label><br>
                    <input type="radio" value="Não" id="medicamentoNao" name="medicamento" required>
                    <label for="medicamentoNao">Não</label><br>
                    <input type="text" name="medicamentoNome" id="medicamentoNome" class="form-control mt-2" placeholder="Qual medicamento?" style="display:none;">
                </div>

                <!-- Patologia -->
                <div class="mb-3">
                    <label for="patologia" class="form-label">Tem alguma patologia que trata?</label>
                    <input type="text" name="patologia" id="patologia" class="form-control" placeholder="Se sim, qual?" required>
                </div>

                <!-- Exames Solicitados -->
                <div class="mb-3">
                    <label class="form-label">Exames solicitados:</label><br>
                    <input type="checkbox" value="Microbiologia" id="ex1" name="exame[]">
                    <label for="ex1">Microbiologia</label><br>
                    <input type="checkbox" value="Parasitologia" id="ex2" name="exame[]">
                    <label for="ex2">Parasitologia</label><br>
                    <input type="checkbox" value="Hematologia" id="ex3" name="exame[]">
                    <label for="ex3">Hematologia</label><br>
                    <input type="checkbox" value="Bioquímica" id="ex4" name="exame[]">
                    <label for="ex4">Bioquímica</label><br>
                    <input type="checkbox" value="Urinálise" id="ex5" name="exame[]">
                    <label for="ex5">Urinálise</label><br>
                </div>

                <!-- Botão de Enviar -->
                <button type="submit" class="btn btn-primary mt-3">Enviar</button>
            </div>
        </form>