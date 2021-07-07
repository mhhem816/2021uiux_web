function findChecked(){
//alert("확인");
let found = "null"
const kcity = document.getElementsByName("city");


 // kcity[0].checked; // true
 // kcity[1].checked;
 // kcity[2].checked;
// for(초기값;조건문;증감연산자){}
for(let i=0; i<kcity.length; i++){
  if(kcity[i].checked == true ){     // 여기서 트루는 벌륜값이라 따옴표안 씀
    found = kcity[i];
  }
  }
  alert(found);
}
