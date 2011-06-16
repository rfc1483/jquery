<?php

/* AcmeJqueryBundle:Default:toggle.html.twig */
class __TwigTemplate_e81c954bec70613ee1931948965df561 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("AcmeJqueryBundle::layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 28
        $context['code'] = $this->env->getExtension('demo')->getCode($this);
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->renderParentBlock("head", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(\"button\").click(function(){
                \$(\"p#toggle\").toggleClass(\"main\");
            });
        });            
    </script>        
    <style type=\"text/css\">
    .main
    {
        font-size:120%;
        color:red;
    }
    </style>
";
    }

    // line 21
    public function block_content($context, array $blocks = array())
    {
        // line 22
        echo "    <h1>Toogle class</h1>
    
    <p id=\"toggle\">This is a foo paragraph</p>
    <button>Toogle class \"main\" for p element</button>
";
    }

    public function getTemplateName()
    {
        return "AcmeJqueryBundle:Default:toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
