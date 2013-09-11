<?php

/* components/google-analytics.html */
class __TwigTemplate_0784d68578b2a033c0c9f32ed0e88df4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">
\tvar _gaq = _gaq || [];
\t_gaq.push(['_setAccount', 'UA-2969627-1']);
\t_gaq.push(['_trackPageview']);
\t(function() {
    \tvar ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    \tga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    \tvar s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  \t})();
</script>";
    }

    public function getTemplateName()
    {
        return "components/google-analytics.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,  84 => 15,  81 => 14,  77 => 3,  74 => 2,  69 => 24,  67 => 23,  62 => 21,  56 => 17,  54 => 14,  51 => 13,  45 => 12,  41 => 11,  36 => 8,  34 => 7,  30 => 6,  26 => 4,  23 => 2,  21 => 1,);
    }
}
