<?php

/* EPlanPlanningBundle::templateSansMenu.html.twig */
class __TwigTemplate_e6f1aecccb5c58030b67fd9289679e9cd10ca77bbd89461c194bcc6aff4b9312 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titrePage' => array($this, 'block_titrePage'),
            'print' => array($this, 'block_print'),
            'contenu' => array($this, 'block_contenu'),
            'tete' => array($this, 'block_tete'),
            'description' => array($this, 'block_description'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 6
        $this->displayBlock('titrePage', $context, $blocks);
        echo "</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
    <!-- Bootstrap 3.3.4 -->
    <link href=";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" />
    <!-- Font Awesome Icons -->
    <link href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Ionicons -->
    <link href=\"https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css\" rel=\"stylesheet\" type=\"text/css\" />
    <!-- Theme style -->
    <link href=";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/css/AdminLTE.min.css"), "html", null, true);
        echo " rel=\"stylesheet\" type=\"text/css\" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
        <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body ";
        // line 25
        $this->displayBlock('print', $context, $blocks);
        echo ">
    <div class=\"wrapper\">
      <!-- Main content -->
        ";
        // line 28
        $this->displayBlock('contenu', $context, $blocks);
        // line 118
        echo "    </div><!-- ./wrapper -->

    <!-- AdminLTE App -->
    <script src=";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("dist/js/app.min.js"), "html", null, true);
        echo " type=\"text/javascript\"></script>
  </body>
</html>
";
    }

    // line 6
    public function block_titrePage($context, array $blocks = array())
    {
    }

    // line 25
    public function block_print($context, array $blocks = array())
    {
    }

    // line 28
    public function block_contenu($context, array $blocks = array())
    {
        // line 29
        echo "                <section class=\"invoice\">
        <!-- title row -->
        <div class=\"row\">
          <div class=\"col-xs-12\">
            <h2 class=\"page-header\">
                <i class=\"fa fa-globe\"></i> ";
        // line 34
        $this->displayBlock('tete', $context, $blocks);
        // line 35
        echo "                <small class=\"pull-right\">";
        $this->displayBlock('description', $context, $blocks);
        echo "</small>
            </h2>
          </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class=\"row invoice-info\">
          <div class=\"col-sm-4 invoice-col\">
            From
            <address>
              <strong>Admin, Inc.</strong><br>
              795 Folsom Ave, Suite 600<br>
              San Francisco, CA 94107<br>
              Phone: (804) 123-5432<br/>
              Email: info@almasaeedstudio.com
            </address>
          </div><!-- /.col -->
          <div class=\"col-sm-4 invoice-col\">
            To
            <address>
              <strong>John Doe</strong><br>
              795 Folsom Ave, Suite 600<br>
              San Francisco, CA 94107<br>
              Phone: (555) 539-1037<br/>
              Email: john.doe@example.com
            </address>
          </div><!-- /.col -->
          <div class=\"col-sm-4 invoice-col\">
            <b>Invoice #007612</b><br/>
            <br/>
            <b>Order ID:</b> 4F3S8J<br/>
            <b>Payment Due:</b> 2/22/2014<br/>
            <b>Account:</b> 968-34567
          </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- Table row -->
        <div class=\"row\">
          <div class=\"col-xs-12 table-responsive\">
            <table class=\"table table-striped\">
              <thead>
                <tr>
                  <th>Qty</th>
                  <th>Product</th>
                  <th>Serial #</th>
                  <th>Description</th>
                  <th>Subtotal</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Call of Duty</td>
                  <td>455-981-221</td>
                  <td>El snort testosterone trophy driving gloves handsome</td>
                  <td>\$64.50</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Need for Speed IV</td>
                  <td>247-925-726</td>
                  <td>Wes Anderson umami biodiesel</td>
                  <td>\$50.00</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Monsters DVD</td>
                  <td>735-845-642</td>
                  <td>Terry Richardson helvetica tousled street art master</td>
                  <td>\$10.70</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Grown Ups Blue Ray</td>
                  <td>422-568-642</td>
                  <td>Tousled lomo letterpress</td>
                  <td>\$25.99</td>
                </tr>
              </tbody>
            </table>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </section><!-- /.content -->
        ";
    }

    // line 34
    public function block_tete($context, array $blocks = array())
    {
    }

    // line 35
    public function block_description($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "EPlanPlanningBundle::templateSansMenu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 35,  189 => 34,  101 => 35,  99 => 34,  92 => 29,  89 => 28,  84 => 25,  79 => 6,  71 => 121,  66 => 118,  64 => 28,  58 => 25,  46 => 16,  37 => 10,  30 => 6,  24 => 2,);
    }
}
