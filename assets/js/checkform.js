function check_form(form){
	if(form.email.value==''){
		alert('Введите email!');
		form.email.focus();
		return false;
	}else if(form.phone.value==''){
		alert('Введите телефон!');
		form.time.phone();
		return false;
	}else if(form.time.value==''){
		alert('Введите удобное время для связи!');
		form.time.focus();
		return false;
	}else{
		document.forms.order.submit();
		return true;
	}
}