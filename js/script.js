function updatelength(field, output){
    curr_length = document.getElementById(field).value.length;
    field_mlen = document.getElementById(field).maxLength;
    document.getElementById(output).innerHTML = curr_length+'/'+field_mlen;
    return 1;
}

function check_v_pass(field, output){
    pass_buf_value = document.getElementById(field).value;
    pass_level = 0;
    if (pass_buf_value.match(/[a-z]/g)) {
        pass_level++;
    }
    if (pass_buf_value.match(/[A-Z]/g)) {
        pass_level++;
    }
    if (pass_buf_value.match(/[0-9]/g)) {
        pass_level++;
    }
    if (pass_buf_value.length < 5) {
        if(pass_level >= 1) pass_level--;
    } else if (pass_buf_value.length >= 20) {
        pass_level++;
    }
    output_val = '';
    switch (pass_level) {
        case 1: output_val='Weak'; break;
        case 2: output_val='Normal'; break;
        case 3: output_val='Strong'; break;
        case 4: output_val='Very strong'; break;
        default: output_val='Very weak'; break;
    }
    if (document.getElementById(output).value != pass_level) {
        document.getElementById(output).value = pass_level;
        document.getElementById(output).innerHTML = output_val;
    }
    return 1;
}

function compare_valid(field, field2){
    fld_val = document.getElementById(field).value;
    fld2_val = document.getElementById(field2).value;
    if (fld_val == fld2_val) {
        update_css_class(field2, 2);
        p_valid_r = 1;
    } else {
        update_css_class(field2, 1);
        p_valid_r = 0;
    }
    return p_valid_r;
}

function check_v_mail(field){
    fld_value = document.getElementById(field).value;
    is_m_valid = 0;
    if (fld_value.indexOf('@') >= 1) {
        m_valid_dom = fld_value.substr(fld_value.indexOf('@')+1);
        if (m_valid_dom.indexOf('@') == -1) {
            if (m_valid_dom.indexOf('.') >= 1) {
                m_valid_dom_e = m_valid_dom.substr(m_valid_dom.indexOf('.')+1);
                if (m_valid_dom_e.length >= 1) {
                    is_m_valid = 1;
                }
            }
        }
    }
    if (is_m_valid) {
        update_css_class(field, 2);
        m_valid_r = 1;
    } else {
        update_css_class(field, 1);
        m_valid_r = 0;
    }
    return m_valid_r;
}

function valid_length(field){
    length_df = document.getElementById(field).value.length;
    if (length_df >= 1 && length_df <= document.getElementById(field).maxLength) {
        update_css_class(field, 2);
        ret_len = 1;
    } else {
        update_css_class(field, 1);
        ret_len = 0;
    }
    return ret_len;
}

function update_css_class(field, class_index){
    if (class_index == 1) {
        class_s = 'wrong';
    } else if (class_index == 2) {
        class_s = 'correct';
    }
    document.getElementById(field).className = class_s;
    return 1;
}

function validate_all(output){
    t1 = valid_length('login');
    t2 = valid_length('password');
    t3 = compare_valid('password', 'c_password');
    t4 = check_v_mail('email');
    t5 = check_v_pass('password', 'pass_result');

    errorlist = '';
    if (! t1) {
        errorlist += 'Login is too short/long<br />';
    }
    if (! t2) {
        errorlist += 'Password is too short/long<br />';
    }
    if (! t3) {
        errorlist += 'Passwords are not the same<br />';
    }
    if (! t4) {
        errorlist += 'Mail is wrong<br />';
    }
    if (errorlist) {
        document.getElementById(output).innerHTML = errorlist;
        return false;
    }
    return true;
}



// for validation

function validate()
{
	 
      
     var x = document.forms["LoginForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
        return false;
    }
	var x = document.forms["LoginForm"]["password"].value;
    if (x == null || x == "") {
        alert("Enter your password.");
        return false;
    }
   
  
}
