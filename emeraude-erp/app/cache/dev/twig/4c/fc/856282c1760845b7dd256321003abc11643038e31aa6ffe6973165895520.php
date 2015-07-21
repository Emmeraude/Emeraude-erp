<?php

/* EPlanPlanningBundle:Division:manageDivision.html.twig */
class __TwigTemplate_4cfc856282c1760845b7dd256321003abc11643038e31aa6ffe6973165895520 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("EPlanPlanningBundle::template.html.twig");

        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'explicationTitrePage' => array($this, 'block_explicationTitrePage'),
            'pageCentrale' => array($this, 'block_pageCentrale'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "EPlanPlanningBundle::template.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_titrePage($context, array $blocks = array())
    {
        echo "Gestion";
    }

    // line 3
    public function block_explicationTitrePage($context, array $blocks = array())
    {
    }

    // line 4
    public function block_pageCentrale($context, array $blocks = array())
    {
        // line 5
        echo "    
            <div class=\"col-md-3\">
              <a href=\"compose.html\" class=\"btn btn-primary btn-block margin-bottom\">Editer</a>
              <div class=\"box box-solid\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">D&eacute;partements</h3>
                  <div class=\"box-tools\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                  </div>
                </div>
                <div class=\"box-body no-padding\">
                  <ul class=\"nav nav-pills nav-stacked\">
                    <li class=\"active\"><a href=\"#\"><i class=\"fa fa-inbox\"></i> Maths-Info <span class=\"label label-primary pull-right\">4</span></a></li>
                    <li><a href=\"#\"><i class=\"fa fa-envelope-o\"></i> Physique-Chimie</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-file-text-o\"></i> Biologie</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-filter\"></i> G&eacute;osciences <span class=\"label label-warning pull-right\">65</span></a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /. box -->
              <div class=\"box box-solid\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Menu</h3>
                  <div class=\"box-tools\">
                    <button class=\"btn btn-box-tool\" data-widget=\"collapse\"><i class=\"fa fa-minus\"></i></button>
                  </div>
                </div>
                <div class=\"box-body no-padding\">
                  <ul class=\"nav nav-pills nav-stacked\">
                    <li><a href=\"#\"><i class=\"fa fa-circle-o text-red\"></i> Charger les Departements</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o text-yellow\"></i> Editer une Grille De programme</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o text-light-blue\"></i> Reconduire une Grille</a></li>
                    <li><a href=\"#\"><i class=\"fa fa-circle-o text-light-blue\"></i> Reconduire toutes les Grilles</a></li>
                  </ul>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
            <div class=\"col-md-9\">
              <div class=\"box box-primary\">
                <div class=\"box-header with-border\">
                  <h3 class=\"box-title\">Liste Des Parcourts Type</h3>
                  <div class=\"box-tools pull-right\">
                    <div class=\"has-feedback\">
                      <input type=\"text\" class=\"form-control input-sm\" placeholder=\"Search Mail\" />
                      <span class=\"glyphicon glyphicon-search form-control-feedback\"></span>
                    </div>
                  </div><!-- /.box-tools -->
                </div><!-- /.box-header -->
                <div class=\"box-body no-padding\">
                  <div class=\"mailbox-controls\">
                    <!-- Check all button -->
                    <button class=\"btn btn-default btn-sm checkbox-toggle\"><i class=\"fa fa-square-o\"></i></button>
                    <div class=\"btn-group\">
                      <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash-o\"></i></button>
                      <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-reply\"></i></button>
                      <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-share\"></i></button>
                    </div><!-- /.btn-group -->
                    <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-refresh\"></i></button>
                    <div class=\"pull-right\">
                      1-50/200
                      <div class=\"btn-group\">
                        <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-chevron-left\"></i></button>
                        <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-chevron-right\"></i></button>
                      </div><!-- /.btn-group -->
                    </div><!-- /.pull-right -->
                  </div>
                  <div class=\"table-responsive mailbox-messages\">
                    <table class=\"table table-hover table-striped\">
                      <tbody>
                        <tr>
                          <td><input type=\"checkbox\" /></td>
                          <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"></td>
                          <td class=\"mailbox-date\">5 mins ago</td>
                        </tr>
                        <tr>
                          <td><input type=\"checkbox\" /></td>
                          <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star-o text-yellow\"></i></a></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"><i class=\"fa fa-paperclip\"></i></td>
                          <td class=\"mailbox-date\">28 mins ago</td>
                        </tr>
                        <tr>
                          <td><input type=\"checkbox\" /></td>
                          <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star-o text-yellow\"></i></a></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"><i class=\"fa fa-paperclip\"></i></td>
                          <td class=\"mailbox-date\">11 hours ago</td>
                        </tr>
                        <tr>
                          <td><input type=\"checkbox\" /></td>
                          <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"></td>
                          <td class=\"mailbox-date\">15 hours ago</td>
                        </tr>
                        <tr>
                          <td><input type=\"checkbox\" /></td>
                          <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"><i class=\"fa fa-paperclip\"></i></td>
                          <td class=\"mailbox-date\">Yesterday</td>
                        </tr>
                        <tr>
                          <td><input type=\"checkbox\" /></td>
                          <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star-o text-yellow\"></i></a></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"><i class=\"fa fa-paperclip\"></i></td>
                          <td class=\"mailbox-date\">2 days ago</td>
                        </tr>
                        <tr>
                          <td><input type=\"checkbox\" /></td>
                          <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star-o text-yellow\"></i></a></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"><i class=\"fa fa-paperclip\"></i></td>
                          <td class=\"mailbox-date\">2 days ago</td>
                        </tr>
                        <tr>
                          <td><input type=\"checkbox\" /></td>
                          <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"></td>
                          <td class=\"mailbox-date\">2 days ago</td>
                        </tr>
                        <tr>
                          <td><input type=\"checkbox\" /></td>
                          <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"></td>
                          <td class=\"mailbox-date\">2 days ago</td>
                        </tr>
                        <tr>
                          <td><input type=\"checkbox\" /></td>
                          <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star-o text-yellow\"></i></a></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"></td>
                          <td class=\"mailbox-date\">2 days ago</td>
                        </tr>
                        <tr>
                          <td><input type=\"checkbox\" /></td>
                          <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star-o text-yellow\"></i></a></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"><i class=\"fa fa-paperclip\"></i></td>
                          <td class=\"mailbox-date\">4 days ago</td>
                        </tr>
                        <tr>
                          <td><input type=\"checkbox\" /></td>
                          <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"></td>
                          <td class=\"mailbox-date\">12 days ago</td>
                        </tr>
                        <tr>
                          <td><input type=\"checkbox\" /></td>
                          <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star-o text-yellow\"></i></a></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"><i class=\"fa fa-paperclip\"></i></td>
                          <td class=\"mailbox-date\">12 days ago</td>
                        </tr>
                        <tr>
                          <td><input type=\"checkbox\" /></td>
                          <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"><i class=\"fa fa-paperclip\"></i></td>
                          <td class=\"mailbox-date\">14 days ago</td>
                        </tr>
                        <tr>
                          <td><input type=\"checkbox\" /></td>
                          <td class=\"mailbox-star\"><a href=\"#\"><i class=\"fa fa-star text-yellow\"></i></a></td>
                          <td class=\"mailbox-name\"><a href=\"read-mail.html\">Alexander Pierce</a></td>
                          <td class=\"mailbox-subject\"><b>AdminLTE 2.0 Issue</b> - Trying to find a solution to this problem...</td>
                          <td class=\"mailbox-attachment\"><i class=\"fa fa-paperclip\"></i></td>
                          <td class=\"mailbox-date\">15 days ago</td>
                        </tr>
                      </tbody>
                    </table><!-- /.table -->
                  </div><!-- /.mail-box-messages -->
                </div><!-- /.box-body -->
                <div class=\"box-footer no-padding\">
                  <div class=\"mailbox-controls\">
                    <!-- Check all button -->
                    <button class=\"btn btn-default btn-sm checkbox-toggle\"><i class=\"fa fa-square-o\"></i></button>                    
                    <div class=\"btn-group\">
                      <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-trash-o\"></i></button>
                      <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-reply\"></i></button>
                      <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-share\"></i></button>
                    </div><!-- /.btn-group -->
                    <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-refresh\"></i></button>
                    <div class=\"pull-right\">
                      1-50/200
                      <div class=\"btn-group\">
                        <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-chevron-left\"></i></button>
                        <button class=\"btn btn-default btn-sm\"><i class=\"fa fa-chevron-right\"></i></button>
                      </div><!-- /.btn-group -->
                    </div><!-- /.pull-right -->
                  </div>
                </div>
              </div><!-- /. box -->
            </div><!-- /.col -->
";
    }

    public function getTemplateName()
    {
        return "EPlanPlanningBundle:Division:manageDivision.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 5,  41 => 4,  36 => 3,  30 => 2,);
    }
}
