                
<?php
    $dadosPessoais = Painel::exibirDadosPessoais();
?>
                <!-- Solicitar requerimento -->
                <div class="col l5 m5 s12 form3" id="informacoesRequerimento">
                  <div class="hero-body" id="heroInfosRequerimento">
                    <form method="post">
                        <div class="container">
                            <div class="row">
                                <div class="col l7 m7 s12">
                                <label for="nome" id="labelForm">Nome: </label>
                                <input type="text" name="nome" class="form-control" value="<?php echo $dadosPessoais[0]['nm_aluno']; ?>" id="inputEstilo">
                                </div>
                                <div class="col l5 m5 s12">
                                <label for="nome" id="labelForm">RM: </label>
                                <input type="text" name="rm" class="form-control" value="<?php echo $dadosPessoais[0]['nr_rm']; ?>" id="inputEstilo">
                                </div>
                            </div>
                            <div class="row" id="espacoForm3">
                                <div class="col l6 m6 s12">
                                <label for="nome" id="labelForm">RG: </label>
                                <input type="text" name="rg" class="form-control" value="<?php echo $dadosPessoais[0]['nr_rg']; ?>" id="inputEstilo">
                                </div>
                                <div class="col l6 m6 s12">
                                <label for="nome" id="labelForm">Email: </label>
                                <input type="email" name="email" class="form-control" id="inputEstilo" value="<?php echo $dadosPessoais[0]['ds_email']; ?>">
                                </div>
                            </div>
                            <div class="row" id="espacoForm3">
                                <div class="col l6 m6 s12">
                                <label for="nome" id="labelForm">Logradouro: </label>
                                <input type="text" name="rua" class="form-control" id="inputEstilo" value="<?php echo $dadosPessoais[0]['nm_logradouro']; ?>">
                                </div>
                                <div class="col l6 m6 s12">
                                <label for="nome" id="labelForm">Bairro: </label>
                                <input type="text" name="bairro" class="form-control" id="inputEstilo" value="<?php echo $dadosPessoais[0]['nm_bairro']; ?>">
                                </div>
                            </div>
                            <div class="row" id="espacoForm3">
                                <div class="col l4 m4 s12">
                                <label for="nome" id="labelForm">Cidade: </label>
                                <input type="text" name="cidade" class="form-control" id="inputEstilo" value="<?php echo $dadosPessoais[0]['nm_cidade']; ?>">
                                </div>
                                <div class="col l4 m4 s12">
                                <label for="nome" id="labelForm">CEP: </label>
                                <input type="text" name="cep" class="form-control" id="inputEstilo">
                                </div>
                                <div class="col l4 m4 s12">
                                <label for="nome" id="labelForm">Estado: </label>
                                <input type="text" name="uf" class="form-control" id="inputEstilo">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col l6 m6 s6">
                                <button type="submit" class="btn right" name="anterior2" id="botaoAnterior">Anterior</button>
                                </div>
                                <div class="col l6 m6 s6">
                                <button type="submit" class="btn right" name="solicitar" id="botaoProximo3">Próximo</button>
                                </div>
                            </div>
                        </div>
                    </form>
                  </div>
                </div>