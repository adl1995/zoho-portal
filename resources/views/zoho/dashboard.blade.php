<!-- Note :
   - You can modify the font style and form style to suit your website. 
   - Code lines with comments “Do not remove this code”  are required for the form to work properly, make sure that you do not remove these lines of code. 
   - The Mandatory check script can modified as to suit your business needs. 
   - It is important that you test the modified form before going live.-->
<div id='crmWebToEntityForm' style='width:600px;margin:auto;'>
   <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
   <form action='https://crm.zoho.com/crm/WebToLeadForm' name=WebToLeads2410575000000126001 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory()' accept-charset='UTF-8'>

	 <!-- Do not remove this code. -->
	<input type='text' style='display:none;' name='xnQsjsdp' value='24c6d5da5f07125bca184e56207f0b1eb429e0a27149a5d8e29db619b5b70b33'/>
	<input type='hidden' name='zc_gad' id='zc_gad' value=''/>
	<input type='text' style='display:none;' name='xmIwtLD' value='6ab3b8a20176f6b021ae78963b618f369789f0aa5976535a62c44a65b9b0783b'/>
	<input type='text' style='display:none;'  name='actionType' value='TGVhZHM='/>

	<input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;sd.cpm' /> 
	 <!-- Do not remove this code. -->
	<style>
		tr , td { 
			padding:6px;
			border-spacing:0px;
			border-width:0px;
			}
	</style>
	<table style='width:600px;background-color:white;color:black'>

	<tr><td colspan='2' style='text-align:left;color:black;font-family:Arial;font-size:14px;'><strong>tet</strong></td></tr>

	<tr><td  style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Arial;width:200px;'>Company<span style='color:red;'>*</span></td><td style='width:250px;' ><input type='text' style='width:250px;'  maxlength='100' name='Company' /></td></tr>

	<tr><td  style='nowrap:nowrap;text-align:left;font-size:12px;font-family:Arial;width:200px;'>Last Name<span style='color:red;'>*</span></td><td style='width:250px;' ><input type='text' style='width:250px;'  maxlength='80' name='Last Name' /></td></tr>

	<tr><td colspan='2' style='text-align:center; padding-top:15px;'>
		<input style='font-size:12px;color:#131307' type='submit' value='Submit' />
		<input type='reset' style='font-size:12px;color:#131307' value='Reset' />
	    </td>
	</tr>
   </table>
	<script>
 	  var mndFileds=new Array('Company','Last Name');
 	  var fldLangVal=new Array('Company','Last Name');
		var name='';
		var email='';

 	  function checkMandatory() {
		for(i=0;i<mndFileds.length;i++) {
		  var fieldObj=document.forms['WebToLeads2410575000000126001'][mndFileds[i]];
		  if(fieldObj) {
			if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {
			 if(fieldObj.type =='file')
				{ 
				 alert('Please select a file to upload.'); 
				 fieldObj.focus(); 
				 return false;
				} 
			alert(fldLangVal[i] +' cannot be empty.'); 
   	   	  	  fieldObj.focus();
   	   	  	  return false;
			}  else if(fieldObj.nodeName=='SELECT') {
  	   	   	 if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {
				alert(fldLangVal[i] +' cannot be none.'); 
				fieldObj.focus();
				return false;
			   }
			} else if(fieldObj.type =='checkbox'){
 	 	 	 if(fieldObj.checked == false){
				alert('Please accept  '+fldLangVal[i]);
				fieldObj.focus();
				return false;
			   } 
			 } 
			 try {
			     if(fieldObj.name == 'Last Name') {
				name = fieldObj.value;
 	 	 	    }
			} catch (e) {}
		    }
		}
	     }
	   
</script>
	</form>
</div>