

function restrict(which){
		
		var item = document.getElementById('role');

		if(which == 0){
			item.remove(0);
			item.remove(1);
			item.remove(2);
			item.remove(3);
			
			document.ADDUSER.role.options[0] = new Option('Select a section first..', 'Select a section first..');
			
		}
		else if(which == 1 || which == 2 || which == 3 || which == 4 || which == 5){
			document.ADDUSER.role.options[0] = new Option('Select one..', 'Select one..');
			document.ADDUSER.role.options[1] = new Option('Faculty', 'Faculty');
			document.ADDUSER.role.options[2] = new Option('Student', 'Student');

			item.remove(3);
			
		}
		else if(which == 6){
			item.remove(0);
			item.remove(1);
			item.remove(2);
			item.remove(3);
			
			document.ADDUSER.role.options[0] = new Option('System Administrator', 'System Administrator');
			
		}
	}

function restrict2(which2, itemx){
		alert(itemx);
		
		/*var item = document.getElementsByName(itemx);

		if(which == 0){
			item.remove(0);
			item.remove(1);
			item.remove(2);
			item.remove(3);
			
			document.forms['EDITUSER'][item].options[0] = new Option('Select a section first..', 'Select a section first..');
			
		}
		else if(which == 1 || which == 2 || which == 3 || which == 4 || which == 5){
			document.forms['EDITUSER'][item].options[0] = new Option('Select one..', 'Select one..');
			document.forms['EDITUSER'][item].options[1] = new Option('Faculty', 'Faculty');
			document.forms['EDITUSER'][item].options[2] = new Option('Student', 'Student');

			item.remove(3);
			
		}
		else if(which == 6){
			item.remove(0);
			item.remove(1);
			item.remove(2);
			item.remove(3);
			
			document.forms['EDITUSER'][item].options[0] = new Option('System Administrator', 'System Administrator');
			
		}*/
	}
