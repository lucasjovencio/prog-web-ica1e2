<?php include("header.php"); ?>
        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Usuarios</span>
              <div class="count"><?php echo($qtnUs); ?></div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Jogadores Mulheres</span>
              <div class="count"><?php echo($qtnM); ?></div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Jogadores Homens</span>
              <div class="count"><?php echo($qtnM); ?></div>
            </div>
            <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Quantidade de acessos Dashboard</span>
              <div class="count"><?php echo($qtnAc); ?></div>
            </div>
          </div>
          <!-- /top tiles -->

          <div class="row">
                  
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="col-md-9 col-sm-9 col-xs-12">
                  <div class="x_content">
                    <div id="echart_line" style="width: 100%; height:340px;"></div>
                  </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2>Progresso de Cadastros</h2>
                    <div class="clearfix"></div>
                  </div>

                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Cadastro de Mapas</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Cadastro de Recursos</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-6">
                    <div>
                      <p>Cadastro de Interação</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Cadastro de Ação</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
                        </div>
                      </div>
                    </div>
                    <div>
                      <p>Cadastro de Situações</p>
                      <div class="">
                        <div class="progress progress_sm" style="width: 76%;">
                          <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="90"></div>
                        </div>
                      </div>
                    </div>  
                  </div>

                </div>

                <div class="clearfix"></div>
              </div>
            </div>

          </div>
          <br />

          <div class="row">

          <div class="row">
            <div class="col-md-6 col-sm-4 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Implementações de Novidades<small>Sessões</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">

                    <ul class="list-unstyled timeline widget">
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                                              <a>[ATUALIZAÇÃO] Novos mundos para explorar</a>
                                          </h2>
                            <div class="byline">
                              <span>10 horas jul</span> by <a>Grupo de Mapas</a>
                            </div>
                            <p class="excerpt">
                                Implementação de novos planetas...
                                <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                                              <a>[ATUALIZAÇÃO] Novos recursos</a>
                                          </h2>
                            <div class="byline">
                              <span>10 horas jul</span> by <a>Grupo de Recursos</a>
                            </div>
                            <p class="excerpt">
                                Criação de novos recursos...
                                <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="block">
                          <div class="block_content">
                            <h2 class="title">
                                              <a>[ATUALIZAÇÃO] Novas interações</a>
                                          </h2>
                            <div class="byline">
                              <span>10 horas jul</span> by <a>Grupo de Interação</a>
                            </div>
                            <p class="excerpt">
                                Criação de novas interações...
                                <a>Read&nbsp;More</a>
                            </p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>

              
            </div>
            <!-- Start to do list -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="x_panel">
                    <div class="x_title">
                      <h2>To Do Lista <small>Correções de Problemas</small></h2>
                      <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                      </ul>
                      <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                      <div class="">
                        <ul class="to_do">
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Falta de recursos no Planeta Marte, coordenadas [9,2]</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Error na validação de registro na interface de Recursos</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Excesso de recursos no Planeta Lua, coordenadas [10,5]</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Backup do servirdor de aplicação</p>
                          </li>
                          <li>
                            <p>
                              <input type="checkbox" class="flat"> Backup do servirdor de Banco de Dados</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End to do list -->
            </div>
          </div>
        </div>
        <!-- /page content -->

<?php include("footer.php"); ?>
