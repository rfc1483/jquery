<?php

/* AcmeJqueryBundle:Default:hideParent.html.twig */
class __TwigTemplate_21a5f035db07d254c1efc8625e1c99b3 extends Twig_Template
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

        // line 42
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
            \$(\".hide\").click(function(){
                \$(this).parents(\".ex\").hide(\"slow\");
            });
        });
    </script>        
    <style type=\"text/css\"> 
    div.ex
    {
        background-color:#e5eecc;
        padding:7px;
        border:solid 1px #c3c3c3;
    }
    </style>
";
    }

    // line 22
    public function block_content($context, array $blocks = array())
    {
        // line 23
        echo "    <h1>Hide parent</h1>
    
    <h3>Island Trading</h3>
    <div class=\"ex\">
        <button class=\"hide\">Hide me</button>
        <p>Contact: Helen Bennett<br /> 
        Garden House Crowther Way<br />
        London</p>
    </div>

    <h3>Paris spécialités</h3>
    <div class=\"ex\">
        <button class=\"hide\">Hide me</button>
        <p>Contact: Marie Bertrand<br /> 
        265, Boulevard Charonne<br />
        Paris</p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "AcmeJqueryBundle:Default:hideParent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
