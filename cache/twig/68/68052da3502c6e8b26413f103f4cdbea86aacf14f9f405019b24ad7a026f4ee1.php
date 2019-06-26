<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Page:/usr/share/nginx/html/user/pages/01.blog/04.elevatorsaga */
class __TwigTemplate_ac88482b7c9e32ae4d7c68990b751ca8861581ea500768dd6722419188032be7 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<h2>Soluciones de Algunos niveles de este Juego JS</h2>
<h3>Nivel 1:</h3>
<pre>
  <code>
    {
             init: function(elevators, floors) {
            var elevator = elevators[0]; // Let's use the first elevator

            // Whenever the elevator is idle (has no more queued destinations) ...
            elevator.on(\"idle\", function() {
                // let's go to all the floors (or did we forget one?)
                elevator.goToFloor(0);
                elevator.goToFloor(1);
                elevator.goToFloor(2);
            });
         },
         update: function(dt, elevators, floors) {
            // We normally don't need to do anything here
         }
        }

  </code>
</pre>
<h3>Nivel 2</h3>
<pre>
    <code>
          {
            init: function(elevators, floors) {
                var elevator = elevators[0]; // Let's use the first elevator

                // Whenever the elevator is idle (has no more queued destinations) ...
                elevator.on(\"idle\", function() {
                    // let's go to all the floors (or did we forget one?)
                    elevator.goToFloor(0);
                    elevator.goToFloor(1);
                    elevator.goToFloor(2);
                    elevator.goToFloor(3);
                    elevator.goToFloor(4);
                });
            },
            update: function(dt, elevators, floors) { 
            }
        }
    </code>
</pre>
<h3>Nivel 3</h3>
<pre>
    <code>
    </code>
</pre>";
    }

    public function getTemplateName()
    {
        return "@Page:/usr/share/nginx/html/user/pages/01.blog/04.elevatorsaga";
    }

    public function getDebugInfo()
    {
        return array (  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<h2>Soluciones de Algunos niveles de este Juego JS</h2>
<h3>Nivel 1:</h3>
<pre>
  <code>
    {
             init: function(elevators, floors) {
            var elevator = elevators[0]; // Let's use the first elevator

            // Whenever the elevator is idle (has no more queued destinations) ...
            elevator.on(\"idle\", function() {
                // let's go to all the floors (or did we forget one?)
                elevator.goToFloor(0);
                elevator.goToFloor(1);
                elevator.goToFloor(2);
            });
         },
         update: function(dt, elevators, floors) {
            // We normally don't need to do anything here
         }
        }

  </code>
</pre>
<h3>Nivel 2</h3>
<pre>
    <code>
          {
            init: function(elevators, floors) {
                var elevator = elevators[0]; // Let's use the first elevator

                // Whenever the elevator is idle (has no more queued destinations) ...
                elevator.on(\"idle\", function() {
                    // let's go to all the floors (or did we forget one?)
                    elevator.goToFloor(0);
                    elevator.goToFloor(1);
                    elevator.goToFloor(2);
                    elevator.goToFloor(3);
                    elevator.goToFloor(4);
                });
            },
            update: function(dt, elevators, floors) { 
            }
        }
    </code>
</pre>
<h3>Nivel 3</h3>
<pre>
    <code>
    </code>
</pre>", "@Page:/usr/share/nginx/html/user/pages/01.blog/04.elevatorsaga", "");
    }
}
