<?php    $title = 'Бақайдгири'; include('add/top.php'); ?>

		<div class="flex_info">
            <h1>Бақайдгири</h1>
            <br><input id="name" placeholder="Ном" type="text" class="form-control" >
            <br><input id="surname" placeholder="Насаб" type="text" class="form-control" >
            <br><input id="name_dad" placeholder="Номи падар" type="text" class="form-control" >
            <br><span>Соли таваллуд</span>
            <br><input id="mydate" type="date" class="form-control" >
            <br><input id="city" placeholder="Ҷой истиқомати ҳозираи донишҷӯ" type="text" class="form-control" >
            <br><input id="mycity" placeholder="Ҷой истиқомати аслии донишҷӯ" type="text" class="form-control" >
            <br><span>Факултет</span>
            <select id="fakultet" class="form-control">
                <option>0</option>
                <option>Дизайн</option>
                <option>Санъати тасвирӣ</option>
            </select>
            <br><input id="profesion" placeholder="Ихтисос" type="text" class="form-control" >
            <br><span>Курси?</span>
            <select id="kurs" class="form-control">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
            <br><span>Шакли таҳсил</span>
            <select id="tahsil" class="form-control">
                <option>0</option>
                <option>Буҷавӣ</option>
                <option>Шартномавӣ</option>
            </select>
            <br><span>Ҷинс</span>
            <select id="sex" class="form-control">
                <option>0</option>
                <option>Духтар</option>
                <option>Писар</option>
            </select>
            <br><span>Квота</span>
            <select id="kvota" class="form-control">
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
            <br><input id="tel1" placeholder="Номери донишҷӯ" type="text" class="form-control" >
            <br><input id="tel2" placeholder="Номери волидайн" type="text" class="form-control" >
            <br><input id="email" placeholder="E-mail" type="text" class="form-control" >
            <br><input id="password" placeholder="Рамзи лозима" type="text" class="form-control" >
            <br><button  style="margin-left:0;" onclick="post_query('aform', 'register_donishju', 'name.surname.name_dad.mydate.city.mycity.fakultet.profesion.kurs.tahsil.sex.kvota.tel1.tel2.email.password');" class="btn btn-primary"><i class="icon-pencil"> </i>Сапт кардан </button> 
		</div>


<?php   include('add/button.php'); ?>