extends KinematicBody2D

const acceleration = 15000
const max_speed = 80
const friction = 500

var velocity = Vector2.ZERO

onready var animationPlayer = $AnimationPlayer

func _physics_process(delta):
	var input_vector = Vector2.ZERO
	input_vector.x = Input.get_action_strength("ui_right") - Input.get_action_strength("ui_left")
	input_vector.y = Input.get_action_strength("ui_down") - Input.get_action_strength("ui_up")
	input_vector = input_vector.normalized()
	
	if input_vector != Vector2.ZERO:
		if input_vector.x > 0 :
			animationPlayer.play("RunRight")
		else :
			animationPlayer.play("RunLeft")
		velocity = velocity.move_toward(input_vector * max_speed, acceleration * delta)
	else:
		animationPlayer.play("IdleRight")
		velocity = velocity.move_toward(Vector2.ZERO, friction * delta)
		
	velocity = move_and_slide(velocity)


