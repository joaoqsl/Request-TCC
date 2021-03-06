
      <div class="row conteudo">
        <div class="col l2 m0 s0">
        </div>
        <div class="col l10 m12 s12" id="colunaConteudo">
          <div class="row conteudo2" id="barraComponentes">
            <div class="input-field col l12 m12 s12" id="opcoesComponentes">
              <ul>
                <li>
                  <a href="curso.html" id="componentesOpc2">Curso</a>
                  <a href="disciplina.html" id="componentesOpc3">Disciplina</a>
                  <a href="professor.html" id="componentesOpc1">Professor</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="row conteudo2" id="componentesFerramentas">
            <div class="col l6 m8 s12" id="positionOptions">
              <button id="btnNovoProfessor" class="button waves-effect waves-light modal-trigger is-dark" type="button" href="#modal6" data-target="modal6">Novo professor
                <i class="material-icons right">person</i>
              </button>
              <button type="button" id="btnEditarProfessor" data-target="modal7" class="button waves-effect waves-light modal-trigger is-light" href="#modal7">Editar professor</button>
            </div>
            <div class="input-field col l6 m4 s12" id="inputPesquisar">
              <i class="material-icons prefix fas fa-search"></i>
              <input class="form-control" type="search" placeholder="Pesquisar">
            </div>
          </div>

          <div id="modal6" class="modal modal-fixed-footer">
            <div class="modal-content" id="modalStyle6">
              <button href="#!" class="modal-close waves-effect waves-green" id="agreeButton">Agree</button>
              <div class="container">
                <div class="row">
                  <div class="col l12 m12 s12">
                    <h1 class="center-align title is-3" id="titleModal6">Cadastro de professor</h1>
                  </div>
                </div>

                <div class="row">
                  <div class="col l12 m12 s12">
                    <h1 class="center-align title is-5">Cadastrar professor</h1>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="form-goup">
                      <div class="col l4 m5 s5 hide-on-small-only">
                        <label class="title is-6" id="modalTxt">Nome</label>
                      </div>
                      <div class="col l12 m12 s12 hide-on-large-only hide-on-med-only">
                        <label class="title is-6" id="modalTxt">Nome</label>
                      </div>
                      <div class="col l8 m7 s12">
                        <input type="text" placeholder="Professor" class="input form-control" id="inputCadastroProfessor">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="form-group">
                      <div class="col l4 m4 s4 hide-on-small-only">
                        <label class="title is-6" id="modalTxt2">Curso</label>
                      </div>
                      <div class="col l12 m12 s12 hide-on-large-only hide-on-med-only">
                        <label class="title is-6" id="modalTxt2">Curso</label>
                      </div>
                      <div class="col l8 m8 s12">
                        <select class="form-control">
                          <option>Desenvolvimento de Sistemas</option>
                          <option>Manutenção e suporte em informática</option>
                          <option>Enfermagem</option>
                          <option>Edificações</option>
                          <option>Turismo receptivo</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="form-group">
                      <div class="col l6 m6 s6 hide-on-small-only">
                        <label class="title is-6" id="modalTxt2">Módulo</label>
                      </div>
                      <div class="col l12 m12 s12 hide-on-large-only hide-on-med-only">
                        <label class="title is-6" id="modalTxt2">Módulo</label>
                      </div>
                      <div class="col l6 m6 s12">
                        <select class="form-control">
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="form-group">
                      <div class="col l5 m5 s5 hide-on-small-only">
                        <label class="title is-6" id="modalTxt2">Disciplina</label>
                      </div>
                      <div class="col l12 m12 s12 hide-on-large-only hide-on-med-only">
                        <label class="title is-6" id="modalTxt2">Disciplina</label>
                      </div>
                      <div class="col l7 m7 s12">
                        <select class="form-control">
                          <option>Programação WEB I</option>
                          <option>Banco de dados II</option>
                          <option>Desenvolvimento de sistemas</option>
                          <option>Programção de aplicativos mobile II</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12 center-align">
                    <button class="button is-light waves-effect waves-light">Adicionar disciplina
                      <i class="fas fa-plus" id="plusButton"></i>
                    </button>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12" id="tableStyle">
                    <div class="col l12 m12 s12">
                      <div class="col l8 m8 s8" id="tableTitle">
                        <b>Disciplina</b>
                      </div>
                      <div class="col l4 m4 s4" id="tableTitle">
                        <b>Anular</b>
                      </div>
                    </div>
                    <div class="col l12 m12 s12" id="tableStyleTop">
                      <div class="row table valign-wrapper" id="tableRow">
                        <div class="col l9 m9 s8">
                          <p id="textoTable">Banco de dados II</p>
                        </div>
                        <div class="col l2 m2 s2">
                          <button class="button is-white waves-effect waver-light" id="botaoAnularTable" title="Anular curso">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                      <div class="row table valign-wrapper" id="tableRow">
                        <div class="col l9 m9 s8">
                          <p id="textoTable">Segurança de Sistemas de Informação</p>
                        </div>
                        <div class="col l2 m2 s2">
                          <button class="button is-white waves-effect waver-light" id="botaoAnularTable" title="Anular curso">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                      <div class="row table valign-wrapper" id="tableRow">
                        <div class="col l9 m9 s8">
                          <p id="textoTable">Desenvolvimento do Trabalho de Conclusão de Curso (TCC) em Desenvolvimento de Sistemas</p>
                        </div>
                        <div class="col l2 m2 s2">
                          <button class="button is-white waves-effect waver-light" id="botaoAnularTable" title="Anular curso">
                            <i class="fas fa-times"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="modal-footer" id="modalFooStyle6">
              <button type="button" class="button is-dark" id="modalButton6Cad">Cadastrar</button>
              <button type="button" class="button is-light" id="modalButton6" onclick="javascript:location.href='professor.html'">Cancelar</button>
            </div>

          </div>

          <div id="modal7" class="modal modal-fixed-footer">
            <div class="modal-content" id="modalStyle7">
              <button href="#!" class="modal-close waves-effect waves-green" id="agreeButton">Agree</button>
              <div class="container">
                <div class="row">
                  <div class="col l12 m12 s12">
                    <h1 class="center-align title is-3" id="titleModal7">Editar Professor</h1>
                  </div>
                </div>

                <div class="row">
                  <div class="col l12 m12 s12">
                    <h1 class="center-align title is-5">Buscar professor</h1>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="input-field col l12 m12 s12" id="inputPesquisar">
                      <i class="material-icons prefix fas fa-search"></i>
                      <input class="form-control" type="search" placeholder="Pesquisar professor">
                    </div>
                  </div>
                </div>

                <hr style="height:1px; border:none; color:#ccc; background-color:#ccc; margin-top: 0px; margin-bottom: 1.5rem;"/>

                <div class="row">
                  <div class="col l12 m12 s12">
                    <h1 class="center-align title is-5">Alterar professor</h1>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="col l10 m10 s10">
                      <div class="form-goup">
                        <input type="text" placeholder="Nome do professor" class="input form-control" id="inputCadastroProfessor" disabled>
                      </div>
                    </div>
                    <div class="col m1 m1 s1">
                      <button class="button is-light waves-effect waves-light" id="modalBtn">
                          <i class="fas fa-pen"></i>
                      </button>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12 center-align">
                    <button class="button is-light waves-effect waves-light">Nova disciplina
                      <i class="fas fa-plus" id="plusButton"></i>
                    </button>
                  </div>
                </div>

                <div class="row">
                  <div class="col l12 m12 s12">
                    <h1 class="center-align title is-6">Disciplinas</h1>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12" id="tableStyle">
                    <div class="col l12 m12 s12">
                      <div class="col l8 m8 s8" id="tableTitle">
                        <b>Disciplina</b>
                      </div>
                      <div class="col l4 m4 s4" id="tableTitle">
                        <b>Editar</b>
                      </div>
                    </div>
                    <div class="col l12 m12 s12" id="tableStyleTop">
                      <div class="row table valign-wrapper" id="tableRow">
                        <div class="col l9 m9 s9">
                          <p id="textoTable">Banco de Dados II</p>
                        </div>
                        <div class="col l2 m2 s2">
                          <button class="button is-white waves-effect waver-light" id="botaoEditarProfessor" title="Editar professor">
                            <i class="fas fa-pen"></i>
                          </button>
                        </div>
                        <div class="col l1 m1 s1">
                          <i class="fas fa-circle" id="notifNegado2" readonly></i>
                        </div>
                      </div>
                      <div class="row table valign-wrapper" id="tableRow">
                        <div class="col l9 m9 s9">
                          <p id="textoTable">Segurança de Sistemas de Informação</p>
                        </div>
                        <div class="col l2 m2 s2">
                          <button class="button is-white waves-effect waver-light" id="botaoEditarProfessor" title="Editar professor">
                            <i class="fas fa-pen"></i>
                          </button>
                        </div>
                        <div class="col l1 m1 s1">
                          <i class="fas fa-circle" id="notifAceito2" readonly></i>
                        </div>
                      </div>
                      <div class="row table valign-wrapper" id="tableRow">
                        <div class="col l9 m9 s9">
                          <p id="textoTable">Desenvolvimento do Trabalho de Conclusão de Curso (TCC) em Desenvolvimento de Sistemas</p>
                        </div>
                        <div class="col l2 m2 s2">
                          <button class="button is-white waves-effect waver-light" id="botaoEditarProfessor" title="Editar professor">
                            <i class="fas fa-pen"></i>
                          </button>
                        </div>
                        <div class="col l1 m1 s1">
                          <i class="fas fa-circle" id="notifAceito2" readonly></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="form-group">
                      <div class="col l4 m4 s4">
                        <label class="title is-6" id="modalTxt2">Curso</label>
                      </div>
                      <div class="col l8 m8 s8">
                        <select class="form-control" disabled>
                          <option>Desenvolvimento de Sistemas</option>
                          <option>Manutenção e suporte em informática</option>
                          <option>Enfermagem</option>
                          <option>Edificações</option>
                          <option>Turismo receptivo</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="form-group">
                      <div class="col l6 m6 s6">
                        <label class="title is-6" id="modalTxt2">Módulo</label>
                      </div>
                      <div class="col l6 m6 s6">
                        <select class="form-control" disabled>
                          <option>1</option>
                          <option>2</option>
                          <option>3</option>
                          <option>4</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="form-group">
                      <div class="col l5 m5 s5">
                        <label class="title is-6" id="modalTxt2">Disciplina</label>
                      </div>
                      <div class="col l7 m7 s7">
                        <select class="form-control" disabled>
                          <option>Programação WEB I</option>
                          <option>Banco de dados II</option>
                          <option>Desenvolvimento de sistemas</option>
                          <option>Programção de aplicativos mobile II</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12">
                    <div class="form-group">
                      <div class="col l6 m6 s6">
                        <label for="modulo" class="title is-6">Situação</label>
                      </div>
                      <div class="col l6 m6 s6">
                        <select class="form-control" disabled>
                          <option>Ativado</option>
                          <option>Desativado</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col l1 m2 s0">
                  </div>
                  <div class="col l10 m8 s12 center-align">
                    <button type="button" class="button is-dark" id="btnSalvarEdit" disabled>Cadastrar</button>
                  </div>
                </div>

              </div>
            </div>
            <div class="modal-footer" id="modalFooStyle7">
              <button type="button" class="button is-dark" id="modalButton7Cad">Salvar</button>
              <button type="button" class="button is-light" id="modalButton7" onclick="javascript:location.href='professor.html'">Cancelar</button>
            </div>

          </div>

          <div class="row conteudo2" id="colorTitleComponentes">
            <div class="row conteudo2" id="titulosComponentes">
              <div class="col l2 m3 s3 hide-on-small-only">
                <input type="text" value="Professor" readonly id="estiloTitulos3">
              </div>
              <div class="col l4 m4 s4 hide-on-small-only">
                <input type="text" value="Curso" readonly id="estiloTitulos3">
              </div>
              <div class="col l3 m3 s3 hide-on-small-only">
                <input type="text" value="Disciplina" readonly id="estiloTitulos3">
              </div>
              <div class="col l2 m2 s1 hide-on-small-only">
                <input type="text" value="Módulo" readonly id="estiloTitulos3">
              </div>
              <div class="col l0 m0 s12 hide-on-large-only hide-on-med-only">
                <input type="text" class="center-align" value="Lista de professores" readonly id="estiloTitulos3">
              </div>
            </div>
          </div>

          <div class="row professor">
            <div class="col l12 m12 s12" id="colProfessor">
              <div class="row conteudo" id="linhaProfessor">
                <div class="col l12 m12 s12">
                  <ul>
                    <li>
                      <a href="#">
                        <div class="row historico" id="conteudoProfessor">
                          <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only">
                            <input type="text" class="has-text-black has-text-weight-bold" value="Professor:" readonly id="estiloTitulos3">
                          </div>
                          <div class="col l2 m3 s8" id="estiloInputProfessor">
                            <input type="text" value="João Paulo" readonly>
                          </div>

                          <div class="col l0 m0 s3 hide-on-large-only hide-on-med-only">
                            <input type="text" class="has-text-black has-text-weight-bold" value="Curso:" readonly id="estiloTitulos3">
                          </div>
                          <div class="col l4 m4 s9" id="estiloInputProfessor">
                            <input type="text" value="Desenvolvimento de sistemas" readonly>
                          </div>

                          <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only">
                            <input type="text" class="has-text-black has-text-weight-bold" value="Disciplina:" readonly id="estiloTitulos3">
                          </div>
                          <div class="col l3 m3 s8" id="estiloInputProfessor">
                            <input type="text" value="Banco de dados II" readonly>
                          </div>

                          <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only">
                            <input type="text" class="has-text-black has-text-weight-bold" value="Módulo:" readonly id="estiloTitulos3">
                          </div>
                          <div class="col l1 m1 s8" id="estiloInputProfessor">
                            <input type="number" value="2" readonly>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="row historico" id="conteudoProfessor">
                          <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only">
                            <input type="text" class="has-text-black has-text-weight-bold" value="Professor:" readonly id="estiloTitulos3">
                          </div>
                          <div class="col l2 m3 s8" id="estiloInputProfessor">
                            <input type="text" value="Matheus Costa" readonly>
                          </div>

                          <div class="col l0 m0 s3 hide-on-large-only hide-on-med-only">
                            <input type="text" class="has-text-black has-text-weight-bold" value="Curso:" readonly id="estiloTitulos3">
                          </div>
                          <div class="col l4 m4 s9" id="estiloInputProfessor">
                            <input type="text" value="Desenvolvimento de sistemas" readonly>
                          </div>

                          <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only">
                            <input type="text" class="has-text-black has-text-weight-bold" value="Disciplina:" readonly id="estiloTitulos3">
                          </div>
                          <div class="col l3 m3 s8" id="estiloInputProfessor">
                            <input type="text" value="Banco de dados II" readonly>
                          </div>

                          <div class="col l0 m0 s4 hide-on-large-only hide-on-med-only">
                            <input type="text" class="has-text-black has-text-weight-bold" value="Módulo:" readonly id="estiloTitulos3">
                          </div>
                          <div class="col l1 m1 s8" id="estiloInputProfessor">
                            <input type="number" value="2" readonly>
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