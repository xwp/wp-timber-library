<?php

/* base-simple.html */
class __TwigTemplate_f7a61c55ce0f076029806e3669c8ed40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->env->loadTemplate("html-header.html")->display($context);
        // line 2
        echo "    ";
        $this->displayBlock('head', $context, $blocks);
        // line 4
        echo "
    </head>
<body ";
        // line 6
        echo twig_body_class((isset($context["body_classes"]) ? $context["body_classes"] : null));
        echo " data-template=\"base-simple.html\">
";
        // line 7
        $this->env->loadTemplate("header-short.html")->display($context);
        // line 8
        echo "
        <section id=\"content\" role=\"main\" class=\"content-wrapper\">
            
            <div class=\"wrapper ";
        // line 11
        echo (isset($context["sidebar_class"]) ? $context["sidebar_class"] : null);
        echo "\">
                ";
        // line 12
        if ((isset($context["page_title"]) ? $context["page_title"] : null)) {
            echo "<h1>";
            echo (isset($context["page_title"]) ? $context["page_title"] : null);
            echo "</h1>";
        }
        // line 13
        echo "                
                ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "            </div>
           
        </section>

        ";
        // line 21
        echo (isset($context["wp_footer"]) ? $context["wp_footer"] : null);
        echo "

        ";
        // line 23
        $this->env->loadTemplate("footer.html")->display($context);
        // line 24
        echo "    </body>
</html>";
    }

    // line 2
    public function block_head($context, array $blocks = array())
    {
        // line 3
        echo "    ";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "                    Sorry, no content
                ";
    }

    public function getTemplateName()
    {
        return "base-simple.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 15,  81 => 14,  77 => 3,  74 => 2,  69 => 24,  67 => 23,  62 => 21,  56 => 17,  54 => 14,  51 => 13,  45 => 12,  41 => 11,  36 => 8,  34 => 7,  30 => 6,  26 => 4,  23 => 2,  21 => 1,);
    }
}
