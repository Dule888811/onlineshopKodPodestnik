<script type="text/javascript">
$(function() {
    $('#login, #email').keyup(function() {
        
        $.get('<?php echo URL . 'korisnici/proveriLogin/'; ?>' + $('#login').val(), {}, function(response) {
                if (response == 1) {
                    $('#slobodan').show();
                    $('#zauzet').hide();
                } else {
                    $('#slobodan').hide();
                    $('#zauzet').show();
                }
            }
        );
    });
});
</script>

<h1>Registracija</h1>

<form class="form" action="<?php echo URL . 'korisnici/dodajKorisnika'; ?>" method="post" >
    <label for="login">Login:</label> <input type="text" id="login" name="login" /> <span id="slobodan" style="display: none;">slobodan</span> <span id="zauzet" style="display: none;">zauzet</span> <br/>
    <label for="password">Password:</label> <input type="password" id="password" name="password" /> <br/>
    <label for="email">Email:</label> <input type="text" id="email" name="email" /> <br/>
    <label for="first_name">Ime:</label> <input type="text" id="first_name" name="first_name" /> <br/>
    <label for="last_name">Prezime:</label> <input type="text" id="last_name" name="last_name" /> <br/>
    <label for="address">Adresa:</label> <input type="text" id="address" name="address" /> <br/>
    <label for="phone">Telefon:</label> <input type="text" id="phone" name="phone" /> <br/>
    <input class="button" type="submit" value="Registruj se">
</form>