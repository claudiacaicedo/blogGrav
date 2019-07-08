---
title: Elevatorsaga
media_order: elevatorsaga.png
---

## Soluciones de Algunos niveles de este Juego JS.
### Nivel 1:
<pre>
  <code>
	{
   			 init: function(elevators, floors) {
        	var elevator = elevators[0]; // Let's use the first elevator

        	// Whenever the elevator is idle (has no more queued destinations) ...
        	elevator.on("idle", function() {
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

### Nivel 2

<pre>
	<code>
          {
            init: function(elevators, floors) {
                var elevator = elevators[0]; // Let's use the first elevator

                // Whenever the elevator is idle (has no more queued destinations) ...
                elevator.on("idle", function() {
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
### Nivel 3
<pre>
	<code>
          {
            init: function(elevators, floors) {
                var elevator = elevators[0]; // Let's use the first elevator

                // Whenever the elevator is idle (has no more queued destinations) ...
                elevator.on("idle", function() {
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
### Nivel 4
<pre>
  <code>
         {
            init: function(elevators, floors) {
                var elevator = elevators[0]; // Let's use the first elevator
                var elevator2 = elevators[1];

                elevator.on("floor_button_pressed", function(floorNum) {
                    elevator.goToFloor(floorNum);
                });
                elevator2.on("floor_button_pressed", function(floorNum) {
                    elevator2.goToFloor(floorNum);
                })
            },
            update: function(dt, elevators, floors) {

            }
        }

  </code>
</pre>