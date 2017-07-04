<?php include("header.php"); ?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Perfil <?php echo($nome); ?></h3>
      </div>

    </div>
    
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Atividades do Administrador <small>Gráfico de Atividades</small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
              <li>&nbsp;</li>
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
    
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
              <div class="profile_img">
                <div id="crop-avatar">
                  <!-- Current avatar -->
                  <img class="img-responsive avatar-view" src="images/img.png" alt="Avatar" title="Change the avatar">
                </div>
              </div>
              <h3><?php echo($nome); ?></h3>

              <ul class="list-unstyled user_data">
                <li><i class="fa fa-map-marker user-profile-icon"></i> Espírito Santo, Brasil
                </li>

                <li>
                  <i class="fa fa-briefcase user-profile-icon"></i> Sistemas de Informação
                </li>

                <li class="m-top-xs">
                  <i class="fa fa-external-link user-profile-icon"></i>
                  <a href="www.linkedin.com/in/..." target="_blank">www.linkedin.com/in/...</a>
                </li>
              </ul>

              <a class="btn btn-success"><i class="fa fa-edit m-right-xs"></i>Editar Perfil</a>
              <br />

              <!-- start skills -->
              <h4>Skills</h4>
              <ul class="list-unstyled user_data">
                <li>
                  <p>Web Applications</p>
                  <div class="progress progress_sm">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="90"></div>
                  </div>
                </li>
                <li>
                  <p>DBA Manager</p>
                  <div class="progress progress_sm">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="70"></div>
                  </div>
                </li>
                <li>
                  <p>Automation & Testing</p>
                  <div class="progress progress_sm">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="30"></div>
                  </div>
                </li>
                <li>
                  <p>UI / UX</p>
                  <div class="progress progress_sm">
                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                  </div>
                </li>
              </ul>
              <!-- end of skills -->

            </div>
            <div class="col-md-9 col-sm-9 col-xs-12">
              
              <div class="profile_title">
              <!-- pie chart -->
                <div class="col-md-12 col-sm-6 col-xs-12">
                  <div class="col-md-6">
                    <h2>Cadastros efetuados pelo administrador</h2>
                  </div>
                  <div class="x_panel">
                    <div class="x_content2">
                      <div id="graph_donut" style="width:100%; height:300px;"></div>
                    </div>
                  </div>
                </div>
                <!-- /Pie chart -->
              </div>

              

              <div class="" role="tabpanel" data-example-id="togglable-tabs">
                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                  <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Atividades Recentes</a>
                  </li>
                  <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Perfil</a>
                  </li>
                </ul>
                <div id="myTabContent" class="tab-content">
                  <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                    <!-- start recent activity -->
                    <ul class="messages">
                      <li>
                        <img src="images/img.png" class="avatar" alt="Avatar">
                        <div class="message_date">
                          <h3 class="date text-info">24</h3>
                          <p class="month">Jun</p>
                        </div>
                        <div class="message_wrapper">
                          <h4 class="heading">Teste de UI/UX</h4>
                          <blockquote class="message">Analize de UI/UX  da interface ADMIN concluida. documento com analize disponivel para download.</blockquote>
                          <br />
                          <p class="url">
                            <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                            <a href="#"><i class="fa fa-paperclip"></i> Documento de analizer analize.doc </a>
                          </p>
                        </div>
                      </li>
                      <li>
                        <img src="images/img.png" class="avatar" alt="Avatar">
                        <div class="message_date">
                          <h3 class="date text-error">21</h3>
                          <p class="month">Jun</p>
                        </div>
                        <div class="message_wrapper">
                          <h4 class="heading">Teste de performance</h4>
                          <blockquote class="message">Analize de performance do  mapa Marte concluida. documento com analize disponivel para download.</blockquote>
                          <br />
                          <p class="url">
                            <span class="fs1" aria-hidden="true" data-icon=""></span>
                            <a href="#"><i class="fa fa-paperclip"></i> Documento de analizer analize.doc </a>
                          </p>
                        </div>
                      </li>
                      
                      <li>
                        <img src="images/img.png" class="avatar" alt="Avatar">
                        <div class="message_date">
                          <h3 class="date text-error">21</h3>
                          <p class="month">Jun</p>
                        </div>
                        <div class="message_wrapper">
                          <h4 class="heading">Processo de criação</h4>
                          <blockquote class="message">Desenvolvimento de novo Mapa.</blockquote>
                          <br />
                          <p class="url">
                            <span class="fs1" aria-hidden="true" data-icon=""></span>
                            <a href="#"><i class="fa fa-paperclip"></i> Especificação de requisitos do mapa requisitos-mapa.doc </a>
                          </p>
                        </div>
                      </li>

                    </ul>
                    <!-- end recent activity -->

                  </div>

                  <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                    <p>Breve descrição do Administrador</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->
<?php include("footer.php"); ?>