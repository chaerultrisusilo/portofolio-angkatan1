<HTML>
<HEAD><TITLE>Percabangan IF-ELSE 3</TITLE></HEAD>
<BODY>
<SCRIPT language="JavaScript">
<!--
function hitungip()
{
 var quis = parseFloat(document.fform.iquis.value);
 var tugas = parseFloat(document.fform.itugas.value);
 var uts = parseFloat(document.fform.iuts.value);
 var uas = parseFloat(document.fform.iuas.value);
 var ip =" ";
 var ket=" ";

 var na = (0.10*quis)+(0.20*tugas)+(0.30*uts)+(0.40*uas);

 if ((na > 80) && (na <=100))
 {
 ip ="A";
 ket="Lulus dengan Sangat Baik";
 }
 else if ((na > 68) && (na <=80))
 {
 ip ="B";
 ket="Lulus dengan Baik";
 }
 else if ((na > 55) && (na <=68))
 {
 ip ="C";
 ket="Lulus dengan Cukup";
 }
 else if ((na > 38) && (na <=55))
 {
 ip ="D";
 ket="Lulus dengan Kurang";
 }
 else
 {
 ip ="E";
 ket="Tidak Lulus";
 }
 document.fform.oip.value=ip;
 document.fform.oket.value=ket;
// gunakan untuk mengecek alert (ip+""+na);
}
//--></SCRIPT>
<FORM NAME ="fform">
<table border="1" width="100%" ALIGN="center" >
 <tr>
 <td width="100%" colspan="4"><H2 ALIGN="center">Menghitung Indeks
Prestasi</H2></td>
 </tr>
 <tr>
 <td width="25%">Quis (10%) :<input type="text" size="10"
name="iquis"> </td>
 <td width="25%">Tugas (20%):<input type="text" size="10"
name="itugas"> </td>
 <td width="25%">UTS (30%):<input type="text" size="10"
name="iuts"> </td>
 <td width="25%">UAS (40%) :<input type="text" size="10"
name="iuas"> </td>
 </tr>
 <tr>
 <td width="100%" colspan="4"><P Align="center">
<INPUT TYPE="button" value="Hitung" onclick="hitungip()">
<INPUT TYPE="reset" value="Ulang"> </p></td>
 </tr>
 <tr>
 <td width="100%" colspan="4" align="center">
 Indeks Prestasi :<input type="text" size="5" name="oip">
 Keterangan :<input type="text" size="25" name="oket"></td>
 </tr>
</table>
</FORM>
</BODY>
</HTML>