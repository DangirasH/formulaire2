<form method="post" action="thanks.php">

    <div>
        <label  for="user_name"> Nom :</label> <br>
        <input
                type="text"
                id="user_name"
                name="user_name"
                required >
    </div>
     <div>
         <label  for="user_firstname">Prénom :</label> <br>
         <input
             type="text"
             id="user_firstname"
             name="user_firstname"
             required >
     </div>
    <div>
        <label  for="email">Courriel :</label><br>
        <input
                type="email"
                id="email"
                name="user_email"
                required >
    </div>
     <br>
     <div>
         <label for= "phone">What's your phone? :</label>  <br>
         <input
                 type="tel"
                 id="phone"
                 name="user_phone"
                 required >
     </div>
    <div>
        <label for="option-select">Choose an option : </label><br>
        <select name="option-select"  id="option-select">
            <option name ="choose" value ="option">--Please choose an option--</option>
            <option name ="choose" value ="Banane">Banane</option>
            <option name ="choose" value="Banane1">Banane1</option>
            <option name ="choose" value="Banane2">Banane2</option>
        </select>
        <div>
            <label  for="message">Message :</label><br>
            <textarea  id="message"  name="user_message" required></textarea>
        </div>
    </div>
    <div  class="button">
       <button  type="submit">Envoyer votre message</button>
    </div>
</form>