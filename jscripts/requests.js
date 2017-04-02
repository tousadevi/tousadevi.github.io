function aceeptRecord(id) {
	//alert("hi" + id);
	
	//var size = document.getElementById("recordsize").value;
	//alert("size is ::" + size);
	var fstName = document.getElementById("firstname"+id).value;
	
	var lstName = document.getElementById("lastname"+id).value;
	var dob = document.getElementById("dob"+id).value;
	
	var gender = document.getElementById("gender"+id).value;
	//alert("hi" + gender);
	var email = document.getElementById("email"+id).value;
	
	var type = document.getElementById("type"+id).value;
	var passwords = document.getElementById("password"+id).value;
	
document.location.href = "admin/acceptReq.php?firstName="+fstName+"&Lastame="+lstName+"&Dob="+dob+"&Gender="+gender+"&Email="+email+"&Type="+type+"&regpwd="+passwords;
	//document.location.href = "admin/acceptReq.php";
}

function rejectRecord(id) {
	var email = document.getElementById("email"+id).value;
	document.location.href = "admin/rejectReq.php?Email="+email;
}
function suspendRecord(id) {
	var email = document.getElementById("email"+id).value;
	document.location.href = "admin/suspendReq.php?Email="+email;
}
function deleteuser(id) {
	var email = document.getElementById("email"+id).value;
	document.location.href = "admin/deleteRec.php?Email="+email;
}
function deletelog(id) {
	var email = document.getElementById("email"+id).value;
	document.location.href = "admin/deletelog.php?Email="+email;
}

function requestPage() {
	//alert("hi");
	document.location.href = "../requests.php";
}
function logout() {

document.location.href = "sessiondestroy.php";
}
function loginSubmit() {
	
	var mailid = document.getElementById("emailid").value;
	var paswd = document.getElementById("password").value;
	//alert("in login" + mailid);
	document.location.href = "loginprocess.php?emailId="+mailid+"&pasword="+paswd;
}
