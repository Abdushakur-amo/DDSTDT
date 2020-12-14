<?
$idProgiles = '
<h1>Ном: '.$_SESSION[name].'</h1>
<div style="display:flex">
    <div class="profil_left"> <img width="200" src="/assets/img/userimg/'.$_SESSION[img].'" alt="'.$_SESSION[name].'</div>
    <div class="profil_rigth" style="padding-left: 10px;"> 
        <p><b>ID:</b> '.$_SESSION[id].'</p>
        <p><b>Ҳуқуқи шумо:</b> '.UserAdmin($_SESSION["admin"]).'</p>
        <p><b>E-mail:</b> '.$_SESSION[email].'</p>
        <p><b>ТЕЛ:</b> '.$_SESSION[tel].'</p>
    </div>
</div>
<br><p style="margin: 0;">Тағирдодан:</p><hr style="border:solid 1px #060; margin-top:0;">
<input type="password"  id="password" class="form-control progile_form" placeholder="Рамзи куҳна">
<input type="password"  id="password1" class="form-control progile_form" placeholder="Рамзи нав">
<input type="password"  id="password2" class="form-control progile_form" placeholder="Такрори рамзи нав">
<br><button onclick="post_query(\'aform\', \'edit\', \'password.password1.password2\');"   class="btn btn-primary">Сапти рамз</button>
<button class="btn btn-success"><a href="/logaut">Баромадан аз утоқ <i class="icon-plug"></i></a></button>
';
?>