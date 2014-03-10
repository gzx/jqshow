/* ======================================================================
DESC: Edit by CCN       

PLATFORMS: NT

USAGE NOTES: Attention to Copyright
====================================================================== */

/* ======================================================================
FUNCTION: CheckInput

INPUT:  Nothing
                
RETURNS:Boolean

DESC:    use in mainform                        
====================================================================== */
function CheckInput() {

if (document.MAINFORM.InputText1.value.length<10)
  {
    window.alert("请正确输入标签上的编码!");
    document.MAINFORM.InputText1.value="";
    document.MAINFORM.InputText1.focus();
    return false;
   }
   else
   {
   document.MAINFORM.InputText.value=document.MAINFORM.InputText1.value;
   ////document.MAINFORM.InputText1.value='正在查询，请等待...';
   window.open('res.asp?InputText='+document.MAINFORM.InputText.value,'','scrollbars=no,width=400,height=400');
   return false;
   }
}

/* ======================================================================
FUNCTION: InputGetFoucs

INPUT:  Nothing
                
RETURNS: Nothing

DESC:    use in mainform                        
====================================================================== */
function InputGetFoucs(){
document.MAINFORM.InputText1.focus();
}

/* ======================================================================
FUNCTION: InputText1_onkeyup

INPUT:  Nothing
                
RETURNS: Nothing

DESC:    use in mainform                        
====================================================================== */
function InputText1_onkeyup() {
  var str;
  var char;
  str=document.MAINFORM.InputText1.value;
  char=str.charAt(str.length-1);
  if ((char!="0") && (char!="1")&&(char!="2")&& (char != "3")&&(char != "4")&&(char != "5")&&(char != "6")&&(char != "7")&&(char != "8")&&(char != "9"))
  {
    document.MAINFORM.InputText1.value=str.substring(0,(str.length-1));
  }
}

/* ======================================================================
FUNCTION: InputText1_onkeydown

INPUT:  Nothing
                
RETURNS: Nothing

DESC:    use in mainform                        
====================================================================== */
function InputText1_onkeydown() {
  var str;
  var char;
  str=document.MAINFORM.InputText1.value;
  char=str.charAt(str.length-1);
  if ((char!="0") && (char!="1")&&(char!="2")&& (char != "3")&&(char != "4")&&(char != "5")&&(char != "6")&&(char != "7")&&(char != "8")&&(char != "9"))
  {
    document.MAINFORM.InputText1.value=str.substring(0,(str.length-1));
  }
}


/* ======================================================================
FUNCTION: InputPass1_onkeyup

INPUT:  Nothing
                
RETURNS: Nothing

DESC:    use in mainform                        
====================================================================== */
function InputPass1_onkeyup() {
  var str;
  var char;
  str=document.MAINFORM.InputPass1.value;
  char=str.charAt(str.length-1);
  if ((char!="0") && (char!="1")&&(char!="2")&& (char != "3")&&(char != "4")&&(char != "5")&&(char != "6")&&(char != "7")&&(char != "8")&&(char != "9"))
  {
    document.MAINFORM.InputPass1.value=str.substring(0,(str.length-1));
  }
}

/* ======================================================================
FUNCTION: InputPass1_onkeydown

INPUT:  Nothing
                
RETURNS: Nothing

DESC:    use in mainform                        
====================================================================== */
function InputPass1_onkeydown() {
  var str;
  var char;
  str=document.MAINFORM.InputPass1.value;
  char=str.charAt(str.length-1);
  if ((char!="0") && (char!="1")&&(char!="2")&& (char != "3")&&(char != "4")&&(char != "5")&&(char != "6")&&(char != "7")&&(char != "8")&&(char != "9"))
  {
    document.MAINFORM.InputPass1.value=str.substring(0,(str.length-1));
  }
}

/* ======================================================================
FUNCTION: InputPass2_onkeyup

INPUT:  Nothing
                
RETURNS: Nothing

DESC:    use in mainform                        
====================================================================== */
function InputPass2_onkeyup() {
  var str;
  var char;
  str=document.MAINFORM.InputPass2.value;
  char=str.charAt(str.length-1);
  if ((char!="0") && (char!="1")&&(char!="2")&& (char != "3")&&(char != "4")&&(char != "5")&&(char != "6")&&(char != "7")&&(char != "8")&&(char != "9"))
  {
    document.MAINFORM.InputPass2.value=str.substring(0,(str.length-1));
  }
}

/* ======================================================================
FUNCTION: InputPass2_onkeydown

INPUT:  Nothing
                
RETURNS: Nothing

DESC:    use in mainform                        
====================================================================== */
function InputPass2_onkeydown() {
  var str;
  var char;
  str=document.MAINFORM.InputPass2.value;
  char=str.charAt(str.length-1);
  if ((char!="0") && (char!="1")&&(char!="2")&& (char != "3")&&(char != "4")&&(char != "5")&&(char != "6")&&(char != "7")&&(char != "8")&&(char != "9"))
  {
    document.MAINFORM.InputPass2.value=str.substring(0,(str.length-1));
  }
}

/*=============================================================================*/
function InputText1_onmouseover() {
    document.all("prompt").style.display="";
    
}

function InputText1_onmouseout() {
        document.all("prompt").style.display="none";

}




