
      <div class="row conteudo">
        <div class="col l2 m0 s0">
        </div>
        <div class="col l10 m12 s12" id="colunaConteudo">
          <div class="row conteudo2" id="linhaHeader">
            <div class="input-field col l6 m7 s12">
              <b id="oFuncionario">Funcionário</b>
              <button type="button" id="btnCreate" data-target="modal1" class="btn waves-effect waves-light modal-trigger" href="#modal1">Create</button>
            </div>
            <div class="col l1 m0 s0">
            </div>
            <div class="input-field col l5 m5 s12" id="inputPesquisar">
              <i class="material-icons prefix fas fa-search"></i>
              <input class="form-control" type="search" placeholder="Pesquisar">
            </div>

            <div id="modal1" class="modal modal-fixed-footer">
              <div class="modal-content" id="modalStyle">
                <button href="#!" class="modal-close waves-effect waves-green" id="agreeButton">Agree</button>
                <div class="container">
                  <div class="row">
                    <div class="col l12 m12 s12">
                      <h1 class="center-align title is-3" id="titleModal">Cadastro de funcionário</h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col l1 m2 s0">
                    </div>
                    <div class="col l10 m8 s12">
                      <div class="form-goup">
                        <label for="Nome" class="title is-5">Nome</label>
                        <input type="text" placeholder="Nome do funcionário" class="input form-control" id="inputCadastroFuncionario">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col l1 m2 s0">
                    </div>
                    <div class="col l10 m8 s12">
                      <div class="form-goup">
                        <label for="Nome" class="title is-5">E-mail</label>
                        <input type="email" placeholder="exemplo@provedor.com" class="input form-control" id="inputCadastroFuncionario">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col l1 m2 s0">
                    </div>
                    <div class="col l10 m8 s12">
                      <div class="form-goup">
                        <label for="Nome" class="title is-5">Nível</label>
                        <select class="form-control" id="selectFuncionario">
                          <option>Secretário</option>
                          <option>Administrador</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer" id="modalFooStyle">
                <button type="button" class="button is-primary" id="modalButton">Cadastrar</button>
                <button type="button" class="button is-light" id="modalButton" onclick="javascript:location.href='pageFuncionario.html'">Cancelar</button>
              </div>
            </div>

          </div>

          <div class="row conteudo2">

            <div class="col l6 m6 s12" id="positionActDes">
              <b id="acoesText">Ações: </b>
              <button type="button" id="btnActDes">
                <i class="fas fa-user" id="iconActDes"></i>
              </button>
              <button type="button" id="btnActDes">
                <i class="fas fa-user-slash" id="iconActDes"></i>
              </button>
            </div>

            <div class="input-field col l3 m6 s12 right">
              <select class="form-control">
                <option>Todos</option>
                <option>Secretários</option>
                <option>Administradores</option>
              </select>
            </div>

          </div>

          <div class="row conteudo2" id="titulosEmails2">
            <div class="col l1 m1 s1">
              <label id="checkboxTitulos2">
                <input type="checkbox" class="filled-in" onClick="toggle(this)" id="checkboxTitleStyle2">
                <span></span>
              </label>
            </div>
            <div class="col l3 m3 s3 hide-on-small-only">
              <input type="text" value="Nome" readonly id="estiloTitulos2">
            </div>
            <div class="col l3 m3 s3 hide-on-small-only">
              <input type="text" value="e-mail" readonly id="estiloTitulos2">
            </div>
            <div class="col l2 m2 s2 hide-on-small-only">
              <input type="text" value="Nível" readonly id="estiloTitulos2">
            </div>
            <div class="col l2 m2 s2 hide-on-small-only">
              <input type="text" value="Situação" readonly id="estiloTitulos2">
            </div>
          </div>
          <div class="row funcionarios">
            <div class="col l12 m12 s12" id="colListaFuncionarios">
              <div class="row conteudo">
                <div class="col l12 m12 s12">
                  <ul>
                    <li>
                      <a href="#">
                        <div class="row lista" id="conteudoLista">
                          <div class="col l1 m1 s12">
                            <label id="checkboxLinha2">
                              <input type="checkbox" class="filled-in" name="select" id="checkboxStyle2">
                              <span></span>
                            </label>
                          </div>
                          <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only" id="estiloInputFuncionario">
                            <input type="text" value="Nome:" id="titleEmail2" readonly>
                          </div>
                          <div class="col l3 m3 s8" id="estiloInputFuncionario">
                            <input type="text" value="Fylipe Pablo" id="nomeInput" readonly>
                          </div>

                          <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only" id="estiloInputFuncionario">
                            <input type="text" value="e-mail:" id="titleEmail2" readonly>
                          </div>
                          <div class="col l3 m3 s8" id="estiloInputFuncionario">
                            <input type="text" value="fylipe@etec.sp.gov.br" id="emailInput" readonly>
                          </div>

                          <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only" id="estiloInputFuncionario">
                            <input type="text" value="Nível:" id="titleEmail2" readonly>
                          </div>
                          <div class="col l2 m2 s8" id="estiloInputFuncionario">
                            <input type="text" value="Administrador" id="nivelInput" readonly>
                          </div>

                          <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only" id="estiloInputFuncionario">
                            <input type="text" value="Situação:" id="titleEmail2" readonly>
                          </div>
                          <div class="col l2 m2 s8" id="estiloInputFuncionario">
                            <input type="text" value="Ativado" id="situacaoInput" readonly>
                          </div>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>