<!DOCTYPE html>
<html>
<head>
<meta charset= "UTF-8">
<link rel="stylesheet" href="stiles.css">
<title>3BackEnd</title>
<style>
.for
{
font-size: x-large;
text-align: center;
max-width:420px;
border: 2px solid rgb(26, 18, 144);
margin: 0 auto;
margin-top:50px;
}
input
{
 margin-top:10px;
 margin-bottom:10px;
 font-size: x-large;
 }
 option
 {
  font-size: x-large;
 }

</style>

</head>
<body>
    <div class="for">
    <h4><form action="" method="POST">
      <label>
               Имя:<br />
               <input name="name"
                 value="-" />
             </label><br />
       
             <label>
              e-mail:<br />
               <input name="email"
                 value="-"
                 type="email" />
             </label><br />
       
             <label>
               Дата рождения:<br />
               <input name="date"
                 value="-"
                 type="date" />
             </label><br />
             
             Пол:<br />
             <label><input type="radio" checked="checked"
               name="gender" value="m" />
               М</label>
             <label><input type="radio"
               name="gender" value="w" />
               Ж</label><br />
       
       Количество конечностей:<br />
             <label><input type="radio" checked="checked" name="hand" value="1" />1</label>
             <label><input type="radio" name="hand" value="2" /> 2</label>
             <label><input type="radio" name="hand" value="3" /> 3</label>
             <label><input type="radio" name="hand" value="4" /> 4</label>
             <label><input type="radio" name="hand" value="5" /> 5</label>
       
             <label>
               Сверхспособности:<br />
               <select name="syperpover []" multiple>
                 <option selected="selected" value="immortality">бессмертие</option>
                 <option value="passing through walls" >прохождение сквозь стены</option>
                 <option value="levitation">левитация</option>
               </select>
             </label><br />
       
       <label>
               Биография:<br />
               <textarea name="biography"></textarea>
             </label><br />
             
             <br />
             <label><input type="checkbox" checked="checked"
               name="check" />
               С контрактом ознакомлен(а) </label><br />
             
<input type="submit" value="Отправить" />
</form></h4>
</div>
</body>
</html>

