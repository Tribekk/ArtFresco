@extends('samplequery')

@section('border')
    style="width:950px"
@endsection
@section('carts')
    <p>Как планируете располжить фотообои на стене?</p>
    <form action="/contacts" method="get">
    <table style="
        margin-left: auto;
        margin-right: auto;">
        <tr>
            <th>
                <div class="selector">
                    <div class="selectorimg">
                        <img src="img\pbuzp8kb2rylm8x5oca1jg38e0welh7o.webp" alt="">
                    </div>
                    <input type="radio" id="contactChoice1" name="wall" value="full" />
                    <div class="selectorp">
                        <p>На всю стену</p>
                    </div>
                </div>
            </th>
            <th>
                <div class="selector">
                    <div class="selectorimg">
                        <img src="img\orig.webp" alt="">
                    </div>
                    <input type="radio" id="contactChoice2" name="wall" value="part" />
                    <div class="selectorp">
                        <p>На часть стены</p>
                    </div>
                </div>
            </th>
        </tr>
        <tr>
            <th>
                <div class="selector">
                    <div class="selectorimg">
                        <img src="img\835_3500_s547.jpg" alt="">
                    </div>
                    <input type="radio" id="contactChoice3" name="wall" value="some" />
                    <div class="selectorp">
                        <p>На несклько стен</p>
                    </div>
                </div>
            </th>
            <th>
                <div class="selector">
                    <div class="selectorimg">
                        <img src="img\Poklejka-oboev-2.jpg" alt="">
                    </div>
                    <input type="radio" id="contactChoice4" name="wall" value="not" />
                    <div class="selectorp">
                        <p>Пока не определился</p>
                    </div>
                </div>
            </th>
        </tr>
    </table>
    <div class="button">Далее</div>
    <button id="button">Далее</button>
</form>
@endsection