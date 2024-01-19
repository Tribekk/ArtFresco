@extends('samplequery')
@section('carts')
<p>В какую комнату планируете фотообои?</p>
<form action="/2" method="get">
    <table>
        <tr>
            <th>
                <div class="selector">
                    <div class="selectorimg">
                        <img src="img/scale_1200.jpg" alt="">
                    </div>
                    <input type="radio" id="contactChoice1" name="contact" value="livingroom" />
                    <div class="selectorp">
                        <p>Гостиная</p>
                    </div>
                </div>
            </th>
            <th>
                <div class="selector">
                    <div class="selectorimg">
                        <img src="img\6389782118.webp" alt="">
                    </div>
                    <input type="radio" id="contactChoice2" name="contact" value="bedroom" />
                    <div class="selectorp">
                        <p>Спальня</p>
                    </div>
                </div>
            </th>
            <th>
                <div class="selector">
                    <div class="selectorimg">
                        <img src="img\dd110851.jpg" alt="">
                    </div>
                    <input type="radio" id="contactChoice3" name="contact" value="hall" />
                    <div class="selectorp">
                        <p>Коридор</p>
                    </div>
                </div>
            </th>
            <th>
                <div class="selector">
                    <div class="selectorimg">
                        <img src="img\cgxb9t7arvfl1k24btif8647ifw3ye7y.webp" alt="">
                    </div>
                    <input type="radio" id="contactChoice4" name="contact" value="kitchen" />
                    <div class="selectorp">
                        <p>Кухня</p>
                    </div>
                </div>
            </th>
        </tr>
        <tr>
            <th>
                <div class="selector">
                    <div class="selectorimg">
                        <img src="img\6479945057.jpg" alt="">
                    </div>
                    <input type="radio" id="contactChoice5" name="contact" value="girlroom" />
                    <div class="selectorp">
                        <p>Детская девочки</p>
                    </div>
                </div>
            </th>
            <th>
                <div class="selector">
                    <div class="selectorimg">
                        <img src="img\gLydnuJDsXg.jpg" alt="">
                    </div>
                    <input type="radio" id="contactChoice6" name="contact" value="boyroom" />
                    <div class="selectorp">
                        <p>Детская мальчика</p>
                    </div>
                </div>
            </th>
            <th>
                <div class="selector">
                    <div class="selectorimg">
                        <img src="img\b4fcc6411b4a5922ed2b35f5d8c6132b.jpg" alt="">
                    </div>
                    <input type="radio" id="contactChoice7" name="contact" value="teenagerroom" />
                    <div class="selectorp">
                        <p>Комната подростка</p>
                    </div>
                </div>
            </th>
            <th>
                <div class="selector">
                    <div class="selectorimg">
                        <img src="img\1688004713_baulo-club-p-fotooboi-v-tualete-dizain-krasivo-22.jpg" alt="">
                    </div>
                    <input type="radio" id="contactChoice8" name="contact" value="bathroom" />
                    <div class="selectorp">
                        <p>Санузел</p>
                    </div>
                </div>
            </th>
        </tr>
    </table>
    <div class="button">Далее</div>
    <button id="button">Далее</button>
</form>
@endsection
@section('border')
style = "width: 200px;"
@endsection