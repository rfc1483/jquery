<?php

/* AcmeJqueryBundle:Default:slide.html.twig */
class __TwigTemplate_06823d385c2a743f28210987b99b9882 extends Twig_Template
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

        // line 41
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
            \$(\".flip\").click(function(){
                \$(\".panel\").slideToggle(\"slow\");
              });
        });
        
    </script>        
    <style type=\"text/css\"> 
        div.panel,p.flip
        {
            margin:0px;
            padding:5px;
            text-align:center;
            background:#e5eecc;
            border:solid 1px #c3c3c3;
        }
        div.panel
        {
            height:120px;
            display:none;
        }
    </style>
";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "    <h1>Slide</h1>
    
    <div class=\"panel\">
        <p>Because time is valuable, we deliver quick and easy learning.</p>
        <p>At W3Schools, you can study everything you need to learn, in an accessible and handy format.</p>
    </div>
 
    <p class=\"flip\">Show/Hide Panel</p>
";
    }

    public function getTemplateName()
    {
        return "AcmeJqueryBundle:Default:slide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
