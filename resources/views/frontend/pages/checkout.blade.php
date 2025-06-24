@extends('frontend.layouts.master')

@section('title','Checkout page')

@section('main-content')

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{route('home')}}">Inicio<i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="javascript:void(0)">Finalizar compra</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- Start Checkout -->
    <section class="shop checkout section">
        <div class="container">
                <form class="form" method="POST" action="{{route('cart.order')}}">
                    @csrf
                    <div class="row">

                        <div class="col-lg-8 col-12">
                            <div class="checkout-form">
                                <h2>Finalize sua compra aqui</h2>
                                <p>Por favor, registre-se para finalizar a compra mais rapidamente</p>
                                <!-- Form -->
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Nome<span>*</span></label>
                                            <input type="text" name="first_name" placeholder="" value="{{old('first_name')}}" value="{{old('first_name')}}">
                                            @error('first_name')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Último Nome<span>*</span></label>
                                            <input type="text" name="last_name" placeholder="" value="{{old('lat_name')}}">
                                            @error('last_name')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Email <span>*</span></label>
                                            <input type="email" name="email" placeholder="" value="{{old('email')}}">
                                            @error('email')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Telefone <span>*</span></label>
                                            <input type="number" name="phone" placeholder="" required value="{{old('phone')}}">
                                            @error('phone')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>País<span>*</span></label>
                                            <select name="country" id="country">
                                                <option value="AF">Afeganistão</option>
                                                <option value="AX">Ilhas Åland</option>
                                                <option value="AL">Albânia</option>
                                                <option value="DZ">Argélia</option>
                                                <option value="AS">Samoa Americana</option>
                                                <option value="AD">Andorra</option>
                                                <option value="AO">Angola</option>
                                                <option value="AI">Anguilla</option>
                                                <option value="AQ">Antártica</option>
                                                <option value="AG">Antígua e Barbuda</option>
                                                <option value="AR">Argentina</option>
                                                <option value="AM">Armênia</option>
                                                <option value="AW">Aruba</option>
                                                <option value="AU">Austrália</option>
                                                <option value="AT">Áustria</option>
                                                <option value="AZ">Azerbaijão</option>
                                                <option value="BS">Bahamas</option>
                                                <option value="BH">Bahrein</option>
                                                <option value="BD">Bangladesh</option>
                                                <option value="BB">Barbados</option>
                                                <option value="BY">Bielorrússia</option>
                                                <option value="BE">Bélgica</option>
                                                <option value="BZ">Belize</option>
                                                <option value="BJ">Benim</option>
                                                <option value="BM">Bermudas</option>
                                                <option value="BT">Butão</option>
                                                <option value="BO">Bolívia</option>
                                                <option value="BA">Bósnia e Herzegovina</option>
                                                <option value="BW">Botswana</option>
                                                <option value="BV">Ilha Bouvet</option>
                                                <option value="BR" selected="selected">Brasil</option>
                                                <option value="IO">Território Britânico do Oceano Índico</option>
                                                <option value="VG">Ilhas Virgens Britânicas</option>
                                                <option value="BN">Brunei</option>
                                                <option value="BG">Bulgária</option>
                                                <option value="BF">Burquina Faso</option>
                                                <option value="BI">Burúndi</option>
                                                <option value="KH">Camboja</option>
                                                <option value="CM">Camarões</option>
                                                <option value="CA">Canadá</option>
                                                <option value="CV">Cabo Verde</option>
                                                <option value="KY">Ilhas Cayman</option>
                                                <option value="CF">República Centro-Africana</option>
                                                <option value="TD">Chade</option>
                                                <option value="CL">Chile</option>
                                                <option value="CN">China</option>
                                                <option value="CX">Ilha Christmas</option>
                                                <option value="CC">Ilhas Cocos (Keeling)</option>
                                                <option value="CO">Colômbia</option>
                                                <option value="KM">Comores</option>
                                                <option value="CG">Congo – Brazzaville</option>
                                                <option value="CD">Congo – Kinshasa</option>
                                                <option value="CK">Ilhas Cook</option>
                                                <option value="CR">Costa Rica</option>
                                                <option value="CI">Costa do Marfim</option>
                                                <option value="HR">Croácia</option>
                                                <option value="CU">Cuba</option>
                                                <option value="CY">Chipre</option>
                                                <option value="CZ">República Tcheca</option>
                                                <option value="DK">Dinamarca</option>
                                                <option value="DJ">Djibuti</option>
                                                <option value="DM">Dominica</option>
                                                <option value="DO">República Dominicana</option>
                                                <option value="EC">Equador</option>
                                                <option value="EG">Egito</option>
                                                <option value="SV">El Salvador</option>
                                                <option value="GQ">Guiné Equatorial</option>
                                                <option value="ER">Eritreia</option>
                                                <option value="EE">Estônia</option>
                                                <option value="ET">Etiópia</option>
                                                <option value="FK">Ilhas Malvinas</option>
                                                <option value="FO">Ilhas Faroe</option>
                                                <option value="FJ">Fiji</option>
                                                <option value="FI">Finlândia</option>
                                                <option value="FR">França</option>
                                                <option value="GF">Guiana Francesa</option>
                                                <option value="PF">Polinésia Francesa</option>
                                                <option value="TF">Territórios Franceses do Sul</option>
                                                <option value="GA">Gabão</option>
                                                <option value="GM">Gâmbia</option>
                                                <option value="GE">Geórgia</option>
                                                <option value="DE">Alemanha</option>
                                                <option value="GH">Gana</option>
                                                <option value="GI">Gibraltar</option>
                                                <option value="GR">Grécia</option>
                                                <option value="GL">Groenlândia</option>
                                                <option value="GD">Granada</option>
                                                <option value="GP">Guadalupe</option>
                                                <option value="GU">Guam</option>
                                                <option value="GT">Guatemala</option>
                                                <option value="GG">Guernsey</option>
                                                <option value="GN">Guiné</option>
                                                <option value="GW">Guiné-Bissau</option>
                                                <option value="GY">Guiana</option>
                                                <option value="HT">Haiti</option>
                                                <option value="HM">Ilhas Heard e McDonald</option>
                                                <option value="HN">Honduras</option>
                                                <option value="HK">Hong Kong (RAE da China)</option>
                                                <option value="HU">Hungria</option>
                                                <option value="IS">Islândia</option>
                                                <option value="IN">Índia</option>
                                                <option value="ID">Indonésia</option>
                                                <option value="IR">Irã</option>
                                                <option value="IQ">Iraque</option>
                                                <option value="IE">Irlanda</option>
                                                <option value="IM">Ilha de Man</option>
                                                <option value="IL">Israel</option>
                                                <option value="IT">Itália</option>
                                                <option value="JM">Jamaica</option>
                                                <option value="JP">Japão</option>
                                                <option value="JE">Jersey</option>
                                                <option value="JO">Jordânia</option>
                                                <option value="KZ">Cazaquistão</option>
                                                <option value="KE">Quênia</option>
                                                <option value="KI">Kiribati</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Quirguistão</option>
                                                <option value="LA">Laos</option>
                                                <option value="LV">Letônia</option>
                                                <option value="LB">Líbano</option>
                                                <option value="LS">Lesoto</option>
                                                <option value="LR">Libéria</option>
                                                <option value="LY">Líbia</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lituânia</option>
                                                <option value="LU">Luxemburgo</option>
                                                <option value="MO">Macau (RAE da China)</option>
                                                <option value="MK">Macedônia do Norte</option>
                                                <option value="MG">Madagascar</option>
                                                <option value="MW">Malawi</option>
                                                <option value="MY">Malásia</option>
                                                <option value="MV">Maldivas</option>
                                                <option value="ML">Mali</option>
                                                <option value="MT">Malta</option>
                                                <option value="MH">Ilhas Marshall</option>
                                                <option value="MQ">Martinica</option>
                                                <option value="MR">Mauritânia</option>
                                                <option value="MU">Maurício</option>
                                                <option value="YT">Mayotte</option>
                                                <option value="MX">México</option>
                                                <option value="FM">Micronésia</option>
                                                <option value="MD">Moldávia</option>
                                                <option value="MC">Mônaco</option>
                                                <option value="MN">Mongólia</option>
                                                <option value="ME">Montenegro</option>
                                                <option value="MS">Montserrat</option>
                                                <option value="MA">Marrocos</option>
                                                <option value="MZ">Moçambique</option>
                                                <option value="MM">Mianmar</option>
                                                <option value="NA">Namíbia</option>
                                                <option value="NR">Nauru</option>
                                                <option value="NP">Nepal</option>
                                                <option value="NL">Países Baixos</option>
                                                <option value="AN">Antilhas Holandesas</option>
                                                <option value="NC">Nova Caledônia</option>
                                                <option value="NZ">Nova Zelândia</option>
                                                <option value="NI">Nicarágua</option>
                                                <option value="NE">Níger</option>
                                                <option value="NG">Nigéria</option>
                                                <option value="NU">Niue</option>
                                                <option value="NF">Ilha Norfolk</option>
                                                <option value="MP">Ilhas Marianas do Norte</option>
                                                <option value="KP">Coreia do Norte</option>
                                                <option value="NO">Noruega</option>
                                                <option value="OM">Omã</option>
                                                <option value="PK">Paquistão</option>
                                                <option value="PW">Palau</option>
                                                <option value="PS">Territórios Palestinos</option>
                                                <option value="PA">Panamá</option>
                                                <option value="PG">Papua-Nova Guiné</option>
                                                <option value="PY">Paraguai</option>
                                                <option value="PE">Peru</option>
                                                <option value="PH">Filipinas</option>
                                                <option value="PN">Ilhas Pitcairn</option>
                                                <option value="PL">Polônia</option>
                                                <option value="PT">Portugal</option>
                                                <option value="PR">Porto Rico</option>
                                                <option value="QA">Catar</option>
                                                <option value="RE">Reunião</option>
                                                <option value="RO">Romênia</option>
                                                <option value="RU">Rússia</option>
                                                <option value="RW">Ruanda</option>
                                                <option value="BL">São Bartolomeu</option>
                                                <option value="SH">Santa Helena</option>
                                                <option value="KN">São Cristóvão e Neves</option>
                                                <option value="LC">Santa Lúcia</option>
                                                <option value="MF">São Martinho</option>
                                                <option value="PM">São Pedro e Miquelon</option>
                                                <option value="VC">São Vicente e Granadinas</option>
                                                <option value="WS">Samoa</option>
                                                <option value="SM">São Marino</option>
                                                <option value="ST">São Tomé e Príncipe</option>
                                                <option value="SA">Arábia Saudita</option>
                                                <option value="SN">Senegal</option>
                                                <option value="RS">Sérvia</option>
                                                <option value="SC">Seicheles</option>
                                                <option value="SL">Serra Leoa</option>
                                                <option value="SG">Singapura</option>
                                                <option value="SK">Eslováquia</option>
                                                <option value="SI">Eslovênia</option>
                                                <option value="SB">Ilhas Salomão</option>
                                                <option value="SO">Somália</option>
                                                <option value="ZA">África do Sul</option>
                                                <option value="GS">Geórgia do Sul e Ilhas Sandwich do Sul</option>
                                                <option value="KR">Coreia do Sul</option>
                                                <option value="ES">Espanha</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SD">Sudão</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard e Jan Mayen</option>
                                                <option value="SZ">Suazilândia</option>
                                                <option value="SE">Suécia</option>
                                                <option value="CH">Suíça</option>
                                                <option value="SY">Síria</option>
                                                <option value="TW">Taiwan</option>
                                                <option value="TJ">Tajiquistão</option>
                                                <option value="TZ">Tanzânia</option>
                                                <option value="TH">Tailândia</option>
                                                <option value="TL">Timor-Leste</option>
                                                <option value="TG">Togo</option>
                                                <option value="TK">Toquelau</option>
                                                <option value="TO">Tonga</option>
                                                <option value="TT">Trinidad e Tobago</option>
                                                <option value="TN">Tunísia</option>
                                                <option value="TR">Turquia</option>
                                                <option value="TM">Turcomenistão</option>
                                                <option value="TC">Ilhas Turks e Caicos</option>
                                                <option value="TV">Tuvalu</option>
                                                <option value="UG">Uganda</option>
                                                <option value="UA">Ucrânia</option>
                                                <option value="AE">Emirados Árabes Unidos</option>
                                                <option value="UK">Reino Unido</option>
                                                <option value="UY">Uruguai</option>
                                                <option value="UM">Ilhas Menores Distantes dos EUA</option>
                                                <option value="VI">Ilhas Virgens dos EUA</option>
                                                <option value="UZ">Uzbequistão</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VA">Vaticano</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN">Vietnã</option>
                                                <option value="WF">Wallis e Futuna</option>
                                                <option value="EH">Saara Ocidental</option>
                                                <option value="YE">Iêmen</option>
                                                <option value="ZM">Zâmbia</option>
                                                <option value="ZW">Zimbábue</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Endereço 1<span>*</span></label>
                                            <input type="text" name="address1" placeholder="" value="{{old('address1')}}">
                                            @error('address1')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Endereço 2</label>
                                            <input type="text" name="address2" placeholder="" value="{{old('address2')}}">
                                            @error('address2')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="form-group">
                                            <label>Código Postal</label>
                                            <input type="text" name="post_code" placeholder="" value="{{old('post_code')}}">
                                            @error('post_code')
                                                <span class='text-danger'>{{$message}}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <!--/ End Form -->
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="order-details">
                                <!-- Order Widget -->
                                <div class="single-widget">
                                    <h2>CART  TOTALS</h2>
                                    <div class="content">
                                        <ul>
										    <li class="order_subtotal" data-price="{{Helper::totalCartPrice()}}">Carrinho subtotal<span>${{number_format(Helper::totalCartPrice(),2)}}</span></li>
                                            <li class="shipping">
                                                Custo de Envio
                                                @if(count(Helper::shipping())>0 && Helper::cartCount()>0)
                                                    <select name="shipping" class="nice-select">
                                                        <option value="">Selecione seu endereço</option>
                                                        @foreach(Helper::shipping() as $shipping)
                                                        <option value="{{$shipping->id}}" class="shippingOption" data-price="{{$shipping->price}}">{{$shipping->type}}: ${{$shipping->price}}</option>
                                                        @endforeach
                                                    </select>
                                                @else
                                                    <span>Grátis</span>
                                                @endif
                                            </li>

                                            @if(session('coupon'))
                                            <li class="coupon_price" data-price="{{session('coupon')['value']}}">Você economiza<span>${{number_format(session('coupon')['value'],2)}}</span></li>
                                            @endif
                                            @php
                                                $total_amount=Helper::totalCartPrice();
                                                if(session('coupon')){
                                                    $total_amount=$total_amount-session('coupon')['value'];
                                                }
                                            @endphp
                                            @if(session('coupon'))
                                                <li class="last"  id="order_total_price">Total<span>${{number_format($total_amount,2)}}</span></li>
                                            @else
                                                <li class="last"  id="order_total_price">Total<span>${{number_format($total_amount,2)}}</span></li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Order Widget -->
                                <!-- Order Widget -->
                                <div class="single-widget">
                                    <h2>Pagamentos</h2>
                                    <div class="content">
                                        <div class="checkbox">
                                            {{-- <label class="checkbox-inline" for="1"><input name="updates" id="1" type="checkbox"> Cheque pagamentos</label> --}}
                                            <form-group>
                                                <input name="payment_method"  type="radio" value="cod"> <label> Pagamento na Entrega</label><br>
                                                <input name="payment_method"  type="radio" value="paypal"> <label> PayPal</label>
                                            </form-group>

                                        </div>
                                    </div>
                                </div>
                                <!--/ End Order Widget -->
                                <!-- Payment Method Widget -->
                                <div class="single-widget payement">
                                    <div class="content">
                                        <img src="{{('backend/img/payment-method.png')}}" alt="#">
                                    </div>
                                </div>
                                <!--/ End Payment Method Widget -->
                                <!-- Button Widget -->
                                <div class="single-widget get-button">
                                    <div class="content">
                                        <div class="button">
                                            <button type="submit" class="btn">prosseguir para o Checkout</button>
                                        </div>
                                    </div>
                                </div>
                                <!--/ End Button Widget -->
                            </div>
                        </div>
                    </div>
                </form>
        </div>
    </section>
    <!--/ End Checkout -->

    <!-- Start Shop Services Area  -->
    <section class="shop-services section home">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4>Frete Grátis</h4>
                        <p>Pedidos acima de $100</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4>Devolução Grátis</h4>
                        <p>Devoluções em até 30 dias</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4>Pagamento Seguro</h4>
                        <p>Pagamento 100% seguro</p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4>Melhor Preço</h4>
                        <p>Preço garantido</p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services -->

    <!-- Start Shop Newsletter  -->
    <section class="shop-newsletter section">
        <div class="container">
            <div class="inner-top">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-12">
                        <!-- Start Newsletter Inner -->
                        <div class="inner">
                            <h4>Newsletter</h4>
                            <p> Inscreva-se em nossa newsletter e ganhe <span>10%</span> de desconto na sua primeira compra</p>
                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                                <input name="EMAIL" placeholder="Seu endereço de e-mail" required="" type="email">
                                <button class="btn">Inscreva -se</button>
                            </form>
                        </div>
                        <!-- End Newsletter Inner -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Newsletter -->
@endsection
@push('styles')
	<style>
		li.shipping{
			display: inline-flex;
			width: 100%;
			font-size: 14px;
		}
		li.shipping .input-group-icon {
			width: 100%;
			margin-left: 10px;
		}
		.input-group-icon .icon {
			position: absolute;
			left: 20px;
			top: 0;
			line-height: 40px;
			z-index: 3;
		}
		.form-select {
			height: 30px;
			width: 100%;
		}
		.form-select .nice-select {
			border: none;
			border-radius: 0px;
			height: 40px;
			background: #f6f6f6 !important;
			padding-left: 45px;
			padding-right: 40px;
			width: 100%;
		}
		.list li{
			margin-bottom:0 !important;
		}
		.list li:hover{
			background:#b56c79 !important;
			color:white !important;
		}
		.form-select .nice-select::after {
			top: 14px;
		}
	</style>
@endpush
@push('scripts')
	<script src="{{asset('frontend/js/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{ asset('frontend/js/select2/js/select2.min.js') }}"></script>
	<script>
		$(document).ready(function() { $("select.select2").select2(); });
  		$('select.nice-select').niceSelect();
	</script>
	<script>
		function showMe(box){
			var checkbox=document.getElementById('shipping').style.display;
			// alert(checkbox);
			var vis= 'none';
			if(checkbox=="none"){
				vis='block';
			}
			if(checkbox=="block"){
				vis="none";
			}
			document.getElementById(box).style.display=vis;
		}
	</script>
	<script>
		$(document).ready(function(){
			$('.shipping select[name=shipping]').change(function(){
				let cost = parseFloat( $(this).find('option:selected').data('price') ) || 0;
				let subtotal = parseFloat( $('.order_subtotal').data('price') );
				let coupon = parseFloat( $('.coupon_price').data('price') ) || 0;
				// alert(coupon);
				$('#order_total_price span').text('$'+(subtotal + cost-coupon).toFixed(2));
			});

		});

	</script>

@endpush
