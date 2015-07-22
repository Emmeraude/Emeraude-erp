<?php

<<<<<<< HEAD
/* WebProfilerBundle:Collector:exception.html.twig */
=======
/* @WebProfiler/Collector/exception.html.twig */
>>>>>>> aa0b05b072db46d2f39ba1fea9d611a49b364e91
class __TwigTemplate_92c779ed4f7f3d599de7038edbe65631cb56921d3d363064e06ef695cf932dea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("@WebProfiler/Profiler/layout.html.twig");

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        // line 13
        echo "<span class=\"label\">
    <span class=\"icon\"><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACoAAAAeCAQAAADwIURrAAAEQ0lEQVR42sWVf0xbVRTHKSCUUNEsWdhE3BT3QzNMjHEydLz+eONnGS2sbBSkKBA7Nn6DGwb+EByLbMbFKEuUiG1kTrFgwmCODZaZqaGJEQYSMXQJMJFBs/pGlV9tv97bAukrZMD+8Z2k957vOfdzz7s579brwU+jSP2mojnmNgOXxQ4pLqa90SjyetjHEKQ6I7MwWGkyi+qMIWjDQPgUiuNMfBTf4kxlkfDZELJSynIMHmwsVyldNxaCC7soUjV/fcTawxmvjCscS6AUR9cdzsgZu0YVCwyiLV/uhGB9UFFmG4O0OXM7inEQCpTf6ZY7nEjbeCdKkUSs9O73iTYGmW0QrQfprWclBNHSAxWegD+ECEXmp0MU2nQLajxJFCH5VTfdYiBx6Fl4r6POYj0FcCcQAoFrG4T1fkS14VpscyEgwLaRU1Qr1rtqhY9mb7L6stCtuooIyd8JnSUvEkCoepiclg1y+C3HHx3NpoBZFQKWtQAoqaYeRijxfAvSxXYGWbXwX074oIwmFJ5FIMLlVjrvT4K/JlfKSTlNLkTf5VOtKwtCrUJ2VzKdXoaAH9VUk1sRTgiPlzdSr/IrbCbAvMi4SyWpprfoOd4sxyZEsDYarqrHM6wTz1qxu6CNzkq/xtMJY3QmWTDuLbtAZ1I7XkuR6V5pbCAqjNUIJlB1BwOx/T1DDpf678DxI5XDysUP8r4xO3bOOZu7USRbcOLnftCm3HOhrlWwJEoNh6TWmMn6VrLplDE/5/XsHV7aXxchNlorgys1Sz0Zb62YoGP5ZMzskhY9WzlKRy0XN7OkIdfwWeI/DJYs6abXUO3pybyZOnOCPd72xcAlPU4y2JjhMNKgky8ccMicZR360wv78Q4+4Vroidz+HEpkbhjKYmt3FUMG43iVtW5q7EPSLtiO8MES5wtbtKfa8/lLNHZPSIY9nue3Hs+oieHozHoeNTgJiaulfMFmTK9WRdW0+arEwde6rp+dWi035x4UCMNTEC02P14wn3/3PrsisWgUKrXOXVF2QH5sxDPvgOO0xXIOz/OuFzwGCWptHX2/XZtwT5ZbJ15i/Jj6ZaW+UNgRw9rcc7r/6htAG6oRhSCP6w4i7IAYh1HHryGz07AZAmYXk0VsCwSdW5N/52fgfaQSYBgCV70G4UvQiZ6vFjuWXq1JyguBT+GzGeWx455xJCJwjcsa4g23lJiu+/+h0R6I+IeCRiXM87rPzm+0fFssz0+YR9Ta0H3ZZl77W4/yNrk4XjDj7mebsW9taHjDDfdFP/W0DLp9ojOc7vLP7vGmq9izNnQLtB+PLZ6fo3kAxTihM7mO4Ijtj2YooW0edJ20BDoTchC8NtQPe/D2XHtvv+kXfIOjeI74RWgZ7OvtXWhAEoKxE8fwLfH70Uoiu/HIev6khdgOMZJxEBEIgR/8EYpXoYQCL2MTvOFH1EjiJ2M/ifivJPwHIs9MRJmsgVwAAAAASUVORK5CYII=\" alt=\"Exception\"></span>
    <strong>Exception</strong>
    <span class=\"count\">
        ";
        // line 17
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception")) {
            // line 18
            echo "            <span>1</span>
        ";
        }
        // line 20
        echo "    </span>
</span>
";
    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        // line 25
        echo "    <h2>Exception</h2>

    ";
        // line 27
        if ((!$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception"))) {
            // line 28
            echo "        <p>
            <em>No exception was thrown and uncaught during the request.</em>
        </p>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
<<<<<<< HEAD
        return "WebProfilerBundle:Collector:exception.html.twig";
=======
        return "@WebProfiler/Collector/exception.html.twig";
>>>>>>> aa0b05b072db46d2f39ba1fea9d611a49b364e91
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  174 => 74,  167 => 71,  118 => 49,  104 => 42,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  422 => 184,  415 => 180,  408 => 176,  394 => 168,  380 => 160,  373 => 156,  361 => 146,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  325 => 129,  323 => 128,  303 => 122,  300 => 121,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 94,  233 => 87,  226 => 84,  216 => 79,  213 => 78,  207 => 75,  200 => 72,  197 => 71,  194 => 70,  191 => 77,  185 => 75,  181 => 65,  178 => 64,  172 => 62,  165 => 60,  150 => 55,  134 => 54,  113 => 48,  81 => 23,  70 => 19,  854 => 485,  851 => 484,  843 => 467,  840 => 466,  832 => 709,  826 => 706,  820 => 703,  815 => 701,  810 => 699,  805 => 697,  800 => 695,  795 => 693,  780 => 687,  775 => 685,  770 => 683,  764 => 680,  753 => 672,  566 => 487,  564 => 484,  550 => 472,  548 => 466,  429 => 188,  425 => 349,  401 => 172,  371 => 301,  324 => 257,  315 => 125,  153 => 69,  76 => 25,  65 => 29,  90 => 27,  84 => 24,  916 => 490,  911 => 486,  905 => 491,  903 => 490,  898 => 487,  896 => 486,  890 => 482,  887 => 481,  881 => 475,  861 => 474,  855 => 471,  849 => 470,  841 => 709,  835 => 706,  829 => 703,  824 => 701,  819 => 699,  814 => 697,  809 => 695,  804 => 693,  798 => 690,  793 => 688,  789 => 690,  784 => 688,  779 => 683,  773 => 680,  762 => 672,  582 => 494,  580 => 481,  570 => 475,  568 => 474,  561 => 471,  559 => 470,  434 => 348,  406 => 326,  376 => 299,  329 => 131,  320 => 127,  188 => 76,  58 => 20,  53 => 12,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 347,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 143,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 124,  309 => 97,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 88,  278 => 106,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 90,  229 => 85,  220 => 81,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 81,  128 => 62,  107 => 53,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 78,  179 => 69,  159 => 61,  143 => 84,  135 => 96,  119 => 40,  102 => 41,  71 => 28,  67 => 20,  63 => 18,  59 => 14,  38 => 6,  94 => 59,  89 => 20,  85 => 25,  75 => 42,  68 => 24,  56 => 22,  87 => 34,  21 => 1,  26 => 6,  93 => 28,  88 => 32,  78 => 28,  46 => 13,  27 => 3,  44 => 8,  31 => 9,  28 => 2,  201 => 92,  196 => 90,  183 => 122,  171 => 73,  166 => 71,  163 => 62,  158 => 96,  156 => 58,  151 => 63,  142 => 59,  138 => 56,  136 => 56,  121 => 50,  117 => 57,  105 => 34,  91 => 33,  62 => 27,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 43,  72 => 34,  69 => 25,  47 => 9,  40 => 15,  37 => 6,  22 => 2,  246 => 93,  157 => 56,  145 => 46,  139 => 98,  131 => 52,  123 => 42,  120 => 40,  115 => 43,  111 => 47,  108 => 36,  101 => 32,  98 => 50,  96 => 37,  83 => 33,  74 => 14,  66 => 26,  55 => 13,  52 => 12,  50 => 10,  43 => 12,  41 => 7,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 73,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 63,  173 => 108,  168 => 61,  164 => 70,  162 => 59,  154 => 58,  149 => 51,  147 => 54,  144 => 49,  141 => 51,  133 => 95,  130 => 46,  125 => 51,  122 => 43,  116 => 39,  112 => 55,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 28,  80 => 27,  73 => 24,  64 => 23,  60 => 6,  57 => 11,  54 => 11,  51 => 20,  48 => 13,  45 => 9,  42 => 8,  39 => 6,  36 => 5,  33 => 4,  30 => 3,);
=======
        return array (  91 => 33,  88 => 32,  63 => 18,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 155,  363 => 153,  358 => 151,  353 => 149,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 135,  309 => 129,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  290 => 119,  288 => 118,  283 => 115,  281 => 114,  276 => 111,  274 => 110,  269 => 107,  265 => 105,  259 => 103,  255 => 101,  253 => 100,  235 => 89,  232 => 88,  227 => 86,  222 => 83,  210 => 77,  208 => 76,  189 => 66,  184 => 63,  175 => 58,  170 => 56,  166 => 54,  163 => 53,  155 => 47,  152 => 46,  144 => 42,  127 => 35,  109 => 27,  94 => 21,  82 => 28,  76 => 25,  61 => 17,  39 => 6,  36 => 5,  79 => 18,  72 => 13,  69 => 12,  54 => 22,  47 => 8,  42 => 7,  40 => 11,  37 => 10,  22 => 1,  164 => 58,  157 => 56,  145 => 46,  139 => 45,  131 => 42,  120 => 31,  115 => 39,  111 => 38,  108 => 37,  106 => 36,  101 => 33,  98 => 32,  92 => 29,  83 => 25,  80 => 27,  74 => 14,  66 => 11,  60 => 6,  55 => 13,  52 => 12,  50 => 14,  41 => 8,  32 => 4,  29 => 6,  462 => 202,  453 => 199,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  387 => 164,  380 => 158,  373 => 156,  361 => 152,  355 => 150,  351 => 141,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 131,  312 => 130,  303 => 122,  300 => 121,  298 => 120,  289 => 113,  286 => 112,  278 => 106,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 97,  246 => 96,  241 => 93,  233 => 87,  229 => 87,  226 => 84,  220 => 81,  216 => 79,  213 => 78,  207 => 75,  203 => 73,  200 => 72,  197 => 69,  194 => 68,  191 => 67,  185 => 66,  181 => 65,  178 => 59,  176 => 63,  172 => 57,  168 => 61,  165 => 60,  162 => 57,  156 => 58,  153 => 56,  150 => 55,  147 => 43,  141 => 51,  134 => 39,  130 => 46,  123 => 41,  119 => 40,  116 => 39,  113 => 38,  105 => 25,  102 => 24,  99 => 23,  96 => 31,  90 => 20,  84 => 24,  81 => 23,  73 => 24,  70 => 15,  67 => 20,  64 => 19,  59 => 14,  53 => 12,  45 => 9,  43 => 9,  38 => 6,  35 => 9,  33 => 4,  30 => 3,);
>>>>>>> aa0b05b072db46d2f39ba1fea9d611a49b364e91
    }
}
