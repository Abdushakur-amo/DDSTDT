<? echo '
            <div class="form_css" style="margin:auto;">
              <div class="form">
                <ul class="form2">
                  <li> <h4>Формаи дохилшави</h4></li>
                  <li> <input class="form-control" type="text"     id="email"      placeholder="Дохилкунед: ID ё E-mail" ></li>
                  <li> <input class="form-control" type="password" id="password"   placeholder="Рамзро дохилкунед"></li>
                  <li> <input type="checkbox" id="scales"   checked> <label for="scales">Маро дар ёд гиред<i class="icon-plug"></i></label>   </li>
                  <li> <a href="/restore"><i class="icon-lock"></i> Рамзро фаромуш кардам!</a></li>
                  <li> <button onclick="post_query(\'gform\', \'login\', \'email.password\');"  class="btn btn-primary">Дохилшави</button> </li>
                </ul>
              </div>
            </div>';
?>