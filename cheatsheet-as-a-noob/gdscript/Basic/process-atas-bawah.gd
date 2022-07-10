extends Control

var count = 0
var speed = 2

# warning-ignore:unused_argument
func _ready():
	pass

func _process(delta) :
#if (Input.is_key_pressed(64)) :
#print("huruf A")
	if (Input.is_action_pressed("atas")) :
		$zombie.position -= Vector2(0, speed)
		print("majuuu")
	elif (Input.is_action_pressed("bawah")) :
		$zombie.position += Vector2(0, speed)
		print("mundurrr")
