extends Control

var count = 0
var speed = 2

# warning-ignore:unused_argument
func _ready():
	pass
	
func _input(event) : # biasanya digunakan untuk tombol pause, music
	print(event)
	if (event is InputEventKey) :
		if (event.scancode == 65) :
			print("A")

func _process(delta) : # biasanya digunakan untuk tombol movement
#if (Input.is_key_pressed(64)) :
#print("huruf A")
	if (Input.is_action_pressed("atas")) :
		$zombie.position -= Vector2(0, speed)
		print("majuuu")
	elif (Input.is_action_pressed("bawah")) :
		$zombie.position += Vector2(0, speed)
		print("mundurrr")
