/*
Math.sqrt = raiz quadrada
Math.pow = multiplica expotente
Math.round = Arredonda
Math.cos = coseno
*/


<!-- ;
function testa_entrada(form, button)
{resolve_equacao(form); return;}
function resolve_equacao(form)
{
var E1=form.entrada1.value;
var E2=form.entrada2.value;
var E3=form.entrada3.value;
var E4=form.entrada4.value;
if(E1=="" || E1==" " || E1=="0") {
  alert("Se a=0, a equacao nao e\' do terceiro grau.");
  return;
}
if(E4=="" || E4==" " || E4=="0") {
  alert("Se d=0, a equacao do terceiro grau tem uma raiz nula e a equacao pode ser fatorada na forma x.(ax^2+bx+c)=0.");
   return;
 }
var a=parseFloat(E1);
var b=parseFloat(E2);
var c=parseFloat(E3);
var d=parseFloat(E4);

var A=b/a;
var B=c/a;
var C=d/a;
var p=B-A*A/3;
var q=C-A*B/3+2*A*A*A/27;
var D=q*q/4+p*p*p/27;
var pi=Math.PI;
if(D<0)
 {

 var M=Math.sqrt(-D);
 var r=Math.sqrt(q*q/4+M*M);
 var t=Math.acos(-q/2.0/r);
 var r1=2*Math.pow(r,1/3)*Math.cos(t/3)-A/3;
 var r2=2*Math.pow(r,1/3)*Math.cos((t+2*pi)/3)-A/3;
 var r3=2*Math.pow(r,1/3)*Math.cos((t+4*pi)/3)-A/3;
 form.saida1.value=Math.round(r1*7E10)/7E10;
 form.saida2.value=Math.round(r2*7E10)/7E10;
 form.saida3.value=Math.round(r3*7E10)/7E10;
 }
else
 {
 var u3=-q/2+Math.sqrt(D);
 if (u3<0) {
   var u=-Math.pow(-u3,1/3)
 } else {
   var u=Math.pow(u3,1/3)
 }
 var v3=-q/2-Math.sqrt(D);
 if (v3<0) {
   var v=-Math.pow(-v3,1/3)
 } else {
   var v=Math.pow(v3,1/3)
 }
 var r1=u+v-A/3;
 r1=Math.round(r1*10E7)/10E7;
 var Delta=(A+(r1))*(A+(r1))+4*C/r1;
 var Real=-(A+(r1))/2;
 Real=Math.round(Real*10E7)/10E7;
 var K=Math.abs(Delta);
 var Imag=Math.sqrt(K)/2;
 Imag=Math.round(Imag*10E7)/10E7;
 if(Delta<0)
  {
  form.saida1.value=r1;
  form.saida2.value=Real+" + "+Imag+"*I ";
  form.saida3.value=Real+" - "+Imag+"*I ";
  }
 else
  {
  var r20=Real+Imag;
  var r02=Real-Imag;
  form.saida1.value=r1;
  form.saida2.value=r20;
  form.saida3.value=r02;
  }
 return;
 }
}
