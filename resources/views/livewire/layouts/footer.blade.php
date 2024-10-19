<div wire:key="header100">
  <footer class="section-footer bg-custom">
        <div class="container text-white">
          <section class="footer-main padding-y">
            <div class="row">
              <aside class="col-md-12 col-sm-12 col-lg-3">
                <article class="me-lg-4">
                @php($store_logo=\App\Model\BusinessSetting::where(['key'=>'logo'])->first()->value)

                  <a href="" class="navbar-brand text-light fw-bold fs-1 text-uppercase">
                      Lacrostini
                      <!-- <img class="logo" height="40" src="{{asset('storage/store/'.$store_logo)}}"> -->
                  </a>
                  <p class="mt-5">
                    Bienvenido a <strong>La Crostini</strong>, 
                    donde la tradición 
                    se une con la pasión por
                    la comida artesanal. 
                  </p>
                </article>
              </aside>
              <aside class="col-6 col-sm-4 col-lg-3">
                <h4 class="title pb-2">Navegación</h4>
                <ul class="list-group mb-4 pl-2">
                  <li> <a href="#" class="text-white text-decoration-none">Home</a></li>
                  <li> <a href="#" class="text-white text-decoration-none">Nosotros</a></li>
                  <li> <a href="#" class="text-white text-decoration-none">La Carta</a></li>
                  <li> <a href="#" class="text-white text-decoration-none">Pedido online</a></li>
                  <li> <a href="#" class="text-white text-decoration-none">Contacto</a></li>
                </ul>
              </aside>
              <aside class="col-6 col-sm-4 col-lg-3">
                <h4 class="title pb-2">Información</h4>
                <ul class="list-menu mb-4">

                  <li> +34 123 456 789 <br> 
                      sugerencias@lacrostini.com <br>
                      Carrer de mossen jasint <br>
                      verdaguer, 132 08330 premia del mar
                  </li>
                  
                </ul>
              </aside>
              <aside class="col-6 col-sm-4 col-lg-3">
                <h4 class="title pb-2">Horario de atención</h4>
                <ul class="list-menu mb-4">
                  <li>
                      De Lunes a Domingo<br>
                      13:00 - 16:00, 19:30 - 23:00 <br>
                  </li>
                </ul>
              </aside>
          
           
            </div> <!-- row.// -->
          </section>  <!-- footer-top.// -->

          <section class="footer-bottom text-center d-flex justify-content-center flex-wrap  ">
            <div class="col-12 pb-3 socials ">
              <a href=""><i class="fa-brands fa-facebook mr-3 fs-3 "></i></a>
              <a href=""><i class="fa-brands fa-square-instagram  fs-3"></i> </a>            
            </div>
            <div class="col-12">
                <a  href="" class="text-decoration-none text-light">Términos</a>
              | <a href="" class="text-decoration-none text-light">Privacidad</a>
              | <a href="" class="text-decoration-none text-light">Política de Cookies</a>
              | <a href="" class="text-decoration-none text-light">Configuración de cookies</a> 
            </div>
          </section>
        </div> <!-- container end.// -->
  </footer>
  <style>
    .bg-custom{
      background-color:#232323 !important;
    }
    footer ul li{
      font-size:13px !important;
    }
    footer article p{
      font-size:13px !important;
    }
    .text-decoration-none:hover,.socials a i{
      
			color:#E74E0F !important;
		
    }
  </style>
</div>