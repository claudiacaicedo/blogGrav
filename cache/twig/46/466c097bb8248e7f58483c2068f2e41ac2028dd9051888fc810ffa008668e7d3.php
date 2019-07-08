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

/* @Page:/usr/share/nginx/html/user/pages/01.blog/05.elevatorsaga */
class __TwigTemplate_164a965fd3544d3da5151c9d5d810ccb8d36ffd1ee30143e580215429f5b621b extends \Twig\Template
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
        echo "<h2>Soluciones de Algunos niveles de este Juego JS.</h2>
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
<h3>Nivel 4</h3>
<pre>
  <code>
         {
            init: function(elevators, floors) {
                var elevator = elevators[0]; // Let's use the first elevator
                var elevator2 = elevators[1];

                elevator.on(\"floor_button_pressed\", function(floorNum) {
                    elevator.goToFloor(floorNum);
                });
                elevator2.on(\"floor_button_pressed\", function(floorNum) {
                    elevator2.goToFloor(floorNum);
                })
            },
            update: function(dt, elevators, floors) {

            }
        }

  </code>
</pre>";
    }

    public function getTemplateName()
    {
        return "@Page:/usr/share/nginx/html/user/pages/01.blog/05.elevatorsaga";
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
        return new Source("<h2>Soluciones de Algunos niveles de este Juego JS.</h2>
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
<h3>Nivel 4</h3>
<pre>
  <code>
         {
            init: function(elevators, floors) {
                var elevator = elevators[0]; // Let's use the first elevator
                var elevator2 = elevators[1];

                elevator.on(\"floor_button_pressed\", function(floorNum) {
                    elevator.goToFloor(floorNum);
                });
                elevator2.on(\"floor_button_pressed\", function(floorNum) {
                    elevator2.goToFloor(floorNum);
                })
            },
            update: function(dt, elevators, floors) {

            }
        }

  </code>
</pre>", "@Page:/usr/share/nginx/html/user/pages/01.blog/05.elevatorsaga", "");
    }
}
